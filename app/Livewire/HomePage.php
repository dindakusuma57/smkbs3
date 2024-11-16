<?php

namespace App\Livewire;
use App\Models\choice;
use App\Models\tentang;
use App\Models\testimoni;
use App\Models\statistik;
use Illuminate\Console\View\Components\Choice as ComponentsChoice;
use Livewire\Component;

class HomePage extends Component
{
    public $choices;
    public $tentangs;
    public $testimonis;
    public $statistiks;

    public function mount()
    {
        $this->choices = Choice::all();
        $this->tentangs = Tentang::all();
        $this->testimonis = Testimoni::all();
        $this->statistiks = Statistik::all();
    }

    public function render()
    {
        $statistiks = Statistik::find(1);
        return view('livewire.home-page');
    }
}
