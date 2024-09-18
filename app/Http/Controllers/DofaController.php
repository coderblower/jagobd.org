<?php

namespace App\Http\Controllers;

use App\Models\Dofa;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use DataTables;


class DofaController extends Controller
{
    private const DEFAULT_IMAGE_URL = 'uploads-image/no_silders_image.jpg';
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        try {
            // Check if the request is an AJAX request

            if ($request->ajax()) {
                $data = Dofa::orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('title', function ($data) {
                        return Str::limit($data->title, 40);
                    })


                    ->addColumn('description', function ($data) {
                        return Str::limit($data->description, 40);
                    })



                    ->addColumn('action', function ($data) {
                        return '<div role="group">
                                    <a href="' . route('dofa.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="' . route('dofa.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('dofa.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['title','description','action'])
                    ->make(true);
            }

            return view('back-end.pages.dofa.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }





    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-end.pages.dofa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $data = Dofa::create([
                'title' => $request->title,
                'description' => $request->description
            ]);




            $image_url = $request->hasFile('image-mini') ? $this->uploadImage($request->file('image-mini'), $data, 'image-mini') : self::DEFAULT_IMAGE_URL;
            $image_url_1 = $request->hasFile('image-large') ? $this->uploadImage($request->file('image-large'), $data,  'image-large') : self::DEFAULT_IMAGE_URL;

            $data['image-mini'] = $image_url;
            $data['image-large'] = $image_url_1;
            $data->save();



            return redirect()->route('dofa.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return view('back-end.pages.news.show', compact('news'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dofa $dofa)
    {



        try {
            return view('back-end.pages.dofa.edit', compact('dofa'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dofa $dofa)
    {


        try {
            // Check if a new image file is uploaded
            $image_mini_url = $dofa['image-mini']; // Default to existing image
            $image_large_url = $dofa['image-large'];

            if ($request->hasFile('image-mini')) {
                $image_mini_url =  $this->uploadImage($request->file('image-mini'), $dofa, 'image-mini');  // Store the image in the 'public/images' directory
            }
            if ($request->hasFile('image-large')) {
                $image_large_url =  $this->uploadImage($request->file('image-large'), $dofa, 'image-large');  // Store the image in the 'public/images' directory
            }

            // Update the News instance with the new data
            $dofa->update([
                'title' => $request->title,
                'description' => $request->description,
                'image-mini' => $image_mini_url,
                'image-large' => $image_large_url,
            ]);



            // Redirect with success message if update is successful
            return redirect()->route('dofa.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dofa $dofa)
    {
        try {
            $dofa->delete();
            return redirect()->route('dofa.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }

    private function uploadImage($image, $data, $names)
    {
        $name = join('_', explode(" ", $data->title));
        $imageName = $name . '_'.$names.'_'. $data->id.'.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads-image/dofa');
        $image->move($destinationPath, $imageName);
        return 'uploads-image/dofa/' . $imageName;
    }

}
