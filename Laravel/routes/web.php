<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bonjour', function () {
    $prenom = "Th.v";
    return view('bonjour', [
        'prenom' => $prenom
    ]);
});
