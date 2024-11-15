<?php

namespace App\Livewire;

use App\Models\sejarah;
use Livewire\Component;

class SejarahPage extends Component
{
    public $sejarahs;

    public function mount()
    {
        $this->sejarahs = Sejarah::all();
    }

    public function render()
    {
        return view('livewire.sejarah-page');
    }
}
