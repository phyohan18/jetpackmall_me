<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Item;

class FrontendController extends Controller
{
    public function index(){

    	$categories = Category::all();

    	$topitems = Item::all()->random(3);
    	$latestitems = Item::latest()->take(3)->get(); //take is equal to limit

    	$discountitems = Item::whereNotNull('discount')->take(3)->get();
    	$discountitems = Item::where('discount','0')->take(3)->get();



    	return view('frontend.index',compact('categories','topitems','latestitems','discountitems'));
    }

    // public function promotion(){

    // 	$discountitems = Item::whereNotNull('discount')->paginate(3);
    // 	$count   = Item::whereNotNull('')
    // }


    // public function brand($id){
    // 	$branditems =
    // }
}
