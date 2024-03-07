<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class , 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'traveling'], function(){

    Route::get('/about/{id}', [CityController::class , 'about'])->name('traveling.about');
    
    // reservation
    Route::get('/reservation/{id}', [ReservationController::class , 'makeReservation'])->name('traveling.reservation');
    Route::post('/reservation/{id}', [ReservationController::class , 'storeReservation'])->name('traveling.reservation.store');
    
    // deals
    Route::get('/deals', [DealsController::class , 'deals'])->name('traveling.deals');
    Route::any('/search-deals', [DealsController::class , 'searchDeals'])->name('traveling.deals.search');
});

// users page
Route::any('/users/my-bookings', [UsersController::class , 'users'])->name('users-bookings');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
