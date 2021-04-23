<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikat;
use App\Models\Ourpart;
use App\Models\Category;
use App\Models\PartCategory;
use App\Models\Contact;
use App\Models\License;
use App\Models\Menu;
use App\Models\Sozler;
use App\Models\Article;
use App\Models\Work;
use App\Models\IslerItem;
use Illuminate\Pagination\Paginator;

class SearchController extends Controller
{
    public function search(Request $request){
    	 $sozler=Sozler::get();
    	 $menus=Menu::get();
    	  $contact=Contact::OrderBy('created_at','DESC')->first();


    // Get the search value from the request
    $search = $request->input('query');

    // Search in the title and body columns from the posts table
   /* $licenses = License::query()
        ->where('title_tm', 'LIKE', "%{$search}%")
        ->orWhere('title_ru', 'LIKE', "%{$search}%")->orWhere('title_en', 'LIKE', "%{$search}%")
        ->get();*/



       // $search = $request->input('query');
    // Search in the title and body columns from the posts table
   $ourParts=Ourpart::query()
        ->where('title_tm', 'LIKE', "%{$search}%")
        ->orWhere('title_ru', 'LIKE', "%{$search}%")->orWhere('title_en', 'LIKE', "%{$search}%")
        ->get();

         //$search = $request->input('query');
    // Search in the title and body columns from the posts table
    $categories1=Category::query()
        ->where('name_tm', 'LIKE', "%{$search}%")
        ->orWhere('name_ru', 'LIKE', "%{$search}%")->orWhere('name_en', 'LIKE', "%{$search}%")
        ->get();

         $works=Work::query()
        ->where('name_tm', 'LIKE', "%{$search}%")
        ->orWhere('name_ru', 'LIKE', "%{$search}%")->orWhere('name_en', 'LIKE', "%{$search}%")
        ->get();

          $Items=IslerItem::query()
        ->where('name_tm', 'LIKE', "%{$search}%")
        ->orWhere('name_ru', 'LIKE', "%{$search}%")->orWhere('name_en', 'LIKE', "%{$search}%")
        ->get();

          $items=PartCategory::query()
        ->where('name_tm', 'LIKE', "%{$search}%")
        ->orWhere('name_ru', 'LIKE', "%{$search}%")->orWhere('name_en', 'LIKE', "%{$search}%")
        ->get();

    $data['categories1']=$categories1;
    $data['works']=$works;
    $data['Items']=$Items;
    $data['items']=$items;
    $data['ourParts']=$ourParts;
    $data['sozler']=$sozler;
    $data['menus']=$menus;
    $data['contact']=$contact;
         return view('front.search', $data);
     

   
}
}
