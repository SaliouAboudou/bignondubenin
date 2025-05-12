<?php

use Illuminate\Support\Facades\Route;
// Route Accueil
Route::get('/', function () {
    return view('pages.accueil');
})->name('accueil');

// Route canape-fauteils
Route::get('/canape-fauteils', function () {
    return view('pages.canape');
})->name('canape-fauteils');

// Route pages.lit
Route::get('/lits', function () {
    return view('pages.lit');
})->name('lits');

// Route table-manger
Route::get('/table-manger', function () {
    return view('pages.table-manger');
})->name('table-manger');

// Route contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


