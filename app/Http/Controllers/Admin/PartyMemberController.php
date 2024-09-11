<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use App\Models\Organization;
use App\Models\PartyMember;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class PartyMemberController extends Controller
{
     // Display a listing of the resource
     public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = PartyMember::with(['committee', 'position','organization'])->orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name_en', function ($data) {
                        return $data->name_en;
                    })
                    ->addColumn('name_bn', function ($data) {
                        return $data->name_bn;
                    })
                    ->addColumn('committee', function ($data) {
                        return $data->committee ? $data->committee->name_en : 'N/A';
                    })
                    ->addColumn('position', function ($data) {
                        return $data->position ? $data->position->name_en : 'N/A';
                    })
                    ->addColumn('organization', function ($data) {
                        return $data->organization ? $data->organization->name_en : 'N/A';
                    })
                    ->addColumn('party_name_en', function ($data) {
                        return $data->party_name_en;
                    })
                    ->addColumn('party_name_bn', function ($data) {
                        return $data->party_name_bn;
                    })
                    ->addColumn('image', function ($data) {
                        return '<a target="_blank" href="' . asset($data->image) . '">
                                    <img class="image" style="width:auto; height: 50px" src="' . asset($data->image) . '"/>
                                </a>';
                    })
                    ->addColumn('status', function ($data) {
                        $selected = $data->status == 1 ? 'selected' : '';
                        return "<select id='status-$data->id' onchange='StatusChange([$data->id])' class='form-control'>
                                    <option $selected value='1'>Active</option>
                                    <option " . (!$selected ? 'selected' : '') . " value='0'>Inactive</option>
                                </select>";
                    })
                    ->addColumn('action', function ($data) {
                        return '<div role="group">
                                    <a href="' . route('party-member.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('party-member.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['image', 'name_en', 'name_bn','committee', 'position','party_name_en','party_name_bn', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.party-member.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $committee = Committee::get();
            $position = Position::get();
            $organization = Organization::get();
            return view('back-end.pages.party-member.create',compact('committee','position','organization'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }


    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name_en' => 'required',
            'name_bn' => 'required',
            'committee_id' => 'required',
            'position_id' => 'required',
            'organization_id' => 'required',
            'party_name_en' => 'required',
            'party_name_bn' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : null;

            PartyMember::create([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'committee_id' => $request->committee_id,
                'position_id' => $request->position_id,
                'organization_id' => $request->organization_id,
                'party_name_en' => $request->party_name_en,
                'party_name_bn' => $request->party_name_bn,
                'image' => $image_url,
            ]);

            // Redirect with success message if creation is successful
            return redirect()->route('party-member.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for editing the specified resource
    public function edit(PartyMember $partyMember)
    {
        try {
            $committee = Committee::get();
            $position = Position::get();
            $organization = Organization::get();
           
            return view('back-end.pages.party-member.edit',compact('partyMember','committee','position','organization'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    

    // Update the specified resource in storage
    public function update(Request $request, PartyMember $partyMember)
    {
        // Validate the incoming request data
        $request->validate([
            'name_en' => 'required',
            'name_bn' => 'required',
            'committee_id' => 'required',
            'position_id' => 'required',
            'organization_id' => 'required',
            'party_name_en' => 'required',
            'party_name_bn' => 'required',
        ]);

        try {
            // Check if a new image file is uploaded
            $image_url = $partyMember->image; // Keep the old image if no new one is uploaded
            if ($request->hasFile('image')) {
                $image_url = $this->uploadImage($request->file('image'));
            }

            // Update the PartyMember instance with the new data
            $partyMember->update([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'committee_id' => $request->committee_id,
                'position_id' => $request->position_id,
                'organization_id' => $request->organization_id,
                'party_name_en' => $request->party_name_en,
                'party_name_bn' => $request->party_name_bn,
                'image' => $image_url,
            ]);

            // Redirect with success message if update is successful
            return redirect()->route('party-member.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(PartyMember $partyMember)
    {
        try {
            return view('back-end.pages.party-member.show', compact('partyMember'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    // Remove the specified resource from storage

    public function destroy(PartyMember $partyMember)
    {
        try {
            $partyMember->delete();
            return redirect()->route('party-member.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }

    // news_status_change 
    
    public function party_member_status_change(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required',
        ]);

        PartyMember::where('id', $request->id)->update(['status' => $request->status]);

        return back()->with('success', 'News status updated successfully.');
    }

    // Private method to handle Image file upload
    private function uploadImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads-image/party-member');
        $image->move($destinationPath, $imageName);
        return 'uploads-image/party-member/' . $imageName;
    }

}