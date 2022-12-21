<?php

namespace App\Http\Controllers;

use App\Models\OurServices as ModelsOurServices;
use Illuminate\Http\Request;
use App\Models\OurServices;
use App\Models\ProjectReviews;
use App\Models\Product;
use App\Models\Team;
use App\Models\ProjectServices;
use App\Models\Slider;
use Dymantic\InstagramFeed\Profile;

class HomeController extends BaseController
{
    public function home()
    {
        $collecionourserivce = OurServices::take(6)->get();
        $customerReviews = ProjectReviews::latest()->take(3)->get();
        $latestProducts = Product::latest()->take(10)->get();
        $teammembers = Team::take(6)->get();
        $latestprojects = ProjectServices::latest()->take(5)->get();
        $collectionslider = Slider::latest()->get();
        $instagram_feed = Profile::where('username','futureartwebsite')->first()->feed(12);

        return view('welcome')->with(compact('collecionourserivce',
                                            'customerReviews',
                                            'latestProducts',
                                            'teammembers',
                                            'latestprojects',
                                            'collectionslider',
                                            'instagram_feed'));
    }
}
