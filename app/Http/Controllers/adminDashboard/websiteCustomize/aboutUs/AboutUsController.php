<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\aboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view("adminDashboard.websiteCustomize.aboutUs.aboutUs",[
            "aboutUs" => $aboutUs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
        ]);

        $totalRecord = AboutUs::count();
        if ($totalRecord == 0) {
            AboutUs::create([
                "title" => $request->title,
                "description" => $request->description
            ]);
        } else {
            AboutUs::where("id", "1")->update([
                "title" => $request->title,
                "description" => $request->description

            ]);
        }
        return back()->with("success", "About Us Updated Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
