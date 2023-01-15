<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


//controller for the contact page

class ContactController extends Controller{

    //__construct is a constructor function and will be called when the route is called, only when authenticated can you access the routes
    // iff not authenticated you will be sent to login page.
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
        //all values required with a min amount of character, email has to contain an @ to be an email and has to be a string
        //message can't be more than 1000 characters
        //validated is used to first validate the values
        $contact = new Contact();
        $validated = $request->validate([
            'name'   => 'required|min:5',
            'email'   => 'required|min:5|email|string',
            'subject'   => 'required|min:5',
            'message' => 'required|min:30|max:1000',
        ]);

        //Since running the values through the validate function it turns them into arrays, you have to use[] 

        $contact->subject = $validated['subject'];
        $contact->content = $validated['message'];
        $contact->user_id = Auth::user()->id;
        $contact->created_at = Carbon::now();
        $contact->save();

        return redirect()->route('Contact.index')->with('status','message sent');
    }
    

}