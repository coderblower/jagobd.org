<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Upazila;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\Union;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Upazila::with(['district'])->orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name_en', function ($data) {
                        return $data->name_en;
                    })
                    ->addColumn('name_bn', function ($data) {
                        return $data->name_bn;
                    })
                    ->addColumn('url', function ($data) {
                        return $data->url;
                    })
                    ->addColumn('district', function ($data) {
                        return $data->district ? $data->district->name_en : 'N/A';
                    })
                    ->addColumn('action', function ($data) {
                        return '<div role="group">
                                    <a href="' . route('upazila.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('upazila.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['name_en','name_bn','district','url','action'])
                    ->make(true);
            }
            return view('back-end.pages.upazila.index');
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
            $district = District::get();
            return view('back-end.pages.upazila.create',compact('district'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }


    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name_en' => 'required',
            'name_bn' => 'required',
            'url' => 'required',
            'district_id' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Upazila::create([
                'name_en' => $request->name_en,
                'url' => $request->url,
                'name_bn' => $request->name_bn,
                'district_id' => $request->district_id,
            ]);

            // Redirect with success message if creation is successful
            return redirect()->route('upazila.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for editing the specified resource
    public function edit(Upazila $upazila)
    {
        try {
            $district = District::get();
            return view('back-end.pages.upazila.edit',compact('upazila','district'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    

    // Update the specified resource in storage
    public function update(Request $request, Upazila $upazila)
    {
        // Validate the incoming request data
        $request->validate([
            'name_en' => 'required',
            'name_bn' => 'required',
            'url' => 'required',
            'district_id' => 'required',
        ]);

        try {
            $upazila->update([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'url' => $request->url,
                'district_id' => $request->district_id,
            ]);

            // Redirect with success message if update is successful
            return redirect()->route('upazila.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Remove the specified resource from storage

    public function destroy(Upazila $upazila)
    {
        try {
            $upazila->delete();
            return redirect()->route('upazila.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
