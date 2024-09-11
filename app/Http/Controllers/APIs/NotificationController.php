<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Token;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Validator;

class NotificationController extends BaseController
{


     public function addToken(Request $request)
    {
        $user = Auth::user();

        // Validate the request
        $validator = Validator::make($request->all(), [
            'token' => 'required|string',
            'type' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation error', $validator->errors());
        }

        // Retrieve the member ID
        $memberId = $user->member_id;

        // Attempt to update or insert the token
        $token = Token::updateOrInsert(
            ['member_id' => $memberId],
            [
                'token_type' => $request->type,
                'token' => $request->token,
            ]
        );

        if ($token) {
            return $this->sendResponse($user->name, 'Add Token successfully');
        } else {
            return $this->sendError('Task Failed', ['message' => 'Unable to add token']);
        }
    }

/*
    public function addToken(Request $request){
        
        $user=Auth::user();
        $validator = Validator::make($request->all(),[
            'token'            =>'required|string',
            'type'            =>'required|string|max:255'
        ]);

        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }
       
        $memberId= $user->member_id;
        $current_timestamp = Carbon::now()->timestamp;
        $token=Token::updateOrInsert(
            ['member_id' => $memberId],
            [
            'member_id'=>$memberId,
            'token_type'=>$request->type,
            'token'=>$request->token,
        ]);
       if($token){
        return $this->sendResponse($user->name,'Add Token successfully');
       }else{
        return $this->sendError('Task Failed', $validator->errors());
       }
    }*/


    public function pushNotification($recomNumber)
    {

       // $recomNumber='01627013936';
        //$recomNumber='01511223344';
         $user=Auth::user();
        $memberId = DB::table('users')->select('member_id')->where('phone',$recomNumber)->get()->first();
        $token=DB::table('tokens')->select('token')->where('member_id',$memberId->member_id)->get()->first();
        $data=[];
        $data['message']= "You have member request of ".$user->name_en.". Please acknowladge.";
        
        $tokens = [];
       $tokens[] = $token->token;
        $response = $this->sendFirebasePush($tokens,$data);
        // if($response){
        //     return $this->sendResponse($user->name,'Notification successful');
        //    }else{
        //     return $this->sendError('Task Failed', '');
        //    }
    }
    public function sendFirebasePush($tokens, $data)
    {

        $serverKey = 'AAAAp1M0aHI:APA91bFhbmAXZwoK0u_1PhNT3-B8rQ1G2EykEC2C7CrbaLJLmvGwuLrd1_0dZPdN7hpFHr1vzC6pGIv4aatHsXgsGJeAinA_tpcXSoiLqAbO4OYiCI0NuhOZcJ2xfejuoXQyOjqiSr5T';
        
        // prep the bundle
        $msg = array
        (
            'message'   => $data['message'],
        );

        $notifyData = [
                "body" => $data['message'],
                "title"=> "Member Request"
        ];

        $registrationIds = $tokens;
        
        if(count($tokens) > 1){
            $fields = array
            (
                'registration_ids' => $registrationIds, //  for  multiple users
                'notification'  => $notifyData,
                'data'=> $msg,
                'priority'=> 'high'
            );
        }
        else{
            
            $fields = array
            (
                'to' => $registrationIds[0], //  for  only one users
                'notification'  => $notifyData,
                'data'=> $msg,
                'priority'=> 'high'
            );
        }
            
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key='. $serverKey;

        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        // curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        if ($result === FALSE) 
        {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close( $ch );
        return $result;
    }

}
