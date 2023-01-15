<?php

namespace App\Http\Controllers;

use App\Models\FaqQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FaqQuestionController extends Controller
{


    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // iff not authenticated you will be sent to login page except for index
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
            'question'   => 'required|min:5',
            'answer'   => 'required|min:5',
        ]);

        $question->name = $validated['question'];
        $question->content = $validated['answer'];
        $question->save();
        return redirect()->route('FAQ.index')->with('status', 'Question updated');
    }

    public function destroy($id)
    {
        $question = FaqQuestion::findOrFail($id);
        $question->delete();
        return redirect()->route('FAQ.index')->with('statuswarn', 'Question deleted');
    }
}
