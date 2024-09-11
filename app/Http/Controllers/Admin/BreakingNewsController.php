<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BreakingNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use DataTables;

class BreakingNewsController extends Controller
{
 // Display a listing of the resource
 public function index(Request $request)
 {
     try {
         // Check if the request is an AJAX request
         if ($request->ajax()) {
             $data = BreakingNews::orderBy('id', 'DESC')->get();
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('name_en', function ($data) {
                     return $data->name_en;
                 })
                 ->addColumn('name_bn', function ($data) {
                     return $data->name_bn;
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
                                 <a href="' . route('breakingNews.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                     <i class="fa fa-edit"></i>
                                 </a>
                                 <a href="' . route('breakingNews.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                     <i class="fa fa-trash"></i>
                                 </a>
                             </div>';
                 })
                 ->rawColumns([ 'name_en','name_bn','status','action'])
                 ->make(true);
         }
         return view('back-end.pages.breakingNews.index');
     } catch (\Exception $exception) {
         return redirect()->back()->with('error', $exception->getMessage());
     }
 }

 
 /**
  * Show the form for creating a new resource.
  */
 public function create()
 {
     try {
         return view('back-end.pages.breakingNews.create');
     } catch (\Exception $exception) {
         return back()->with($exception->getMessage());
     }
 }


 // Store a newly created resource in storage
 public function store(Request $request)
 {
     // Validate the incoming request data
     $validator = Validator::make($request->all(), [
         'name_en' => 'required',
         'name_bn' => 'required',
     ]);

     // Check if validation fails
     if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
     }

     try {
        BreakingNews::create([
             'name_en' => $request->name_en,
             'name_bn' => $request->name_bn,
         ]);

         // Redirect with success message if creation is successful
         return redirect()->route('breakingNews.index')->with('success', 'Added Successfully');
     } catch (\Exception $exception) {
         // Redirect back with error message if any exception occurs
         return redirect()->back()->with('error', $exception->getMessage());
     }
 }

 // Show the form for editing the specified resource
 public function edit(BreakingNews $breakingNews)
 {
     try {
         return view('back-end.pages.breakingNews.edit', compact('breakingNews'));
     } catch (\Exception $exception) {
         return back()->with('error', $exception->getMessage());
     }
 }

 

 // Update the specified resource in storage
 public function update(Request $request, BreakingNews $breakingNews)
 {
     // Validate the incoming request data
     $request->validate([
         'name_en' => 'required',
         'name_bn' => 'required',
     ]);

     try {
         $breakingNews->update([
            'name_en' => $request->name_en,
            'name_bn' => $request->name_bn,
         ]);

         // Redirect with success message if update is successful
         return redirect()->route('breakingNews.index')->with('success', 'Updated Successfully');
     } catch (\Exception $exception) {
         // Redirect back with error message if any exception occurs
         return redirect()->back()->with('error', $exception->getMessage());
     }
 }

 /**
  * Display the specified resource.
  */
 public function show(BreakingNews $breakingNews)
 {
     try {
         return view('back-end.pages.breakingNews.show', compact('breakingNews'));
     } catch (\Exception $exception) {
         return back()->with($exception->getMessage());
     }
 }

 // Remove the specified resource from storage

 public function destroy(BreakingNews $breakingNews)
 {
     try {
         $breakingNews->delete();
         return redirect()->route('breakingNews.index')->with('success', 'Deleted Successfully');
     } catch (\Exception $e) {
         return back()->with('error', $exception->getMessage());
     }
 }

 // notice_status_change 
 
 public function breakingNews_status_change(Request $request)
 {
     $request->validate([
         'id' => 'required',
         'status' => 'required',
     ]);

     BreakingNews::where('id', $request->id)->update(['status' => $request->status]);

     return back()->with('success', 'BreakingNews status updated successfully.');
 }
}