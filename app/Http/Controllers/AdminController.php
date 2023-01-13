<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $contact = Contact::orderBy('created_at', 'desc')->get();
            return view('admin\AdminHome', compact('contact'));
        } else {
            return view('Home');
        }
    }
}
