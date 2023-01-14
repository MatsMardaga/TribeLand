<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;

use Illuminate\Http\Request;


class FaqCategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create(){
        return view('FAQ\createFaqCategory');
    }
    public function store(Request $request){

        $validated = $request->validate([
            'category'   => 'required|min:5',
        ]);

        $cat = new FaqCategory;
        $cat->name = $validated['category'];
        $cat->save();

        return redirect()->route('index');
    }
    public function edit(){
        return view('Home');
    }
    public function update(){
        
    }
    public function delete(){
        
    }


}
