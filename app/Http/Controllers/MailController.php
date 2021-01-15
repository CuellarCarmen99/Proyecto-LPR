<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use\Mail;
use App\product;
use App\category;
use App\provider;

class MailController extends Controller
{
public function getMail(Request $request){


    $data = ['name'=>'Carmen Cuellar'];
    Mail::to('carmenvc1999cuellar@gmail.com')->send(new TestMail($data));
    
    

    echo '<script language="javascript">alert("Notificacion de productos nuevos enviada");</script>';

    $request->user()->authorizeRoles('admin');
        $categories=category::orderBy('id','DESC')->paginate(3);;
        $providers=provider::orderBy('id','DESC')->paginate(3);;
        $products=product::orderBy('id','DESC')->paginate(3);
        return view('product.index',compact('products','categories', 'providers'))->with('alert', 'Notificacion enviada');
        
        

}

}
