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
        $news = News::orderBy('created_at','desc')->get();
        return view('News\ShowNews', compact('news'));
    }

    public function create()
    {   
        if (Auth::check() && Auth::user()->is_admin) {
            return view('News\create');
        } else {
            return redirect()->route('index');
        }
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

    public function edit($id)
    {   
        $news = News::findOrFail($id);
        return view('News\edit', compact('news'));
    }
}