<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MailController;

use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/contact-us', [MailController::class, 'showForm'])->name("contact-us");

Route::post('/send-mail', [MailController::class, 'sendMail'])->name("send-mail");

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');

Route::get('/article/id={id}', [ArticleController::class, 'show'])->name("article");

Route::get('/article/create', [ArticleController::class, 'createArticle'])->name("create-article");

Route::post('/article/store', [ArticleController::class, 'store'])->name("article-store");