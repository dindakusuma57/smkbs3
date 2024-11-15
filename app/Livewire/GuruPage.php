<?php

namespace App\Livewire;

use App\Models\pengajar;
use App\Models\kepsek;
use Livewire\Component;

class GuruPage extends Component
{
    public $pengajars;
    public $kepseks;

    public function mount()
    {
        $this->pengajars = Pengajar::all();
        $this->kepseks = Kepsek::all();

    }

    public function render()
    {
        return view('livewire.guru-page');
    }


}
