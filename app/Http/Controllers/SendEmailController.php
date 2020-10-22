<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
// use App\Http\Controllers\Mailable;



class SendEmailController extends Controller {
    
    public function index(){
        return view('contact');
    }
    
    public function send(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'prenom' => 'required',
            'mail' => "required|email",
            'msg' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'prenom' => $request->prenom,
            'mail' => $request->mail,
            'msg' => $request->msg
        );

        Mail::to('Delvaux.Robby@protonmail.com')->send(new SendMail($data));

        return back()->with('success' , 'Merci de m\'avoir contacter je vous recontacte le plus vite possible.');
        
    }
   
}
