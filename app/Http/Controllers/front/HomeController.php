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


class HomeController extends Controller
{
    public function index()
    {
       
        $article=Article::first();
        $sozler=Sozler::get();
        $menus=Menu::get();
        $licenses=License::get();
       $contact=Contact::OrderBy('created_at','DESC')->first();
        $sertificates=Sertifikat::get();
        $ourParts=Ourpart::OrderBy('created_at','ASC')->get();
    	return view('front.homepage',compact('sertificates','ourParts','contact','licenses','menus','sozler','article'));
    }

     public function partners()
    {
        $contact=Contact::first();
        $article=Article::first();
        $menus=Menu::get();
         $ourParts=Ourpart::OrderBy('created_at','ASC')->get();
    	return view('front.partners',compact('ourParts','menus','contact','article'));
    }


     public function product()
    {
        $contact=Contact::first();
        $menus=Menu::get();
        $article=Article::first();
        $categories1=Category::OrderBy('created_at','ASC')->get();
        $data['categories1']=$categories1;
      
    	return view('front.product',$data,compact('menus','contact','article'));
    }


     public function works()
    {
        $contact=Contact::first();
        $menus=Menu::get();
        $article=Article::first();
         $works=Work::where('id','!=',4)->get();
         $work2=Work::where('id','=',4)->first();
    	return view('front.works',compact('menus','works','contact','article','work2'));
    }

 public function workcategory($slug)
    {
        $contact=Contact::first();
        $menus=Menu::get();
        $article=Article::first();
         $works=Work::where('slug',$slug)->first();
         $categories1=Category::OrderBy('created_at','ASC')->get();
         $Items=IslerItem::where('category_id',$works->id)->OrderBy('created_at','DESC')->get();
        return view('front.work_Item',compact('menus','works','Items','contact','article','categories1'));
    }
    


public function category($slug)
{
    $contact=Contact::first();
    $article=Article::first();
    $menus=Menu::get();
    
     $category=Category::where('slug',$slug)->first()?? abort(404,'Boyle bir yazi yok ');
     $Items=PartCategory::where('category_id',$category->id)->OrderBy('created_at','DESC')->get();
     return view('front.category_product',compact('category','Items','menus','contact','article'));
}

public function single($category, $id)
{
    $contact=Contact::first();
    $menus=Menu::get();
    $article=Article::first();
    $category=Category::where('slug',$category)->first()?? abort(404,'Boyle bir yazi yok ');
     $Items=PartCategory::findOrFail($id);
     return view('front.single_page',compact('category','Items','menus','contact','article'));
}


/*public function hed()
{
    $menus=Menu::get();

    return view('front.layouts.header',compact('menus'));
    
}*/

public function trade()
{
   $contact=Contact::first();
        $menus=Menu::get();
        $article=Article::first();
        $categories1=Category::OrderBy('created_at','ASC')->get();
        $data['categories1']=$categories1;
      
        return view('front.trade',$data,compact('menus','contact','article'));
}

  

 public function language($lang)
    {
        switch ($lang) {
            case 'tm':
                session()->put('locale', $lang);
                return redirect()->back();
                break;
            case 'ru':
                session()->put('locale', $lang);
                return redirect()->back();
                break;
            case 'en':
                session()->put('locale', $lang);
                return redirect()->back();
                break;
            default:
                return redirect()->back();/*route('/language/tm');*/
        }
    }

}
