<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works=Work::all();
        return view('back.work.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works=Work::all();
        return view('back.work.create',compact('works'));
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
            'slug'=>'min:3',
            'name_tm'=>'min:3',
            'name_ru'=>'min:3',
            'name_en'=>'min:3',
            'description_tm'=>'min:10',
            'description_ru'=>'min:10',
            'description_en'=>'min:10',
            'image'=>'required|image|mimes:jpeg,jpg,png'

        ]); 
         
        $work=new Work; 
        $work->slug=$request->slug;  
        $work->name_tm=$request->name_tm;  
        $work->name_ru=$request->name_ru;  
        $work->name_en=$request->name_en;  
        $work->description_tm=$request->description_tm;  
        $work->description_ru=$request->description_ru;  
        $work->description_en=$request->description_en;  
       
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $work->image='uploads/'.$imageName;
        }  
        $work->save();
        toastr()->success('Созданный');
       
        return redirect()->route('admin.work.index');
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
         $work=Work::findOrFail($id);
        return view('back.work.update',compact('work'));
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
            'slug'=>'min:3',
            'name_tm'=>'min:3',
            'name_ru'=>'min:3',
            'name_en'=>'min:3',
            'description_tm'=>'min:5',
            'description_ru'=>'min:5',
            'description_en'=>'min:5',
            'image'=>'image|mimes:jpeg,jpg,png'

        ]);  

        $work=Work::findOrFail($id); 
        $work->slug=$request->slug;  
        $work->name_tm=$request->name_tm;  
        $work->name_ru=$request->name_ru;  
        $work->name_en=$request->name_en;  
        $work->description_tm=$request->description_tm;  
        $work->description_ru=$request->description_ru;  
        $work->description_en=$request->description_en;  
       

        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $work->image='uploads/'.$imageName;
        };  

       
        $work->save();
        toastr()->success('Обновлено');
        return redirect()->route('admin.work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
