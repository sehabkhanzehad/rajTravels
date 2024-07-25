<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\stats;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use App\Models\StatBackground;
use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = Stat::all();
        return view(
            "adminDashboard.websiteCustomize.stats.stat",
            [
                "stats" => $stats,
            ]
        );
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
            "topic" => "required",
            "data" => "required",
        ]);

        Stat::insert([
            "topic" => $request->topic,
            "data" => $request->data,
        ]);
        return back()->with("success", "Stat Added Successfully.");
    }

    public function background(Request $request)
    {
        $request->validate(
            [
                "background" => "required|image|mimes:jpg,jpeg,png|max:2048",
                // dimensions:max_width=100,max_height=100",
            ],
            [
                "background.required" => "Please select a background.",
                "background.image" => "Please selact a jpg, jpeg or png background.",
                "background.mimes" => "Please selact a jpg, jpeg or png background.",
                "background.max" => "Background size must be less than 2MB.",
            ]
        );


        unlink(public_path('uploads/dashboard/website/stats/background/' . StatBackground::first()->background));
        StatBackground::first()->delete();

        $background = $request->file("background");
        $backgroundName = uniqid() . "." . $background->getClientOriginalExtension();

        $background->move(public_path('uploads/dashboard/website/stats/background'), $backgroundName);

        StatBackground::insert([
            "background" => $backgroundName,
        ]);

        return back()->with("Updated", "Background Updated successfully.");
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
        Stat::where("id", $id)->delete();
            return back()->with("success", "Stat deleted successfully.");
    }
}
