<?php

namespace App\Livewire;
use App\Models\event;
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

        return view('livewire.kalender-page');
    }
}
