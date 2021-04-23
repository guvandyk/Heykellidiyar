<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class Product_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('back.productCategory.index',compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('back.productCategory.create',compact('categories'));
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
            'image'=>'required|image|mimes:jpeg,jpg,png,tif'

        ]); 
         
        $category=new Category; 
        $category->slug=$request->slug;  
        $category->name_tm=$request->name_tm;  
        $category->name_ru=$request->name_ru;  
        $category->name_en=$request->name_en;  
        $category->description_tm=$request->description_tm;  
        $category->description_ru=$request->description_ru;  
        $category->description_en=$request->description_en;  
       
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $category->image='uploads/'.$imageName;
        }  
        $category->save();
        toastr()->success('Созданный');
       
        return redirect()->route('admin.category.index');
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
         $category=Category::findOrFail($id);
        return view('back.productCategory.update',compact('category'));
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
            'description_tm'=>'min:10',
            'description_ru'=>'min:10',
            'description_en'=>'min:10',
            'image'=>'image|mimes:jpeg,jpg,png,tif'

        ]);

        $category=Category::findOrFail($id); 
        $category->slug=$request->slug;  
        $category->name_tm=$request->name_tm;  
        $category->name_ru=$request->name_ru;  
        $category->name_en=$request->name_en;  
        $category->description_tm=$request->description_tm;  
        $category->description_ru=$request->description_ru;  
        $category->description_en=$request->description_en;  
       

        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $category->image='uploads/'.$imageName;
        };  

       
        $category->save();
        toastr()->success('Обновлено');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       
    }
}
