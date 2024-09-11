<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\AboutItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use DataTables;

class AboutItemController extends Controller
{
    private const DEFAULT_IMAGE_URL = 'uploads-image/no_silders_image.jpg';
     // Display a listing of the resource
     public function index(Request $request)
     {
         try {
             // Check if the request is an AJAX request
             if ($request->ajax()) {
                 $data = AboutItem::orderBy('id', 'DESC')->get();
                 return DataTables::of($data)
                     ->addIndexColumn()
                     ->addColumn('name_en', function ($data) {
                         return Str::limit($data->name_en, 40);
                     })
                     ->addColumn('name_bn', function ($data) {
                        return Str::limit($data->name_bn, 40);
                    })
                     ->addColumn('description_en', function ($data) {
                         return Str::limit($data->description_en, 40);
                     })
                     ->addColumn('description_bn', function ($data) {
                        return Str::limit($data->description_bn, 40);
                    })
                     ->addColumn('image', function ($data) {
                         return '<a target="_blank" href="' . asset($data->image) . '">
                                    <img class="image" style="width:auto; height: 50px" src="' . asset($data->image) . '"/>
                                 </a>';
                     })
                     ->addColumn('action', function ($data) {
                         return '<div role="group">
                                     <a href="' . route('about-items.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                         <i class="fa fa-eye"></i>
                                     </a>
                                     <a href="' . route('about-items.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                         <i class="fa fa-edit"></i>
                                     </a>
                                     <a href="' . route('about-items.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                         <i class="fa fa-trash"></i>
                                     </a>
                                 </div>';
                     })
                     ->rawColumns(['image', 'name_en','name_bn', 'description_en','description_bn','action'])
                     ->make(true);
             }
             return view('back-end.pages.about-items.index');
         } catch (\Exception $exception) {
             return redirect()->back()->with('error', $exception->getMessage());
         }
     }
    // Show the form for creating a new resource
    public function create()
    {
        return view('back-end.pages.about-items.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validator = $this->validateRequest($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : self::DEFAULT_IMAGE_URL;

            AboutItem::create([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => $image_url,
            ]);

            return redirect()->route('about-items.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for editing the specified resource
    public function edit(AboutItem $about_item)
    {
        return view('back-end.pages.about-items.edit', compact('about_item'));
    }

    // Update the specified resource in storage
    public function update(Request $request, AboutItem $about_item)
    {
        dd($request);
        $this->validateRequest($request);

        try {
            $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : $about_item->image;

            $about_item->update([
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => $image_url,
            ]);

            return redirect()->route('about-items.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Display the specified resource
    public function show(AboutItem $about_item)
    {
        return view('back-end.pages.about-items.show', compact('about_item'));
    }

    // Remove the specified resource from storage
    public function destroy(AboutItem $about_item)
    {
        try {
            $about_item->delete();
            return redirect()->route('about-items.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Private method to handle Image file upload
    private function uploadImage($image)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads-image/about-items');
        $image->move($destinationPath, $imageName);
        return 'uploads-image/about-items/' . $imageName;
    }

    // Private method to validate request data
    private function validateRequest($request)
    {
        return Validator::make($request->all(), [
            'name_en' => 'required|string',
            'name_bn' => 'required|string',
            'description_en' => 'required|string',
            'description_bn' => 'required|string',
        ]);
    }
}
