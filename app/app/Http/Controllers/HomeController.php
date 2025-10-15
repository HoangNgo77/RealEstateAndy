<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestProperties = $this->getBestProperties();
        $luxuryProperties = $this->getLuxuryProperties();

        return view('pages.home', compact('bestProperties', 'luxuryProperties'));
    }

    private function getBestProperties()
    {
        return Property::query()
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();
    }

    private function getLuxuryProperties()
    {
        return Property::query()
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();
    }
}
