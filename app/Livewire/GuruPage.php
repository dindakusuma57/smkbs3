<?php

namespace App\Livewire;

use App\Models\pengajar;
use App\Models\kepsek;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Guru - Yayasan Bina Sejahtera')]
class GuruPage extends Component
{
    use WithPagination;

    public $kepseks;

    public function mount()
    {
        $this->kepseks = Kepsek::all();

    }

    public function render()
    {
        $pengajars = Pengajar::paginate(8);

        return view('livewire.guru-page', ['pengajars' => $pengajars]);
    }

}
