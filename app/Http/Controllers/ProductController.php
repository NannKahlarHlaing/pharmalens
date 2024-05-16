<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admins.products.index');
    }

    public function create(){
        return view('admins.products.create');
    }

    public function store(){
        return view('admins.products.index');
    }
}
