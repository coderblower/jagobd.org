<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormPdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DataTables;

class FormPdfController extends Controller
{
    // Display a listing of the resource
    public function index(Request $request)
    {
        try {
            // Check if the request is an AJAX request
            if ($request->ajax()) {
                $data = FormPdf::orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('title_en', function ($data) {
                        return $data->title_en;
                    })
                    ->addColumn('title_bn', function ($data) {
                        return $data->title_bn;
                    })
                    ->addColumn('pdf', function ($data) {
                        return '<a target="_blank" href="' . asset($data->pdf) . '">
                                    <img class="pdf" style="width:auto; height: 50px" src="' . asset('/backend/dist/img/visual.png') . '"/>
                                </a>';
                    })
                    ->addColumn('action', function ($data) {
                        return '<div role="group">
                                    <a href="' . route('formPdf.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="' . route('formPdf.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['pdf', 'title_en', 'title_bn','action'])
                    ->make(true);
            }
            return view('back-end.pages.formPdf.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for creating a new resource
    public function create()
    {
        try {
            return view('back-end.pages.formPdf.create');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title_en' => 'required',
            'title_bn' => 'required',
            'pdf' => 'nullable|mimes:pdf|max:10240', // Max size 10MB, adjust as needed
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Check if a new PDF file is uploaded
            $pdf_url = $request->hasFile('pdf') ? $this->uploadPdf($request->file('pdf')) : null;

            // Create a new FormPdf instance with the validated data
            FormPdf::create([
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'pdf' => $pdf_url,
            ]);

            // Redirect with success message if creation is successful
            return redirect()->route('formPdf.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Show the form for editing the specified resource
    public function edit(FormPdf $formPdf)
    {
        try {
            return view('back-end.pages.formPdf.edit', compact('formPdf'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    // Update the specified resource in storage
    public function update(Request $request, FormPdf $formPdf)
    {
        // Validate the incoming request data
        $request->validate([
            'title_en' => 'required',
            'title_bn' => 'required',
            'pdf' => 'nullable|mimes:pdf|max:10240', // Max size 10MB, adjust as needed
        ]);

        try {
            // Check if a new PDF file is uploaded
            $pdf_url = $request->hasFile('pdf') ? $this->uploadPdf($request->file('pdf')) : $formPdf->pdf;

            // Update the FormPdf instance with the new data
            $formPdf->update([
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'pdf' => $pdf_url,
            ]);

            // Redirect with success message if update is successful
            return redirect()->route('formPdf.index')->with('success', 'Updated Successfully');
        } catch (\Exception $exception) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    // Remove the specified resource from storage
    public function destroy(FormPdf $formPdf)
    {
        try {
            $formPdf->delete();
            return redirect()->route('formPdf.index')->with('success', 'Deleted Successfully');
        } catch (\Exception $e) {
            return back()->with('error', $exception->getMessage());
        }
    }

    // Private method to handle PDF file upload
    private function uploadPdf($pdf)
    {
        $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
        $destinationPath = public_path('uploads-pdf/formPdf');
        $pdf->move($destinationPath, $pdfName);
        return 'uploads-pdf/formPdf/' . $pdfName;
    }
}
