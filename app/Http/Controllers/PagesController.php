<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectReviews;
use App\Models\Brand;
use App\Models\OurServices;

class PagesController extends BaseController
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function projects()
    {
        return view('project');
    }

    public function services()
    {

        $collectionourservices = OurServices::get();
        $collectionreviews = ProjectReviews::latest()->take(6)->get();
        $collectionbrand = Brand::latest()->take(10)->get();
        return view('services')->with(compact('collectionreviews','collectionbrand','collectionourservices'));

    }
}
