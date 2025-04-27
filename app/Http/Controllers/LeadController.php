<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDebtReliefSubmissionRequest;
use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LeadController extends Controller
{
    //
    public function index()
    {
        return view('leading');
    }

    public function leads()
    {
        return view('admin.leads');
    }
    
    public function list()
    {
        $data = Lead::query();


        return DataTables::eloquent($data)
            ->order(function($query) {
                $query->orderBy('created_at', 'desc');
            })
            ->addColumn('name', function ($lead) {
                return $lead->full_name;
            })
            ->addColumn('debt_amount', function ($lead) {
                return '$'. number_format($lead->debt_amount);
            })
            ->addColumn('date', function ($lead) {
                return Carbon::parse($lead->created_at)->format('F d, Y');
            })
            ->addColumn('financial_difficulty', function ($lead) {
                return is_array($lead->financial_difficulty)
                ? implode(', ', $lead->financial_difficulty)
                : implode(', ', json_decode($lead->financial_difficulty ?? '[]', true));
            })
            ->addColumn('debts', function ($lead) {
                return is_array($lead->debts)
                ? implode(', ', $lead->debts)
                : implode(', ', json_decode($lead->debts ?? '[]', true));
            })
            ->make(true);
    }

    public function store(StoreDebtReliefSubmissionRequest $request)
    {
        $validatedData = $request->validated();

        Lead::create([
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
