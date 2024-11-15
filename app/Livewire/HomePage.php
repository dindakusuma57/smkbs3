<?php

namespace App\Livewire;
use App\Models\choice;
use App\Models\tentang;
use App\Models\testimoni;
use Illuminate\Console\View\Components\Choice as ComponentsChoice;
use Livewire\Component;

class HomePage extends Component
{
    public $choices;
    public $tentangs;
    public $testimonis;

    public function mount()
    {
        $this->choices = Choice::all();
        $this->tentangs = Tentang::all();
        $this->testimonis = Testimoni::all();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
