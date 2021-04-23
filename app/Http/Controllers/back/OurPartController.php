<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourpart;
use Illuminate\Pagination\Paginator;

class OurPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ourparts=Ourpart::OrderBy('created_at','ASC')->get();
        return view('back.ourPartners.index',compact('ourparts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $ourpart=Ourpart::all();
        return view('back.ourPartners.create',compact('ourpart'));
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
         
        $ourpart=new Ourpart; 
        $ourpart->title_tm=$request->title_tm;  
        $ourpart->title_ru=$request->title_ru;  
        $ourpart->title_en=$request->title_en;  
       
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $ourpart->image='uploads/'.$imageName;
        }  
        $ourpart->save();
        toastr()->success('Созданный');
       
        return redirect()->route('admin.ourpartners.index');
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
         $ourpart=Ourpart::findOrFail($id);
        return view('back.ourPartners.update',compact('ourpart'));
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

        $ourpart=Ourpart::findOrFail($id); 
        $ourpart->title_tm=$request->title_tm; 
        $ourpart->title_ru=$request->title_ru; 
        $ourpart->title_en=$request->title_en; 
       
       

        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $ourpart->image='uploads/'.$imageName;
        };  

       
        $ourpart->save();

        toastr()->success('Обновлено');
        return redirect()->route('admin.ourpartners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $ourpart=Ourpart::where('id',$id)->firstOrFail();
         $ourpart->delete();
         toastr()->success('Удалено');
        return redirect()->route('admin.ourpartners.index');
    }
}
