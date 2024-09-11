<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Auth;
use File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;

use Haruncpi\LaravelIdGenerator\IdGenerator;

class TestController extends BaseController
{
    public function register(Request $request){
        $validator=null;
         try {
            $user = Auth::user();
            // Record found
            $userRequest=$request->all();
            $validator = Validator::make($request->all(),[
                'email'          =>'nullable',
                'organization_id'=>'required',
                'recommended_by' =>'required',
                'division'       =>'required',
                'district'       =>'required',
                'upazila'        =>'required',
                'up'             =>'nullable',
                'ward'           =>'required'
            ]);
          

            if($validator->fails()){
                return $this->sendError('Empty field validation error', $validator->errors());
            }elseif( $request->nid!=null && User::where('nid', $request->nid)->exists()){
                return $this->sendError('Duplecate NID', $validator->errors());
            }
            elseif($request->recommended_by === null || !User::where('phone', $request->recommended_by)->exists() ||  $user->phone == $request->recommended_by){
                return $this->sendError('Invalid Recommendation', $validator->errors());
            }

            
            // do stuff
           
            $user->rank_id = 10;
            $user->save();
            $user->update([
                'email'=>$request->email,
                'organization_id'=>$request->organization_id,
                'recommended_by'=>$request->recommended_by,
            ]);
            $memberId=  $user->member_id;
            // 'phone'=>$request->phone,
           
           $profile= Profile::updateOrInsert(
                    ['member_id' => $memberId], // The key to search for (usually the primary key)
                    [
                        'member_id'=>$memberId,
                        'division'=>$request->division,
                        'district'=>$request->district,
                        'upazila'=>$request->upazila,
                        'up'=>$request->up,
                        'ward'=>$request->ward,
                    ]
                );

         


            $success=$request->all();
            return  $this->sendResponse($success,'User registered successfully');
            
        } catch (ModelNotFoundException $e) {
            // Record not found
            return $this->sendError('Record not found', $validator->errors());
        }
    }

    public function updateLocalServer(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'selfie_image' => 'required|image|mimes:jpeg,png|max:2048',
            'doc_front_image' => 'required|image|mimes:jpeg,png|max:2048',
            'doc_back_image' => 'required|image|mimes:jpeg,png|max:2048',

        ]);

        if($validator->fails()){
            return $this->sendError('Image missing error', $validator->errors());
        }
        $resProfile= $this->update_profile_pic($request);
        $resFront= $this->update_NID_front($request);
        $resBack= $this->update_NID_back($request);
        if( $resProfile){
            if( $resFront){
                if( $resBack){
                    return  $this->sendResponse([],'Image upload successfully');
                }else {
                    return $this->sendError('Image NID_back error', $validator->errors());
                }
            }else {
                 return $this->sendError('Image NID_front error', $validator->errors());
                }
        }else {
            return $this->sendError('Image profile_pic error', $validator->errors());
        }
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

        $profile = Profile::where("mem_id", $user->member_id );//->update(["profile_photo" => $image_name]);
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
        $profile = Profile::where("mem_id", $user->member_id );
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
        $profile = Profile::where("mem_id", $user->member_id );
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
