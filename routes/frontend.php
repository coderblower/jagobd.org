<?php


use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\BnmtvController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InstituteForFutureLeadersController;
use App\Http\Controllers\CenterForHappinessController;
use App\Http\Controllers\CenterForPoliticalController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\YouthParliamentController;
use Illuminate\Support\Facades\Cache;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Route::get('/', function () {
//     return view('front-end.pages.home.index');
// });

Route::get('/', [HomeController::class, 'frontendHome'])->name('frontend.index');
Route::get('/home', [HomeController::class, 'frontendHome'])->name('frontend.index');
Route::get('about-us', [HomeController::class, 'about_us'])->name('abouts');
Route::get('party', [HomeController::class, 'party'])->name('party');
Route::get('gallery-page', [HomeController::class, 'gallery'])->name('gallery-page');
Route::get('donate', [HomeController::class, 'donate'])->name('donate');


Route::get('constitution', [HomeController::class, 'getConstithution'])->name('constitution');


Route::get('/primary-member', [HomeController::class, 'primary_member'])->name('primary_member');
Route::post('/primary-member', [HomeController::class, 'create_primary_member']);

Route::get('news-page', [HomeController::class, 'news'])->name('news-page');
Route::get('/news-details/{news}', [HomeController::class, 'newsDetails'])->name('news.details');

Route::get('notice-page', [NoticeController::class, 'ShowNotice'])->name('notice-page');
Route::get('/notice-details/{notice}', [NoticeController::class, 'noticeDetails'])->name('notice.details');

Route::get('video-page', [HomeController::class, 'video'])->name('video-page');
Route::get('video-details/{video}', [HomeController::class, 'videoDetails'])->name('video.details');

Route::get('program-page', [HomeController::class, 'program'])->name('program-page');
Route::get('program-details/{program}', [HomeController::class, 'programDetails'])->name('program.details');


Route::get('contact-us', [HomeController::class, 'contact_us'])->name('contact');
//language change route
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('exampleEasyCheckout');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


//E-Showcase
Route::get('/e_showcase', [HomeController::class, 'e_showcase'])->name('e_showcase');
Route::get('/e_showcase/{id}', [HomeController::class, 'e_showcaseDetails'])->name('e_showcase.details');


Route::get('/bnmtvs', [BnmtvController::class, 'index'])->name('bnmtvs.index');
Route::get('/bnmtvs/create', [BnmtvController::class, 'create'])->name('bnmtvs.create');
Route::post('/bnmtvs', [BnmtvController::class, 'store'])->name('bnmtvs.store');
Route::get('/bnmtvs/{bnmtv}', [BnmtvController::class, 'show'])->name('bnmtvs.show');
Route::get('/bnmtvs/{bnmtv}/edit', [BnmtvController::class, 'edit'])->name('bnmtvs.edit');
Route::put('/bnmtvs/{bnmtv}', [BnmtvController::class, 'update'])->name('bnmtvs.update');
Route::delete('/bnmtvs/{bnmtv}', [BnmtvController::class, 'destroy'])->name('bnmtvs.destroy');

Route::post('/bnmtvs/{bnmtv}/like', [BnmtvController::class, 'like'])->name('bnmtvs.like');

Route::post('/bnmtvs/{bnmtv}/like', [BnmtvController::class, 'like'])->name('comments.reply');

// Main Charity Menu Routes
Route::get('person', [HomeController::class, 'person'])->name('person');
Route::get('associate_organization', [HomeController::class, 'associate_organization'])->name('associate');
Route::get('affiliate_organization', [HomeController::class, 'affiliate_organization'])->name('affiliate');
Route::get('constitution', [HomeController::class, 'Constitution'])->name('constitution');
Route::get('ethics', [HomeController::class, 'Ethics'])->name('ethics');
Route::get('commitment', [HomeController::class, 'Commitment'])->name('commitment');



Route::post('person', [HomeController::class, 'personFamily'])->name('personandfamily');
Route::get('personlist', [HomeController::class, 'personandfamilybackend'])->name('personandfamilybackend');
// Route::get('party-members', [HomeController::class, 'partyMembers'])->name('partyMembers');
Route::get('party-members', [HomeController::class, 'party'])->name('partyMembers');
Route::get('disaster', [HomeController::class, 'disaster'])->name('disaster');
Route::get('charity-dinner', [HomeController::class, 'charityDinner'])->name('charityDinner');
// Route::get('example-easy-checkout', [HomeController::class, 'exampleEasyCheckout'])->name('exampleEasyCheckout');
Route::get('religion-context', [HomeController::class, 'religionContext'])->name('religionContext');
Route::get('entertainment', [HomeController::class, 'entertainment'])->name('entertainment');
Route::get('education', [HomeController::class, 'education'])->name('education');
Route::get('cultural-activity', [HomeController::class, 'culturalActivity'])->name('culturalActivity');


Route::get('/institute-for-future-leaders', [InstituteForFutureLeadersController::class, 'index'])->name('institute-for-future-leaders');
Route::get('/center-for-happiness', [CenterForHappinessController::class, 'index'])->name('center-for-national-happiness');
Route::get('/center-for-political', [CenterForPoliticalController::class, 'index'])->name('center-for-political-research-and-strategy');


// Center for Artificial Intelligence
Route::get('/center-for-artificial-intelligence', [App\Http\Controllers\CenterForArtificialIntelligenceController::class, 'index'])->name('center-for-artificial-intelligence');

// Center for Shadow Governance
Route::get('/center-for-shadow-governance', [App\Http\Controllers\CenterForShadowGovernanceController::class, 'index'])->name('center-for-shadow-governance');

Route::get('/youth-parliament', [YouthParliamentController::class, 'index'])->name('youth-parliament');

Route::get('/initiative', [YouthParliamentController::class, 'show'])->name('initiative.show');


// Show cart page
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

// Update item quantity in cart
Route::post('/cart/update/{id}/{quantity}', [CartController::class, 'update']);

// Remove item from cart
Route::delete('/cart/remove/{id}', [CartController::class, 'remove']);

Route::post('/cart/add/{id}', [CartController::class, 'add']);


Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');



Route::post('pay-now',[CheckoutController::class,'getSession'])->name('pay_stripe');


// Route for payment success
Route::get('/payment-success', function () {
    $siteSetting = Cache::remember('siteSetting', 60, function () {
        return DB::table('site_settings')->first();
    });
    return view('payment-success', compact('siteSetting'));
})->name('payment.success');

// Route for payment failure
Route::get('/payment-failed', function () {
    $siteSetting = Cache::remember('siteSetting', 60, function () {
        return DB::table('site_settings')->first();
    });
    return view('payment-failed', compact('siteSetting'));
})->name('payment.failed');


Route::get('/course_details/{id}', function ($id) {
    $siteSetting = Cache::remember('siteSetting', 60, function () {
        return DB::table('site_settings')->first();
    });
Course::all();
    $course = DB::table('courses')->where('id', $id)->first();

    return view('front-end.pages.academy.coursedetails', compact('siteSetting', 'course'));
})->name('coursedetails');

Route::resource('contactus', ContactUsController::class);
