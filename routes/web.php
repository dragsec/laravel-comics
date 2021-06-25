<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comicsInfo = config('comics');

    $comicsArray = [
        "comicsList" => $comicsInfo
    ];

    return view('homepage', $comicsArray);
})->name('homepage');


Route::get('/comics/{index}', function ($index) {
    $comicsInfo = config('comics');

    $singleComic = $comicsInfo[$index];
    
    return view('comics', [
        'singleComic' => $singleComic
    ]);
})->name('comics');

/* Route::get('/placeholder', function() {
    return "Page not ready";
})->name('placeholder'); */