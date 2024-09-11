<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Division;
use Illuminate\Support\Facades\Validator;
use DataTables;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = District::with(['division'])->orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name_en', function ($data) {
                        return $data->name_en;
                    })
                    ->addColumn('name_bn', function ($data) {
                        return $data->name_bn;
                    })
                    ->addColumn('division', function ($data) {
                        return $data->division ? $data->division->name_en : 'N/A';
                    })
                    ->addColumn('lat', function ($data) {
                        return $data->lat;
                    })
                    ->addColumn('lon', function ($data) {
                        return $data->lon;
                    })
                    ->addColumn('url', function ($data) {
                        return $data->url;
                    })
                    ->addColumn('action', function ($data) {
                        return '<div role="group">
                                    <a href="' . route('district.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('district.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['name_en','name_bn','district','lat','lon','url','action'])
                    ->make(true);
            }
            return view('back-end.pages.district.index');
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
            $division = Division::get();
            return view('back-end.pages.district.create',compact('division'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }


    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'division_id' => 'required',
            'name_en' => 'required',
            'name_bn' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'url' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            District::create([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'division_id' => $request->division_id,
                'lat' => $request->lat,
                'lon' => $request->lon,
                'url' => $request->url,
            ]);

            // Redirect with success message if creation is successful
            return redirect()->route('district.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for editing the specified resource
    public function edit(District $district)
    {
        try {
            $division = Division::get();
            return view('back-end.pages.district.edit',compact('division','district'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    

    // Update the specified resource in storage
    public function update(Request $request, District $district)
    {
        // Validate the incoming request data
        $request->validate([
            'division_id' => 'required',
            'name_en' => 'required',
            'name_bn' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'url' => 'required',
        ]);

        try {
            $district->update([
               'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'division_id' => $request->division_id,
                'lat' => $request->lat,
                'lon' => $request->lon,
                'url' => $request->url,
            ]);

            // Redirect with success message if update is successful
            return redirect()->route('district.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Remove the specified resource from storage

    public function destroy(District $district)
    {
        try {
            $district->delete();
            return redirect()->route('district.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
