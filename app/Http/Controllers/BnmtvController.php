<?php

namespace App\Http\Controllers;

use App\Models\Bnmtv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class BnmtvController extends Controller
{
    public function index()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return DB::table('site_settings')->first();
        });

        $bnmtvs = Bnmtv::with(['comments.replies', 'user'])
        ->where('status', 1)
        ->get();

        return view('front-end.pages.tv.index', compact('bnmtvs', 'siteSetting'));
    }

    // public function like(Bnmtv $bnmtv)
    // {
    //     $bnmtv->increment('like');
    //     return response()->json(['success' => true]);
    // }
    
    // public function like(Bnmtv $bnmtv)
    // {
    //     $likedBnmtvs = session('liked_bnmtvs', []);

    //     if (isset($likedBnmtvs[$bnmtv->id])) {
    //         // User has already liked this video, so unlike it
    //         $bnmtv->decrement('like');
    //         unset($likedBnmtvs[$bnmtv->id]);
    //         session(['liked_bnmtvs' => $likedBnmtvs]);
    //         return response()->json(['success' => true, 'liked' => false]);
    //     } else {
    //         // User has not liked this video, so like it
    //         $bnmtv->increment('like');
    //         $likedBnmtvs[$bnmtv->id] = true;
    //         session(['liked_bnmtvs' => $likedBnmtvs]);
    //         return response()->json(['success' => true, 'liked' => true]);
    //     }
    // }

    public function like(Bnmtv $bnmtv)
    {
        // Logic to handle like/unlike functionality
        // Example:
        $liked = false; // Example: Check if user already liked or not

        if ($liked) {
            $bnmtv->decrement('like'); // Example: Decrement likes
        } else {
            $bnmtv->increment('like'); // Example: Increment likes
        }

        return response()->json([
            'success' => true,
            'liked' => !$liked, // Example: Return like status
        ]);
    }


    public function show(Bnmtv $bnmtv)
    {
        return view('front-end.pages.tv.show', compact('bnmtv'));
    }


}
