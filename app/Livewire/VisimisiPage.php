<?php

namespace App\Livewire;

use App\Models\visi;
use App\Models\misi;
use App\Models\tujuan;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('VisiMisi - SMK Bina Sejahtera 3')]
class VisimisiPage extends Component
{
    public $visis;
    public $misis;
    public $tujuans;

    public function mount()
    {
        $this->visis = Visi::all();
        $this->misis = Misi::all();
        $this->tujuans = Tujuan::all();
    }

    public function render()
    {
        return view('livewire.visimisi-page');
    }
}
