<?php

use App\Http\Controllers\CorrespondenciaController;

Route::get('/', function () {
    return view('menu');
});

Route::resource('correspondencias', CorrespondenciaController::class);


// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })


;
