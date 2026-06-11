<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use TypeError;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('projects.store', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->nome = $data['nome'];
        $newProject->cliente = $data['cliente'];
        $newProject->type_id = $data['type_id'];
        $newProject->periodo = $data['periodo'];
        $newProject->riassunto = $data['riassunto'];

        $newProject->save();

        return redirect()->route('projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        $types = Type::all();

        return view('projects.update', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->nome = $data['nome'];
        $project->cliente = $data['cliente'];
        $project->type_id = $data['type_id'];
        $project->periodo = $data['periodo'];
        $project->riassunto = $data['riassunto'];

        $project->update();

        return redirect()->route('projects.show', $project->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
