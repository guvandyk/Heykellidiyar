<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikat;
use Illuminate\Pagination\Paginator;

class SertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertificates=Sertifikat::OrderBy('created_at','ASC')->get();
        return view('back.sertificate.index',compact('sertificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sertificate=Sertifikat::all();
        return view('back.sertificate.create',compact('sertificate'));
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
            
            'title_tm'=>'min:3',
            'title_ru'=>'min:3',
            'title_en'=>'min:3',
            'image'=>'required|image|mimes:jpeg,jpg,png'

        ]); 
         
        $sertificate=new Sertifikat; 
         
        $sertificate->title_tm=$request->title_tm; 
        $sertificate->title=$request->title;  
        $sertificate->title_en=$request->title_en;  
       
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $sertificate->image='uploads/'.$imageName;
        }  
        $sertificate->save();
        toastr()->success('Have fun storming the castle!', 'Miracle Max Says');
       
        return redirect()->route('admin.sertificate.index');
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
        $sertificate=Sertifikat::findOrFail($id);
        return view('back.sertificate.update',compact('sertificate'));
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
            'title_tm'=>'min:3',
            'title_ru'=>'min:3',
            'title_en'=>'min:3',
            'image'=>'required|image|mimes:jpeg,jpg,png'

        ]); 

        $sertificate=Sertifikat::findOrFail($id); 
        $sertificate->title_tm=$request->title_tm; 
        $sertificate->title=$request->title; 
        $sertificate->title_en=$request->title_en; 
       

        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $sertificate->image='uploads/'.$imageName;
        };  

       
        $sertificate->save();
        toastr()->success('Sertificate_Updated');
        return redirect()->route('admin.sertificate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $sertificate=Sertifikat::where('id',$id)->firstOrFail();
         $sertificate->delete();
         toastr()->success('sertificate_deleted');
        return redirect()->route('admin.sertificate.index');
    }
}
