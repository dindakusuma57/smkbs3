<?php

namespace App\Livewire;
use App\Models\kontak;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Kontak - SMK Bina Sejahtera 3')]
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
