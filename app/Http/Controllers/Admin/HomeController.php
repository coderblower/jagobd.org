<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutItem;
use App\Models\BreakingNews;
use App\Models\Eshowcase;
use App\Models\FormPdf;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Notice;
use App\Models\PartyMember;
use App\Models\PersonFamily;
use App\Models\Program;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function frontendHome()
    {


        $sliders = Cache::remember('sliders', 60, function () {
            return Slider::where('status', 1)->orderBy('id', 'DESC')->get();
        });

        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        $about_us = Cache::remember('about_us', 60, function () {
            return About::first();
        });
        $breakingNews = Cache::remember('breakingNews', 60, function () {
            return BreakingNews::orderBy('id', 'DESC')->get();
        });

        $notice = Cache::remember('notice', 60, function () {
            return Notice::orderBy('id', 'DESC')->limit(4)->get();
        });

        $formPdf = Cache::remember('formPdf', 60, function () {
            return FormPdf::all();
        });

        $program = Cache::remember('program', 60, function () {
            return Program::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        });

        $news = Cache::remember('news', 60, function () {
            return News::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        });

        $videos = Cache::remember('videos', 60, function () {
            return Video::where('status', 1)->orderBy('id', 'DESC')->get();
        });
        $partyMember = Cache::remember('partyMember', 60, function () {
            return PartyMember::where('status', 1)
                ->with(['position', 'committee'])
                ->orderBy('id', 'DESC')
                ->get();
        });
        return view('front-end.pages.home.index', compact('sliders', 'siteSetting', 'about_us','breakingNews','notice', 'formPdf', 'program', 'news','videos','partyMember'));
    }


    public function about_us()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $about_us = Cache::remember('about_us', 60, function () {
            return About::first();
        });
        $about_items = Cache::remember('about_items', 60, function () {
            return AboutItem::get();
        });
        return view('front-end.pages.about-us.index',compact('about_us','about_items','siteSetting'));
    }



    public function party()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $charmenPartyMember = Cache::remember('charmenPartyMember', 60, function () {
            return PartyMember::where('status', 1)
                ->with(['position', 'committee'])
                ->whereHas('position', function ($query) {
                    $query->whereIn('name_en', ['Chairman', 'Co-Chairman']);
                })
                ->orderBy('id', 'DESC')
                ->get();
        });
       /* $charmenPartyMember = Cache::remember('charmenPartyMember', 60, function () {
            return PartyMember::where('status', 1)
                ->with(['position', 'committee'])
                ->whereIn('position',['Chairman', 'Co-Chairman'])
                ->orderBy('id', 'DESC')
                ->get();
        });*/

        $partyMember = Cache::remember('partyMember', 60, function () {
            return PartyMember::where('status', 1)
                ->with(['position', 'committee'])
                ->whereHas('position', function ($query) {
                    $query->whereNotIn('name_en', ['Chairman', 'Co-Chairman']);
                })
                ->orderBy('id', 'DESC')
                ->get();
        });

        /*$PartyMember = Cache::remember('partyMember', 60, function () {
            return PartyMember::where('status', 1)
                ->with(['position', 'committee'])
                ->whereHas('position', function ($query) {
                    $query->whereOut('name_en', ['Chairman', 'Co-Chairman']);
                })
                ->orderBy('id', 'DESC')
                ->get();
        });*/
        return view('front-end.pages.party.index',compact('siteSetting','charmenPartyMember','partyMember'));
    }




    public function gallery()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $gallery_image = Cache::remember('gallery_image', 60, function () {
            return Gallery::get();
        });
        return view('front-end.pages.gallery.index',compact('siteSetting','gallery_image'));
    }


    public function news()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $news = News::orderBy('id', 'DESC')->paginate(21);
        return view('front-end.pages.news.index',compact('siteSetting','news'));
    }



    public function newsDetails(News $news)
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $cacheKey = 'news_latest_' . $news->id;

        $news_latest = Cache::remember($cacheKey, 60, function () use ($news) {
            return News::where('id', '!=', $news->id)
                    ->orderBy('id', 'DESC')
                    ->limit(6)->get();
        });

        return view('front-end.pages.news.newsDetails', compact('siteSetting', 'news','news_latest'));
    }



    public function video()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $video = Video::orderBy('id', 'DESC')->paginate(21);
        return view('front-end.pages.video.index',compact('siteSetting','video'));
    }







    public function videoDetails(Video $video)
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $cacheKey = 'video_latest_' . $video->id;

        $video_latest = Cache::remember($cacheKey, 60, function () use ($video) {
            return Video::where('id', '!=', $video->id)
                    ->orderBy('id', 'DESC')
                    ->limit(6)->get();
        });
        return view('front-end.pages.video.videoDetails', compact('siteSetting', 'video','video_latest'));
    }




    public function program()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $program = Program::orderBy('id', 'DESC')->paginate(21);
        return view('front-end.pages.program.index',compact('siteSetting','program'));
    }
    public function programDetails(Program $program)
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $cacheKey = 'program_latest_' . $program->id;

        $program_latest = Cache::remember($cacheKey, 60, function () use ($program) {
            return Program::where('id', '!=', $program->id)
                    ->orderBy('id', 'DESC')
                    ->limit(6)->get();
        });
        return view('front-end.pages.program.programDetails', compact('siteSetting', 'program','program_latest'));
    }

    public function contact_us()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        return view('front-end.pages.contact-us.index',compact('siteSetting'));
    }


    // public function e_showcase()
    // {
    //     $siteSetting = Cache::remember('siteSetting', 60, function () {
    //         return SiteSetting::first();
    //     });
    //     $eshowcase = Eshowcase::orderBy('id', 'DESC')->paginate(21);
    //     return view('front-end.pages.e-showcase.index',compact('siteSetting','eshowcase'));
    // }



    public function e_showcase(Request $request)
    {
        try {
            $siteSetting = Cache::remember('siteSetting', 60, function () {
                return SiteSetting::first();
            });

            $search = $request->get('search');
            $max = $request->get('price_end');

            $eshowcase = DB::table('eshowcases')
                ->select(
                    'eshowcases.id',
                    'eshowcases.name_en',
                    'eshowcases.name_bn',
                    'eshowcases.description_en',
                    'eshowcases.description_bn',
                    'eshowcases.price',
                    'eshowcases.updated_at',
                    'eshowcases.image',
                    'eshowcases.owner_user_id',
                    'eshowcases.created_at',
                    'eshowcases.status',
                    'users.member_id as user_member_id',
                    'users.name_en as user_name_en',
                    'users.name_bn as user_name_bn',
                    'users.email',
                    'users.division',
                    'users.phone',
                    'users.committee_id',
                    'committees.name_en as committee_name_en',
                    'committees.name_bn as committee_name_bn',
                    'users.position_id',
                    'positions.name_en as position_name_en',
                    'positions.name_bn as position_name_bn',
                    'users.recommended_by',
                    'users.status as user_status',
                    'profiles.id as profile_id',
                    'profiles.id_name',
                    'profiles.id_name_bn',
                    'profiles.organization_id as profile_organization_id',
                    'profiles.committee_id as profile_committee_id',
                    'profiles.recommended_by as profile_recommended_by',
                    'profiles.rating',
                    'profiles.father',
                    'profiles.profile_photo',
                    'profiles.nid_front',
                    'profiles.nid_back',
                    'profiles.dob',
                    'profiles.age',
                    'profiles.gender',
                    'profiles.place_of_birth',
                    'profiles.nid_number',
                    'profiles.responseID',
                    'profiles.document_type',
                    'profiles.division as profile_division',
                    'profiles.district',
                    'profiles.upazila',
                    'profiles.up',
                    'profiles.union',
                    'profiles.ward',
                    'profiles.requestId',
                    'profiles.created_at as profile_created_at',
                    'profiles.updated_at as profile_updated_at' )
                ->where(function($query) use ($max,$request){
                    if($max>0){
                        $query->whereBetween('price', [$request->get('price_start'), $max]);
                    }
                    return $query;
                })

                ->where(function($query) use ($search){
                    if(strlen($search)>0){
                        $query->orwhere('eshowcases.name_bn' , 'LIKE', '%'.$search.'%')
                                ->orwhere('eshowcases.name_en' , 'LIKE', '%'.$search.'%')
                                ->orwhere('eshowcases.description_en' , 'LIKE', '%'.$search.'%')
                                ->orwhere('eshowcases.description_bn' , 'LIKE', '%'.$search.'%');
                    }

                    return $query;
                })
                ->join('users', 'eshowcases.owner_user_id', '=', 'users.id')
                ->join('profiles', 'users.member_id', '=', 'profiles.member_id')
                ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                ->orderBy('eshowcases.id', 'DESC')
                ->paginate(20);


                $cart = Session::get('cart', []);

                $counts = 0;

                foreach($cart as $key => $value){
                    $counts += $value['quantity'];
                };


                $cartCount = $counts;

            return view('front-end.pages.e-showcase.index', compact('siteSetting', 'eshowcase', 'cartCount'));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }



    public function e_showcases()
    {
        try {
            $eshowcases = Eshowcase::select(
                    'eshowcases.id',
                    'eshowcases.name_en',
                    'eshowcases.name_bn',
                    'eshowcases.description_en',
                    'eshowcases.description_bn',
                    'eshowcases.price',
                    'eshowcases.image as thumbnail_image',
                    'eshowcases.product_images',
                    'eshowcases.status',
                    'users.name_en as user_name_en',
                    'users.name_bn as user_name_bn',
                    'committees.name_en as committee_name_en',
                    'committees.name_bn as committee_name_bn',
                    'positions.name_en as position_name_en',
                    'positions.name_bn as position_name_bn',
                    'profiles.profile_photo'
                )
                ->join('users', 'eshowcases.owner_user_id', '=', 'users.id')
                ->join('profiles', 'users.member_id', '=', 'profiles.member_id')
                ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                ->paginate(20);

            return response()->json([
                'status' => 'success',
                'data' => $eshowcases->items(),
                'message' => 'E-Showcases retrieved successfully'
            ]);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }



    public function apiEshowcaseDetails(Request $request)
    {
        // Retrieve site settings
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return DB::table('site_settings')->first();
        });

        // Retrieve the main eshowcase details
        $id = $request->id;
        $cacheKey = 'eshowcase_' . $id;

        $eshowcase = Cache::remember($cacheKey, 60, function () use ($id) {
            return DB::table('eshowcases')
                ->select(
                    'eshowcases.id',
                    'eshowcases.name_en as product_name_en',
                    'eshowcases.name_bn as product_name_bn',
                    'eshowcases.description_en as product_description_en',
                    'eshowcases.description_bn as product_description_bn',
                    'eshowcases.price as product_price_bn',
                    'eshowcases.product_images',
                    'eshowcases.status as product_status',
                    'users.name_en as author_name_en',
                    'users.name_bn as author_name_bn',
                    'committees.name_en as author_committee_name_en',
                    'committees.name_bn as author_committee_name_bn',
                    'positions.name_en as author_position_name_en',
                    'positions.name_bn as author_position_name_bn',
                    'profiles.profile_photo as author_profile_photo'
                )
                ->join('users', 'eshowcases.owner_user_id', '=', 'users.id')
                ->join('profiles', 'users.member_id', '=', 'profiles.member_id')
                ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                ->where('eshowcases.id', $id)
                ->first();
        });

        // Retrieve the latest eshowcases
        $latestEshowcases = Cache::remember('latest_eshowcases', 60, function () use ($id) {
            return DB::table('eshowcases')
                ->where('id', '!=', $id)
                ->orderBy('id', 'DESC')
                ->limit(6)
                ->get();
        });

        // Check if eshowcase exists
        if (!$eshowcase) {
            return response()->json(['error' => 'Eshowcase not found'], 404);
        }

        // Return the data as JSON
        return response()->json([
            'status' => 'success',
            'data' => [$eshowcase],
            'message' => 'E-Showcases retrieved successfully'
        ]);
    }

    public function e_showcaseDetails($id)
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return DB::table('site_settings')->first();
        });

        $cacheKey = 'eshowcase_' . $id;

        $eshowcase = Cache::remember($cacheKey, 60, function () use ($id) {
            return DB::table('eshowcases')
                ->select(
                    'eshowcases.id',
                    'eshowcases.name_en',
                    'eshowcases.name_bn',
                    'eshowcases.description_en',
                    'eshowcases.description_bn',
                    'eshowcases.price',
                    'eshowcases.updated_at',
                    'eshowcases.image',
                    'eshowcases.owner_user_id',
                    'eshowcases.created_at',
                    'eshowcases.status',
                    'users.member_id as user_member_id',
                    'users.name_en as user_name_en',
                    'users.name_bn as user_name_bn',
                    'users.email',
                    'users.division',
                    'users.phone',
                    'users.committee_id',
                    'committees.name_en as committee_name_en',
                    'committees.name_bn as committee_name_bn',
                    'users.position_id',
                    'positions.name_en as position_name_en',
                    'positions.name_bn as position_name_bn',
                    'profiles.profile_photo'
                )
                ->join('users', 'eshowcases.owner_user_id', '=', 'users.id')
                ->join('profiles', 'users.member_id', '=', 'profiles.member_id')
                ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                ->where('eshowcases.id', $id)
                ->first();
        });

        $latestEshowcases = Cache::remember('latest_eshowcases', 60, function () use ($id) {
            return DB::table('eshowcases')
                ->where('id', '!=', $id)
                ->orderBy('id', 'DESC')
                ->limit(6)
                ->get();
        });

        return view('front-end.pages.e-showcase.eshowcaseDetails', compact('siteSetting', 'eshowcase', 'latestEshowcases'));

    }

    public function person()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.person', compact('siteSetting'));
    }

    public function associate_organization()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.party.associate_organization', compact('siteSetting'));
    }

    public function affiliate_organization()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.party.affiliate_organization', compact('siteSetting'));
    }

    public function Constitution()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.party.constitution', compact('siteSetting'));
    }

    public function Ethics()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.party.ethics', compact('siteSetting'));
    }
    public function Commitment()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.party.commitment', compact('siteSetting'));
    }

    public function personFamily(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'nullable|string|max:255',
            'member_id' => 'nullable|string|max:255',
            'reason' => 'required|string',
            'expected_amount' => 'required|numeric',
            'document_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('document_image')) {
            $documentImage = $request->file('document_image');
            $documentImagePath = $documentImage->store('public/documents');
        } else {
            $documentImagePath = null;
        }

        // Create a new record in the database
        PersonFamily::create([
            'name' => $request->input('name'),
            'member_id' => $request->input('member_id'),
            'reason' => $request->input('reason'),
            'expected_amount' => $request->input('expected_amount'),
            'document_image' => $documentImagePath,
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your request has been submitted successfully.');
    }

    public function personandfamilybackend()
    {
        $personFamilies = PersonFamily::paginate(10); // Adjust the pagination as needed
        return view('back-end.pages.charity.personanddesister', compact('personFamilies'));
    }


    public function partyMembers()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.party_members', compact('siteSetting'));
    }

    public function disaster()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.disaster', compact('siteSetting'));
    }

    public function charityDinner()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.charity_dinner', compact('siteSetting'));
    }

    public function donate()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.donate', compact('siteSetting'));
    }


    public function religionContext()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.religion_context', compact('siteSetting'));
    }

    public function entertainment()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.entertainment', compact('siteSetting'));
    }

    public function education()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.education', compact('siteSetting'));
    }

    public function culturalActivity()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        return view('front-end.pages.Charity.cultural_activity', compact('siteSetting'));
    }

    public function primary_member(){
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        return view('front-end.pages.primary-member.index', compact('siteSetting'));
    }

    public function create_primary_member(Request $request){
        dd($request);
    }


    public function getConstitution(){
        return view('front-end.pages.constitution.index');
    }

}
