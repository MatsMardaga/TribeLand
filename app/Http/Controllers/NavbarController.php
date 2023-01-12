<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    public function admin()
    {   
        if (Auth::check() && Auth::user()->is_admin) {
            return view('admin\AdminHome');
        } else {
            return view('Home');
        }
    }
    
}
 