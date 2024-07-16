<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogoController extends Controller
{
    public function logo()
    {
        $allLogo = DB::table("website_logos")->get();
        return view(
            "adminDashboard.websiteCustomize.home.logo",
            [
                "allLogo" => $allLogo
            ]
        );
    } // End Method

    public function logoSubmit(Request $request)
    {
        $request->validate(
            [
                "logo" => "required|image|mimes:jpg,jpeg,png|max:1024",
                // dimensions:max_width=100,max_height=100",
            ],
            [
                "logo.required" => "Please select a logo.",
                "logo.image" => "Please selact a jpg, jpeg or png logo.",
                "logo.mimes" => "Please selact a jpg, jpeg or png logo.",
                "logo.max" => "Logo size must be less than 1MB.",
            ]
        );

        $totalLogo = DB::table("website_logos")->count();
        if ($totalLogo == 3) {
            return back()->with("warning", "Maximum 3 logo can be added.");
        } else {

            $logo = $request->file("logo");
            $logoName = uniqid() . "." . $logo->getClientOriginalExtension();

            $logo->move(public_path('uploads/dashboard/website/home/logo'), $logoName);

            DB::table("website_logos")->insert([
                "logo" => $logoName,
            ]);

            return back()->with("upload", "Logo uploaded successfully.");
        }
    } // End Method

    public function logoStatus($id)
    {
        if (DB::table("website_logos")->where("id", $id)->first()->status == "active") {
            return back()->with("warning", "This logo is already active.");
        } else {
            DB::table("website_logos")->where("status", "active")->update(["status" => "inactive"]);
            DB::table("website_logos")->where("id", $id)->update(["status" => "active"]);
            return back()->with("success", "Logo actived successfully.");
        }
    } // End Method

    public function logoDelete($id)
    {
        $logo = DB::table("website_logos")->where("id", $id)->first();
        if ($logo->status == "active") {
            return back()->with("warning", "Active logo can't be deleted.");
        } else {
            DB::table("website_logos")->where("id", $id)->delete();
            return back()->with("success", "Logo deleted successfully.");
        }
    }
}
