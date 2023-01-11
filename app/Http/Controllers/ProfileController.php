<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $profile = User::all();
        return view('Profile\ShowProfile', compact('profile'));
    }

}