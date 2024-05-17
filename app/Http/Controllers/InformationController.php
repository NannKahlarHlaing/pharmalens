<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function company_profile(){
        return view('public.company_profile');
    }
}
