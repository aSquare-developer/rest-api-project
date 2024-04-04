<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProjectResource;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function show(Request $request, Project $project)
    {
        return new ProjectResource($project);
    }
    
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();

        $project = Auth::user()->projects()->create($validated);

        return new ProjectResource($project);
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validated = $request->validated();

        $project->update($validated);

        return new ProjectResource($project);
    }


}
