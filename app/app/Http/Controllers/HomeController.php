<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestProperties = $this->getBestProperties();

        return view('pages.home', compact('bestProperties'));
    }

    private function getBestProperties()
    {
        return Property::query()
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();
    }
}
