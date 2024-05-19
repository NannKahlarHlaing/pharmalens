<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function company_profile(){
        return view('public.company_profile');
    }

    public function index(){
        return view('admins.information');
    }

    public function store(){
        dd('a');
        return redirect()->back()->with('success', 'Successfully Updated Page information.');
    }
}
