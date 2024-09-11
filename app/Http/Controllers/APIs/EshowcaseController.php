<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Http\Requests\EshowcaseRequest;
use App\Models\Eshowcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EshowcaseController extends Controller
{
    public function index()
    {
        try {
            $data = Eshowcase::orderBy('id', 'DESC')->paginate(21);


            return response()->json([
                'success' => true,
                'data' => $data,
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();
            $input['owner_user_id'] = Auth::id();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $input['image'] = $imagePath;
            }

            $eshowcase = Eshowcase::create($input);

            return response()->json([
                'success' => true,
                'data' => $eshowcase,
                'message' => 'Eshowcase created successfully.',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $eshowcase = Eshowcase::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $eshowcase,
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $eshowcase = Eshowcase::findOrFail($id);
            $input = $request->all();
            $input['owner_user_id'] = Auth::id();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $input['image'] = $imagePath;
            }

            $eshowcase->update($input);

            return response()->json([
                'success' => true,
                'data' => $eshowcase,
                'message' => 'Eshowcase updated successfully.',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $eshowcase = Eshowcase::findOrFail($id);
            // Delete the image
            if ($eshowcase->image && Storage::disk('public')->exists($eshowcase->image)) {
                Storage::disk('public')->delete($eshowcase->image);
            }
            $eshowcase->delete();

            return response()->json([
                'success' => true,
                'message' => 'Eshowcase deleted successfully.',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ], 500);
        }
    }

    public function eshowcase_status_change($id)
    {
        try {
            $eshowcase = Eshowcase::findOrFail($id);
            $eshowcase->status = !$eshowcase->status;
            $eshowcase->save();

            return response()->json([
                'success' => true,
                'data' => $eshowcase,
                'message' => 'Eshowcase status changed successfully.',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ], 500);
        }
    }
}
