<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;

use Illuminate\Http\Request;


class FaqCategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth', 'admin'], ['except' => ['index']]);
    }

    public function create(){
        return view('FAQ\createFaqCategory');
    }
    public function store(Request $request){

        $validated = $request->validate([
            'category'   => 'required|min:5',
        ]);

        $cat = new FaqCategory;
        $cat->name = $validated['category'];
        $cat->save();

        return redirect()->route('index');
    }
    public function edit($id){

        $cat = FaqCategory::findOrFail($id);
        return view('FAQ\editFaqCategory', compact('cat'));
    }
    public function update($id, Request $request){
        $cat = FaqCategory::findOrFail($id);
        $validated = $request->validate([
            'category'   => 'required|min:5',
        ]);

        $cat->name = $validated['category'];
        $cat->save();

        return redirect()->route('index');
    }
    public function destroy($id){
        $news = FaqCategory::findOrFail($id);
        $news->delete();
        return redirect()->route('index');
    }

    
}
