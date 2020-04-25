<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }




    public function index()
    {
        return view('projects.index',[
            'projects'=>project::latest()->paginate()
        ]);
    }

    public function show(project $projecto)
    {
        return view('projects.show',[
            'project'=>$projecto   //USING MODEL ROUTING BULDING
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }
    public function store(SaveProjectRequest $Request)
    {
       
        Project::create($Request->validated());

        return redirect()->route('projects.index');
    }
   
    public function edit(Project$project)
    {
        return view('projects.edit',[
            'project'=>$project
        ]);
    }

    public function update(Project  $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show',$project);
    }

    public function destroy(Project  $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
