<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $siteSettings = \App\Models\SiteSetting::first()->toArray();

        if(empty($siteSettings)) {
            // If no settings exist, create a default one
            $siteSettings = [
                'site_name' => 'Site Name',
                'phone' => '(123) 456-7890',
                'site_description' => 'Default description for the site.',
                'logo' => null,
            ];
        }

        view()->share('_siteSettings', $siteSettings);
    }
}
