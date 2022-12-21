<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurServices;
use App\Models\ProjectServices;

class ServicesController extends BaseController
{
    public function services($slug)
    {

        $collectionservice = OurServices::where('slug',$slug)->get();
        foreach($collectionservice as $service){
            $relatedprojects = ProjectServices::where('servicesid',$service->id)->get();
        }
        return view('project')->with(compact('collectionservice','relatedprojects'));

    }
}
