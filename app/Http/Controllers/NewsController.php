<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {   
        $news = News::all();
        return view('News\ShowNews', compact('news'));
    }

    public function create()
    {   
        return view('News\create');
    }
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'title'   => 'required|min:2',
            'content' => 'required|min:30',
        ]);

        $news = new News;
        $news->title = $validated['title'];
        $news->message = $validated['content'];
        $news->user_id = Auth::user()->id;
        $news->save();

        return redirect()->route('index');
    }

}