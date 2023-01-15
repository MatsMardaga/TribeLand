<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FaqCategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }



    public function create(){
        if (Auth::user()->is_admin) {
            return view('FAQ\createFaqCategory');
        }
        else{
            return view('Home');
        }
        
    }
    public function store(Request $request){

        $validated = $request->validate([
            'category'   => 'required|min:5',
        ]);

        $cat = new FaqCategory;
        $cat->name = $validated['category'];
        $cat->save();

        return redirect()->route('FAQ.index')->with('status','Category created');
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

        return redirect()->route('FAQ.index')->with('status','Category updated');
    }
    public function destroy($id){
        $news = FaqCategory::findOrFail($id);
        $news->delete();
        return redirect()->route('FAQ.index')->with('statuswarn','Category deleted');
    }

    
}
