<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        $projects = Project::where('online', 1)->orderBy('creationDate', 'DESC')->get();

        return view('home/show', [
            'projects' => $projects
        ]);
    }
}
