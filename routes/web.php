<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SiteContentController;
use App\Http\Controllers\SubLeadController;
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



Route::domain('consolidate.fcanationalservice.org' )->group(function() {
    Route::get('/', [SubLeadController::class, 'index'])->name('sub.home');
    Route::post('/', [SubLeadController::class, 'store'])->name('sub.cta');
});

Route::domain('https://fcanationalservice.org')->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
    Route::get('/our-services', [HomeController::class, 'services'])->name('services');
    
    Route::group(['prefix' => 'service'], function () {    
        Route::get('/consumer-debt', [HomeController::class, 'servicesConsumerDebt'])->name('services.consumer-debt');
        Route::get('/business-debt', [HomeController::class, 'servicesBusinessDebt'])->name('services.business-debt');
        Route::get('/debt-collection-defense', [HomeController::class, 'servicesDebtCollection'])->name('services.debt-collection');
        Route::get('/mortgage-debt', [HomeController::class, 'servicesMortgageDebt'])->name('services.mortgage-debt');
        Route::get('/foreclosure-defense', [HomeController::class, 'servicesForeClosureDefense'])->name('services.foreclosure-defense');
        Route::get('/fair-debt', [HomeController::class, 'servicesFairDebt'])->name('services.fair-debt');
        Route::get('/student-loan', [HomeController::class, 'servicesStudentLoan'])->name('services.student-loan');
        Route::get('/small-business', [HomeController::class, 'servicesSmallBusiness'])->name('services.small-business');
        Route::get('/debt-consolidation', [HomeController::class, 'servicesDebtConsolidation'])->name('services.debt-consolidation');
        Route::get('/debt-management', [HomeController::class, 'servicesDebtManagement'])->name('services.debt-management');
        Route::get('/bankruptcy', [HomeController::class, 'serviceBankruptcy'])->name('services.bankruptcy');
    });
    
    Route::group(['prefix' => 'consultation'], function () {
        Route::get('/', [\App\Http\Controllers\LeadController::class, 'index'])->name('cta');
        Route::post('/', [\App\Http\Controllers\LeadController::class, 'store'])->name('cta.store');
    });
    
    
    Route::get('/storage/uploads/{filename}', [SiteContentController::class, 'getFile'])->name('getFile');
    
    Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
        Route::get('/', [SiteContentController::class, 'index'])->name('admin.dashboard');
        Route::post('/home/left', [SiteContentController::class, 'homeUpdateLeft'])->name('admin.home.left.update');
        Route::post('/home/right', [SiteContentController::class, 'homeUpdateRight'])->name('admin.home.right.update');
    
        Route::get('/how-it-works', [SiteContentController::class, 'howItWork'])->name('admin.howitworks');
        Route::post('/how-it-works/left', [SiteContentController::class, 'howItWorkStepsUpdate'])->name('admin.howitworks.left.update');
        Route::post('/how-it-works/right', [SiteContentController::class, 'howItWorkFeaturedUpdate'])->name('admin.howitworks.right.update');
    
        Route::get('/why-choose-us', [SiteContentController::class, 'aboutUs'])->name('admin.aboutUs');
        Route::post('/why-choose-us/left', [SiteContentController::class, 'aboutUsCardUpdate'])->name('admin.aboutUs.left.update');
        Route::post('/why-choose-us/consolidation', [SiteContentController::class, 'aboutUsConsolCardUpdate'])->name('admin.aboutUs.right.update');
    
        
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
    
        Route::get('/sub/leads', [LeadController::class, 'subLeads'])->name('admin.sub.leads');
        Route::post('/sub/leads', [LeadController::class, 'subLeadList'])->name('admin.sub.leads.list');
    
        Route::get('/disclaimer', [SiteContentController::class, 'disclaimer'])->name('admin.disclaimer');
        Route::post('/disclaimer', [SiteContentController::class, 'updateDisclaimer'])->name('admin.disclaimer.update');
    
        Route::get('/consultation', [SiteContentController::class, 'consultation'])->name('admin.consultation');
        Route::post('/consultation/left-section', [SiteContentController::class, 'updateConsultationHeroSection'])->name('admin.consultation.left.update');
        Route::post('/consultation/form-section', [SiteContentController::class, 'updateConsultationFormSection'])->name('admin.consultation.form.update');
    
        Route::get('/faq', [SiteContentController::class, 'faq'])->name('admin.faq');
        Route::post('/faq/list', [SiteContentController::class, 'faqList'])->name('admin.faq.list');
        Route::get('/faq/create', [SiteContentController::class, 'faqCreate'])->name('admin.faq.create');
        Route::post('/faq/create', [SiteContentController::class, 'faqStore'])->name('admin.faq.store');
        Route::get('/faq/edit/{id}', [SiteContentController::class, 'faqEdit'])->name('admin.faq.edit');
        Route::post('/faq/edit/{id}', [SiteContentController::class, 'faqUpdate'])->name('admin.faq.update');
        Route::delete('/faq/delete/{id}', [SiteContentController::class, 'faqDelete'])->name('admin.faq.delete');
    
        
        Route::get('/testimonials', [SiteContentController::class, 'testimonial'])->name('admin.testimonial');
        Route::post('/testimonials/list', [SiteContentController::class, 'testimonialList'])->name('admin.testimonial.list');
        Route::get('/testimonials/create', [SiteContentController::class, 'testimonialCreate'])->name('admin.testimonial.create');
        Route::post('/testimonials/create', [SiteContentController::class, 'testimonialStore'])->name('admin.testimonial.store');
        Route::get('/testimonials/edit/{id}', [SiteContentController::class, 'testimonialEdit'])->name('admin.testimonial.edit');
        Route::post('/testimonials/edit/{id}', [SiteContentController::class, 'testimonialUpdate'])->name('admin.testimonial.update');
        Route::delete('/testimonials/delete/{id}', [SiteContentController::class, 'testimonialDelete'])->name('admin.testimonial.delete');
    
    });
    
    Auth::routes([
        'register' => false,    // Disable registration routes
        'reset' => false,      // Disable password reset routes
        'verify' => false,     // Disable email verification routes
    ]);
});

