<?php

namespace App\Livewire;
use App\Models\kontak;
use Livewire\Component;

class KontakPage extends Component
{
    public $kontaks;

    public function mount()
    {
        $this->kontaks = Kontak::all();
    }
    public function render()
    {
        return view('livewire.kontak-page');
    }
}
