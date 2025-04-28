<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;

class SiteContentController extends Controller
{

    
    public function disclaimer()
    {
        $siteContent = SiteContent::where('page_type', 'disclaimer')->first();

        if ($siteContent) {
            $disclaimer = json_decode($siteContent->content)->data ?? '';
        } else {
            $disclaimer = '';
        }

        return view('admin.disclaimer', compact('disclaimer'));
    }
    //
    public function updateDisclaimer(Request $request)
    {
        $validatedData = $request->validate([
            'disclaimer_html' => 'required|string',
            'disclaimer' => 'required|string',
        ]);

        $siteContent = SiteContent::where('page_type', 'disclaimer')->first();

        if ($siteContent) {
            $siteContent->update([
                'content_text' => $validatedData['disclaimer'],
                'content' => [
                    'data' => $validatedData['disclaimer_html']
                ],
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'disclaimer',
                'content_text' => $validatedData['disclaimer'],
                'content' => [
                    'data' => $validatedData['disclaimer_html']
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Disclaimer updated successfully.');
    }


    public function consultation()
    {
        $siteContent = SiteContent::where('page_type', 'consultation-hero')->first();
        $formContent = SiteContent::where('page_type', 'consultation-form')->first();

        
        if ($siteContent) {
            $contents = json_decode($siteContent->content);
        }else {
            $contents = [];
        }

        if ($formContent) {
            $formData = json_decode($formContent->content);
        }else {
            $formData = [];
        }
        
        return view('admin.consultation-page', compact('contents', 'formData'));
    }


    public function updateConsultationHeroSection(Request $request)
    {
        $validatedData = $request->validate([
            'section_title' => 'required|string',
            'section_description' => 'required|string',
            'hero_bullets' => 'nullable|array',
            'hero_bullets.*' => 'string'
        ]);

        $siteContent = SiteContent::where('page_type', 'consultation-hero')->first();

        if ($siteContent) {
            $siteContent->update([
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'section_description' => $validatedData['section_description'],
                    'hero_bullets' => $validatedData['hero_bullets'] ?? []
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'consultation-hero',
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'section_description' => $validatedData['section_description'],
                    'hero_bullets' => $validatedData['hero_bullets'] ?? []
                ])
            ]);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'Consultation hero section updated successfully.'
        ]);
    }


    public function updateConsultationFormSection(Request $request)
    {
        $validatedData = $request->validate([
            'form_header' => 'required|string',
            'term_disclaimer' => 'required|string',
            'complete_message' => 'required|string'
        ]);

        $siteContent = SiteContent::where('page_type', 'consultation-form')->first();

        if ($siteContent) {
            $siteContent->update([
                'content' => json_encode([
                    'form_header' => $validatedData['form_header'],
                    'term_disclaimer' => $validatedData['term_disclaimer'],
                    'complete_message' => $validatedData['complete_message'] ?? ''
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'consultation-form',
                'content' => json_encode([
                    'form_header' => $validatedData['form_header'],
                    'term_disclaimer' => $validatedData['term_disclaimer'],
                    'complete_message' => $validatedData['hero_bullets'] ?? ''
                ])
            ]);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'Consultation form section updated successfully.'
        ]);
    }
}
