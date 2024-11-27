<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\SejarahPage;
use App\Livewire\KalenderPage;
use App\Livewire\VisimisiPage;
use App\Livewire\KontakPage;
use App\Livewire\BeritaPage;
use App\Livewire\GuruPage;
use App\Livewire\EkskulPage;
use App\Livewire\KurikulumPage;
use App\Livewire\PpdbPage;
use App\Livewire\GaleriPage;
use App\Livewire\DetailBeritaPage;
use App\Models\Event;

Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);

Route::get('/kalender', KalenderPage::class)->name('kalender');

Route::get('/visimisi', VisimisiPage::class);
Route::get('/kontak', KontakPage::class);
//Route::get('/berita', BeritaPage::class);
Route::get('/guru', GuruPage::class);
Route::get('/detailberita', DetailBeritaPage::class);
Route::get('/kurikulum', KurikulumPage::class);
Route::get('/ekstrakulikuler', EkskulPage::class);
Route::get('/ppdb', PpdbPage::class);
Route::get('/galeri', GaleriPage::class);

Route::get('/berita', BeritaPage::class)->name('berita.index');
Route::get('/berita/{slug}', DetailBeritaPage::class)->name('berita.show');
