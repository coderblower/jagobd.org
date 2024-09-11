<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\Ratting;
use App\Models\ApplyForm;
use App\Models\District;
use App\Models\Division;
use App\Models\Organization;
use App\Models\RatingEvent;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $loggedInUser = Auth::user();

            // Validate that a user is authenticated
            if (!$loggedInUser) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }

            // Build the base query
            $query = DB::table('users')
                ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
                ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
                ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                ->leftJoin('divisions', 'profiles.division', '=', 'divisions.id')
                ->leftJoin('districts', 'profiles.district', '=', 'districts.id')
                ->leftJoin('upazilas', 'profiles.upazila', '=', 'upazilas.id')
                ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                ->select(
                    'users.id', 
                    'users.name_en as name',
                    'users.email as email',
                    'users.phone',
                    'profiles.nid_number as nid',
                    'profiles.dob as dob',
                    'profiles.gender',
                    'users.approved',
                    'users.status',
                    'users.rating',
                    'users.active',
                    'profiles.profile_photo',
                    'positions.name_en as positions',
                    'committees.name_en as committee',
                    'committees.name_bn as committee_bn',
                    'organizations.name_en as org',
                    'organizations.name_bn as org_bn',
                    'divisions.name_en as division',
                    'divisions.name_bn as division_bn',
                    'districts.name_en as district',
                    'districts.name_bn as district_bn',
                    'upazilas.name_en as upazila',
                    'upazilas.name_bn as upazila_bn'
                )
                ->where('users.id', '!=', $loggedInUser->id)
                ->where(function ($q) use ($loggedInUser) {
                    if (in_array($loggedInUser->committee_id, [1, 2, 3])) {
                        $q->whereNotNull('users.committee_id');
                    } else {
                        $q->where('users.organization_id', $loggedInUser->organization_id)
                            ->where(function ($subQuery) use ($loggedInUser) {
                                $subQuery->where('users.committee_id', $loggedInUser->committee_id)
                                    ->orWhereIn('users.committee_id', [1, 2, 3])
                                    ->where(function ($subSubQuery) use ($loggedInUser) {
                                        $subSubQuery->where('profiles.division', $loggedInUser->division)
                                            ->orWhere('profiles.district', $loggedInUser->district)
                                            ->orWhere('profiles.upazila', $loggedInUser->upazila)
                                            ->orWhere('profiles.ward', $loggedInUser->ward)
                                            ->orWhere('profiles.up', $loggedInUser->up);
                                    });
                            });
                    }
                });

            // Get the filtered users
            $users = $query->get();

            // Count ratings for each user
            foreach ($users as $user) {
                $ratingCount = Ratting::where('rated_user', $user->id)->count();
                $user->rating = $ratingCount;
            }

            // Return success response with data
            return response()->json([
                'status' => 'success',
                'data' => $users,
                'message' => 'Data retrieved successfully'
            ], 200);
        } catch (\Exception $e) {
            // Handle any unexpected exceptions
            return response()->json(['error' => 'Internal Server Error', 'message' => $e->getMessage()], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validatedData = $request->validate([
                'rated_user' => 'required|exists:users,id',
                'rating' => 'required|numeric|between:1,5',
                'review' => 'nullable|string|max:255',
            ]);
    
            $ratedUserId = $validatedData['rated_user'];
            $rating = $validatedData['rating'];
            // $review = $validatedData['review'];

            // Check if the logged-in user has already rated the rated user in the current quarter
            $lastRating = Ratting::where('rated_user', $ratedUserId)
                                ->where('rating_user', Auth::id())
                                ->where('created_at', '>=', now()->startOfQuarter())
                                ->where('created_at', '<=', now()->endOfQuarter())
                                ->exists();

            if ($lastRating) {
                return response()->json([
                    'message' => 'Already rated this user in the current quarter',
                ], 400); // HTTP status 400 for bad request
            }

            // Create a new rating
            $rating = new Ratting();
            $rating->rating_user = Auth::id();
            $rating->rated_user = $validatedData['rated_user'];
            $rating->rating = $validatedData['rating'];
            $rating->review = $validatedData['review'];
            $rating->save();
    
            // Update the rated user's rating count
            $ratedUser = User::find($validatedData['rated_user']);
            $ratedUser->rating = Ratting::where('rated_user', $ratedUser->id)->count();
            $ratedUser->save();
    
            // Return success response
            return response()->json([
                'status' => 'success',
                'data' => $rating,
                'message' => 'Rating created successfully'
            ], 201); // HTTP status 201 for resource created
        } catch (\Exception $e) {
            // Log the exception for debugging
            \Log::error('Error creating rating: ' . $e->getMessage());
    
            // Return error response
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
    
    public function rating_event_division()
    {
        $division = Division::all();
        $organization = Organization::all();
        return view('back-end.pages.rating.divison',compact('division','organization'));
    }
    
    public function rating_event_district()
    {
        $divisions = Division::all();
        $district = District::all();
        $organizations = Organization::all();
        return view('back-end.pages.rating.district',compact('divisions','organizations','district'));
    }
    public function getDistricts($division_id)
    {
        $districts = District::where('division_id', $division_id)->get();
        return response()->json($districts);
    }


    public function rating_event_upazila()
    {
        $divisions = Division::all();
        $organizations = Organization::all();
        return view('back-end.pages.rating.upazila', compact('divisions', 'organizations'));
    }

    public function getUpazilas($district_id)
    {
        $upazilas = Upazila::where('district_id', $district_id)->get();
        return response()->json($upazilas);
    }


    public function rating_event_union()
    {
        $divisions = Division::all();
        $organizations = Organization::all();
        return view('back-end.pages.rating.union', compact('divisions', 'organizations'));
    }

    public function getUnions($upazila_id)
    {
        $unions = Union::where('upazila_id', $upazila_id)->get();
        return response()->json($unions);
    }

    public function rating_event_ward()
    {
        $divisions = Division::all();
        $organizations = Organization::all();
        return view('back-end.pages.rating.ward', compact('divisions', 'organizations'));
    }

    public function getWards($union_id)
    {
        $wards = Ward::where('union_id', $union_id)->get();
        return response()->json($wards);
    }


    public function storeRatingEvent(Request $request)
    {
        $data = $request->validate([
            'organization_id' => 'required|exists:organizations,id',
            'division_id' => 'nullable|exists:divisions,id',
            'district_id' => 'nullable|exists:districts,id',
            'upazila_id' => 'nullable|exists:upazilas,id',
            'union_id' => 'nullable|exists:unions,id',
            'ward_id' => 'nullable|exists:wards,id',
        ]);

        RatingEvent::create($data);

        return redirect()->back()->with('success', 'Rating event stored successfully.');
    }


    public function show_apply_form(Request $request)
    {
        // Validate the incoming request to ensure it has a user_id and the user_id exists in the users table
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        // Retrieve the user_id from the request
        $userId = $request->input('user_id');

        // Retrieve the ApplyForm records along with the specified fields from the users table
        $applyForms = ApplyForm::where('user_id', $userId)
            ->with(['user' => function($query) {
                $query->select('id', 'division', 'district', 'upazila', 'ward');
            }])
            ->get();

        // Return a JSON response with the ApplyForm records and additional user information
        return response()->json([
            'message' => 'Apply forms retrieved successfully.',
            'data' => $applyForms
        ]);
    }



    public function store_apply_form(Request $request)
    {
        // Validate the incoming request data
        $data = $request->all();

        // Set the user_id to the authenticated user's ID
        $data['user_id'] = Auth::id();

        // Create a new ApplyForm record
        $applyForm = ApplyForm::create($data);

        // Return a JSON response with the created record and a success message
        return response()->json([
            'status' => 'success.',
            'data' => $applyForm,
            'message' => 'Form submitted successfully.',
        ], 201); // 201 Created status code
    }
}
