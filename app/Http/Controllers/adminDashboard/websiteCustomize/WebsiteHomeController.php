<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteHomeController extends Controller
{
    public function logo(){
        return view("adminDashboard.websiteCustomize.logo");
    }
}
