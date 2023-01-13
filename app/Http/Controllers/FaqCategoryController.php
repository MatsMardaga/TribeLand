<?php

namespace App\Http\Controllers;
use App\Models\FaqCategory;

use Illuminate\Http\Request;


class FaqCategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create(){

    }
    public function store(){
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }


}
