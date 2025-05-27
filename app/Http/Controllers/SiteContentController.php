<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\SiteContent;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SiteContentController extends Controller
{
    public function index()
    {
        $siteContent = SiteContent::where('page_type', 'home-right')->first();
        
        $leftContent = SiteContent::where('page_type', 'home-hero')->first();

        if ($leftContent) {
            $hero = json_decode($leftContent->content)->data ?? '';
        } else {
            $hero = '';
        }

        if ($siteContent) {
            $rightContents = json_decode($siteContent->content);
        }else {
            $rightContents = [];
        }

        return view('admin.home', compact('rightContents', 'hero'));
    }

    public function homeUpdateLeft(Request $request)
    {
        $validatedData = $request->validate([
            'hero' => 'required|string',
        ]);

        $siteContent = SiteContent::where('page_type', 'home-hero')->first();

        if ($siteContent) {
            $siteContent->update([
                'content' => json_encode([
                    'data' => $validatedData['hero'],
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'home-hero',
                'content' => json_encode([
                    'data' => $validatedData['hero']
                ])
            ]);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'Home hero section updated successfully.'
        ]);
    }

    public function homeUpdateRight(Request $request)
    {
        $validatedData = $request->validate([
            'video' => 'required|mimes:mp4,mov,avi,wmv|max:25600',
        ]);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $fileName = 'video1.' . $video->getClientOriginalExtension();

            $path = storage_path('app/public/uploads/' . $fileName);
            if(Storage::exists($path)) {
                unlink($path);
            }

            $video->storeAs('uploads', $fileName, 'public');
        } else {
            $filename = null;
        }

        $siteContent = SiteContent::where('page_type', 'home-right')->first();
        if ($siteContent) {
            $siteContent->update([
                'content' => json_encode([
                    'video' => $fileName,
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'home-right',
                'content' => json_encode([
                    'video' => $fileName,
                ])
            ]);
        }


        return redirect()->back()->with('success', 'Home video updated successfully.');
    }


    public function howItWork()
    {
        $siteContent = SiteContent::where('page_type', 'how-it-works-steps')->first();
        $featuredContents = SiteContent::where('page_type', 'how-it-works-featured')->first();
        
        if ($siteContent) {
            $contents = json_decode($siteContent->content);
        }else {
            $contents = [];
        }

        if ($featuredContents) {
            $featuredContent = json_decode($featuredContents->content);
        }else {
            $featuredContent = [];
        }

        return view('admin.how-it-works', compact('contents', 'featuredContent'));
    }

    public function howItWorkStepsUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'section_title' => 'required|string',
            'step1_title' => 'required|string',
            'step1_description' => 'required|string',
            'step1_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'step2_title' => 'required|string',
            'step2_description' => 'required|string',
            'step2_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'step3_title' => 'required|string',
            'step3_description' => 'required|string',
            'step3_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siteContent = SiteContent::where('page_type', 'how-it-works-steps')->first();

      
        if ($request->hasFile('step1_image')) {
            $image = $request->file('step1_image');
            $step1Image = 'step1.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $step1Image, 'public');
        } else {
            $step1Image = null;
        }
        if ($request->hasFile('step2_image')) {
            $image = $request->file('step2_image');
            $step2Image = 'step2.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $step2Image, 'public');
        } else {
            $step2Image = null;
        }
        if ($request->hasFile('step3_image')) {
            $image = $request->file('step3_image');
            $step3Image = 'step3.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $step3Image, 'public');
        } else {
            $step3Image = null;
        }
        

        if ($siteContent) {
            $stepData = json_decode($siteContent->content);

            
            $siteContent->update([
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'step1_title' => $validatedData['step1_title'],
                    'step1_description' => $validatedData['step1_description'],
                    'step1_image' => $step1Image ?? $stepData->step1_image,
                    'step2_title' => $validatedData['step2_title'],
                    'step2_description' => $validatedData['step2_description'],
                    'step2_image' => $step2Image ?? $stepData->step2_image,
                    'step3_title' => $validatedData['step3_title'],
                    'step3_description' => $validatedData['step3_description'],
                    'step3_image' => $step3Image ?? $stepData->step3_image,
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'how-it-works-steps',
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'step1_title' => $validatedData['step1_title'],
                    'step1_description' => $validatedData['step1_description'],
                    'step1_image' => $step1Image ?? null,
                    'step2_title' => $validatedData['step2_title'],
                    'step2_description' => $validatedData['step2_description'],
                    'step2_image' => $step2Image ?? null,
                    'step3_title' => $validatedData['step3_title'],
                    'step3_description' => $validatedData['step3_description'],
                    'step3_image' => $step3Image ?? null,
                ])
            ]);
        }

        return redirect()->route('admin.howitworks')->with('success', 'How it works Step Section updated successfully.');
    }


    public function howItWorkFeaturedUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'section_title' => 'required|string',
            'section_description' => 'required|string',
            'section_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'review_name' => 'required|string',
            'featured_review' => 'required|string',
            'reviewer_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siteContent = SiteContent::where('page_type', 'how-it-works-featured')->first();


        if ($request->hasFile('section_image')) {
            $image = $request->file('section_image');
            $section_image = 'change-lives.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $section_image, 'public');
        } else {
            $section_image = null;
        }
        if ($request->hasFile('reviewer_image')) {
            $image = $request->file('reviewer_image');
            $reviewer_image = 'reviewer-image.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $reviewer_image, 'public');
        } else {
            $reviewer_image = null;
        }


        if ($siteContent) {
            $stepData = json_decode($siteContent->content);


            $siteContent->update([
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'section_description' => $validatedData['section_description'],
                    'section_image' => $section_image ?? $stepData->section_image,
                    'review_name' => $validatedData['review_name'],
                    'featured_review' => $validatedData['featured_review'],
                    'reviewer_image' => $reviewer_image ?? $stepData->reviewer_image,
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'how-it-works-featured',
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'section_description' => $validatedData['section_description'],
                    'section_image' => $section_image,
                    'review_name' => $validatedData['review_name'],
                    'featured_review' => $validatedData['featured_review'],
                    'reviewer_image' => $reviewer_image,
                ])
            ]);
        }

        return redirect()->route('admin.howitworks')->with('success', 'How it works Featured Section updated successfully.');
    }


    public function aboutUs()
    {
        $cardSection = SiteContent::where('page_type', 'about-us-cards')->first();

        if ($cardSection) {
            $cardData = json_decode($cardSection->content);
        }else{
            $cardData = null;
        }


        $consolCardSection = SiteContent::where('page_type', 'about-us-consolidation-cards')->first();

        if ($consolCardSection) {
            $consolCardData = json_decode($consolCardSection->content);
        }else{
            $consolCardData = null;
        }

        return view('admin.why-choose-us', compact('cardData', 'consolCardData'));
    }


    public function aboutUsCardUpdate(Request $request) 
    {
        $validatedData = $request->validate([
            'section_title' => 'required|string',
            'card1_title' => 'required|string',
            'card1_description' => 'required|string',
            'card1_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'card2_title' => 'required|string',
            'card2_description' => 'required|string',
            'card2_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'card3_title' => 'required|string',
            'card3_description' => 'required|string',
            'card3_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'card4_title' => 'required|string',
            'card4_description' => 'required|string',
            'card4_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $siteContent = SiteContent::where('page_type', 'about-us-cards')->first();
      
        if ($request->hasFile('card1_image')) {
            $image = $request->file('card1_image');
            $card1Image = 'about-us-card1.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $card1Image, 'public');
        } else {
            $card1Image = null;
        }
        if ($request->hasFile('card2_image')) {
            $image = $request->file('card2_image');
            $card2Image = 'about-us-card2.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $card2Image, 'public');
        } else {
            $card2Image = null;
        }
        if ($request->hasFile('card3_image')) {
            $image = $request->file('card3_image');
            $card3Image = 'about-us-card3.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $card3Image, 'public');
        } else {
            $card3Image = null;
        }
        if ($request->hasFile('card4_image')) {
            $image = $request->file('card4_image');
            $card4Image = 'about-us-card4.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $card4Image, 'public');
        } else {
            $card4Image = null;
        }
        

        if ($siteContent) {
            $cardData = json_decode($siteContent->content);
            
            $siteContent->update([
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'card1_title' => $validatedData['card1_title'],
                    'card1_description' => $validatedData['card1_description'],
                    'card1_image' => $card1Image ?? $cardData->card1_image,
                    'card2_title' => $validatedData['card2_title'],
                    'card2_description' => $validatedData['card2_description'],
                    'card2_image' => $card2Image ?? $cardData->card2_image,
                    'card3_title' => $validatedData['card3_title'],
                    'card3_description' => $validatedData['card3_description'],
                    'card3_image' => $card3Image ?? $cardData->card3_image,
                    'card4_title' => $validatedData['card4_title'],
                    'card4_description' => $validatedData['card4_description'],
                    'card4_image' => $card4Image ?? $cardData->card4_image,
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'about-us-cards',
                'content' => json_encode([
                    'section_title' => $validatedData['section_title'],
                    'card1_title' => $validatedData['card1_title'],
                    'card1_description' => $validatedData['card1_description'],
                    'card1_image' => $card1Image,
                    'card2_title' => $validatedData['card2_title'],
                    'card2_description' => $validatedData['card2_description'],
                    'card2_image' => $card2Image,
                    'card3_title' => $validatedData['card3_title'],
                    'card3_description' => $validatedData['card3_description'],
                    'card3_image' => $card3Image,
                    'card4_title' => $validatedData['card4_title'],
                    'card4_description' => $validatedData['card4_description'],
                    'card4_image' => $card4Image,
                ])
            ]);
        }

        return redirect()->route('admin.aboutUs')->with('success', 'About Us Card Section updated successfully.');
    }

    public function aboutUsConsolCardUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'console_card1_title' => 'required|string',
            'console_card1_description' => 'required|string',
            'console_card2_title' => 'required|string',
            'console_card2_description' => 'required|string',
            'console_card3_title' => 'required|string',
            'console_card3_description' => 'required|string',
        ]);

        $siteContent = SiteContent::where('page_type', 'about-us-consolidation-cards')->first();
      
       

        if ($siteContent) {
            
            $siteContent->update([
                'content' => json_encode([
                    'console_card1_title' => $validatedData['console_card1_title'],
                    'console_card1_description' => $validatedData['console_card1_description'],
                    'console_card2_title' => $validatedData['console_card2_title'],
                    'console_card2_description' => $validatedData['console_card2_description'],
                    'console_card3_title' => $validatedData['console_card3_title'],
                    'console_card3_description' => $validatedData['console_card3_description'],
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'about-us-consolidation-cards',
                'content' => json_encode([
                    'console_card1_title' => $validatedData['console_card1_title'],
                    'console_card1_description' => $validatedData['console_card1_description'],
                    'console_card2_title' => $validatedData['console_card2_title'],
                    'console_card2_description' => $validatedData['console_card2_description'],
                    'console_card3_title' => $validatedData['console_card3_title'],
                    'console_card3_description' => $validatedData['console_card3_description'],
                ])
            ]);
        }

        return redirect()->route('admin.aboutUs')->with('success', 'About Us Card Section updated successfully.');
    }

    public function getFile($filename)
    {
        $path = storage_path('app/public/uploads/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }

    
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
                'content' => json_encode([
                    'data' => $validatedData['disclaimer_html']
                ]),
            ]);
        } else {
            SiteContent::create([
                'page_type' => 'disclaimer',
                'content_text' => $validatedData['disclaimer'],
                'content' => json_encode([
                    'data' => $validatedData['disclaimer_html']
                ])
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


    public function faq()
    {
        return view('admin.faq');
    }


    public function faqList()
    {
        $data = Faq::orderBy('created_at', 'desc')->get();


        return DataTables::of($data)
            ->addColumn('action', function($row) {
                $editUrl = route('admin.faq.edit', $row->id);
                $deleteUrl = route('admin.faq.delete', $row->id);
                $csrf = csrf_field();
                $method = method_field('DELETE');
                return "
                    <a href='{$editUrl}' class='bg-blue-500 text-white px-3 py-1 rounded text-xs'>Edit</a>
                    <form action='{$deleteUrl}' method='POST' style='display:inline;' onsubmit='return confirm(\"Are you sure?\")'>
                        {$csrf}
                        {$method}
                        <button type='submit' class='bg-red-500 text-white px-3 py-1 rounded text-xs ml-2'>Delete</button>
                    </form>
                ";
            })
            ->rawColumns(['action']) // important to render HTML
            ->make(true);
    }


    public function faqCreate()
    {
        return view('admin.faq-create');
    }

    public function faqStore(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|unique:faqs,question',
            'answer' => 'required|string',
        ]);

        Faq::create($validatedData);

        return redirect()->route('admin.faq')->with('success', 'FAQ created successfully.');
    }

    public function faqEdit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq-edit', compact('faq'));
    }

    public function faqUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|unique:faqs,question,' . $id,
            'answer' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($validatedData);

        return redirect()->route('admin.faq')->with('success', 'FAQ updated successfully.');
    }
    public function faqDelete($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faq')->with('success', 'FAQ deleted successfully.');
    }


    public function testimonial()
    {
        return view('admin.testimonials');
    }

    public function testimonialList()
    {
        $data = Testimonial::oldest()->get();

        return DataTables::of($data)
            ->addColumn('image', function($row) {
                return "
                    <span class='mr-3 h-12 w-12 overflow-hidden rounded-full'>
                        <img src='" . route('getFile', $row->image) . "' alt='Image' class='w-12 h-12 rounded-full'>
                    </span>
                ";
            })
            ->addColumn('action', function($row) {
                $editUrl = route('admin.testimonial.edit', $row->id);
                $deleteUrl = route('admin.testimonial.delete', $row->id);
                $csrf = csrf_field();
                $method = method_field('DELETE');
                return "
                    <a href='{$editUrl}' class='bg-blue-500 text-white px-3 py-1 rounded text-xs'>Edit</a>
                    <form action='{$deleteUrl}' method='POST' style='display:inline;' onsubmit='return confirm(\"Are you sure?\")'>
                        {$csrf}
                        {$method}
                        <button type='submit' class='bg-red-500 text-white px-3 py-1 rounded text-xs ml-2'>Delete</button>
                    </form>
                ";
            })
            ->rawColumns(['action', 'image']) // important to render HTML
            ->make(true);
    }

    public function testimonialCreate()
    {
        return view('admin.testimonials-create');
    }

    public function testimonialStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'review' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() .'.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $fileName, 'public');
        } else {
            $filename = null;
        }

        Testimonial::create([
            'name' => $validatedData['name'],
            'review' => $validatedData['review'],
            'sub_details' => $validatedData['sub_details'] ?? null,
            'image' => $fileName,
        ]);

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial created successfully.');
    }

    public function testimonialEdit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials-edit', compact('testimonial'));
    }

    public function testimonialUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'review' => 'required|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = Testimonial::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() .'.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $fileName, 'public');
            
        } else {
            $filename = $testimonial->image ?? null;
        }

        $testimonial->update([
            'name' => $validatedData['name'],
            'review' => $validatedData['review'],
            'sub_details' => $validatedData['sub_details'] ?? null,
            'image' => $fileName,
        ]);

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial updated successfully.');
    }

    public function testimonialDelete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial deleted successfully.');
    }
}
