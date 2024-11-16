<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Berita;
use Livewire\Attributes\Title;

#[Title('Detail Berita - Yayasan Bina Sejahtera')]

class DetailBeritaPage extends Component
{
    public $slug;
    public $berita;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->berita = Berita::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $recentBeritas = Berita::latest()->take(5)->get();

    return view('livewire.detail-berita-page', [
        'berita' => $this->berita,
        'recentBeritas' => $recentBeritas,
    ]);
    }

}
