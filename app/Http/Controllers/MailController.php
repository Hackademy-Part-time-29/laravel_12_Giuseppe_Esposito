<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function showForm(){
        return view('pages.contact-us');
    }

    public function sendMail(Request $request){
        
        if($request->name==null || $request->email==null || $request->msg==null){
            return redirect()->back()->with(['error'=>'Compila il form con i dati corretti!']);
        }
        
        // dd($request);
        $contactMail = new ContactMail($request->name, $request->email, $request->msg);
        
        // Preview della mail
        // return $contactMail->render();

        Mail::to('admin@blog')->send($contactMail);
        
        return redirect()->back()->with(['succes'=>'Email inviata con successo']);
    }
}
