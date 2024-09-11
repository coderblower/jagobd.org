<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('back-end.pages.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.pages.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:instructors',
            'phone' => 'nullable|string',
            'bio' => 'nullable|string',
            'profile_picture' => 'nullable|file',
        ]);

        $instructor = new Instructor();
        $instructor->name = $request->input('name');
        $instructor->email = $request->input('email');
        $instructor->phone = $request->input('phone');
        $instructor->bio = $request->input('bio');
        $instructor->profile_picture = $request->file('profile_picture')->store('public/profile_pictures');

        $instructor->save();

        return redirect()->route('instructors.index')->with('success', 'Instructor created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        return view('back-end.pages.instructors.show', compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        return view('back-end.pages.instructors.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:instructors,email,' . $instructor->id,
            'phone' => 'nullable|string',
            'bio' => 'nullable|string',
            'profile_picture' => 'nullable|file',
        ]);

        $instructor->name = $request->input('name');
        $instructor->email = $request->input('email');
        $instructor->phone = $request->input('phone');
        $instructor->bio = $request->input('bio');

        if ($request->hasFile('profile_picture')) {
            $instructor->profile_picture = $request->file('profile_picture')->store('public/profile_pictures');
        }

        $instructor->save();

        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully!');
    }
}