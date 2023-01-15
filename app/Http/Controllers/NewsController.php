<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{

    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // f not authenticated you will be sent to login page.
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
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

        return redirect()->route('News.index')->with('status','News post created');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('News\edit', compact('news'));
    }

    public function update($id, Request $request)
    {
        $news = News::findOrFail($id);
        $validated = $request->validate([
            'title'   => 'required|min:2',
            'content' => 'required|min:30',
        ]);

        $news->title = $validated['title'];
        $news->message = $validated['content'];
        $news->save();

        return redirect()->route('News.index')->with('status','news post edited');
    }
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('News.index')->with('statuswarn','news post deleted');
    }

}
 