<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaitingListController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/waitlist/join', [WaitingListController::class, 'store'])->name('waitlist.join');
