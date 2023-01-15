<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//controller for the about page

class AboutController extends Controller
{
    public function index()
    {
        return view('About');
    }
}
