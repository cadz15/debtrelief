<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubDomainController extends Controller
{
    
    public function paraquatIndex()
    {
        return view('paraquat.inspo1');
    }


    public function roundUpIndex()
    {
        return view('roundup.inspo1');
    }
}
