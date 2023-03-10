<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // f not authenticated you will be sent to login page.
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
            'birthday'   => 'date|before:tomorrow',
            'bio'   => 'min:30',
        ]);
        
        $profile->country = $validated['country'];
        $profile->name = $validated['name'];
        $profile->birthday = $validated['birthday'];
        $profile->about_me = $validated['bio'];
        $profile->save();

        return redirect()->route('Profile.index')->with('status','Profile edited');
    }
    

}