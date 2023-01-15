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
}
