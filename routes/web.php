<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\TemplateBaseController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/register', [AuthController::class, 'register'])->name('register');


// ini akses tamu=ga usah login bisa liat landing page
Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'landingpage')->name('front.landingpage');
});





// user setelah login
Route::controller(UserController::class)->group(function () {
    Route::get('/homepage', 'homepage')->name('homepage.user');
    Route::get('/faq', 'faq')->name('faq.user');
    Route::get('/tentangkami', 'tentangkami')->name('tentangkami.user');
    Route::get('/bacaan/{id}', 'bacaan')->name('bacaan.user');
    Route::get('/contact-us','contactus')->name('contact.user');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Prefix Admin
Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/homepage', 'homepage')->name('homepage.admin');
        Route::get('/faq', 'faq')->name('faq.admin');
        Route::get('/tentangkami', 'tentangkami')->name('tentangkami.admin');
        Route::get('/bacaan/{id}', 'bacaan')->name('bacaan.admin');
    });
    Route::controller(TemplateBaseController::class)->group(function () {
        Route::get('/home', 'index')->name('index.home');
    });
    Route::controller(ArtikelController::class)->group(function () {
        Route::get('/artikels', 'index')->name('artikels.index');
        Route::get('/artikels/create', 'create')->name('artikels.create');
        Route::post('/artikels', 'store')->name('artikels.store');
        Route::get('/artikels/{product}/edit', 'edit')->name('artikels.edit');
        Route::put('/artikels/{product}', 'update')->name('artikels.update');
        Route::delete('/artikels/{product}', 'destroy')->name('artikels.destroy');
        Route::get('/artikels-search', 'searchArtikel')->name('artikels.search');
    });
});
require __DIR__ . '/auth.php';
