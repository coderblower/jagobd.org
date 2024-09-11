<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use DataTables;

class ContactUsController extends Controller
{


    public function __construct()
        {
            $this->middleware('auth')->except(['store']);

        }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = ContactUs::orderBy('id', 'DESC')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function ($data) {
                        return $data->name;
                    })
                    ->addColumn('email', function ($data) {
                        return $data->email;
                    })
                    ->addColumn('phone', function ($data) {
                        return $data->phone;
                    })
                    ->addColumn('subject', function ($data) {
                        return $data->subject;
                    })
                    ->addColumn('message', function ($data) {
                        return $data->message;
                    })
                    ->addColumn('action', function ($data) {
                        return '<div class="" role="group">
                                    <a href="' . route('contactus.destroy', [$data->id]) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['name', 'email','phone','subject','message', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.contact-us.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        try {
        ContactUs::create($request->all());
            return redirect()->route('frontend.index')->with('success', 'Message Sent Successfully.');
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }
/**
     * delete .
     */

    public function destroy($id)
    {
        try {
            $data = ContactUs::findOrFail($id);

        // Delete the record
        $data->delete();

            return redirect()->route('contactus.index')
                ->with('success', 'Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }
}
