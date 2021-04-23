<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\License;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses=License::OrderBy('created_at','ASC')->get();
        return view('back.license.index',compact('licenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $license=License::all();
        return view('back.license.create',compact('license'));
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
         
        $license=new License; 
         
        $license->title_tm=$request->title_tm; 
        $license->title_ru=$request->title_ru; 
        $license->title_en=$request->title_en;  
       
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $license->image='uploads/'.$imageName;
        }  
        $license->save();
        toastr()->success('Созданный');
       
        return redirect()->route('admin.license.index');
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
        $license=License::findOrFail($id);
        return view('back.license.update',compact('license'));
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
            'image'=>'image|mimes:jpeg,jpg,png'

        ]); 
         

        $license=License::findOrFail($id); 
        $license->title_tm=$request->title_tm; 
        $license->title_ru=$request->title_ru; 
        $license->title_en=$request->title_en; 
       

        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $license->image='uploads/'.$imageName;
        };  

       
        $license->save();
        toastr()->success('Обновлено');
        return redirect()->route('admin.license.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $license=License::where('id',$id)->firstOrFail();
         $license->delete();
         toastr()->success('Удалено');
        return redirect()->route('admin.license.index');
    }
}
