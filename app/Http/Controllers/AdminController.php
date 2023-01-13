<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return view('admin\AdminHome');
        } else {
            return view('Home');
        }
    }
}
