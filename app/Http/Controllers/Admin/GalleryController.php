<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Image;

class GalleryController extends Controller
{
        // Display a listing of the resource
        public function index(Request $request)
        {
            try {
                // Check if the request is an AJAX request
                if ($request->ajax()) {
                    $data = Gallery::orderBy('id', 'DESC')->get();
                    return DataTables::of($data)
                        ->addIndexColumn()
                        ->addColumn('name_en', function ($data) {
                            return $data->name_en;
                        })
                        ->addColumn('name_bn', function ($data) {
                            return $data->name_bn;
                        })
                        ->addColumn('image', function ($data) {
                            return '<a target="_blank" href="' . asset($data->image) . '">
                                       <img class="image" style="width:auto; height: 50px" src="' . asset($data->image) . '"/>
                                    </a>';
                        })
                        ->addColumn('action', function ($data) {
                            return '<div role="group">
                                        <a href="' . route('gallery.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="' . route('gallery.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>';
                        })
                        ->rawColumns(['image', 'name_en','name_bn', 'action'])
                        ->make(true);
                }
                return view('back-end.pages.gallery.index');
            } catch (\Exception $exception) {
                return redirect()->back()->with('error', $exception->getMessage());
            }
        }
    
        // Show the form for creating a new resource
        public function create()
        {
            try {
                return view('back-end.pages.gallery.create');
            } catch (\Exception $exception) {
                return back()->with('error', $exception->getMessage());
            }
        }
    
        // Store a newly created resource in storage
        public function store(Request $request)
        {
            // Validate the incoming request data
            $validator = Validator::make($request->all(), [
                'name_en' => 'required',
                'name_bn' => 'required',
                'image' => 'nullable',
            ]);
    
            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            try {
                $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : null;
    
                Gallery::create([
                    'name_en' => $request->name_en,
                    'name_bn' => $request->name_bn,
                    'image' => $image_url,
                ]);
    
                // Redirect with success message if creation is successful
                return redirect()->route('gallery.index')->with('success', 'Added Successfully');
            } catch (\Exception $exception) {
                // Redirect back with error message if any exception occurs
                return redirect()->back()->with('error', $exception->getMessage());
            }
        }
    
        // Show the form for editing the specified resource
        public function edit(Gallery $gallery)
        {
            try {
                return view('back-end.pages.gallery.edit', compact('gallery'));
            } catch (\Exception $exception) {
                return back()->with('error', $exception->getMessage());
            }
        }
    
        // Update the specified resource in storage
        public function update(Request $request, Gallery $gallery)
        {
            // Validate the incoming request data
            $request->validate([
                'name_en' => 'required',
                'name_bn' => 'required',
            ]);
    
            try {
                $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : $gallery->image;
    
                $gallery->update([
                    'name_en' => $request->name_en,
                    'name_bn' => $request->name_bn,
                    'image' => $image_url,
                ]);
    
                // Redirect with success message if update is successful
                return redirect()->route('gallery.index')->with('success', 'Updated Successfully');
            } catch (\Exception $exception) {
                // Redirect back with error message if any exception occurs
                return redirect()->back()->with('error', $exception->getMessage());
            }
        }
    
        // Remove the specified resource from storage
        public function destroy(Gallery $gallery)
        {
            try {
                $gallery->delete();
                return redirect()->route('gallery.index')->with('success', 'Deleted Successfully');
            } catch (\Exception $e) {
                return back()->with('error', $exception->getMessage());
            }
        }
    
        // Private method to handle PDF file upload
        private function uploadImage($imgae)
        {
            $imageName = time() . '.' . $imgae->getClientOriginalExtension();
            $destinationPath = public_path('uploads-image/gallary-image');
            $imgae->move($destinationPath, $imageName);
            return 'uploads-image/gallary-image/' . $imageName;
        }
    }
