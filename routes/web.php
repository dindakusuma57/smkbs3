<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\SejarahPage;
use App\Livewire\KalenderPage;
use App\Livewire\VisimisiPage;
use App\Livewire\KontakPage;

Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);
Route::get('/kalender', KalenderPage::class);
Route::get('/visimisi', VisimisiPage::class);
Route::get('/kontak', KontakPage::class);

