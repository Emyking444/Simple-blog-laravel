<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Blog;
use App\Livewire\Posts;

Route::get('/', function () {
    return view('welcome');
});

// Ensure Blog exists before using it
Route::get('/blog', Blog::class)->name('blog');
Route::get('/blog', Posts::class)->name('blog');
