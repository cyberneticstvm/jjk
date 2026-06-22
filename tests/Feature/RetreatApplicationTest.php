<?php

namespace Tests\Feature;

use App\Mail\RetreatApplicationSubmitted;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class RetreatApplicationTest extends TestCase
{
    public function test_application_form_is_available(): void
    {
        $this->get('/retreat-application')
            ->assertOk()
            ->assertSee('Application.')
            ->assertSee('JJK Gurukulam, Trivandrum')
            ->assertSee('Shanti Nilayam, Thrissur')
            ->assertSee('Himalaya');
    }

    public function test_valid_application_is_emailed_with_applicant_details(): void
    {
        Mail::fake();
        Storage::fake('local');
        config(['mail.application_recipient' => 'applications@example.com']);

        $photo = UploadedFile::fake()->createWithContent(
            'applicant.png',
            base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAusB9Y9Zl2sAAAAASUVORK5CYII=')
        );
        $document = UploadedFile::fake()->create('health-note.pdf', 32, 'application/pdf');

        $response = $this->post('/retreat-application', [
            'retreat_location' => 'Shanti Nilayam, Thrissur',
            'other_location' => null,
            'from_date' => now()->addMonth()->format('Y-m-d'),
            'to_date' => now()->addMonth()->addDays(10)->format('Y-m-d'),
            'name' => 'Test Applicant',
            'gender' => 'Female',
            'date_of_birth' => '1990-01-01',
            'address' => '123 Test Street',
            'state' => 'Kerala',
            'country' => 'India',
            'zip_code' => '680563',
            'telephone_home' => null,
            'telephone_work' => null,
            'mobile_phone' => '+91 9000000000',
            'email' => 'applicant@example.com',
            'occupation' => 'Teacher',
            'illnesses' => 'None',
            'prescribed_medication' => 'None',
            'emergency_name' => 'Emergency Contact',
            'emergency_address' => '456 Contact Road',
            'emergency_email' => 'contact@example.com',
            'emergency_mobile' => '+91 9111111111',
            'emergency_landline' => null,
            'emergency_relationship' => 'Sibling',
            'yoga_experience' => 'Two years',
            'signature' => 'Test Applicant',
            'signature_date' => now()->format('Y-m-d'),
            'applicant_photo' => $photo,
            'supporting_documents' => [$document],
            'declaration' => '1',
        ]);

        $response
            ->assertRedirect(route('application.create'))
            ->assertSessionHas('success');

        $storedPhotoPath = null;

        Mail::assertSent(RetreatApplicationSubmitted::class, function (RetreatApplicationSubmitted $mail) use (&$storedPhotoPath) {
            $storedPhotoPath = $mail->photoPath;

            return $mail->hasTo('applications@example.com')
                && $mail->application['name'] === 'Test Applicant'
                && $mail->application['retreat_location'] === 'Shanti Nilayam, Thrissur'
                && count($mail->attachments()) === 2
                && $mail->supportingAttachments[0]['name'] === 'health-note.pdf';
        });

        Storage::disk('local')->assertMissing($storedPhotoPath);
    }

    public function test_application_requires_a_photo_and_valid_date_range(): void
    {
        $this->post('/retreat-application', [
            'retreat_location' => 'Himalaya',
            'from_date' => '2026-08-10',
            'to_date' => '2026-08-01',
        ])->assertSessionHasErrors([
            'to_date',
            'name',
            'applicant_photo',
            'declaration',
        ]);
    }
}
