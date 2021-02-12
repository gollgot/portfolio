<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Project;

class HomeController extends Controller
{
    public function show() {
        $projects = Project::where('online', 1)->orderBy('creationDate', 'DESC')->get();
        $languages = Information::where('name', 'languages')->first();
        $frameworks = Information::where('name', 'frameworks')->first();
        $tools = Information::where('name', 'tools')->first();

        return view('home/show', [
            'projects' => $projects,
            'languages' => $languages,
            'frameworks' => $frameworks,
            'tools' => $tools
        ]);
    }
}
