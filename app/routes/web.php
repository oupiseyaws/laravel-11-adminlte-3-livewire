<?php

use App\Livewire\Contact;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\ToastNotification;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('notification', ToastNotification::class);

Auth::routes();

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/contact', Contact::class)->name('contact');
