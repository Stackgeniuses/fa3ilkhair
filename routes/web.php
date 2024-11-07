<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()->getLocale());  // Redirect root to default language
});

// Group routes by language
Route::group(['prefix' => '{lang}', 'where' => ['lang' => 'fr|ar']], function () {
    Route::get('/', function ($lang) {
        App::setLocale($lang); // Set the locale based on URL
        return view('welcome');
    })->name('home');

    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');

    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/about', function () {
        return view('about');
    })->name('about');
});
