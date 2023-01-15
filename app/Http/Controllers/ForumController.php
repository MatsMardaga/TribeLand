<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use App\Models\ForumMessage;
use Illuminate\Http\Request;


class ForumController extends Controller
{

    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // f not authenticated you will be sent to login page except for index
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $forum = ForumMessage::all();
        return view('forum\Forum', compact('forum'));
    }
}
