<?php

use App\Http\Controllers\front\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('langs/{locale}',[PagesController::class,'langSwitcher'])
    ->name('lang.swithcher');

Route::get('valyuta/{unit}',[PagesController::class,'valyutaSwitcher'])
    ->name('valyuta.swithcher');

Route::group(['middleware'=>['locale','valyuta']], function () {
    Route::get('/', [PagesController::class, 'index'])
        ->name('front.home');

    Route::get('/about-course', [PagesController::class, 'aboutCourse'])
        ->name('front.about.cource');

    Route::get('/about', [PagesController::class, 'about'])
        ->name('front.about');

    Route::get('/purchase/{paket?}', [PagesController::class, 'purchase'])
        ->name('front.purchase');

    Route::post('sual-var',[PagesController::class,'sualVar'])
        ->name('sual.var');
});
