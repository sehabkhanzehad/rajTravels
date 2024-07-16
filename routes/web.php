<?php

use App\Http\Controllers\adminDashboard\admin\AdminDashboardController;
use App\Http\Controllers\adminDashboard\admin\AdminProfileEditController;
use App\Http\Controllers\adminDashboard\admin\AdminSignInController;
use App\Http\Controllers\adminDashboard\admin\AdminSignOutController;
use App\Http\Controllers\adminDashboard\websiteCustomize\home\BannerController;
use App\Http\Controllers\adminDashboard\websiteCustomize\home\LogoController;
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
        // Admin dashboard
        Route::get("/dashboard", [AdminDashboardController::class, "index"])->name("admin.dashboard");

        // Admin sign out
        Route::get("/signout", [AdminSignOutController::class, "signout"])->name("admin.signout");

        // Admin profile edit
        Route::get("/profile/edit", [AdminProfileEditController::class, "edit"])->name("admin.profile.edit");
        Route::post("/profile/edit", [AdminProfileEditController::class, "editSubmit"])->name("admin.profile.editSubmit");


        // Admin password update
        Route::get('/password/update/{id}/{password}', function (Request $request) {
            $id = $request->route('id');
            $password = $request->route('password');
            $bcryptPassword = bcrypt($password);

            Admin::where("id", $id)->update([
                "password" => $bcryptPassword,
            ]);
            return "Your 'Password: " . $password . "' Update Success";
        });
    });



    // Route::get('/users', function () {
    //     // URL: /admin/users
    // });

    // Route::get('/settings', function () {
    //     // URL: /admin/settings
    // });


});

// Website customize
Route::middleware(["admin"])->group(function () {
    Route::prefix("website/customize")->group(function () {
        Route::get("/logo", [LogoController::class, "logo"])->name("websiteCustomize.logo");
        Route::post("/logo", [LogoController::class, "logoSubmit"])->name("websiteCustomize.logo.submit");
        Route::get("/logo/status/{id}", [LogoController::class,"logoStatus"])->name("websiteCustomize.logo.status");
        Route::get("/logo/delete/{id}", [LogoController::class,"logoDelete"])->name("websiteCustomize.logo.delete");

        // use resource controller
        Route::resource('/banners', BannerController::class);
        // Route::get('banners', [BannerController::class, 'index'])->name('banners.index');



    });
});



Route::domain('accounts.msrajtravels.com')->group(function () {
    Route::get('/', function () {
        return 'This is the admin homepage';
    });

    Route::get('/users', function () {
        return 'List of users';
    });
});

// Route::domain('blog.example.com')->group(function () {
//     Route::get('/', function () {
//         return 'This is the blog homepage';
//     });

//     Route::get('/posts', function () {
//         return 'List of posts';
//     });
// });
