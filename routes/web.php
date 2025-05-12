<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.accueil');
})->name('accueil');

Route::get('/canape-fauteils', function () {
    return view('pages.canape');
})->name('canape-fauteils');

Route::get('/lits', function () {
    return view('pages.lit');
})->name('lits');

Route::get('/table-manger', function () {
    return view('pages.table-manger');
})->name('table-manger');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


