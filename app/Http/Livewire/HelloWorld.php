<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Contact;

class HelloWorld extends Component
{

    public $name = 'fikir';
    public $loud = false;
    public $greeting = 'Hello';

    public $names = ['john', 'mike', 'ali'];

    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function remove($name)
    {
        Contact::whereName($name)->first()->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world', [
            'name' => 'fikir'
        ]);
    }
}
