<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;
        $projects = Post::where('sistem', 'like', "%" . $keyword . "%")
            ->orWhere('keterangan', 'like', "%" . $keyword . "%")->paginate(18);
        return view('project', compact('projects'));
    }
}
