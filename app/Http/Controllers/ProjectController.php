<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ProjectController extends Controller
{
    public function show($lang, $slug) {
        $project = Project::where('online', 1)->where('slug', $slug)->firstOrFail()->translate($lang);

        return view('projects/show', [
            'project' => $project
        ]);
    }
}
