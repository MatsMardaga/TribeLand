<?php

namespace App\Http\Controllers;

use App\Models\FaqQuestion;
use App\Models\ForumReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ForumReplyController extends Controller
{


    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // iff not authenticated you will be sent to login page except for index
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create($id)
    {
        return view('Forum\reply\createReply', compact('id'));
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'content'   => 'required|min:1',
        ]);

        
        $reply = new ForumReply();
        $reply->content = $validated['content'];
        $reply->category_id = $request->id;
        $reply->save();

        return redirect()->route('Forum.index')->with('status', 'Reply posted');
    }
}
