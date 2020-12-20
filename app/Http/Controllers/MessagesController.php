<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\message;

class MessagesController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'content'=>'required'
        ]);


        $datos = new message();
            $datos->name = $request->name;
            $datos->email = $request->email;
            $datos->subject = $request->subject; 
            $datos->content = $request->content;

        $datos->save();
        $datos=message::all();
        
        return redirect('/')->with('toast_success','Su solicitud sera procesada.');
        }
}
