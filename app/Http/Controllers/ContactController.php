<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ContactController extends Controller{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        return view('Contact\Contact');
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $validated = $request->validate([
            'subject'   => 'required|min:5',
            'message' => 'required|min:30',
        ]);

        $contact->subject = $validated['subject'];
        $contact->content = $validated['message'];
        $contact->user_id = Auth::user()->id;
        $contact->created_at = Carbon::now();
        $contact->save();

        return redirect()->route('index');
    }
    

}