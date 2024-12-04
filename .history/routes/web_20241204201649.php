<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StripeController;
use App\Http\Middleware\CheckIfLibrarian;
use App\Http\Middleware\CheckIfLoggedIn;
use App\Http\Controllers\PayPalController;

Auth::routes();

Route::get('/', [CatalogueController::class, 'CatalogueView']);

Route::get('/media', [MediaController::class, 'MediaView'])->name('media');
Route::post('/submit-review', [MediaController::class, 'SubmitReview'])->name('submit.review');

//Auth routes
Route::get('/login', [LogInController::class, 'LogInView'])->name('login');
Route::post('/submit-login', [LogInController::class, 'Submit'])->name('submit.login');

Route::get('/register', [RegisterController::class, 'RegisterView'])->name('register');
Route::post('/submit-register', [RegisterController::class, 'Submit'])->name('submit.register');

Route::post('/logout', function(){
    Auth::logout();
    return redirect()->back();
})->name('logout');

//Subscription routes
Route::get('/subscribe', [SubscriptionController::class, 'SubscribeView'])
->middleware(CheckIfLoggedIn::class)
->name('subscribe');
Route::post('/subscribe',[StripeController::class, 'Subscribe'])->name('subscribe');
Route::post('/storeSubscription',[SubscriptionController::class, 'StoreSubscription'])->name('storeSubscription')

//Librarian routes
Route::get('/review', [ReviewController::class, 'ReviewView'])
->middleware(CheckIfLibrarian::class)
->name('review');
Route::post('/approve-review', [ReviewController::class, 'ApproveReview'])->name('approve.review');
