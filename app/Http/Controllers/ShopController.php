<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class ShopController extends BaseController
{
    public function product($slug)
    {

        $singleproduct = Product::where('slug',$slug)->get();
        $mightalsolike = Product::where([['status',true],['visibility',true]])->inRandomOrder()->take(10)->get();
        return view('product')->with(compact('singleproduct','mightalsolike'));

    }

    public function brandshop($slug)
    {

        $brandid = Brand::where('slug',$slug)->pluck('id')->first();
        $collectionproducts = Product::where([['brandid',$brandid],['status',true],['visibility',true]])->get();
        return view('brandstore')->with(compact('collectionproducts'));

    }
}
