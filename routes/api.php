<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RattingController;
use App\Http\Controllers\APIs\BnmtvController;
use App\Http\Controllers\APIs\EshowcaseController;
use App\Http\Controllers\APIs\PartyMemberController;
use App\Http\Controllers\APIs\FaceKiController;
use App\Http\Controllers\APIs\NotificationController;
use App\Http\Controllers\APIs\TestController;
use App\Http\Controllers\APIs\GalleryController;
use App\Http\Controllers\APIs\NewsController;
use App\Http\Controllers\APIs\NoticeController;
use App\Http\Controllers\APIs\PdfFormController;
use App\Http\Controllers\APIs\ProgramController;
use App\Http\Controllers\APIs\RatingController;
use App\Http\Controllers\APIs\SliderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIs\UserController;
use App\Http\Controllers\APIs\VideoController;
use App\Http\Controllers\NidVerificationController;
use App\Models\RatingEvent;
use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('signup',[UserController::class,'signup']);
Route::post('login',[UserController::class,'login']);
Route::put('register',[UserController::class,'register'])->middleware('auth:sanctum');
Route::post('update_profile_pic',[UserController::class,'update_profile_pic'])->middleware('auth:sanctum');
Route::post('update_NID_front',[UserController::class,'update_NID_front'])->middleware('auth:sanctum');
Route::post('update_NID_back',[UserController::class,'update_NID_back'])->middleware('auth:sanctum');
Route::post('change_password',[UserController::class,'change_password'])->middleware('auth:sanctum');
Route::get('user_details',[UserController::class,'user_details'])->middleware('auth:sanctum');
Route::get('divisions',[UserController::class,'divisions'])->middleware('auth:sanctum');
Route::get('districts',[UserController::class,'districts'])->middleware('auth:sanctum');
Route::get('upazilas',[UserController::class,'upazilas'])->middleware('auth:sanctum');
Route::get('addOrganizationToUser',[UserController::class,'addOrganizationToUser'])->middleware('auth:sanctum');
Route::post('qr_coder_result',[UserController::class,'qr_coder_result'])->middleware('auth:sanctum');
Route::post('logout',[UserController::class,'logout'])->middleware('auth:sanctum');


// Route::group(['middleware'=>'auth:sanctum'],function(){
//     //product controller
//     Route::resource('products',ProductController::class);
// });
Route::get('qr_code',[UserController::class,'qr_code'])->middleware('auth:sanctum');
Route::post('approval',[UserController::class,'approval'])->middleware('auth:sanctum');
Route::get('finishReg',[UserController::class,'finishReg'])->middleware('auth:sanctum');
Route::post('reject',[UserController::class,'reject'])->middleware('auth:sanctum');
Route::get('mRequest',[UserController::class,'mRequest'])->middleware('auth:sanctum');
Route::get('approvedList',[UserController::class,'approvedList'])->middleware('auth:sanctum');
Route::get('home_user_details',[UserController::class,'home_user_details'])->middleware('auth:sanctum');
Route::post('finishReg',[UserController::class,'finishReg'])->middleware('auth:sanctum');
Route::get('clear-all-cache', function() {
    Artisan::call('optimize:clear');
    return 'Application all kind of cache has been cleared';
});


Route::post('varifyId',[FaceKiController::class,'varifyId'])->middleware('auth:sanctum');
Route::post('test',[FaceKiController::class,'test'])->middleware('auth:sanctum');



Route::post('add_fcm_token',[NotificationController::class,'addToken'])->middleware('auth:sanctum');
Route::post('pushNotification',[NotificationController::class,'pushNotification'])->middleware('auth:sanctum');

//Route::put('testRegister',[TestController::class,'register'])->middleware('auth:sanctum');
Route::post('testImages',[TestController::class,'updateLocalServer'])->middleware('auth:sanctum');

Route::get('party-member',[PartyMemberController::class,'index'])->middleware('auth:sanctum');
Route::get('gallery-image',[GalleryController::class,'imageForGallery']);
Route::get('notice',[NoticeController::class,'Notice']);
Route::get('breaking-news',[NewsController::class,'BreakingNews']);
Route::get('news',[NewsController::class,'News']);
Route::get('program',[ProgramController::class,'Program']);
Route::get('video',[VideoController::class,'Video']);
Route::get('pdf-form',[PdfFormController::class,'PdfFormDownlods']);
Route::get('slider',[SliderController::class,'Slider']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/rating_list', [RatingController::class, 'index']);
    Route::post('/rating_submit', [RatingController::class, 'store']);
});



Route::middleware('auth:sanctum')->group(function () {
    Route::get('eshowcase', [EshowcaseController::class, 'index']);
    Route::post('eshowcase', [EshowcaseController::class, 'store']);
    Route::get('eshowcase/{id}', [EshowcaseController::class, 'show']);
    Route::put('eshowcase/{id}', [EshowcaseController::class, 'update']);
    Route::delete('eshowcase/{id}', [EshowcaseController::class, 'destroy']);
    Route::put('eshowcase/status/{id}', [EshowcaseController::class, 'eshowcase_status_change']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/e_showcase', [HomeController::class, 'e_showcases'])->name('e_showcase');
    Route::get('/marketplace', [HomeController::class, 'apiEshowcaseDetails']);
});


// BNM TV
Route::middleware('auth:sanctum')->group(function () {
    Route::get('bnmtv', [BnmtvController::class, 'index']);
    Route::get('bnmtvs/{id}', [BnmtvController::class, 'show']);
    Route::post('bnmtv_add_video', [BnmtvController::class, 'store']);
    Route::put('bnmtvs/{id}', [BnmtvController::class, 'update']);
    Route::delete('bnmtvs/{id}', [BnmtvController::class, 'destroy']);
    Route::put('bnmtv_add_like', [BnmtvController::class, 'bnmtvslikestore']);

    Route::get('bnmtv_comment', [BnmtvController::class, 'commentindex']);
    Route::post('bnmtv_add_comment', [BnmtvController::class, 'commentstore']);
    Route::put('bnmtv_add_comment_like', [BnmtvController::class, 'commentlikestore']);

    Route::get('bnmtv_reply', [BnmtvController::class, 'replyindex']);
    Route::post('bnmtv_add_reply', [BnmtvController::class, 'replystore']);
    Route::put('bnmtv_add_reply_like', [BnmtvController::class, 'replylikestore']);
    
    
    Route::get('show_apply_form', [RatingController::class, 'show_apply_form'])->name('show_apply_form');
    Route::post('apply_for_position', [RatingController::class, 'store_apply_form'])->name('store_apply_form');
    Route::post('upload_nid_details', [NidVerificationController::class, 'store'])->name('nid_verification_store');
});