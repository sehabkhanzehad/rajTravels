<?php

namespace App\Http\Controllers\adminDashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileEditController extends Controller
{
    public function edit()
    {
        return view("adminDashboard.profile.edit");
    }

    public function editSubmit(Request $request)
    {
        $request->validate(
            [
                "picture" => "required|image|mimes:jpg,jpeg,png|max:1024",
                // dimensions:max_width=100,max_height=100",
            ],
            [
                "picture.required" => "Please select a picture.",
                "picture.image" => "Please selact a jpg, jpeg or png picture.",
                "picture.mimes" => "Please selact a jpg, jpeg or png picture.",
                "picture.max" => "Picture size must be less than 1MB.",
            ]
        );

        // if(Auth::user()->image != null){
        //     $current = public_path('uploads/users/'. Auth::user()->image);
        //     unlink($current);
        //    }
        //    $image = $requrest->image;
        //    $extension = $image->extension();
        //    $fileName = Auth::id().".".$extension;
        //    Image::make($image)->save(public_path("uploads/users/".$fileName));
        //    User::find(Auth::id())->update([
        //        'name' => $requrest->name,
        //        'image' => $fileName,
        //     ]);
        //     return back()->with("done", "Profile Updated!");

        if (Auth::guard("admin")->user()->picture != null) {
            unlink(public_path('uploads/dashboard/admin/profile/' . Auth::guard("admin")->user()->picture));

            $picture = $request->file("picture");
            $pictureName = Auth::guard("admin")->user()->username . "." . $picture->extension();

            $picture->move(public_path('uploads/dashboard/admin/profile'), $pictureName);

            Admin::where("id", Auth::guard("admin")->user()->id)->update([
                "picture" => $pictureName,
            ]);

            return back()->with("success", "Updated successfully.");
        } else {
            $picture = $request->file("picture");
            $pictureName = Auth::guard("admin")->user()->username . "." . $picture->extension();

            $picture->move(public_path('uploads/dashboard/admin/profile'), $pictureName);

            return back()->with("success", "Updated successfully.");
        }
    }
}
