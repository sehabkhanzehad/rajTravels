<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBanner = Banner::all();
        return view("adminDashboard.websiteCustomize.home.banner",[
            "allBanner" => $allBanner
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
        $request->validate(
            [
                "banner" => "required|image|mimes:jpg,jpeg,png|max:2048",
                // dimensions:max_width=100,max_height=100",
            ],
            [
                "banner.required" => "Please select a banner.",
                "banner.image" => "Please selact a jpg, jpeg or png banner.",
                "banner.mimes" => "Please selact a jpg, jpeg or png banner.",
                "banner.max" => "banner size must be less than 2MB.",
            ]
        );


        $totalBanner = Banner::count();

        if ($totalBanner == 5) {
            return back()->with("warning", "Maximum 5 banner can be added.");
        } else {

            $banner = $request->file("banner");
            $bannerName = uniqid() . "." . $banner->getClientOriginalExtension();

            $banner->move(public_path('uploads/dashboard/website/home/banner'), $bannerName);

            Banner::insert([
                "banner" => $bannerName,
            ]);

            return back()->with("upload", "Banner uploaded successfully.");
        }
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
    public function update(Request $request, $id)
    {
        if (Banner::where("id", $id)->first()->status == "active") {
            return back()->with("warning", "This banner is already active.");
        } else {
            Banner::where("status", "active")->update(["status" => "inactive"]);
            Banner::where("id", $id)->update(["status" => "active"]);
            return back()->with("success", "Banner actived successfully.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner =Banner::where("id", $id)->first();
        if ($banner->status == "active") {
            return back()->with("warning", "Active banner can't be deleted.");
        } else {
            Banner::where("id", $id)->delete();
            unlink(public_path("uploads/dashboard/website/home/banner/" . $banner->banner));
            return back()->with("success", "Banner deleted successfully.");
        }
    }

}
