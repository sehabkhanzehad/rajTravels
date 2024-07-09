<?php

namespace App\Http\Controllers\userHomepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageControoller extends Controller
{
    public function index()
    {
        return view("userHomepage.homepage");
    }

   
}

