<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FaqQuestionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create(){
        return view('FAQ\createFaqQuestion');
    }
    public function store(Request $request){

        $validated = $request->validate([
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $qa = new FaqCategory;
        $qa->title = $validated['title'];
        $qa->message = $validated['content'];
        $qa->save();

        return redirect()->route('FAQ');
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }

    
}
