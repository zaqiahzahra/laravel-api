<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::get('/tes', function() {
        return view('welcome');
    });
});