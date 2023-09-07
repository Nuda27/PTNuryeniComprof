<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OfficeProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimoniController;
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
//     return view('email.contact');
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

        // contact
        route::resource('/contact', ContactAdminController::class, ['as' => 'admin']);

        //services
        route::resource('/services', ServicesController::class, ['as' => 'admin']);

        //About
        route::resource('/about', AboutController::class, ['as' => 'admin']);

        //Project
        route::resource('/project', ProjectController::class, ['as' => 'admin']);

        //Testimonial
        route::resource('/testimonial', TestimoniController::class, ['as' => 'admin']);

        // contact
        route::resource('/office-profile', OfficeProfileController::class, ['as' => 'admin']);

    });
});

// LANDING PAGE
Route::get('/', [LandingPageController::class, 'index'])->name('home.index');

Route::get('/service', [LandingPageController::class, 'service'])->name('home.service');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

require __DIR__ . '/auth.php';
