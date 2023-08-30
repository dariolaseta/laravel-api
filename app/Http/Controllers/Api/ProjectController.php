<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with("technologies", "type", "status")->paginate(10);

        return response()->json([
            "success" => true,
            "result" => $projects,
        ]);
    }
}
