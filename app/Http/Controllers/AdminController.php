<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function siteSettings()
    {
        $siteSettings = SiteSetting::first();
        if (!$siteSettings) {
            // If no settings exist, create a default one
            $siteSettings = SiteSetting::create([
                'site_name' => 'Default Site Name',
                'phone' => '(123) 456-7890',
                'site_description' => 'Default description for the site.',
                'logo' => null,
            ]);
        }
        return view('admin.site-settings', compact('siteSettings'));
    }

    public function updateSiteSettings(Request $request)
    {
        // Validate and update site settings
        $validatedData = $request->validate([
            'site_name' => 'required|string|max:255',
            'phone' => [
                'required',
                'string',
                'regex:/^\(\d{3}\) \d{3}-\d{4}$/', // Regular expression to match the phone number format (XXX) XXX-XXXX
                'min:10',
            ],
            'site_description' => 'required|string|max:1000',
            'address' => 'required|string',
            'logo' => 'sometimes|mimes:jpg,png,pdf|max:2048',
            'year' => 'sometimes|string',
        ]);

       
        SiteSetting::first()->update([
            'site_name' => $validatedData['site_name'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'site_description' => $validatedData['site_description'],
            'year' => $validatedData['year']
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $fileName ='site-logo.' . $image->getClientOriginalExtension();

            $image->storeAs('uploads', $fileName, 'public');

            SiteSetting::first()->update(['logo' =>  $fileName]);
        }

        return redirect()->back()->with('success', 'Site settings updated successfully.');
    }


}
