<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class CommitteeController extends Controller
{
      // Display a listing of the resource
      public function index(Request $request)
      {
          try {
              if ($request->ajax()) {
                  $data = Committee::orderBy('id', 'DESC')->get();
                  return DataTables::of($data)
                      ->addIndexColumn()
                      ->addColumn('name_en', function ($data) {
                          return $data->name_en;
                      })
                      ->addColumn('name_bn', function ($data) {
                        return $data->name_bn;
                    })
                      ->addColumn('action', function ($data) {
                          return '<div role="group">
                                      <a href="' . route('committee.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                          <i class="fa fa-edit"></i>
                                      </a>
                                      <a href="' . route('committee.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                          <i class="fa fa-trash"></i>
                                      </a>
                                  </div>';
                      })
                      ->rawColumns(['name_en','name_bn','action'])
                      ->make(true);
              }
              return view('back-end.pages.committee.index');
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
              return view('back-end.pages.committee.create');
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
            Committee::create([
                  'name_en' => $request->name_en,
                  'name_bn' => $request->name_bn,
              ]);
  
              // Redirect with success message if creation is successful
              return redirect()->route('committee.index')->with('success', 'Added Successfully');
          } catch (\Exception $exception) {
              // Redirect back with error message if any exception occurs
              return redirect()->back()->with('error', $exception->getMessage());
          }
      }
  
      // Show the form for editing the specified resource
      public function edit(Committee $committee)
      {
          try {
              return view('back-end.pages.committee.edit',compact('committee'));
          } catch (\Exception $exception) {
              return back()->with('error', $exception->getMessage());
          }
      }
  
      
  
      // Update the specified resource in storage
      public function update(Request $request, Committee $committee)
      {
          // Validate the incoming request data
          $request->validate([
              'name_en' => 'required',
              'name_bn' => 'required',
          ]);
  
          try {
              $committee->update([
                  'name_en' => $request->name_en,
                  'name_bn' => $request->name_bn,
              ]);
  
              // Redirect with success message if update is successful
              return redirect()->route('committee.index')->with('success', 'Updated Successfully');
          } catch (\Exception $exception) {
              // Redirect back with error message if any exception occurs
              return redirect()->back()->with('error', $exception->getMessage());
          }
      }
  
      // Remove the specified resource from storage
  
      public function destroy(Committee $committee)
      {
          try {
              $committee->delete();
              return redirect()->route('committee.index')->with('success', 'Deleted Successfully');
          } catch (\Exception $e) {
              return back()->with('error', $exception->getMessage());
          }
      }
}
