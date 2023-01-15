<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;
use App\Models\ForumMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//CategoryController

class ForumMessageController extends Controller
{


    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // iff not authenticated you will be sent to login page except for index
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }



    public function create(){
        return view('forum\message\createMessage');
    }
    public function store(Request $request){

        $validated = $request->validate([
            'title'   => 'required|min:5',
            'content'   => 'required|min:50',
        ]);

        $message = new ForumMessage();
        $message->title = $validated['title'];
        $message->content = $validated['content'];
        $message->save();

        return redirect()->route('Forum.index')->with('status','Message posted');
    }

    
}
