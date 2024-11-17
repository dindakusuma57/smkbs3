<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Berita;
use App\Models\Category;

class BeritaPage extends Component
{
    use WithPagination;

    public $selectedCategory = null;

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function selectCategory($categoryId = null)
    {
        $this->selectedCategory = $categoryId;
    }

    public function render()
    {
        $recentBeritas = Berita::latest()->take(1)->get();

        $categories = Category::all();
        $beritas = Berita::when($this->selectedCategory, function ($query) {
            $query->where('category_id', $this->selectedCategory);
        })->paginate(9);

        return view('livewire.berita-page', [
            'categories' => $categories,
            'beritas' => $beritas,
            'recentBeritas' => $recentBeritas,
        ]);
    }
}


