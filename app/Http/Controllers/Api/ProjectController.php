<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects()
    {
        return response()->json([
            'success' => true,
            'result' => Project::with('type', 'technologies')->orderByDesc('id')->paginate(6)
        ]);
    }

    public function latest()
    {
        return response()->json([
            'status' => 'success',
            'projects' => Project::with(['type', 'technologies'])->orderByDesc('id')->take(4)->get()
        ]);
    }

    public function show($slug)
    {
        $project = Project::with(['type', 'technologies'])->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'project' => 'Ops! Project not Found.'
            ]);
        }
    }
}
