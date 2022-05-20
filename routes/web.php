<?php

use App\Http\Controllers\front\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('langs/{locale}',[PagesController::class,'langSwitcher'])
    ->name('lang.swithcher');

Route::group(['middleware'=>'locale'], function () {
    Route::get('/', [PagesController::class, 'index'])
        ->name('front.home');
});
