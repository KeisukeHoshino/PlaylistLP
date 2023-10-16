<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EntryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactInfo;
    public $playlist_name;
    public $playlist_email;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        $this->playlist_name = 'Playlist株式会社';
        $this->playlist_email = 'contact@playlist.co.jp';
    }

    public function build()
    {
        return $this->from($this->playlist_email, $this->playlist_name)
        ->attach(storage_path('app/pdf/' . $this->contactInfo['pdf']));;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '【Playlist株式会社】応募完了のお知らせ',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'entry_mail.user',
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
