<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\UserController;
Route::get('/', [WhatsappController::class, 'homepage'])->name('home');

Route::get('/home',[WhatsappController::class,'homepage'])->name('home');
Route::get('/aboutus',[WhatsappController::class,'aboutpage'])->name('about');
Route::get('/virtualnumber',[WhatsappController::class,'virtualnumberpage'])->name('virtual');
Route::get('/metaapi',[WhatsappController::class,'metaapipage'])->name('api');
Route::get('/ads',[WhatsappController::class,'adspage'])->name('ads');
Route::get('/contactus',[WhatsappController::class,'contactpage'])->name('contactus');

Route::get('/signup',[UserController::class,'signuppage'])->name('sign-up');

Route::post('/free-trial',[UserController::class,'storeFreeTrial'])->name('free-trial');
Route::post('/contact-us',[UserController::class,'storeContactUs'])->name('contact-us-store');