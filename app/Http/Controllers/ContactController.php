<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
       return view('contact');
    }

    public function store(Request $request)
    {
        // $sent = Mail::to('davisreis11@gmail.com','David Reis')->send(new Contact([
        //     'fromName' => $request->input('name'),
        //     'fromEmail' => $request->input('email'),
        //     'subject' => $request->input('subject'),
        //     'message' => $request->input('message'),
        // ]));
            SendMail::dispatch($request);
    }
}
