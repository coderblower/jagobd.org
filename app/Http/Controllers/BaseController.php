<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result,$message){
        $response=[
            'success'=>true,
            'data'   =>$result,
            'message'=>$message
        ];
        return response()->json($response,200);
    }
    /**
     * return error message
     * @peram String $error
     */
    public function sendError($error,$errorMassege,$code=404){
        $response=[
            'success'=>false,
            'message'=>$error
        ];

        if(!empty($errorMessage)){
            $response['data']=$errorMassege;
        }
        return response()->json($response,$code);

    }
}