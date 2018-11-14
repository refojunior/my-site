<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class SendMailController extends Controller
{
    
    public function sendMail(Request $request){
    	$this->validate($request, [
    		'name' => 'required|max:80',
    		'email' => 'required|email',
    		'telp' => 'numeric|required',
    		'message' => 'required'
    	]);

    	Mail::to('refojunior5@gmail.com')
    		->send(new ContactMail($request->get('message'), $request->get('email'), $request->get('name'), $request->get('telp')));

    	notifMsg('contact', 'Contact Alert');
    	return redirect()->back();;

    }
}
