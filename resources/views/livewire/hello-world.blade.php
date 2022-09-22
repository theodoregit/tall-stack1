<div>
    @foreach ($contacts as $contact)
        <div>
            @livewire('say-hi', ['contact' => $contact], key($contact->id))
            <button wire:click='remove("{{$contact->name}}")'>Delete</button>
        </div>
    @endforeach
</div>
