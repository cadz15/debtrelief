<?php

namespace App\Http\Controllers;

use App\Models\SubLead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubLeadController extends Controller
{
    //
    public function index()
    {
        return view('sub.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'mobile' => ['required', 'string'],
            'state' => ['required', 'string'],
        ]);


        SubLead::create($validated);

        return back()->with('success', 'Successful Lead creation!');
    }


    public function list()
    {
        $data = SubLead::query();


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
            ->make(true);
    }
}
