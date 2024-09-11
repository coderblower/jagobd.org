<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EshowcaseRequest;
use App\Models\Eshowcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;

class EshowcaseController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Eshowcase::orderBy('id', 'DESC')->get();
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
                    ->addColumn('price', function ($data) {
                        return $data->price;
                    })
                    ->addColumn('image', function ($data) {
                        return '<a target="_blank" href="' . asset('storage/' . $data->image) . '">
                                   <img class="image" style="width:auto; height: 50px" src="' . asset('storage/' . $data->image) . '"/>
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
                                    <a href="' . route('eshowcase.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="' . route('eshowcase.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('eshowcase.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['image', 'name_en', 'name_bn', 'description_en', 'description_bn', 'price', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.eshowcase.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function create()
    {
        return view('back-end.pages.eshowcase.create');
    }

    public function store(EshowcaseRequest $request)
    {
        $input = $request->all();
        $input['owner_user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $input['image'] = $imagePath;
        }
        
        // Collect product images
        $productImages = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $file) {
                $path = $file->store('images', 'public');
                $productImages[] = $path;
            }
        }
        $input['product_images'] = json_encode($productImages);

        Eshowcase::create($input);

        return redirect()->route('eshowcase.index')->with('success', 'Eshowcase created successfully.');
    }

    public function show($id)
    {
        $eshowcase = Eshowcase::findOrFail($id);
        return view('back-end.pages.eshowcase.show', compact('eshowcase'));
    }

    public function edit($id)
    {
        $eshowcase = Eshowcase::findOrFail($id);
        return view('back-end.pages.eshowcase.edit', compact('eshowcase'));
    }

    public function update(Request $request, $id)
    {
        $eshowcase = Eshowcase::findOrFail($id);
        $input = $request->all();
        $input['owner_user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $input['image'] = $imagePath;
        }
        
        // Collect product images
        $productImages = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $file) {
                $path = $file->store('images', 'public');
                $productImages[] = $path;
            }
        }
        $input['product_images'] = json_encode($productImages);

        $eshowcase->update($input);

        return redirect()->route('eshowcase.index')->with('success', 'Eshowcase updated successfully.');
    }

    public function destroy($id)
    {
        $eshowcase = Eshowcase::findOrFail($id);
        $eshowcase->delete();

        return redirect()->route('eshowcase.index')->with('success', 'Eshowcase deleted successfully.');
    }

    public function eshowcase_status_change($id)
    {
        $eshowcase = Eshowcase::findOrFail($id);
        $eshowcase->status = !$eshowcase->status;
        $eshowcase->save();

        return redirect()->route('eshowcase.index')->with('success', 'Eshowcase status changed successfully.');
    }
    
}
