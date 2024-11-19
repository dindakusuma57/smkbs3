<?php

namespace App\Livewire;
use App\Models\ekstrakulikuler;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Ekstrakulikuler - Yayasan Bina Sejahtera')]
class EkskulPage extends Component
{
    public $ekstrakulikulers;

    public function mount()
    {
        $this->ekstrakulikulers = Ekstrakulikuler::all();
    }

    public function render()
    {
        return view('livewire.ekskul-page');
    }
}
