<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactsMessage;

class ContactForm extends Component
{

    public $name, $email, $phone, $message, $successMessage;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        //sleep for 1 se
        // sleep(1);

        //populate the message table
        ContactsMessage::create($contact);

        $this->successMessage = 'We received your message successfully.';

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
