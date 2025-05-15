<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\webController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('index'));

// Blog (frontend) routes
Route::get('/blog', [webController::class, 'index'])->name('page.blog');
Route::get('/blog/{slug}', [webController::class, 'blogDetail'])->name('page.blog-detail');

/*
|--------------------------------------------------------------------------
| Admin Auth Routes (Login/Logout)
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Redirect /admin to dashboard or login
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return Session::get('admin_logged_in')
        ? redirect()->route('admin.dashboard')
        : redirect()->route('admin.login');
});

/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('/blog', BlogController::class);
    Route::resource('/user', UserController::class);

    // Only if you have extra admin management routes
    Route::resource('/admins', AdminController::class)->except(['index']);
});
