<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CenterForPoliticalController extends Controller
{
    public function index()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        return view('front-end.pages.academy.center-for-political', compact('siteSetting'));
    }
}
