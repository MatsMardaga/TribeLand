<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//Controller to show the admin user the admin toolkit

class AdminController extends Controller
{
    public function index()
    {
        //if the user is logged in and is an admin they can access the page, if they arent they are redirected to the home page
        if (Auth::check() && Auth::user()->is_admin) {
            $contact = Contact::orderBy('created_at', 'desc')->get();
            return view('admin\AdminHome', compact('contact'));
        } else {
            return view('Home');
        }
    }
}
