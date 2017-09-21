<?php

namespace App\Http\Controllers;

use App\Models\Tiding;
use Illuminate\Http\Request;

class TidingController extends Controller
{
    public function index()
    {
        $tidings = Tiding::orderBy('order', 'desc')->get();
        return view('tidings.index', compact('tidings'));
    }

    public function show(Tiding $tiding)
    {
        return view('tidings.show', compact('tiding'));
    }
}
