<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function siteSettings()
    {
        return view('admin.site-settings');
    }

    public function updateSiteSettings(Request $request)
    {
        // Validate and update site settings
        $validatedData = $request->validate([
            'site_name' => 'required|string|max:255',
            'phone_number' => [
                'required',
                'string',
                'regex:/^\(\d{3}\) \d{3}-\d{4}$/', // Regular expression to match the phone number format (XXX) XXX-XXXX
                'min:10',
            ],
            'description' => 'required|string|max:1000',
        ]);

        // Assuming you have a SiteSettings model to handle the settings
        SiteSettings::updateOrCreate(['id' => 1], $validatedData);

        return redirect()->back()->with('success', 'Site settings updated successfully.');
    }
}
