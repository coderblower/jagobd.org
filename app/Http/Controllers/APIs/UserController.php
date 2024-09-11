<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Controllers\NotificationController;
use App\Models\District;
use App\Models\Division;
use App\Models\Organization;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Token;
use App\Models\Upazila;
use App\Models\User;
use QrCode;
use Carbon\Carbon;
// saiful

use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use Validator;
use Auth;
use File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class UserController extends BaseController
{

    public function signup(Request $request){
        $validator = Validator::make($request->all(),[
            'name_en'            =>'required|string|max:255',
            'phone'           =>'required',
            'password'        =>'required|min:5'
        ]);

        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }
        $password=bcrypt($request->password);
        $memberId=IdGenerator::generate(['table'=>'users','field'=>'member_id','length'=>'12','prefix'=>'BNM']);
            // 'phone'=>$request->phone,
        $user=User::create([
            'name_en'=>$request->name_en,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$password,
            'member_id'=> $memberId
        ]);
        $success['token']=$user->createToken('RestApi')->plainTextToken;
        $success['name']=$user->name_en;
        return $this->sendResponse($success,'User registered successfully');

    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'phone'           => 'required|regex:/(01)[0-9]{9}/',
            'password'        =>'required|min:5',
        ]);

        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }


        if(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])){
           $user=Auth::user();
            $success['token']=$user->createToken('RestApi')->plainTextToken;
            $success['phone']=$user->phone;
            return $this->sendResponse($success,'User logged in successfully');
        }else{
            return $this->sendError( $request->all(), ['error'=>'Unauthorized Error']);
        }

    }

    public function register(Request $request){
        $validator=null;
         try {
            $user = Auth::user();
            // Record found
            $validator = Validator::make($request->all(),[
                'email'          =>'nullable',
                'recommended_by' =>'required',
                'division'       =>'required',
                'district'       =>'required',
                'upazila'        =>'required',
                'up'             =>'nullable',
                'ward'           =>'required'
            ]);
            $recom = DB::table('users') ->where('users.phone',$request->recommended_by)->first();

            if($validator->fails()){
                return $this->sendError('Empty field validation error', $validator->errors());
            }
            elseif($request->recommended_by === null || !User::where('phone', $request->recommended_by)->exists() ||  $user->phone == $request->recommended_by){
                return $this->sendError('Invalid Recommendation', $validator->errors());
            }elseif( $recom->status!=1 && $recom->approved==0){
                return $this->sendError('Invalid Recommendation', $validator->errors());
            }elseif(User::where('email', $request->email)->exists()){
                return $this->sendError('Email already exist', $validator->errors());
            }


            // do stuff
            //$user->status = 3;
            $user->position_id = 10;
            $user->save();
            $user->update([
                'email'=>$request->email,
                // 'organization_id'=>$request->organization_id,
                // 'committee_id'    =>$request->committee_id,
                'recommended_by'=>$request->recommended_by,
            ]);
            $memberId=  $user->member_id;
            // 'phone'=>$request->phone,

            Profile::updateOrInsert(
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




    public function finishReg(Request $request){
        $user = Auth::user();
        if( $user->status == 3){
            $data = DB::table('users')
            ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
            ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
            ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
            ->leftJoin('divisions', 'profiles.division', '=', 'divisions.id')
            ->leftJoin('districts', 'profiles.district', '=', 'districts.id')
            ->leftJoin('upazilas', 'profiles.upazila', '=', 'upazilas.id')
            ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
            ->select('users.name_en as name','users.email as email','users.phone as phone','profiles.nid_number as nid','profiles.dob as dob','profiles.gender','profiles.profile_photo','positions.name_en as positions','committees.name_en as committee','organizations.name_en as org','organizations.name_bn as org_bn','divisions.name_en as division','divisions.name_bn as division_bn','districts.name_en as district','districts.name_bn as district_bn','upazilas.name_en as upazila','upazilas.name_bn as upazila_bn')
            ->where('users.id',$user->id)
            ->get();
            $da= json_encode($data);
            QrCode::size(300)->format('png')->generate($da,public_path('uploads/qrcode/qr_'.$user->phone.'.png'));

            $notify=new \App\Http\Controllers\APIs\NotificationController;


           $notify->pushNotification($user->recommended_by);



            $user->update(['status'=>1,'active'=>0]);



            $data1=[
                'message'=>'as member, Please Wait for the Approval'
                ];
            return  $this->sendResponse(  $data1,'User registered successfully');

        }else if( $user->status ==2){
            $user->update(['active'=>1,'status'=>2,'approved'=>0]);
            return  $this->sendResponse(['message'=>'as follower'],'User registered successfully');
        }

    }


    public function update_profile_pic(Request $request){
        $validator = Validator::make($request->all(),[
            'profile_photo'   => 'nullable|image|mimes:jpg,bmp,png'
        ]);
        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }
        $user=$request->user();
        $profile = Profile::where("member_id", $user->member_id );//->update(["profile_photo" => $image_name]);
        if($request->hasFile('profile_photo')){
            if($user->profile_photo){
                $oldPath=public_path().'uploads/profile_images/'.$profile->profile_photo;
                if(File::exists($oldPath)){
                    File::delete($oldPath);
                }
            }

             $image_name='profile_'.$user->phone.'.'.$request->profile_photo->extension();
            $request->profile_photo->move(public_path('uploads/profile_images/'),$image_name);


        }else{
              $image_name=$profile->profile_photo;
        }

        // $user->update([
        //     'profile_photo'=>$image_name
        // ]);

        if ($profile) {
            $profile->update(
                [
                 'profile_photo'   => $image_name
                ]
            );
            //$profile->save();
        } else {
            return $this->sendError('Image Uploaded in failed', $validator->errors());
        }
       return $this->sendResponse($image_name,'Image Uploaded in successfully');
    }


    public function update_NID_front(Request $request){
        $validator = Validator::make($request->all(),[
            'nid_front'   => 'required|image|mimes:jpg,bmp,png'

        ]);
        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }
        $user=$request->user();
        $profile = Profile::where("member_id", $user->member_id );//->update(["profile_photo" => $image_name]);
        if($request->hasFile('nid_front')){
            if($user->nid_front){
                $oldPath=public_path().'uploads/nid_pic/'.$user->nid_front;
                if(File::exists($oldPath)){
                    File::delete($oldPath);
                }
            }

             $image_name=$user->name.'_front_'.$user->phone.'.'.$request->nid_front->extension();
            $request->nid_front->move(public_path('uploads/nid_pic/'),$image_name);


        }else{
              $image_name=$profile->nid_front;
        }

        // $user->update([
        //     'nid_front'=>$image_name
        // ]);

        if ($profile) {
            $profile->update(
                [
                 'nid_front'   => $image_name
                ]
            );
            //$profile->save();
        } else {
            return $this->sendError('Image Uploaded in failed', $validator->errors());
        }
       return $this->sendResponse($image_name,'Image Uploaded in successfully');
    }

    public function update_NID_back(Request $request){
        $validator = Validator::make($request->all(),[
            'nid_back'   => 'required|image|mimes:jpg,bmp,png'

        ]);
        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }
        $user=$request->user();
        $profile = Profile::where("member_id", $user->member_id );//->update(["profile_photo" => $image_name]);
        if($request->hasFile('nid_back')){
            if($user->nid_back){
                $oldPath=public_path().'uploads/nid_pic/'.$user->nid_back;
                if(File::exists($oldPath)){
                    File::delete($oldPath);
                }
            }

             $image_name=$user->name.'_back_'.$user->phone.'.'.$request->nid_back->extension();
            $request->nid_back->move(public_path('uploads/nid_pic/'),$image_name);


        }else{
              $image_name=$profile->nid_back;
        }


        if ($profile) {
            $profile->update(
                [
                 'nid_back'   => $image_name
                ]
            );
            //$profile->save();
        } else {
            return $this->sendError('Image Uploaded in failed', $validator->errors());
        }

       return $this->sendResponse($image_name,'Image Uploaded in successfully');
    }



    public function change_password(Request $request){

        try {
            $user=Auth::user();
           // Record found
           $validator = Validator::make($request->all(),[
            'new_password' => 'required|min:5',
            'current_password' => 'required|different:new_password'

           ]);
           if($validator->fails()){
               return $this->sendError('validation error', $validator->errors());
           }

           if (Hash::check($request->current_password, $user->password)) {
               $user->update([
                   'password' => Hash::make($request->new_password),
               ]);

               return  $this->sendResponse('successful','User registered successfully');
           }else{
               return  $this->sendError('Current password did not match', $validator->errors());
           }

       } catch (ModelNotFoundException $e) {
           // Record not found
           return $this->sendError('Record not found', $validator->errors());
       }
    }

    public function user_details(Request $request){
        $user=Auth::user();
        $data = DB::table('users')
        ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
        ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
        ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
        ->leftJoin('divisions', 'profiles.division', '=', 'divisions.id')
        ->leftJoin('districts', 'profiles.district', '=', 'districts.id')
        ->leftJoin('upazilas', 'profiles.upazila', '=', 'upazilas.id')
        ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
        ->select('users.name_en as name','users.email as email','users.phone as phone','profiles.nid_number as nid','profiles.dob as dob','profiles.gender','profiles.profile_photo','positions.name_en as positions','committees.name_en as committee','organizations.name_en as org','organizations.name_bn as org_bn','divisions.name_en as division','divisions.name_bn as division_bn','districts.name_en as district','districts.name_bn as district_bn','upazilas.name_en as upazila','upazilas.name_bn as upazila_bn')
        ->where('users.member_id',$user->member_id)
        ->get()
        ->toArray();

        if (!empty($data)) {
            return $this->sendResponse($data,'get User successfully');
        }else{
            return $this->sendError('Record not found', ['error'=>'Unauthorized Error']);
        }

    }

    public function divisions(Request $request){
        $data=Division::all();

        if (!empty($data)) {
            return $this->sendResponse($data,'successful');
        }else{
            return $this->sendError('Record not found', ['error'=>'Unknown Error']);
        }
    }
    public function districts(Request $request){
        $data = District::where('division_id','=',$request->id)->get();
        if (!empty($data)) {
            return $this->sendResponse($data,'successful');
        }else{
            return $this->sendError('Record not found', ['error'=>'Unknown Error']);
        }
    }
    public function upazilas(Request $request){
        $disID=$request->id;
        $data = Upazila::where('district_id','=',$disID)->get();
        if (!empty($data)) {
            return $this->sendResponse($data,'successful');
        }else{
            return $this->sendError('Record not found', ['error'=>'Unknown Error']);
        }
    }


    public function addOrganizationToUser(Request $request){
        $validator=null;
        try {
           $user = Auth::user();
           // Record found
           $userRequest=$request->all();
           $validator = Validator::make($request->all(),[
               'organization'            =>'required',
           ]);
           if($validator->fails()){
               return $this->sendError('validation error', $validator->errors());
           }

           // update
           $user->update($request->all());

           $success=$request->organization;
           return  $this->sendResponse($success,'Add organization successfully');

       } catch (ModelNotFoundException $e) {
           // Record not found
           return $this->sendError('Record not found', $validator->errors());
       }
    }

   public function logout(){
        $user = Auth::user();
        $token=Token::where('member_id',$user->member_id)->first();
        $token->delete();
        auth()->user()->tokens()->delete();
        return $this->sendResponse([],'user logged out');
    }



   public function qr_code(){
        $user=Auth::user();
        $data = DB::table('users')
        ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
        ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
        ->leftJoin('divisions', 'users.division', '=', 'divisions.id')
        ->leftJoin('districts', 'users.district', '=', 'districts.id')
        ->leftJoin('upazilas', 'users.upazila', '=', 'upazilas.id')
        ->select('users.name_en','users.email','users.phone','users.nid','users.date_of_birth as dob','users.gender','users.profile_photo','positions.name as positions','users.committee_id','organizations.name as org','organizations.name_bn as org_bn','divisions.name_en as division','divisions.name_bn as division_bn','districts.name_en as district','districts.name_bn as district_bn','upazilas.name_en as upazila','upazilas.name_bn as upazila_bn')
        ->where('users.id',$user->id)
        ->get();
         $da= json_encode($data);
         QrCode::size(300)->format('png')->generate($da,public_path('uploads\qrcode\qr_'.$user->phone.'.png'));

         return $da;
   }



    public function home_user_details(Request $request){
    $user=Auth::user();
    $image = DB::table('sliders')->select('id','category','image','updated_at','created_at')->get();
    $marquee=DB::table('marquee')->where('category','text')->get();
    $data = DB::table('users')
    ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
    ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
    ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
    ->leftJoin('divisions', 'profiles.division', '=', 'divisions.id')
    ->leftJoin('districts', 'profiles.district', '=', 'districts.id')
    ->leftJoin('upazilas', 'profiles.upazila', '=', 'upazilas.id')
    ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
    ->select('users.name_en as name','users.email as email','users.phone','profiles.nid_number as nid','profiles.dob as dob','profiles.gender','users.approved','users.status',
    'users.rating','users.active','profiles.profile_photo','positions.name_en as positions','committees.name_en as committee','committees.name_bn as committee_bn','organizations.name_en as org','organizations.name_bn as org_bn',
    'divisions.name_en as division','divisions.name_bn as division_bn','districts.name_en as district','districts.name_bn as district_bn','upazilas.name_en as upazila','upazilas.name_bn as upazila_bn')
    ->where('users.member_id',$user->member_id)
    ->get();


    $objectData =(object)$data;
    $result[]=[
        'name'=>$data[0]->name,
        'email'=>$data[0]->email,
        'phone'=>$data[0]->phone,
        'nid'=>$data[0]->nid,
        'dob'=>$data[0]->dob,
        'gender'=>$data[0]->gender,
        'approved'=>$data[0]->approved,
        'status'=>$data[0]->status,
        'rating'=>$data[0]->rating,
        'active'=>$data[0]->active,
        'profile_photo'=>$data[0]->profile_photo,
        'rank'=>$data[0]->positions,
        'rank_bn'=>$data[0]->positions,
        'committee'=>$data[0]->committee,
        'org'=>$data[0]->org,
        'org_bn'=>$data[0]->org_bn,
        'division'=>$data[0]->division,
        'division_bn'=>$data[0]->division_bn,
        'district'=>$data[0]->district,
        'district_bn'=>$data[0]->district_bn,
        'upazila'=>$data[0]->upazila,
        'upazila_bn'=>$data[0]->upazila_bn,
        'marquee'=> $marquee[0]->text,
        'slider_image'=> $image
    ];


    if (!empty($data)) {
        return $this->sendResponse($result,'get User successfully');
    }else{
        return $this->sendError('Record not found', ['error'=>'Unauthorized Error']);
    }

}



   public function mRequest(){
        $user=Auth::user();
        $data = DB::table('users')
        ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
        ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
        ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
        ->leftJoin('divisions', 'profiles.division', '=', 'divisions.id')
        ->leftJoin('districts', 'profiles.district', '=', 'districts.id')
        ->leftJoin('upazilas', 'profiles.upazila', '=', 'upazilas.id')
        ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
        ->select('users.name_en as name','users.email as email','users.phone','profiles.nid_number as nid','profiles.dob as dob','profiles.gender','profiles.profile_photo','positions.name_en as positions','committees.name_en as committee','organizations.name_en as org','organizations.name_bn as org_bn','divisions.name_en as division','divisions.name_bn as division_bn','districts.name_en as district','districts.name_bn as district_bn','upazilas.name_en as upazila','upazilas.name_bn as upazila_bn')
        ->where('users.recommended_by',$user->phone)
        ->where('approved', 0)
        ->where('status', 1)
        ->get()
        ->toArray();

        if (!empty($data)) {
            return $this->sendResponse($data,'get User successfully');
        }else{
            return $this->sendError('Record not found', ['error'=>'Unauthorized Error']);
        }

    }
   public function approval(Request $request){
   // $validator=null;

         try {
            $member= DB::table('users')->where('phone',$request->phone)->get()->first();
            $id=$member->id;
            $currentTimestamp = Carbon::now();
            $futureDateTime = $currentTimestamp->addYear();
            $exp_date=$futureDateTime->format('Y-m-d H:i:s');
            // $request->merge(['expired_date'=>$exp_date]);

            $data = User::findOrFail($id);
            if ($data) {
                $data->update(['approved' => 1,'active' => 1,'expired_date'=>$exp_date]);

                return  $this->sendResponse(['message'=>$id],'User approved successfully');
            } else {
                return $this->sendError('Record not found', ['error'=>'Unauthorized Error']);
            }

        } catch (ModelNotFoundException $e) {
            return $this->sendError('Record not found', '');
        }
   }

   public function reject(Request $request){
    // $validator=null;

    try {
        $member= DB::table('users')->where('phone',$request->phone)->get()->first();
        $id=$member->id;
        $currentTimestamp = Carbon::now();
        $futureDateTime = $currentTimestamp->addYear();
        $exp_date=$futureDateTime->format('Y-m-d H:i:s');
        // $request->merge(['expired_date'=>$exp_date]);

        $data = User::findOrFail($id);
        if ($data) {
            $data->update(['approved' => 2,'active' => 0]);

            return  $this->sendResponse(['message'=>$id],'User reject successfully');
        } else {
            return $this->sendError('Record not found', ['error'=>'Unauthorized Error']);
        }

    } catch (ModelNotFoundException $e) {
        return $this->sendError('Record not found', '');
    }
    }
    public function approvedList(){
        $user=Auth::user();
        // $data = User::where('approved', 0)->where('status', 1)->get();
        $data = DB::table('users')
        ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
        ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
        ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
        ->leftJoin('divisions', 'profiles.division', '=', 'divisions.id')
        ->leftJoin('districts', 'profiles.district', '=', 'districts.id')
        ->leftJoin('upazilas', 'profiles.upazila', '=', 'upazilas.id')
        ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
        ->select('users.name_en','users.email','users.phone','profiles.nid_number as nid','profiles.dob as dob','profiles.gender','profiles.profile_photo','positions.name_en as positions','committees.name_en as committee','organizations.name_en as org','organizations.name_bn as org_bn','divisions.name_en as division','divisions.name_bn as division_bn','districts.name_en as district','districts.name_bn as district_bn','upazilas.name_en as upazila','upazilas.name_bn as upazila_bn')
        ->where('users.recommended_by',$user->phone)
        ->where('approved', 1)
        ->where('status', 1)
        ->get()
        ->toArray();

        if (!empty($data)) {
            return $this->sendResponse($data,'get User successfully');
        }else{
            return $this->sendError('Record not found', ['error'=>'Unauthorized Error']);
        }

    }



}
