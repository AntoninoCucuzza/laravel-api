<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\Type;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects()
    {
        return response()->json([
            'success' => true,
            'result' => Project::with('type', 'technologies')->orderByDesc('id')->paginate(10)
        ]);
    }
}
