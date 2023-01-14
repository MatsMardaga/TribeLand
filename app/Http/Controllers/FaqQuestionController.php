<?php

namespace App\Http\Controllers;
use App\Models\FaqQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FaqQuestionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create($id){
        return view('FAQ\createFaqQuestion',compact('id'));
    }
    public function store(Request $request,$id){

        $validated = $request->validate([
            'question'   => 'required|min:5',
            'answer' => 'required|min:10',
        ]);

        $qa = new FaqQuestion();
        $qa->name = $validated['question'];
        $qa->content = $validated['answer'];
        $qa->category_id = $id;
        $qa->save();

        return redirect()->route('index');
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }

    
}
