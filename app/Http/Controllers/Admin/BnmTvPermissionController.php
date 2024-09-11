<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bnmtv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BnmTvPermissionController extends Controller
{
    // public function index () {

    //     return view('back-end.pages.bnmtv.index');
    // }

    public function index(Request $request)
    {
        try {
            // Check if the request is an AJAX request
            if ($request->ajax()) {
                $data = Bnmtv::orderBy('id', 'DESC')->get();
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
                    ->addColumn('video_url', function ($data) {
                        return '<a href="' . $data->video_url . '" target="_blank">' . Str::limit($data->video_url, 40) . '</a>';
                    })
                    ->addColumn('thumbnail', function ($data) {
                        return '<a target="_blank" href="' . asset($data->thumbnail_url) . '">
                                <img class="image" style="width:auto; height: 50px" src="' . asset($data->thumbnail_url) . '"/>
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
                                    <a href="' . route('bnmtv.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="' . route('bnmtv.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('bnmtv.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['video_url', 'thumbnail', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.bnmtv.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function updateStatus(Request $request, $id)
    {
        $bnmtv = Bnmtv::find($id);

        if (!$bnmtv) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bnmtv not found',
            ], 404);
        }

        $bnmtv->status = $request->input('status');
        $bnmtv->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Status updated successfully',
        ]);
    }


    public function create()
    {
        return view('back-end.pages.bnmtv.create');
    }

    public function store(Request $request)
    {
        $userId = auth()->id();

        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'title_en' => 'nullable|string',
            'title_bn' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_path' => 'nullable|string',
            'thumbnail_url' => 'nullable|string',
            'like' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Create a new Bnmtv instance
        $bnmtv = new Bnmtv();
        $bnmtv->user_id = $userId;
        $bnmtv->title_en = $request->input('title_en');
        $bnmtv->title_bn = $request->input('title_bn');
        $bnmtv->description_en = $request->input('description_en');
        $bnmtv->description_bn = $request->input('description_bn');
        $bnmtv->video_url = $request->input('video_url');
        $bnmtv->video_path = $request->input('video_path');
        $bnmtv->thumbnail_url = $request->input('thumbnail_url');
        $bnmtv->like = $request->input('like', 0);
        $bnmtv->status = $request->input('status', 0);

        // Save the Bnmtv instance
        try {
            $bnmtv->save();
        } catch (\Exception $e) {
            // Handle any exceptions if saving fails
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to store Bnmtv',
                'error' => $e->getMessage(),
            ], 500);
        }

        return redirect()->route('bnmtv.index')->with('Success', 'Video Upload Successfully');
    }

    public function show($id)
    {
        $bnmtv = Bnmtv::find($id);

        if (!$bnmtv) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bnmtv not found',
            ], 404);
        }

        return view('back-end.pages.bnmtv.show', compact('bnmtv'));
    }

    public function edit($id)
    {
        $bnmtv = Bnmtv::find($id);

        if (!$bnmtv) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bnmtv not found',
            ], 404);
        }

        return view('back-end.pages.bnmtv.edit', compact('bnmtv'));
    }

    public function update(Request $request, $id)
    {
        $bnmtv = Bnmtv::find($id);

        if (!$bnmtv) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bnmtv not found',
            ], 404);
        }

        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'title_en' => 'nullable|string',
            'title_bn' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_path' => 'nullable|string',
            'thumbnail_url' => 'nullable|string',
            'like' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Update Bnmtv instance
        $bnmtv->title_en = $request->input('title_en');
        $bnmtv->title_bn = $request->input('title_bn');
        $bnmtv->description_en = $request->input('description_en');
        $bnmtv->description_bn = $request->input('description_bn');
        $bnmtv->video_url = $request->input('video_url');
        $bnmtv->video_path = $request->input('video_path');
        $bnmtv->thumbnail_url = $request->input('thumbnail_url');
        $bnmtv->like = $request->input('like', $bnmtv->like);
        $bnmtv->status = $request->input('status', $bnmtv->status);

        // Save the Bnmtv instance
        try {
            $bnmtv->save();
        } catch (\Exception $e) {
            // Handle any exceptions if saving fails
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update Bnmtv',
                'error' => $e->getMessage(),
            ], 500);
        }

        return redirect()->route('bnmtv.index')->with('Success', 'Video Upload Successfully');
    }

    public function destroy($id)
    {
        $bnmtv = Bnmtv::find($id);

        if (!$bnmtv) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bnmtv not found',
            ], 404);
        }

        // Delete the Bnmtv instance
        try {
            $bnmtv->delete();
        } catch (\Exception $e) {
            // Handle any exceptions if deletion fails
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete Bnmtv',
                'error' => $e->getMessage(),
            ], 500);
        }

        return redirect()->back()->with('Success', 'Video Upload Successfully');

    }

}
