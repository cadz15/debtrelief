<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\SiteContent;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {

        $faqs = Faq::oldest()->get();
        $testimonials = Testimonial::oldest()->get();
    
        $leftContent = SiteContent::where('page_type', 'home-hero')->first();

        if ($leftContent) {
            $hero = json_decode($leftContent->content)->data ?? '';
        } else {
            $hero = '';
        }
    
        $homeRightSection = SiteContent::where('page_type', 'home-right')->first();
        if ($homeRightSection) {
            $homeRightSection = json_decode($homeRightSection->content);
        } else {
            $homeRightSection = '';
        }
    
    
        $howItWorksStepSection = SiteContent::where('page_type', 'how-it-works-steps')->first();
        if ($howItWorksStepSection) {
            $howItWorksStepSection = json_decode($howItWorksStepSection->content);
        } else {
            $howItWorksStepSection = '';
        }
    
        $howItWorksFeatured = SiteContent::where('page_type', 'how-it-works-featured')->first();
        if ($howItWorksFeatured) {
            $howItWorksFeatured = json_decode($howItWorksFeatured->content);
        } else {
            $howItWorksFeatured = '';
        }
    
    
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
    
    
        return view('welcome', compact('faqs', 'testimonials', 'hero', 'homeRightSection', 'howItWorksStepSection', 'howItWorksFeatured', 'cardData', 'consolCardData'));
    }


    public function disclaimer()
    {
        $siteContent = SiteContent::where('page_type', 'disclaimer')->first();
        if ($siteContent) {
            $disclaimer = json_decode($siteContent->content)->data ?? '';
        } else {
            $disclaimer = '';
        }
    return view('disclaimer', compact('disclaimer'));
    }


    public function services()
    {
        return view('services');
    }

    public function servicesConsumerDebt()
    {
        return view('services.consumer-debt');
    }

    public function servicesBusinessDebt()
    {
        return view('services.business-debt');
    }

    public function servicesDebtCollection()
    {
        return view('services.debt-collection');
    }

    public function servicesMortgageDebt()
    {
        return view('services.mortgage-debt');
    }

    public function servicesForeClosureDefense()
    {
        return view('services.foreclosure-defense');
    }

    public function servicesFairDebt()
    {
        return view('services.fair-debt');
    }

    public function servicesStudentLoan()
    {
        return view('services.student-loan');
    }

    public function servicesSmallBusiness()
    {
        return view('services.small-business');
    }

    public function servicesDebtConsolidation()
    {
        return view('services.debt-consolidation');
    }

    public function servicesDebtManagement()
    {
        return view('services.debt-management');
    }

    public function serviceBankruptcy()
    {
        return view('services.bankruptcy');
    }
}
