<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\SejarahPage;
use App\Livewire\KalenderPage;

Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);
Route::get('/kalender', KalenderPage::class);
