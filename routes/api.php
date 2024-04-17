<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect']);

Route::get('/authorize', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect_auth_login'])->name("api.authorize.login");
Route::delete('/authorize', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect_auth_quit'])->name("api.authorize.quit");

Route::post('/news', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect_news_store'])->name("api.news.store");
Route::get('/news', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect_news_show'])->name("api.news.show");
Route::put('/news', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect_news_update'])->name("api.news.update");
Route::delete('/news', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect_news_destroy'])->name("api.news.destroy");
