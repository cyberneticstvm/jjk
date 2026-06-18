<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RetreatApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $application,
        public string $photoPath,
        public array $supportingAttachments = [],
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->application['email'], $this->application['name'])],
            subject: 'New Retreat Application - '.$this->application['name'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.retreat-application',
        );
    }

    public function attachments(): array
    {
        $attachments = [
            Attachment::fromStorageDisk('local', $this->photoPath)
                ->as('applicant-photo.'.pathinfo($this->photoPath, PATHINFO_EXTENSION)),
        ];

        foreach ($this->supportingAttachments as $attachment) {
            $attachments[] = Attachment::fromStorageDisk('local', $attachment['path'])
                ->as($attachment['name']);
        }

        return $attachments;
    }
}
