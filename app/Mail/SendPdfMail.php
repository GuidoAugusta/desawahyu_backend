<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class SendPdfMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfPath;
    public $nama;
    public $surat;

    /**
     * Create a new message instance.
     */
    public function __construct($pdfPath, $nama, $surat)
    {
      $this->pdfPath = $pdfPath;
      $this->nama = $nama;
      $this->surat = $surat;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Pdf Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.send_pdf', 
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
          Attachment::fromPath(storage_path('app/public/' . $this->pdfPath))
        ];
    }
}