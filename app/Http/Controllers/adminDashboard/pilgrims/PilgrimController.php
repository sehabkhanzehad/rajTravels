<?php

namespace App\Http\Controllers\adminDashboard\pilgrims;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function index(){
        return view("adminDashboard.pilgrims.pilgrims");
    }
}
