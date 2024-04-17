<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/', [\App\Http\Controllers\Api\ApiBffController::class, 'redirect']);

Route::get('/authorize', function () {
    return redirect("http://127.0.0.1/Studgorod_API/public/authorize");
})->name("api.authorize.login");
