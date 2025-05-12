<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.accueil');
});

Route::get('/canape-fauteils', function () {
    return view('pages.canape');
})->name('canape-fauteils');


