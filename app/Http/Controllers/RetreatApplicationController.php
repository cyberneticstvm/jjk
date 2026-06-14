<?php

namespace App\Http\Controllers;

use App\Mail\RetreatApplicationSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Throwable;

class RetreatApplicationController extends Controller
{
    public function create(): View
    {
        return view('application');
    }

    public function store(Request $request): RedirectResponse
    {
        $locations = [
            'Shanti Nilayam, Trivandrum',
            'Shanti Nilayam, Thrissur',
            'Himalaya',
            'Other',
        ];

        $validated = $request->validate([
            'retreat_location' => ['required', Rule::in($locations)],
            'other_location' => ['nullable', 'required_if:retreat_location,Other', 'string', 'max:150'],
            'from_date' => ['required', 'date'],
            'to_date' => ['required', 'date', 'after_or_equal:from_date'],
            'name' => ['required', 'string', 'max:150'],
            'gender' => ['required', Rule::in(['Male', 'Female', 'Other', 'Prefer not to say'])],
            'date_of_birth' => ['required', 'date', 'before:today'],
            'address' => ['required', 'string', 'max:1000'],
            'state' => ['required', 'string', 'max:100'],
            'country' => ['required', 'string', 'max:100'],
            'zip_code' => ['required', 'string', 'max:20'],
            'telephone_home' => ['nullable', 'string', 'max:30'],
            'telephone_work' => ['nullable', 'string', 'max:30'],
            'mobile_phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email:rfc', 'max:150'],
            'occupation' => ['nullable', 'string', 'max:150'],
            'illnesses' => ['nullable', 'string', 'max:1000'],
            'prescribed_medication' => ['nullable', 'string', 'max:1000'],
            'emergency_name' => ['required', 'string', 'max:150'],
            'emergency_address' => ['required', 'string', 'max:1000'],
            'emergency_email' => ['nullable', 'email:rfc', 'max:150'],
            'emergency_mobile' => ['required', 'string', 'max:30'],
            'emergency_landline' => ['nullable', 'string', 'max:30'],
            'emergency_relationship' => ['required', 'string', 'max:100'],
            'yoga_experience' => ['nullable', 'string', 'max:500'],
            'signature' => ['required', 'string', 'max:150'],
            'signature_date' => ['required', 'date'],
            'applicant_photo' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'declaration' => ['accepted'],
        ]);

        $recipient = config('mail.application_recipient');

        if (! $recipient) {
            return back()
                ->withInput($request->except('applicant_photo'))
                ->withErrors(['form' => 'Application email delivery is not configured yet. Please contact JJK Gurukulam.']);
        }

        $photoPath = $request->file('applicant_photo')->store('retreat-application-photos', 'local');

        try {
            Mail::to($recipient)->send(new RetreatApplicationSubmitted($validated, $photoPath));
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput($request->except('applicant_photo'))
                ->withErrors(['form' => 'We could not send your application right now. Please try again or contact JJK Gurukulam directly.']);
        } finally {
            Storage::disk('local')->delete($photoPath);
        }

        return redirect()
            ->route('application.create')
            ->with('success', 'Thank you. Your retreat application has been submitted successfully.');
    }
}
