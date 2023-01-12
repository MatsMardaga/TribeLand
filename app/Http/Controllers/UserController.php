<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        
        return view('Profile\ShowProfile');
    }
    public function edit($id)
    {   
        return view('Profile\edit');
    }
    public function update(Request $request)
    {  
        $profile = User::findOrFail(Auth::user()->id);

        $validated = $request->validate([
            'name'   => 'min:2',
            'country'   => 'min:4',
            'bio'   => 'min:30',
        ]);
        
        $profile->name = $validated['name'];
        $profile->country = $validated['country'];
        $profile->about_me = $validated['bio'];
        $profile->save();

        return redirect()->route('index');
        
    }
    

}