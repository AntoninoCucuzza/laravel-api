<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;


class TechnologyController extends Controller
{
    public function technologies()
    {
        return response()->json([
            'status' => 'success',
            'result' => Technology::with('projects')->orderByDesc('id')->paginate(10)
        ]);
    }
}
