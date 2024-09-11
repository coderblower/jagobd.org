<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InstituteForFutureLeadersController extends Controller
{
    public function index()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        // Fetch courses from the database
        $courses = Course::all(); 

        return view('front-end.pages.academy.institute-for-future-leaders', compact('siteSetting', 'courses'));
    }

}
