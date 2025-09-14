<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return view('pages.properties');
    }

    public function show(Property $property)
    {
        return view('pages.property-detail', compact('property'));
    }
}
