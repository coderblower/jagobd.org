<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class YouthParliamentController extends Controller
{
    public function index()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        return view('front-end.pages.academy.youth-parliament', compact('siteSetting'));
    }

    public function show()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        // Fetch the initiative by ID
        // $initiative = YouthParliament::findOrFail($id);

        // Return the view with the initiative details
        return view('front-end.pages.academy.initiative-details', compact('siteSetting'));
    }
}
