<?php

use App\Livewire\MedicationDetail;
use App\Livewire\MedicationList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/medication/{id}',MedicationDetail::class)->name("medication");


