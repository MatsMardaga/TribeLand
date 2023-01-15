<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;

use Illuminate\Http\Request;


class FaqController extends Controller
{

    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // f not authenticated you will be sent to login page except for index
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $category = FaqCategory::all();
        return view('FAQ\ShowFaq', compact('category'));
    }
}
