<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IslerItem;
use App\Models\Work;

class WorkItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=IslerItem::OrderBy('created_at','ASC')->get();
        return view('back.work_item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works=Work::all();
        $items=IslerItem::OrderBy('created_at','ASC')->get();
        return view('back.work_item.create',compact('items','works'));
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
            'name_tm'=>'min:3',
            'name_ru'=>'min:3',
            'name_en'=>'min:3',
           
            'image'=>'required|image|mimes:jpeg,jpg,png'

        ]); 
         
        $item=new IslerItem; 
        $item->name_tm=$request->name_tm;  
        $item->name_ru=$request->name_ru;  
        $item->name_en=$request->name_en;  
        $item->description_tm=$request->description_tm;  
        $item->description_ru=$request->description_ru;  
        $item->description_en=$request->description_en;  
        $item->category_id=$request->category_id;
       
       
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $item->image='uploads/'.$imageName;
        }  
        $item->save();
        toastr()->success('Созданный');
       
        return redirect()->route('admin.work_Item.index');
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
         $works=Work::all();
        $item=IslerItem::findOrFail($id);
        return view('back.work_item.update',compact('works','item'));
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
            'name_tm'=>'min:3',
            'name_ru'=>'min:3',
            'name_en'=>'min:3',
            
            'image'=>'image|mimes:jpeg,jpg,png'

        ]); 
       

        $item=IslerItem::findOrFail($id); 
        $item->name_tm=$request->name_tm; 
        $item->name_ru=$request->name_ru; 
        $item->name_en=$request->name_en; 
        $item->description_tm=$request->description_tm;  
        $item->description_ru=$request->description_ru;  
        $item->description_en=$request->description_en;  
        $item->category_id=$request->category_id;
       
       

        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $item->image='uploads/'.$imageName;
        };  

       
        $item->save();

        toastr()->success('Обновлено');
        return redirect()->route('admin.work_Item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item=IslerItem::where('id',$id)->firstOrFail();
         $item->delete();
         toastr()->success('Удалено');
        return redirect()->route('admin.work_Item.index');
    }
}
