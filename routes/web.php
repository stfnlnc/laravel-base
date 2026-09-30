<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::name('app.')->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('index');
});
