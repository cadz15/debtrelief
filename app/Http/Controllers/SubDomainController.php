<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubDomainController extends Controller
{
    
    public function paraquatIndex()
    {
        return view('paraquat.inspo1');
    }

    public function paraquatStore()
    {
        return view('paraquat.inspo1');
    }


    public function roundUpIndex()
    {
        return view('roundup.inspo1');
    }
    public function roundUpStore()
    {
        return view('roundup.inspo1');
    }

    public function rideshareIndex()
    {
        return view('rideshare.landing');
    }

    public function rideshareStore(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'incident' => ['required'],
            'receipt' => ['required'],
            'date' => ['required'],
            'state' => ['required'],
            'consent' => ['required'],
        ]);

        try
        {
            $responses = Http::post(env('GOOGLE_SHEET_POST2'), [...$validated, 'created_at' => now()->format('M d, Y')]);

            // Check if the request was successfule
        if ($responses->successful()) {
            // You can log the response or do further processing
            return redirect()->route('rideshare.landing')->with('success', 'Your submission has been received.');
        } else {
            // Handle the error case
            return redirect()->route('rideshare.landing')->with('error', 'Error in submitting!.');
        }
            
        }catch(Exception $e) {

           
        }

        return view('rideshare.landing');
    }
}
