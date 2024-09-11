<?php

namespace App\Http\Controllers;

use App\Models\NidVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NidVerificationController extends Controller
{
    public function store(Request $request)
    {
        // Validation rules for the fields, making all fields nullable
        $validator = Validator::make($request->all(), [
            'nid_no' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'name_bn' => 'nullable|string|max:255',
            'father' => 'nullable|string|max:255',
            'mother' => 'nullable|string|max:255',
            'birth_date' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:255',
            'birth_place' => 'nullable|string|max:255',
            'issue_date' => 'nullable',
            'mrz' => 'nullable|string|max:255',
            'face_match' => 'nullable|boolean',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'nid_front_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'nid_back_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // If validation fails, return a 422 error with validation messages
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Create a new NidVerification record with validated data
        $nidVerification = NidVerification::create($validator->validated());

        // Handle the image fields separately
        $imageFields = ['profile_image', 'nid_front_image', 'nid_back_image'];

        foreach ($imageFields as $field) {
            $image = $request->file($field);

            if ($image) {
                $path = $image->store('nid_verifications/' . $nidVerification->id, 'public');

                // Update model with image path
                $nidVerification->$field = $path;
                $nidVerification->save();
            }
        }

        // Return a successful response with the created data
        return response()->json([
            'success' => true,
            'data' => $nidVerification,
            'message' => 'NID Details stored successfully.',
        ], 201);
    }
}
