<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use View;

class BaseController extends Controller
{
    public function __construct()
    {

        $companyinfo = Company::get();
        View::share('companyinfo', $companyinfo);

    }
}
