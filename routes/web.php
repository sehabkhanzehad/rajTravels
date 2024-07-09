<?php

use App\Http\Controllers\adminDashboard\AdminDashboardController;
use App\Http\Controllers\adminDashboard\AdminProfileEditController;
use App\Http\Controllers\adminDashboard\AdminSignInController;
use App\Http\Controllers\adminDashboard\AdminSignOutController;
use App\Http\Controllers\userHomepage\HomepageControoller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//User Homepage
Route::get("/", [HomepageControoller::class, "index"])->name("user.homepage");

// Temp


// Admin Pages
Route::prefix('admin')->group(function () {

    Route::get("/signin", [AdminSignInController::class, "signin"])->name("admin.signin");
    Route::post("/signin", [AdminSignInController::class, "signinSubmit"])->name("admin.signinSubmit");

    Route::middleware(["admin"])->group(function () {

        Route::get("/dashboard", [AdminDashboardController::class, "index"])->name("admin.dashboard");
        Route::get("/profile/edit", [AdminProfileEditController::class, "edit"])->name("admin.profile.edit");
        Route::post("/profile/edit", [AdminProfileEditController::class, "editSubmit"])->name("admin.profile.editSubmit");






        // Update admin password
        Route::get('/password/update/{id}/{password}', function (Request $request) {
            $id = $request->route('id');
            $password = $request->route('password');
            $bcryptPassword = bcrypt($password);

            Admin::where("id", $id)->update([
                "password" => $bcryptPassword,
            ]);
            return "Your 'Password: " . $password . "' Update Success";
        });

        Route::get("/signout", [AdminSignOutController::class, "signout"])->name("admin.signout");
    });



    // Route::get('/users', function () {
    //     // URL: /admin/users
    // });

    // Route::get('/settings', function () {
    //     // URL: /admin/settings
    // });


});
