<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('catalogue');
});

Route::get('/login', [LogInController::class, 'LogInView'])->name('login');
Route::post('/submit-login', [LogInController::class, 'Submit'])->name('submit.login');

Route::get('/register', [RegisterController::class, 'RegisterView'])->name('register');
Route::post('/submit-register', [RegisterController::class, 'Submit'])->name('submit.register');

Route::get('/subscribe', [SubscriptionController::class, 'index'])->name('subscribe');

Route::post('/logout', function(){
    Auth::logout();
    return redirect()->back();
})->name('logout');
