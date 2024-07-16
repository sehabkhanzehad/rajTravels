<?php

namespace App\Http\Controllers\adminDashboard\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSignOutController extends Controller
{
    public function signout()
    {
        Auth::guard("admin")->logout();
        return redirect()->route("admin.signin");
    } // End of signout
}
