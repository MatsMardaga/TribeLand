<?php

namespace App\Http\Controllers;
use App\Models\FaqQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FaqQuestionController extends Controller
{

    protected $category_id;

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create(Request $id){
        

        $this->category_id = $id;
        return view('FAQ\createFaqQuestion');
    }

    public function store(Request $request){
        

        $validated = $request->validate([
            'question'   => 'required|min:5',
            'answer' => 'required|min:10',
        ]);


        $qa = new FaqQuestion();
        $qa->name = $validated['question'];
        $qa->content = $validated['answer'];
        $qa->category_id = $this->category_id;
        $qa->save();

        return redirect()->route('index');
    }
    public function edit(){
        return view('Home');
    }
    public function update(){
        return view('Home');
    }
    public function delete(){
        return view('Home');
    }

    
}
