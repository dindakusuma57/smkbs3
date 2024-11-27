<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Kalender - SMK Bina Sejahtera 3')]
class KalenderPage extends Component
{
    public $events;

    public function mount()
    {
        $this->events = Event::all();
    }

    public function render()
    {
        $events = Event::all();

        return view('livewire.kalender-page', [
            'events' => $events, // Pastikan variabel ini dipetakan dengan benar
        ]);
    }
}

