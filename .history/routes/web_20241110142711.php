<?php

use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('catalogue');
});

Route::get('/login', [LogInController::class, 'LogInView'])->name('login');

Route::post('/submit-login', [LogInController::class, 'Submit'])->name('submit.login');

Route::post('/logout', function(){
    Auth::logout();
    return redirect()->back();
})->name('logout');
