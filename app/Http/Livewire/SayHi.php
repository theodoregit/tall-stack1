<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class SayHi extends Component
{

    public $contact;    

    public function mount()
    {
        // $this->contacts = Contact::all();
    }


    public function render()
    {
        return view('livewire.say-hi');
    }
}
