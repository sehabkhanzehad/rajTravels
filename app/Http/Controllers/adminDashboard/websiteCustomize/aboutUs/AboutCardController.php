<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\aboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutCard;
use Illuminate\Http\Request;

class AboutCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutCards = AboutCard::all();
        return view("adminDashboard.websiteCustomize.aboutUs.card",[
            "aboutCards"=> $aboutCards,
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
            "icon" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        if ($request->icon == "") {
            AboutCard::create([
                "title" => $request->title,
                "description" => $request->description
            ]);
        } else {
            AboutCard::create([
                "icon" => $request->icon,
                "title" => $request->title,
                "description" => $request->description,
            ]);
        }



        return back()->with("added", "Card Added Successfully.");
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
        AboutCard::where("id", $id)->delete();
        return back()->with("deleted","Card Deleted Successfully.");
    }
}
