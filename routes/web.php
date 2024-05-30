<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MailController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/contact-us', [MailController::class, 'showForm'])->name("contact-us");

Route::post('/send-mail', [MailController::class, 'sendMail'])->name("send-mail");