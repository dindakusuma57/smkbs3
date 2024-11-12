<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\SejarahPage;
use App\Livewire\KalenderPage;
use App\Livewire\VisimisiPage;
use App\Livewire\KontakPage;
use App\Livewire\BeritaPage;
use App\Livewire\GuruPage;

Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);
Route::get('/kalender', KalenderPage::class);
Route::get('/visimisi', VisimisiPage::class);
Route::get('/kontak', KontakPage::class);
Route::get('/berita', BeritaPage::class);
Route::get('/guru', GuruPage::class);

