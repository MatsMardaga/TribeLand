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

    public function create($id)
    {

        return view('FAQ\createFaqQuestion', compact('id'));
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'question'   => 'required|min:5',
            'answer' => 'required|min:10',
        ]);


        $qa = new FaqQuestion();
        $qa->name = $validated['question'];
        $qa->content = $validated['answer'];
        $qa->category_id = $request->id;
        $qa->save();

        return redirect()->route('FAQ.index')->with('status', 'Q&A created');
    }
    public function edit($id)
    {
        $question = FaqQuestion::findOrFail($id);
        return view('FAQ\editFaqQuestion', compact('question'));
    }
    public function update($id, Request $request)
    {
        $question = FaqQuestion::findOrFail($id);
        $validated = $request->validate([
            'message'   => 'required|min:5',
            'content'   => 'required|min:5',
        ]);

        $question->name = $validated['message'];
        $question->content = $validated['content'];
        $question->save();
        return redirect()->route('FAQ.index')->with('status', 'Question updated');
    }

    public function delete()
    {
        return view('Home');
    }
}
