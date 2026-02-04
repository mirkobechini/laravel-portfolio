<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return view("technologies.index", compact("technologies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("technologies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newTechnology = new Technology();
        $newTechnology->name = $data["name"];
        $newTechnology->logo = $data["logo"];
        $newTechnology->description = $data["description"];
        $newTechnology->save();
        return redirect()->route("technologies.show", $newTechnology->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view("technologies.show", compact("technology"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        return view("technologies.edit", compact("technology"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();
        $technology->name = $data["name"];
        $technology->logo = $data["logo"];
        $technology->description = $data["description"];
        $technology->update();
        return redirect()->route("technologies.show", $technology->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        DB::table('project_technology')
            ->where('technology_id', $technology->id)
            ->delete();
        $technology->delete();
        return redirect()->route("technologies.index");
    }
}
