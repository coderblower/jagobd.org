<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        try {
            $about = About::first();

            return view('back-end.pages.about.index', compact('about'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'title_en' => 'required|string',
        'title_bn' => 'required|string',
        'image1' => 'image',
        'image2' => 'image',
        'description_en' => 'required|string',
        'description_bn' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $about = About::firstOrNew();
        $about->fill($request->only([
            'title_en',
            'title_bn',
            'description_en',
            'description_bn',
        ]));

        if ($request->hasFile('image1')) {
            $about->image1 = $this->uploadFile($request->file('image1'), 'about-image');
        }
        
        if ($request->hasFile('image2')) {
            $about->image2 = $this->uploadFile($request->file('image2'), 'about-image');
        }

        $about->save();

        return redirect()->route('about.index')->with('success', 'About updated successfully');
    } catch (\Exception $exception) {
        return redirect()->back()->with('error', $exception->getMessage());
    }
}

    private function uploadFile($file, $path)
    {
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('uploads-image/' . $path), $fileName);
        return 'uploads-image/' . $path . '/' . $fileName;
    }
}
