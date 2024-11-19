<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ppdb;
use Livewire\Attributes\Title;

#[Title('PPDB - Yayasan Bina Sejahtera')]
class PpdbPage extends Component
{
    public $ppdbs;

    public function mount()
    {
        $this->ppdbs = Ppdb::all();
    }

    public function render()
    {
        return view('livewire.ppdb-page');
    }
}
