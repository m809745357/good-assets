<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.favorites');
    }

    public function store(Project $project)
    {
        return $project->favorite();
    }

    public function distory(Project $project)
    {
        return $project->favorites()->delete();
    }
}
