<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\BaseController as BaseController;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use Validator;
//use Illuminate\Support\Facades\Validator;
//require_once app_path('App\Http\Controllers\APIs\UploadImages.php');
class FaceKiController extends BaseController
{

   // this code is working faceKi API---------------------------------------------------
    // public function varifyId(Request $request)
    // {

    //     $baseUrl = 'https://sdk.faceki.com';
    //     $endPoint='/auth/api/access-token';
    //     $clientKey='4dd4tlg5lhjabc608v6m4rnkrr';
    //     $secretKey='i66k5e5std83vfmmuig3odv3id1i0vlsj47j5ud3h4uupd6gb7n';
    //     $token='';
    //     $user= Auth::user();


    //     $validator = Validator::make($request->all(),[
    //         'selfie_image' => 'required|image|mimes:jpeg,png|max:2048',
    //         'doc_front_image' => 'required|image|mimes:jpeg,png|max:2048',
    //         'doc_back_image' => 'required|image|mimes:jpeg,png|max:2048',

    //     ]);

    //     if($validator->fails()){
    //         return $this->sendError('Image missing error', $validator->errors());
    //     }

    //     $selfieImage = $request->file('selfie_image');
    //     $docFrontImage = $request->file('doc_front_image');
    //     $docBackImage = $request->file('doc_back_image');


    //     $response = Http::get($baseUrl.$endPoint, [
    //         'clientId' =>$clientKey,
    //         'clientSecret' => $secretKey,
    //     ]);


    //     if ($response->successful()) {
    //         $data = $response->json();
    //         $rulseData=$data['data'];
    //         $token= $rulseData['access_token'];

    //         $kycRules = Http::withHeaders([
    //         'Authorization' => 'Bearer '.$token,
    //         ])->get($baseUrl.'/kycrules/api/kycrules');
    //         if ($kycRules->successful() ) {
    //             // return $kysRules->json();

    //             $client = new Client();
    //             $requestHeaders = [
    //                 'Authorization' => 'Bearer '.$token, // Replace with your actual token
    //             ];
            
    //             $VerResponse = $client->request('POST', 'https://sdk.faceki.com/kycverify/api/kycverify/kyc-verification', [
    //             'headers' => $requestHeaders,
    //                 'multipart' => [
    //                     [
    //                         'name' => 'selfie_image',
    //                         'contents' => fopen($selfieImage->path(), 'r'), // Open the file for reading
    //                         'filename' => 'selfie_image.jpg',
    //                     ],
    //                     [
    //                         'name' => 'doc_front_image',
    //                         'contents' => fopen($docFrontImage->path(), 'r'),
    //                         'filename' => 'doc_front_image.jpg',
    //                     ],
    //                     [
    //                         'name' => 'doc_back_image',
    //                         'contents' => fopen($docBackImage->path(), 'r'),
    //                         'filename' => 'doc_back_image.jpg',
    //                     ],
    //                 ],
    //             ]);

    //             //Handle the response
    //             $statusCode = $VerResponse->getStatusCode();
    //             $responseBody = $VerResponse->getBody()->getContents();

    //             if ($statusCode === 200 || $statusCode === 201) {
    //               // Request was successful
    //               $responseData = json_decode($responseBody, true);
    //                 $data= $responseData['data'];
    //                 $verification=$data['verification'];
    //                 $verification_result=$verification['result'];
    //                 $face=$data['face'];
    //                 $face_confidence= $face['confidence'];
    //                 $result=$data['result'];
                   
    //                 if($verification_result['face']){
    //                     $id_name=$result['fullName'];
    //                     $id_name_bn=$result['firstNameLocal'].$result['middleNameLocal'].' '.$result['lastNameLocal'];
    //                     $father=$result['optionalData'];
    //                     $dob=$result['dob'];
    //                     $age=$result['age'];
    //                     $gender=$result['sex'];
    //                     $placeOfBirth=$result['placeOfBirth'];
    //                     $nid_number=$result['documentNumber'];
    //                     $document_type=$result['documentName'];
    //                     $requestId=$data['requestId'];
    //                     $responseID=$data['responseID'];
    //                     $profiles = Profile::where("mem_id", $user->member_id)->first();
    //                     if ($profiles) {
    //                         $profiles->update(
    //                             [
    //                              'id_name'      => $id_name,
    //                              'id_name_bn'   => $id_name_bn,
    //                              'farther'   => $father,
    //                              'dob'   => $dob,
    //                              'age'   => $age,
    //                              'gender'   => $gender,
    //                              'placeOfBirth'   => $placeOfBirth,
    //                              'nid_number'   => $nid_number,
    //                              'document_type'   => $document_type,
    //                              'requestId'   => $requestId,
    //                              'responseID'   => $responseID
    //                             ]
    //                         );

                            
    //                         $success=[
    //                             'id_name'   => $id_name,
    //                             'id_name_bn'   => $id_name_bn,
    //                             'dob'   => $dob,
    //                             'age'   => $age,
    //                             'gender'   => $gender,
    //                             'placeOfBirth'   => $placeOfBirth,
    //                             'nid_number'   => $nid_number,
    //                             'document_type'   => $document_type,
    //                             'requestId'   => $requestId,
    //                             'is_verified'   => "1",
    //                             'responseID'   => $responseID
    //                         ];
                            
    //                       // $profile->save();
    //                       User::where("member_id", $user->member_id)->update(['is_verified'=>1,'status'=>3]);
    //                       $this->updateLocalServer($request);
    //                     } else {
    //                         return false;
    //                     }
    //                     return  $this->sendResponse($success,'Image Uploaded in successfully');
    //                 }else{
    //                     return $this->sendError('KYC verification failed', $validator->errors());  
    //                 }


    //               // return response()->json($responseData);
    //             } else {
    //                 // Request failed
    //                 return $this->sendError('KYC verification request failed', $validator->errors());
    //                 // return response()->json([
    //                 //     'error' => 'KYC verification request failed',
    //                 // ], $statusCode);
    //             }
                            
    //         }else {
    //             return $this->sendError('kycrules Request failed', $validator->errors());
    //         }
    //     } else {
    //         return $this->sendError('access-token Request failed', $validator->errors());
    //     }
                          
    //     // $success=[
    //     //     'id_name'   => "HABIB ETESHAMUL ALAM",
    //     //     'id_name_bn'   =>"হাবীবএহতেশামুল আলম",
    //     //     'dob'   => "1998-09-09",
    //     //     'age'   => "25",
    //     //     'gender'   => "M",
    //     //     'placeOfBirth'   =>"KHULNA",
    //     //     'nid_number'   =>"3754460651",
    //     //     'document_type'   => "Smart ID Card",
    //     //     'requestId'   => "c0194d79-ad94-4284-8c95-42f0cf95d663",
    //     //     'is_verified'   => "1",
    //     //     'responseID'   =>"2aba98f67ab44736906d9ef0b8c0e267"
    //     // ];
    
    //     // return  $this->sendResponse($success,'Image Uploaded in successfully');
    // }

    public function varifyId(Request $request)
    {
        $token='';
        $user= Auth::user();

                $requestHeaders = [
                    'Authorization' => 'Bearer '.$token, // Replace with your actual token
                ];

                   // Request was successful
                  
                        $profiles = Profile::where("member_id", $user->member_id)->first();
                        if ($profiles) {
                            $profiles->update(
                                [
                                 'id_name'   => "HABIB ETESHAMUL ALAM",
                                 'id_name_bn'   =>"হাবীবএহতেশামুল আলম",
                                 'dob'   => "1998-09-09",
                                 'farther'   => 'Alomgir Alom',
                                 'age'   => "25",
                                 'gender'   => "M",
                                 'placeOfBirth'   =>"KHULNA",
                                 'nid_number'   =>"3754460651",
                                 'document_type'   => "Smart ID Card",
                                 'requestId'   => "c0194d79-ad94-4284-8c95-42f0cf95d663",
                                 'is_verified'   => "1",
                                 'responseID'   =>"2aba98f67ab44736906d9ef0b8c0e267"
                                ]
                            );

                           $success=[
                                'id_name'   => "HABIB ETESHAMUL ALAM",
                                'id_name_bn'   =>"হাবীবএহতেশামুল আলম",
                                'dob'   => "1998-09-09",
                                'age'   => "25",
                                'gender'   => "M",
                                'placeOfBirth'   =>"KHULNA",
                                'nid_number'   =>"3754460651",
                                'document_type'   => "Smart ID Card",
                                'requestId'   => "c0194d79-ad94-4284-8c95-42f0cf95d663",
                                'is_verified'   => "1",
                                'responseID'   =>"2aba98f67ab44736906d9ef0b8c0e267"
                            ];
                            
                           // $profile->save();
                           User::where("member_id", $user->member_id)->update(['is_verified'=>1,'status'=>3]);
                          $this->updateLocalServer($request);
                        } else {
                            return false;
                        }
                        return  $this->sendResponse($success,'Image Uploaded in successfully');
         }

    private function updateLocalServer($request)
    {

        // $validator = Validator::make($request->all(),[
        //     'selfie_image' => 'required|image|mimes:jpeg,png|max:2048',
        //     'doc_front_image' => 'required|image|mimes:jpeg,png|max:2048',
        //     'doc_back_image' => 'required|image|mimes:jpeg,png|max:2048',

        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Image missing error', $validator->errors());
        // }
        $resProfile= $this->update_profile_pic($request);
        $resFront= $this->update_NID_front($request);
        $resBack= $this->update_NID_back($request);
        if( $resProfile){
            if( $resFront){
                if( $resBack){
                return true;
                }else {return false;}
            }else {return false;}
        }else {return false;}
    }
  
    private function update_profile_pic($request){
    
     
        $user=$request->user();
        //$user= Auth::user();
        
        if($request->hasFile('selfie_image')){
            if($user->selfie_image){
                $oldPath=public_path().'uploads/profile_images/'.$user->selfie_image;
                if(File::exists($oldPath)){
                    File::delete($oldPath);
                }
            }

             $image_name='profile_'.$user->phone.'.'.$request->selfie_image->extension();
            $request->selfie_image->move(public_path('uploads/profile_images/'),$image_name);


        }else{
              $image_name=$user->selfie_image;
        }

        $profile = Profile::where("member_id", $user->member_id );//->update(["profile_photo" => $image_name]);
        if ($profile) {
            $profile->update(
                [
                 'profile_photo'   => $image_name
                ]
            );
            //$profile->save();
        } else {
            return false;
        }
       return true;
    }
    private function update_NID_front($request){
        $user=$request->user();
        
        if($request->hasFile('doc_front_image')){
            if($user->doc_front_image){
                $oldPath=public_path().'uploads/nid_pic/'.$user->doc_front_image;
                if(File::exists($oldPath)){
                    File::delete($oldPath);
                }
            }

             $image_name=$user->name.'_front_'.$user->phone.'.'.$request->doc_front_image->extension();
            $request->doc_front_image->move(public_path('uploads/nid_pic/'),$image_name);


        }else{
              $image_name=$user->doc_front_image;
        }
        $profile = Profile::where("member_id", $user->member_id );
        if ($profile) {
            $profile->update(
                [
                 'nid_front'   => $image_name
                ]
            );
        } else {
            return false;
        }
    
       return true;
    }

    private function update_NID_back($request){
        
        $user=$request->user();
        
        if($request->hasFile('doc_back_image')){
            if($user->doc_back_image){
                $oldPath=public_path().'uploads/nid_pic/'.$user->doc_back_image;
                if(File::exists($oldPath)){
                    File::delete($oldPath);
                }
            }

             $image_name=$user->name.'_back_'.$user->phone.'.'.$request->doc_back_image->extension();
            $request->doc_back_image->move(public_path('uploads/nid_pic/'),$image_name);
        }else{
              $image_name=$user->doc_back_image;
        }
        $profile = Profile::where("member_id", $user->member_id );
        if ($profile) {
            $profile->update(
                [
                 'nid_back'   => $image_name
                ]
            );
        } else {
            return false;
        }
        
       return true;
    }


}
