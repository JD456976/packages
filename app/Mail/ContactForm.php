<?php

namespace App\Mail;

use App\Http\Requests\ContactSentRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactSentRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->request->email, $this->request->name)
            ->subject('New Contact Message')
            ->markdown('emails.contact.form', [
            'name' => $this->request->name,
            'email' => $this->request->email,
            'message' => $this->request->message,
        ]);
    }
}
