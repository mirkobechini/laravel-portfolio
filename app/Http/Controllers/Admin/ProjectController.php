<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $newProject = new Project();
        $newProject->title = $data["title"];
        $newProject->customer = $data["customer"];
        $newProject->cover_image = $data["cover_image"];
        $newProject->description = $data["description"];
        $newProject->type_id = $data["type_id"];
        $newProject->save();
        if ($request->has("technologies")) {

            $newProject->technologies()->sync($data['technologies']);
        } else {
            $newProject->technologies()->detach();
        }
        return redirect()->route("projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.edit", compact("project", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->title = $data["title"];
        $project->customer = $data["customer"];
        $project->cover_image = $data["cover_image"];
        $project->description = $data["description"];
        $project->type_id = $data["type_id"];
        $project->update();
        if ($request->has("technologies")) {
            $project->technologies()->sync($data['technologies']);
        } else {
            $project->technologies()->detach();
        }
        return redirect()->route("projects.show", $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("projects.index");
    }
}
