<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $query = Property::query()->with(['amenities']);

        // Sorting
        $sortBy = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');
        $query->orderBy($sortBy, $sortOrder);

        // Paginate results
        $properties = $query->paginate(12)->withQueryString();

        return view('pages.properties', compact('properties'));
    }

    public function show(Property $property)
    {
        return view('pages.property-detail', compact('property'));
    }
}
