<?php

namespace App\Http\Controllers\adminDashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSignInController extends Controller
{
    public function signin()
    {
        return view("adminDashboard.signin");
    } // End Method

    public function signinSubmit(Request $request)
    {
        // Custom messages
        $messages = [
            'email.required' => 'Please enter username or email.',
            'password.required' => 'Please enter password.',
            'password.min' => 'Please enter password at least 5 characters.',
        ];

        // Validation with custom messages
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5',
        ], $messages);

        // Retrieve input data
        $email = $request->input("email");
        $password = $request->input("password");

        // Check if username or email exists
        if (Admin::where("email", $email)->exists() || Admin::where("username", $email)->exists()) {
            // Check if username or email and password is correct
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]) || Auth::guard('admin')->attempt(['username' => $email, 'password' => $password])) {
                return redirect()->route("admin.dashboard");
            } else {
                return back()->with("Wrong", "Please enter valid password.");
            }
        } else {
            return back()->with("Invalid", "Please enter valid username or email.");
        }
    } // End Method
}
