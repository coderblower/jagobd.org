<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FormPdfController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CommitteeController;
use App\Http\Controllers\Admin\UnionController;
use App\Http\Controllers\Admin\UpazilaController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\BreakingNewsController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutItemController;
use App\Http\Controllers\Admin\BnmTvPermissionController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\EshowcaseController;
use App\Http\Controllers\Admin\PartyMemberController;
use \App\Http\Controllers\Admin\SiteSettingController;
use \App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\APIs\RatingController;
use App\Http\Controllers\BnmtvController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
// Slider route started here
Route::resource('slider',SliderController::class);
Route::get('slider-status-change',[SliderController::class,'slider_status_change'])->name('slider-status-change');

Route::resource('about',AboutController::class);
Route::resource('about-items',AboutItemController::class);

//breakingNews route started here
Route::resource('breakingNews',BreakingNewsController::class);
Route::get('breakingNews_status_change',[BreakingNewsController::class,'breakingNews_status_change'])->name('breakingNews_status_change');

//e-showcase route started here
Route::resource('eshowcase',EshowcaseController::class);
Route::get('eshowcase_status_change',[EshowcaseController::class,'eshowcase_status_change'])->name('eshowcase_status_change');

//Notice route started here
Route::resource('notice',NoticeController::class);
Route::get('notice_status_change',[NoticeController::class,'notice_status_change'])->name('notice_status_change');

Route::resource('formPdf',FormPdfController::class);
//program route started here
Route::resource('program',ProgramController::class);
Route::get('program_status_change',[ProgramController::class,'program_status_change'])->name('program_status_change');

//news route started here
Route::resource('news',NewsController::class);
Route::get('news_status_change',[NewsController::class,'news_status_change'])->name('news_status_change');

//Video route started here
Route::resource('video',VideoController::class);
Route::get('video_status_change',[VideoController::class,'video_status_change'])->name('video_status_change');



//Video route started here
Route::resource('gallery',GalleryController::class);
Route::get('gallery_status_change',[GalleryController::class,'gallery_status_change'])->name('gallery_status_change');


//site info
Route::resource('site-setting',SiteSettingController::class);


//ContactUS route started here


//Position route started here
Route::resource('position',PositionController::class);

//Committee route started here
Route::resource('committee',CommitteeController::class);

//Union route started here
Route::resource('union',UnionController::class);

//Upazila route started here
Route::resource('upazila',UpazilaController::class);

//district route started here
Route::resource('district',DistrictController::class);

//Division route started here
Route::resource('division',DivisionController::class);

//organization route started here
Route::resource('organization',OrganizationController::class);

//party members route started here
Route::resource('party-member',PartyMemberController::class);
Route::get('party_member_status_change',[PartyMemberController::class,'party_member_status_change'])->name('party_member_status_change');


// BNM TV
Route::resource('bnmtv', BnmTvPermissionController::class);
Route::put('bnmtvs/{id}/status', [BnmTvPermissionController::class, 'updateStatus'])->name('bnmtv.status_change');

// Rating Event
Route::get('rating_event_division',[RatingController::class,'rating_event_division'])->name('rating_event_division');
Route::post('rating_event_division',[RatingController::class,'storeRatingEvent'])->name('rating_event_division_store');

Route::get('rating_event_district',[RatingController::class,'rating_event_district'])->name('rating_event_district');
Route::post('rating_event_district',[RatingController::class,'storeRatingEvent'])->name('rating_event_district_store');
Route::get('/getDistricts/{division_id}', [RatingController::class, 'getDistricts']);

Route::get('rating_event_upazila',[RatingController::class,'rating_event_upazila'])->name('rating_event_upazila');
Route::post('rating_event_upazila',[RatingController::class,'storeRatingEvent'])->name('rating_event_upazila_store');
Route::get('/getUpazilas/{district_id}', [RatingController::class, 'getUpazilas']);

Route::get('rating_event_union',[RatingController::class,'rating_event_union'])->name('rating_event_union');
Route::post('rating_event_union',[RatingController::class,'storeRatingEvent'])->name('rating_event_union_store');
Route::get('/getUnions/{upazila_id}', [RatingController::class, 'getUnions']);

Route::get('rating_event_ward',[RatingController::class,'rating_event_ward'])->name('rating_event_ward');
Route::post('rating_event_ward',[RatingController::class,'storeRatingEvent'])->name('rating_event_ward_store');
Route::get('/getWards/{union_id}', [RatingController::class, 'getWards']);

Route::resource('courses', CourseController::class);
Route::resource('enrollments', EnrollmentController::class);

Route::resource('instructors', InstructorController::class);
