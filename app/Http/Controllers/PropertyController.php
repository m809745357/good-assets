<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::orderBy('order', 'desc')->get();
        return view('properties.index', compact('properties'));
    }
}
