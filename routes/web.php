<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Auth::routes();
Route::group(['middleware' => ['twostep']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
