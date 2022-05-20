<?php

use App\Http\Controllers\front\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class,'index'])
    ->name('front.home');
