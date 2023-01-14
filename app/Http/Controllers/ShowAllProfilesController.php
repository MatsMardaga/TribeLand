<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShowAllProfilesController extends Controller
{
    public function index($id)
    {
        $person = User::findOrFail($id);
        return view('Profile\singleprofile', compact('person'));
    }
    //Laravel finds the show controller before the update controller so it wants to use this one.
    //The route of Allprofiles.update will go in this controller's show function.
}
