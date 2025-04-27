<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
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
})->name('home');



Route::get('/disclaimer', function () {
    return view('disclaimer');
})->name('disclaimer');

Route::group(['prefix' => 'consultation'], function () {
    Route::get('/', [\App\Http\Controllers\LeadingController::class, 'index'])->name('cta');
    Route::post('/', [\App\Http\Controllers\LeadingController::class, 'store'])->name('cta.store');
});


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/accounts', [AccountController::class, 'accounts'])->name('admin.accounts');
    Route::post('/accounts', [AccountController::class, 'accountList'])->name('admin.accounts.list');
    Route::get('/accounts/create', [AccountController::class, 'createAccount'])->name('admin.accounts.create');
    Route::post('/accounts/create', [AccountController::class, 'storeAccount'])->name('admin.accounts.store');
    Route::get('/accounts/edit/{id}', [AccountController::class, 'editAccount'])->name('admin.accounts.edit');
    Route::put('/accounts/edit/{id}', [AccountController::class, 'updateAccount'])->name('admin.accounts.update');
    Route::delete('/accounts/delete/{id}', [AccountController::class, 'destroyAccount'])->name('admin.accounts.delete');

    Route::get('/site-settings', [AdminController::class, 'siteSettings'])->name('admin.site-settings');


    Route::get('admin/#faq', function () {
        return view('admin.admin');
    })->name('admin.faq');

    Route::get('admin/#hello', function () {
        return view('admin.admin');
    })->name('admin.testimonial');
});