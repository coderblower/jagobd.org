<?php

namespace App\Http\Controllers;

use App\Models\Dofa;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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

                $data = Dofa::orderBy('id', 'DESC')->get();
                $x = DataTables::of($data)
                    ->addIndexColumn()

                    ->addColumn('title', function ($data) {
                       return Str::limit($data->title, 40);
                   })
                    ->addColumn('description', function ($data) {
                        return Str::limit($data->description, 40);
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
                    ->rawColumns(['id', 'title','description', 'action'])
                    ->make(true);

                    dd($x);
                    return $x;

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




            $image_url = $request->hasFile('image-mini') ? $this->uploadImage($request->file('image-mini'), $data) : self::DEFAULT_IMAGE_URL;
            $image_url_1 = $request->hasFile('image-large') ? $this->uploadImage($request->file('image-large'), $data) : self::DEFAULT_IMAGE_URL;

            $data['image-mini'] = $image_url;
            $data['image-large'] = $image_url_1;
            $data->save();



            return redirect()->route('about-items.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dofa $dofa)
    {
        return view('back-end.pages.dofa.edit', compact('dofa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function uploadImage($image, $data)
    {
        $name = join('_', explode(" ", $data->title));
        $imageName = $name .'_'. $data->id.'.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads-image/dofa');
        $image->move($destinationPath, $imageName);
        return 'uploads-image/dofa/' . $imageName;
    }

}
