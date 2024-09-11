<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Display a listing of the enrollments.
    public function index()
    {
        $enrollments = Enrollment::with('course', 'user')->get();
        return view('back-end.pages.enrollments.index', compact('enrollments'));
    }

    // Show the form for creating a new enrollment.
    public function create()
    {
        $courses = Course::all();
        $users = User::all();
        return view('back-end.pages.enrollments.create', compact('courses', 'users'));
    }

    // Store a newly created enrollment in storage.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:enrolled,completed,canceled',
        ]);

        Enrollment::create($validated);

        return redirect()->back()->with('success', 'Enrollment created successfully.');
    }

    // Display the specified enrollment.
    public function show(Enrollment $enrollment)
    {
        return view('back-end.pages.enrollments.show', compact('enrollment'));
    }

    // Show the form for editing the specified enrollment.
    public function edit(Enrollment $enrollment)
    {
        $courses = Course::all();
        $users = User::all();
        return view('back-end.pages.enrollments.edit', compact('enrollment', 'courses', 'users'));
    }

    // Update the specified enrollment in storage.
    public function update(Request $request, Enrollment $enrollment)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:enrolled,completed,canceled',
        ]);

        $enrollment->update($validated);

        return redirect()->route('enrollments.index')->with('success', 'Enrollment updated successfully.');
    }

    // Remove the specified enrollment from storage.
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Enrollment deleted successfully.');
    }
}