<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\galeri;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Galeri - SMK Bina Sejahtera 3')]

class GaleriPage extends Component
{
    use WithPagination;

    public function render()

    {
        $galeris = Galeri::paginate(12);

        return view('livewire.galeri-page', [
            'galeris' => $galeris
        ]);
    }
}
