<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDebtReliefSubmissionRequest;
use App\Models\Leading;
use Illuminate\Http\Request;

class LeadingController extends Controller
{
    //
    public function index()
    {
        return view('leading');
    }

    public function store(StoreDebtReliefSubmissionRequest $request)
    {
        $validatedData = $request->validated();

        Leading::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'zip' => $validatedData['zip'],
            'debt_amount' => $validatedData['debt_amount'],
            'financial_difficulty' => json_encode($validatedData['financial_difficulty']),
            'debts' => json_encode($validatedData['debts']),
            'home_status' => $validatedData['home_status'],
        ]);

        return redirect()->route('cta')->with('success', 'Your submission has been received.');
    }
}
