<?php

namespace App\Http\Controllers\userHomepage;

use App\Http\Controllers\Controller;
use App\Models\AboutCard;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\FeaturesOne;
use App\Models\Service;
use App\Models\Stat;
use App\Models\StatBackground;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageControoller extends Controller
{
    public function index()
    {
        $logo = DB::table("website_logos")->where("status", "active")->first();
        $banner = Banner::where("status", "active")->first();
        $aboutUs = AboutUs::first();
        $aboutCard = AboutCard::all();
        $statBackgroundName = StatBackground::first()->background;
        $stats = Stat::all();
        $services = Service::all();
        $feature1 = FeaturesOne::first();

        return view("userHomepage.homepage", [
            "logo" => $logo,
            "banner" => $banner,
            "aboutUs" => $aboutUs,
            "aboutCard"=> $aboutCard,
            "statBackgroundName" => $statBackgroundName,
            "stats" => $stats,
            "services" => $services,
            "feature1" => $feature1,
        ]);
    }
}
