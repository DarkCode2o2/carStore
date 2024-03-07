<?php

use App\Http\Controllers\auctionController;
use App\Http\Controllers\Carcontroller;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\manageReviews;
use App\Http\Controllers\reviewsController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::resource('/manageCar', CarController::class)->name('index', 'manageCar');
    Route::resource('/manageAuction', auctionController::class)->name('index', 'manageAuction');
    
    Route::get('manageReviews', [manageReviews::class, 'index'])->name('manageReviews');
    Route::post('manageReviews/{id}', [manageReviews::class, 'destroy']);
    Route::post('manageReviews/{id}/update', [manageReviews::class, 'update']);
    
    Route::get('dashboard', [Usercontroller::class, 'users'])->name('dashboard');
    Route::post('dashboard/{id}', [Usercontroller::class, 'deleteUser']);

});

// front end links

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/purchase-method', [MainController::class, 'purchase'])->name('purchase');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact');
Route::get('/partners', [MainController::class, 'partners'])->name('partners');
Route::post('/userMsg', [Maincontroller::class, 'userMsg']);

Route::resource('user-reviews', reviewsController::class)->names([
    'index' => 'reviews.index',
    'store' => 'reviews.store',
]);


// Cars
Route::get('/commercials-cars', [MainController::class, 'allcars'])->name('cars');
Route::get('/commercials-cars/{id}', [MainController::class, 'showCar'])->name('showCar');

// Auction Cars
Route::get('/commercials-auctions', [MainController::class, 'allauctionCars'])->name('auctions');
Route::get('/commercials-auctionCars/{id}', [MainController::class, 'showauctionCar'])->name('showAuction');
