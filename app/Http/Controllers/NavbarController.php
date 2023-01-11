<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NavbarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {   
        return view('Store');
    }
    public function faq()
    {   
        return view('FAQ');
    }
    public function contact()
    {   
        return view('Contact');
    }

}
