<?php

namespace App\Http\Controllers\adminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view("adminDashboard.index");
    }
}
