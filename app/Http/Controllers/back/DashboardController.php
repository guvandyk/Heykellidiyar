<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourpart;
use App\Models\PartCategory;
use App\Models\IslerItem;
use App\Models\License;

class DashboardController extends Controller
{
    public function index()
    {
    	$ourpart=Ourpart::all()->count();
    	$part=PartCategory::all()->count();
    	$item=IslerItem::all()->count();
    	$license=License::all()->count();
    	return view('back.dashboard',compact('ourpart','part','item','license'));
    }
}
