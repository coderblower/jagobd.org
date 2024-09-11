<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DataTables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Slider::orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('title_en', function ($data) {
                        return Str::limit($data->title_en, 40);
                    })
                    ->addColumn('title_bn', function ($data) {
                        return Str::limit($data->title_bn, 40);
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
                    ->addColumn('status', function ($data) {
                        $selected = $data->status == 1 ? 'selected' : '';
                        return "<select id='status-$data->id' onchange='StatusChange([$data->id])' class='form-control'>
                                    <option $selected value='1'>Active</option>
                                    <option " . (!$selected ? 'selected' : '') . " value='0'>Inactive</option>
                                </select>";
                    })
                    ->addColumn('action', function ($data) {
                        return '<div class="" role="group">
                                    <a href="' . route('slider.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="' . route('slider.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="' . route('slider.destroy', [$data->id]) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['image', 'title_en','title_bn', 'description_en','description_bn', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.slider.index');
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
            return view('back-end.pages.slider.create');
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_en' => 'required',
            'title_bn' => 'required',
            'description_en' => 'nullable',
            'description_bn' => 'nullable',
            'status' => 'nullable',
            'image' => 'nullable',
        ]);

        try {
            $image_url = 'uploads-image/no_sliders_image.jpg';

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/sliders'), $imageName);
                $image_url = 'uploads-image/sliders/' . $imageName;
            }

            $slider = new Slider($validatedData);
            $slider->image = $image_url;
            $slider->save();

            return redirect()->route('slider.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        try {
            return view('back-end.pages.slider.show', compact('slider'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('back-end.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title_en' => 'required',
            'title_bn' => 'required',
            'description_en' => 'nullable',
            'description_bn' => 'nullable',
            'status' => 'nullable',
            'image' => 'nullable',
        ]);

        try {
            $image_url = $slider->image;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads-image/sliders'), $imageName);
                $image_url = 'uploads-image/sliders/' . $imageName;
            }

            $slider->update(array_merge($request->all(), ['image' => $image_url]));

            return redirect()->route('slider.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            $slider->delete();
            return redirect()->route('slider.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Change the status of the specified resource.
     */
    public function slider_status_change(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required',
        ]);

        Slider::where('id', $request->id)->update(['status' => $request->status]);

        return back()->with('success', 'Slider status updated successfully.');
    }
}
