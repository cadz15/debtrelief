<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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


        //LEAD CONDUIT
        try {
            //68ea53243349667e5fc1f6e8
            $responses = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode(env('LEAD_CONDUIT_KEY') . ':' . env('LEAD_CONDUIT_API')),
            ])
            ->post("https://app.leadconduit.com/flows/68ea53243349667e5fc1f6e8/sources/674f4c2f3f30fe6d31fccaab/submit", [
                "first_name" =>  $validated['first_name'],
                "last_name" =>  $validated['last_name'],
                "email" =>  $validated['email'],
                "phone_1" =>  $validated['phone'],
                "state" =>  $validated['state'],
                "trustedform_cert_url" =>  $request->get('xxTrustedFormCertUrl'),
                "agreed_prq" =>  $validated['consent'],
                "date_occur_prq" =>  $validated['date'],
                "rideshare_assaulted_prq" =>  $validated['incident'],
                "have_receipt_prq" =>  $validated['receipt']
            ]);
            
            if($responses->successful()) {

                Log::info($responses->json());
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($responses->json());
        }

        // GOOGLE SHEET
        try
        {
            $responses = Http::post(env('GOOGLE_SHEET_POST2'), [...$validated, 'created_at' => now()->format('M d, Y')]);

            // Check if the request was successfule
            if ($responses->successful()) {
                // You can log the response or do further processing
                return redirect()->route('rideshare.index')->with('success', 'Your submission has been received.');
            } else {
                // Handle the error case
                return redirect()->route('rideshare.index')->with('error', 'Error in submitting!.');
            }
            
        }catch(Exception $e) {

           
        }
        
        return view('rideshare.index');
    }
}
