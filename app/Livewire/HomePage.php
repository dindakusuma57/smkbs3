<?php

namespace App\Livewire;
use App\Models\choice;
use App\Models\tentang;
use App\Models\testimoni;
use App\Models\statistik;
use App\Models\Berita;
use App\Models\pengajar;
use App\Models\hero;
use Illuminate\Console\View\Components\Choice as ComponentsChoice;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Beranda - SMK Bina Sejahtera 3')]

class HomePage extends Component
{
    public $heroes;
    public $choices;
    public $tentangs;
    public $testimonis;
    public $statistiks;

    public function mount()
    {
        $this->choices = Choice::all();
        $this->heroes = Hero::all();
        $this->tentangs = Tentang::all();
        $this->testimonis = Testimoni::all();
        $this->statistiks = Statistik::all();

    }


    public function render()
    {
        $recentBeritas = Berita::latest()->take(3)->get();

        $pengajars = Pengajar::take(6)->get();

        // $statistiks = Statistik::find(1);
        return view('livewire.home-page',[
            'recentBeritas' => $recentBeritas,
            'pengajars' => $pengajars,
        ]);
    }
}
