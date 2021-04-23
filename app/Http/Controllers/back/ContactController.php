<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::OrderBy('created_at','ASC')->get();
        return view('back.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts=Contact::OrderBy('created_at','ASC')->get();
        return view('back.contact.create',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'phone'=>'min:3',
            'email'=>'min:3',
            'fax'=>'min:3',
            'adres'=>'min:3',
            'adres_ru'=>'min:3',
            'adres_en'=>'min:3',
            'adres_koce'=>'min:3',
            'adres_koce_ru'=>'min:3',
            'adres_koce_en'=>'min:3',
            
        ]); 
         
        $contact=new Contact; 
        $contact->phone=$request->phone;  
       $contact->email=$request->email; 
          $contact->fax=$request->fax;
       $contact->adres=$request->adres;
       $contact->adres_ru=$request->adres_ru;
       $contact->adres_en=$request->adres_en;
       $contact->adres_koce=$request->adres_koce;
       $contact->adres_koce_ru=$request->adres_koce_ru;
       $contact->adres_koce_en=$request->adres_koce_en;
        
        $contact->save();
        toastr()->success('Созданный');
       
        return redirect()->route('admin.contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact::findOrFail($id);
        return view('back.contact.update',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'phone'=>'min:3',
            'email'=>'min:3',
            'fax'=>'min:3',
            'adres'=>'min:3',
            'adres_ru'=>'min:3',
            'adres_en'=>'min:3',
            'adres_koce'=>'min:3',
            'adres_koce_ru'=>'min:3',
            'adres_koce_en'=>'min:3',
            
        ]); 

        $contact=Contact::findOrFail($id); 
        $contact->phone=$request->phone; 
        $contact->email=$request->email; 
       $contact->fax=$request->fax;
       $contact->adres=$request->adres;
       $contact->adres_ru=$request->adres_ru;
       $contact->adres_en=$request->adres_en;
       $contact->adres_koce=$request->adres_koce;
       $contact->adres_koce_ru=$request->adres_koce_ru;
       $contact->adres_koce_en=$request->adres_koce_en;
        $contact->save();
        toastr()->success('Обновлено');
        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $contact=Contact::where('id',$id)->firstOrFail();
         $contact->delete();
         toastr()->success('Удалено');
        return redirect()->route('admin.contact.index');
    }
}
