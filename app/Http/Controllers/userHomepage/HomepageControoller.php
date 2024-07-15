<?php

namespace App\Http\Controllers\userHomepage;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class HomepageControoller extends Controller
{
    public function index()
    {
        $logo = DB::table("website_logos")->where("status", "active")->first();
        return view("userHomepage.homepage", [
            "logo"=> $logo
        ]);
    }


}

