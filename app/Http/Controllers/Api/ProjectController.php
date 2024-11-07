<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::get();

        return response()->json([
            'success' => true,
            'code' => 200, 
            'message' => 'Ok',
            'data' => [
                'projects' => $projects,
            ]
        ]);
    }
}
