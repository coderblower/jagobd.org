<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Marquee;

class MarqueeController extends Controller
{
    public function index()
    {
        $marquees = Marquee::all();
        return view('marquees.index', compact('marquees'));
    }

    public function create()
    {
        return view('marquees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_bn' => 'required',
        ]);

        Marquee::create($request->all());

        return redirect()->route('marquees.index')
            ->with('success', 'Marquee created successfully.');
    }

    public function show(Marquee $marquee)
    {
        return view('marquees.show', compact('marquee'));
    }

    public function edit(Marquee $marquee)
    {
        return view('marquees.edit', compact('marquee'));
    }

    public function update(Request $request, Marquee $marquee)
    {
        $request->validate([
            'name_en' => 'required',
            'name_bn' => 'required',
        ]);

        $marquee->update($request->all());

        return redirect()->route('marquees.index')
            ->with('success', 'Marquee updated successfully');
    }

    public function destroy(Marquee $marquee)
    {
        $marquee->delete();

        return redirect()->route('marquees.index')
            ->with('success', 'Marquee deleted successfully');
    }
}
