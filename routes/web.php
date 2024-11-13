<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\SejarahPage;
use App\Livewire\KalenderPage;
use App\Livewire\VisimisiPage;
use App\Livewire\KontakPage;
use App\Livewire\BeritaPage;
use App\Livewire\GuruPage;
use App\Livewire\DetailBeritaPage;
use App\Livewire\EkskulPage;
use App\Livewire\KurikulumPage;
use App\Livewire\EkskulPagePage;


Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);
Route::get('/kalender', KalenderPage::class);
Route::get('/visimisi', VisimisiPage::class);
Route::get('/kontak', KontakPage::class);
Route::get('/berita', BeritaPage::class);
Route::get('/guru', GuruPage::class);
Route::get('/detailberita', DetailBeritaPage::class);
Route::get('/kurikulum', KurikulumPage::class);
Route::get('/ekstrakulikuler', EkskulPage::class);

