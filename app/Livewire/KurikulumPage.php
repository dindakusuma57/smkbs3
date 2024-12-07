<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\kurikulum;
use Livewire\Attributes\Title;

#[Title('Kurikulum - SMK Bina Sejahtera 3')]
class KurikulumPage extends Component
{
    public $kurikulums;

    public function mount()
    {
        $this->kurikulums = Kurikulum::all();
    }

    public function render()
    {
        return view('livewire.kurikulum-page');
    }
}
