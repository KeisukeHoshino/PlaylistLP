<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class EntryAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactInfo;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contactInfo['email'], $this->contactInfo['name'])
        ->attach(storage_path('app/'.$this->contactInfo['pdf']));

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '【新規応募のお知らせ】【' . now()->format('Y/m/d') . '】【' . $this->contactInfo['name'] . '】新規求人の応募がありました',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'entry_mail.admin',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
