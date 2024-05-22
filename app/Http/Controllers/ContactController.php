<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $info = Information::first();

        // dd($phone);

        return view('public.contact', [
            'info' => $info,
            'phone' => $this->stringToArray($info->phone),
            'email' => $this->stringToArray($info->email)
        ]);
    }

    private function stringToArray($str)
    {
        $arr = explode(',', $str);
        return $arr;
    }
}
