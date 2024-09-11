<?php

namespace App\Http\Controllers\APIs;


use App\Http\Controllers\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use DB;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{
    public function imageForGallery(Request $request)
    {
        try {
            $data = Gallery::orderBy('id', 'DESC')->get();
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
