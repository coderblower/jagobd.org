<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\PartyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartyMemberController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data = PartyMember::with(['committee', 'position'])->orderBy('id', 'DESC')->get();
            return response()->json([
                'status' => 'success',
                'data' => $data,
                'message' =>'Get data successfully'
            ], 200); 
    
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ], 500); 
        }
    }
}
