<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\User;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $favorites = auth()->user()->favorites;
        return view('user.favorites', compact('favorites'));
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
