<?php

use Illuminate\Support\Facades\Route;


// Route Login
Route::get('/login', function () {
    return view('pages.auths.login');
})->name('login');

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

// Route a propos
Route::get('/apropos', function () {
    return view('pages.apropos');
})->name('apropos');

// Route Politique de confidentialite
Route::get('/politique-de-confidentialite', function () {
    return view('pages.politique-confidentialite');
})->name('politique-confidentialite');

// Route Mentions legales
Route::get('/mentions-legales', function () {
    return view('pages.mention-legale');
})->name('mention-legale');


