<?php

namespace App\Http\Controllers\adminDashboard\websiteCustomize\service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view("adminDashboard.websiteCustomize.service.service", [
            "services" => $services,
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
            // "icon" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        if ($request->icon == "") {
            Service::create([
                "title" => $request->title,
                "description" => $request->description
            ]);
        } else {
            Service::create([
                "icon" => $request->icon,
                "title" => $request->title,
                "description" => $request->description,
            ]);
        }

        return back()->with("added", "Service Added Successfully.");
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
        Service::where("id", $id)->delete();
        return back()->with("deleted","Service Deleted Successfully.");
    }
}
