<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\features;

use App\Http\Controllers\Controller;
use App\Models\FeaturesOne;
use Illuminate\Http\Request;

class FeaturesOneConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature1 = FeaturesOne::first();
        return view("adminDashboard.websiteCustomize.features.feature1", [
            "feature1" => $feature1,
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
    public function titleDescription(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
        ]);

        FeaturesOne::first()->update([
            "title" => $request->title,
            "description" => $request->description,
        ]);

        return back()->with("success", "Updated Successfully.");
    }
    public function image1(Request $request)
    {
        $request->validate(
            [
                "image1" => "required|image|mimes:jpg,jpeg,png|max:2048",
                // dimensions:max_width=100,max_height=100",
            ],
            [
                "image1.required" => "Please select a image.",
                "image1.image" => "Please selact a jpg, jpeg or png image.",
                "image1.mimes" => "Please selact a jpg, jpeg or png image.",
                "image1.max" => "image size must be less than 2MB.",
            ]
        );


        unlink(public_path('uploads/dashboard/website/features/' . FeaturesOne::first()->image1));

        $image1 = $request->file("image1");
        $image1Name = uniqid() . "image1" . "." . $image1->getClientOriginalExtension();

        $image1->move(public_path('uploads/dashboard/website/features/'), $image1Name);

        FeaturesOne::first()->update([
            "image1" => $image1Name,
        ]);

        return back()->with("image1Updated", "Updated Successfully.");
    }

    public function image2(Request $request)
    {
        $request->validate(
            [
                "image2" => "required|image|mimes:jpg,jpeg,png|max:2048",
                // dimensions:max_width=100,max_height=100",
            ],
            [
                "image2.required" => "Please select a image.",
                "image2.image" => "Please selact a jpg, jpeg or png image.",
                "image2.mimes" => "Please selact a jpg, jpeg or png image.",
                "image2.max" => "image size must be less than 2MB.",
            ]
        );


        unlink(public_path('uploads/dashboard/website/features/' . FeaturesOne::first()->image2));

        $image2 = $request->file("image2");
        $image2Name = uniqid() . "image2" . "." . $image2->getClientOriginalExtension();

        $image2->move(public_path('uploads/dashboard/website/features/'), $image2Name);

        FeaturesOne::first()->update([
            "image2" => $image2Name,
        ]);

        return back()->with("image2Updated", "Updated Successfully.");
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
