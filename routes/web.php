<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SiteContentController;
use Illuminate\Support\Facades\Auth;
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
    $siteContent = \App\Models\SiteContent::where('page_type', 'disclaimer')->first();
    if ($siteContent) {
        $disclaimer = json_decode($siteContent->content)->data ?? '';
    } else {
        $disclaimer = '';
    }
    return view('disclaimer', compact('disclaimer'));
})->name('disclaimer');

Route::group(['prefix' => 'consultation'], function () {
    Route::get('/', [\App\Http\Controllers\LeadController::class, 'index'])->name('cta');
    Route::post('/', [\App\Http\Controllers\LeadController::class, 'store'])->name('cta.store');
});


Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/accounts', [AccountController::class, 'accounts'])->name('admin.accounts');
    Route::post('/accounts', [AccountController::class, 'accountList'])->name('admin.accounts.list');
    Route::get('/accounts/create', [AccountController::class, 'createAccount'])->name('admin.accounts.create');
    Route::post('/accounts/create', [AccountController::class, 'storeAccount'])->name('admin.accounts.store');
    Route::get('/accounts/edit/{id}', [AccountController::class, 'editAccount'])->name('admin.accounts.edit');
    Route::put('/accounts/edit/{id}', [AccountController::class, 'updateAccount'])->name('admin.accounts.update');
    Route::delete('/accounts/delete/{id}', [AccountController::class, 'destroyAccount'])->name('admin.accounts.delete');

    Route::get('/site-settings', [AdminController::class, 'siteSettings'])->name('admin.site-settings');
    Route::put('/site-settings/update', [AdminController::class, 'updateSiteSettings'])->name('admin.site-settings.update');

    Route::get('/leads', [LeadController::class, 'leads'])->name('admin.leads');
    Route::post('/leads', [LeadController::class, 'list'])->name('admin.leads.list');

    Route::get('/disclaimer', [SiteContentController::class, 'disclaimer'])->name('admin.disclaimer');
    Route::post('/disclaimer', [SiteContentController::class, 'updateDisclaimer'])->name('admin.disclaimer.update');

    Route::get('/consultation', [SiteContentController::class, 'consultation'])->name('admin.consultation');
    Route::post('/consultation/left-section', [SiteContentController::class, 'updateConsultationHeroSection'])->name('admin.consultation.left.update');
    Route::post('/consultation/form-section', [SiteContentController::class, 'updateConsultationFormSection'])->name('admin.consultation.form.update');

    Route::get('admin/#faq', function () {
        return view('admin.admin');
    })->name('admin.faq');

    Route::get('admin/#hello', function () {
        return view('admin.admin');
    })->name('admin.testimonial');
});

Auth::routes([
    'register' => false,    // Disable registration routes
    'reset' => false,      // Disable password reset routes
    'verify' => false,     // Disable email verification routes
]);
