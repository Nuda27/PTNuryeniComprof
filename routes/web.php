<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/te', function () {
//     return view('layouts.layout_auth');
// });

Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        // dashboard
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        // profile
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

        // user
        route::resource('/user', UserController::class, ['as' => 'admin']);
    });
});

// LANDING PAGE
Route::get('/', [LandingPageController::class, 'index'])->name('home.index');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact.index');

require __DIR__ . '/auth.php';