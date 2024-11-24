<?php

namespace App\Livewire;
use App\Models\ekstrakulikuler;
use App\Models\deskeskul;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Ekstrakulikuler - SMK Bina Sejahtera 3')]
class EkskulPage extends Component
{
    public $ekstrakulikulers;
    public $deskeskuls;

    public function mount()
    {
        $this->ekstrakulikulers = Ekstrakulikuler::all();
        $this->deskeskuls = Deskeskul::all();
    }

    public function render()
    {
        return view('livewire.ekskul-page');
    }
}
