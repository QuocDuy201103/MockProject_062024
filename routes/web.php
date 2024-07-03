<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [PageController::class, 'getLogin'])->name('login');

Route::get('home', [PageController::class, 'getHome'])->name('homePage');
