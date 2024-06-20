<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CandidatureEnvoyee extends Mailable
{
    use Queueable, SerializesModels;

    public $candidat;
    public $formation;

    /**
     * Create a new message instance.
     */
    public function __construct($candidat, $formation)
    {
        $this->candidat = $candidat;
        $this->formation = $formation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Candidature Envoyée',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.candidature_envoyee',
            with: [
                'prenom' => $this->candidat->prenom,
                'nom' => $this->candidat->nom,
                'formation' => $this->formation,
            ],
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
