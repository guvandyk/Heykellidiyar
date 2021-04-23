<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Article;
use Mail;
use Mapper;

class ContactController extends Controller
{
     public function contact()
    {
        
        $article=Article::firstOrFail();
        $menus=Menu::get();
        $contact=Contact::OrderBy('created_at','DESC')->firstOrFail();
    	return view('front.contact',compact('contact','menus','article'));
    }

    public function sendMail(Request $request)
    {
      /*   $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'service'=>'required',
            'message'=>'required|min:5'
        ]); */

    	$details=[
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'phone'=>$request->phone,
    		'subject'=>$request->subject,
            'service'=>$request->service,
    		'message'=>$request->message,
    	];
    	Mail::to('atajanovguvandyk@gmail.com')->send(new ContactMail($details));
         toastr()->success('Üstünlikli Ugradyldy!!!');
    	return back();
    }

    
}
