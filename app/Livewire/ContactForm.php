<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $submitted = false;
    public $errorMessage = '';

    protected $rules = [
        'name' => 'required|string|min:2|max:100',
        'email' => 'required|email',
        'subject' => 'required|string|min:5|max:200',
        'message' => 'required|string|min:10|max:2000',
    ];

    public function submit()
    {
        // Validate
        $validated = $this->validate();

        try {
            // Send email
            Mail::to('snnajieze@gmail.com')->send(new ContactFormMail($validated));
            
            // Reset form
            $this->name = '';
            $this->email = '';
            $this->subject = '';
            $this->message = '';
            $this->submitted = true;
            $this->errorMessage = '';

            // Hide success message after 5 seconds
            $this->dispatch('hideSuccess');
        } catch (\Exception $e) {
            $this->errorMessage = 'Failed to send message. Please try again.';
        }
    }

    public function resetForm()
    {
        $this->submitted = false;
        $this->errorMessage = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
