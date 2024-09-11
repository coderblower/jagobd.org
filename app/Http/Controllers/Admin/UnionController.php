<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\Union;
use App\Models\Upazila;

class UnionController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Union::with(['upazila'])->orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name_en', function ($data) {
                        return $data->name_en;
                    })
                    ->addColumn('name_bn', function ($data) {
                        return $data->name_bn;
                    })
                    ->addColumn('upazila', function ($data) {
                        return $data->upazila ? $data->upazila->name_en : 'N/A';
                    })
                    ->addColumn('action', function ($data) {
                        return '<div role="group">
                                    <a href="' . route('union.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('union.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['name_en','name_bn','upazila','action'])
                    ->make(true);
            }
            return view('back-end.pages.union.index');
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
            $upazila = Upazila::get();
            return view('back-end.pages.union.create',compact('upazila'));
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
            'upazila_id' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Union::create([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'upazila_id' => $request->upazila_id,
            ]);

            // Redirect with success message if creation is successful
            return redirect()->route('union.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for editing the specified resource
    public function edit(Union $union)
    {
        try {
            $upazila = Upazila::get();
            return view('back-end.pages.union.edit',compact('union','upazila'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    

    // Update the specified resource in storage
    public function update(Request $request, Union $union)
    {
        // Validate the incoming request data
        $request->validate([
            'name_en' => 'required',
            'name_bn' => 'required',
            'upazila_id' => 'required',
        ]);

        try {
            $union->update([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'upazila_id' => $request->upazila_id,
            ]);

            // Redirect with success message if update is successful
            return redirect()->route('union.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Remove the specified resource from storage

    public function destroy(Union $union)
    {
        try {
            $union->delete();
            return redirect()->route('union.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
