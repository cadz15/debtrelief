<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
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
        Vite::createAssetPathsUsing(fn (string $path) => "/$path");
        $siteSettings = \App\Models\SiteSetting::first();

        if(!$siteSettings) {
            // If no settings exist, create a default one
            $siteSettings = [
                'site_name' => 'Site Name',
                'phone' => '(123) 456-7890',
                'site_description' => 'Default description for the site.',
                'logo' => null,
            ];
        }else {
            $siteSettings = $siteSettings->toArray();
        }

        view()->share('_siteSettings', $siteSettings);
    }
}
