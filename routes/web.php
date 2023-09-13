<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OfficeProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\WhychooseController;
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

        //WhyChoose
        route::resource('/whychoose', WhychooseController::class, ['as' => 'admin']);

        Route::get('/whychoose/{id}/whyitem/create', [WhychooseController::class, 'createWhyItem'])->name('whyItem.create');
        Route::post('/whychoose/{id}/whyitem/store', [WhychooseController::class, 'storeWhyItem'])->name('whyItem.store');

        Route::get('/whychoose/{whychoose}/whyitem/{whychooseDetail}/edit', [WhychooseController::class, 'editWhyItem']);
        Route::put('/whychoose/{whychoose}/whyitem/{whychooseDetail}/update', [WhychooseController::class, 'updateWhyItem']);
        Route::get('/whychoose/{whychoose}/whyitem/{whychooseDetail}', [WhychooseController::class, 'destroyWhyItem']);

        // contact
        route::resource('/office-profile', OfficeProfileController::class, ['as' => 'admin']);

        // carousel
        route::resource('/carousel', CarouselController::class, ['as' => 'admin']);

        // clients
        route::resource('/client', ClientController::class, ['as' => 'admin']);

        //News
        route::resource('/news', BeritaController::class, ['as' => 'admin']);

        //Struktur
        route::resource('/structure', StrukturController::class, ['as' => 'admin']);

        //visimisi
        route::resource('/visimisi', VisiMisiController::class, ['as' => 'admin']);
    });
});

// LANDING PAGE
Route::get('/', [LandingPageController::class, 'index'])->name('home.index');

Route::get('/service', [LandingPageController::class, 'service'])->name('home.service');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/struktur-organisasi', [LandingPageController::class, 'struktur'])->name('home.struktur');

Route::get('/visi-misi', [LandingPageController::class, 'visiMisi'])->name('home.visiMisi');

Route::get('/berita', [LandingPageController::class, 'berita'])->name('home.berita');
Route::get('/berita/{id}', [LandingPageController::class, 'beritaDetail'])->name('home.berita.detail');


require __DIR__ . '/auth.php';