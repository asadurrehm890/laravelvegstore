<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactsController extends Controller
{
    public function storefunc(Request $req){
       $nc=new Contact;
       $nc->name=$req->cname;
       $nc->email=$req->cemail;
       $nc->messsage=$req->cmessage;
       $nc->save();
       return redirect()->route('contact')->with('cmess', 'Message is received, we will call you shortly');
    }

    public function disp(){
      $ac=Contact::all()->sortDesc()->take(50);
      return view('admin.conts', ['ac'=>$ac]);
    }
}
