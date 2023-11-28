<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;

class TypeController extends Controller
{
    public function types()
    {
        return response()->json([
            'status' => 'success',
            'result' => Type::with('projects')->orderByDesc('id')->paginate(10)
        ]);
    }
}
