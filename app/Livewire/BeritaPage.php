<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Berita;
use App\Models\Category;
use Livewire\Attributes\Title;

#[Title('Berita - SMK Bina Sejahtera 3')]
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
        $this->resetPage();
    }


    public function render()
    {
        $recentBeritas = Berita::latest()->take(1)->get();

        $categories = Category::all();
        $beritas = Berita::when($this->selectedCategory, function ($query) {
            $query->where('category_id', $this->selectedCategory);
        })->paginate(6);

        return view('livewire.berita-page', [
            'categories' => $categories,
            'beritas' => $beritas,
            'recentBeritas' => $recentBeritas,
        ]);
    }
}
