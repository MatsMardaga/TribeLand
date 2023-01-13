<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;

use Illuminate\Http\Request;


class FaqController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $category = FaqCategory::all();
        return view('FAQ\ShowFaq',compact('category'));
    }
}
