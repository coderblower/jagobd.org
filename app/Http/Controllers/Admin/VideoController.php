<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Support\Carbon;

class VideoController extends Controller
{
   // Display a listing of the resource
   public function index(Request $request)
   {
       try {
           // Check if the request is an AJAX request
           if ($request->ajax()) {
               $data = Video::orderBy('id', 'DESC')->get();
               return DataTables::of($data)
                   ->addIndexColumn()
                   ->addColumn('title_en', function ($data) {
                       return Str::limit($data->title_en, 40);
                   })
                   ->addColumn('title_bn', function ($data) {
                    return Str::limit($data->title_bn, 40);
                })
                   ->addColumn('description_en', function ($data) {
                       return Str::limit($data->description_en, 150);
                   })
                   ->addColumn('description_bn', function ($data) {
                    return Str::limit($data->description_bn, 150);
                })
                   ->addColumn('youtube_url', function ($data) {
                       return $data->youtube_url;
                   })
                   ->addColumn('video_embed_src', function ($data) {
                    return "<iframe width='260' height='115' src='{$data->video_embed_src}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
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
                                   <a href="' . route('video.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                       <i class="fa fa-eye"></i>
                                   </a>
                                   <a href="' . route('video.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                       <i class="fa fa-edit"></i>
                                   </a>
                                   <a href="' . route('video.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                       <i class="fa fa-trash"></i>
                                   </a>
                               </div>';
                   })
                   ->rawColumns(['title_en','title_bn','youtube_url','video_embed_src','description_en','description_bn','status','action'])
                   ->make(true);
           }
           return view('back-end.pages.video.index');
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
           return view('back-end.pages.video.create');
       } catch (\Exception $exception) {
           return back()->with($exception->getMessage());
       }
   }


   // Store a newly created resource in storage
   public function store(Request $request)
   {
       // Validate the incoming request data
       $validator = Validator::make($request->all(), [
           'title_en' => 'required',
           'title_bn' => 'required',
           'description_en' => 'required',
           'description_bn' => 'required',
           'date' => 'required',
           'youtube_url' => 'required',
           'video_embed_src' => 'required',
           'status' => 'nullable',
       ]);

       // Check if validation fails
       if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput();
       }

       try {

           // Create a new FormPdf instance with the validated data
           Video::create([
               'youtube_url' => $request->youtube_url,
               'video_embed_src' => $request->video_embed_src,
               'title_en' => $request->title_en,
               'title_bn' => $request->title_bn,
               'description_en' => $request->description_en,
               'description_bn' => $request->description_bn,
               'date' => $request->date,
           ]);

           // Redirect with success message if creation is successful
           return redirect()->route('video.index')->with('success', 'Added Successfully');
       } catch (\Exception $exception) {
           // Redirect back with error message if any exception occurs
           return redirect()->back()->with('error', $exception->getMessage());
       }
   }

   // Show the form for editing the specified resource
   public function edit(Video $video)
   {
       try {
           return view('back-end.pages.video.edit', compact('video'));
       } catch (\Exception $exception) {
           return back()->with('error', $exception->getMessage());
       }
   }

   

   public function update(Request $request, Video $video)
   {
       $validator = Validator::make($request->all(), [
        'title_en' => 'required',
        'title_bn' => 'required',
        'description_en' => 'required',
        'description_bn' => 'required',
           'date' => 'required', 
           'youtube_url' => 'required', 
           'video_embed_src' => 'required', 
           'status' => 'nullable',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
   
       try {
           // Update the Video instance with the new data
           $video->update([
               'youtube_url' => $request->youtube_url,
               'video_embed_src' => $request->video_embed_src,
              'title_en' => $request->title_en,
               'title_bn' => $request->title_bn,
               'description_en' => $request->description_en,
               'description_bn' => $request->description_bn,
               'date' => Carbon::parse($request->date)->format('Y-m-d'),
               'status' => $request->status,
           ]);
   
           // Redirect with success message if update is successful
           return redirect()->route('video.index')->with('success', 'Updated Successfully');
       } catch (\Exception $exception) {
           // Redirect back with error message if any exception occurs
           return redirect()->back()->with('error', 'Update Failed: ' . $exception->getMessage());
       }
   }
   /**
    * Display the specified resource.
    */
   public function show(Video $video)
   {
       try {
           return view('back-end.pages.video.show', compact('video'));
       } catch (\Exception $exception) {
           return back()->with($exception->getMessage());
       }
   }

   // Remove the specified resource from storage

   public function destroy(Video $video)
   {
       try {
           $video->delete();
           return redirect()->route('video.index')->with('success', 'Deleted Successfully');
       } catch (\Exception $e) {
           return back()->with('error', $exception->getMessage());
       }
   }

   // program_status_change 
   
   public function video_status_change(Request $request)
   {
       $request->validate([
           'id' => 'required',
           'status' => 'required',
       ]);

       Video::where('id', $request->id)->update(['status' => $request->status]);

       return back()->with('success', 'Video status updated successfully.');
   }
}