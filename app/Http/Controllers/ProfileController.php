<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::orderBy('name', 'asc')->get();
        return view('Profile\allprofiles', compact('profile'));
    }
    //Laravel finds the show controller before the update controller so it wants to use this one.
    //The route of Allprofiles.update will go in this controller's show function.
    public function show($id)
    {
        $user = User::find($id);
        if($user){
            if(!$user->is_admin) {
                $user->is_admin = true;
                $user->save();
                return redirect()->route('Allprofiles.index')->with('status','user promoted to admin');
            }
            else{
                return redirect()->route('Allprofiles.index')->with('statuswarn','There was an error promoting the user to admin');
            }
        }
       
    }

}
