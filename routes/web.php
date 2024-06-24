<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Relationship;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relationships', Relationship::class)->name('realtionships');
