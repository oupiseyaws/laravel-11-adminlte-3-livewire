<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Contact;
use App\Livewire\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/contact', Contact::class)->name('contact');
