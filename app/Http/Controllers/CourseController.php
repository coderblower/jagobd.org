<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $courses = Course::all();
        return view('back-end.pages.course.index', compact('courses'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $instructors = Instructor::all();
        return view('back-end.pages.course.create', compact('instructors'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instructor_id' => 'required|exists:users,id',
            'duration' => 'required|integer|min:1',
            'level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0',
        ]);

        Course::create($validated);

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    // Display the specified resource.
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Show the form for editing the specified resource.
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instructor_id' => 'required|exists:users,id',
            'duration' => 'required|integer|min:1',
            'level' => 'required|in:beginner,intermediate,advanced',
            'price' => 'required|numeric|min:0',
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}