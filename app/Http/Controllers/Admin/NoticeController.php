<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Support\Facades\Cache;

class NoticeController extends Controller
{
 // Display a listing of the resource
 public function index(Request $request)
 {
     try {
         // Check if the request is an AJAX request
         if ($request->ajax()) {
             $data = Notice::orderBy('id', 'DESC')->get();
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('title_en', function ($data) {
                     return Str::limit($data->title_en, 40);
                 })
                 ->addColumn('title_bn', function ($data) {
                    return Str::limit($data->title_bn, 40);
                })
                 ->addColumn('description_en', function ($data) {
                     return Str::limit($data->description_en, 40);
                 })
                 ->addColumn('description_bn', function ($data) {
                    return Str::limit($data->description_bn, 40);
                })
                 ->addColumn('date', function ($data) {
                     return $data->date;
                 })
                 ->addColumn('image', function ($data) {
                     return '<a target="_blank" href="' . asset($data->image) . '">
                                <img class="image" style="width:auto; height: 50px" src="' . asset($data->image) . '"/>
                             </a>';
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
                                 <a href="' . route('notice.show', $data->id) . '" class="btn btn-sm btn-info" title="View">
                                     <i class="fa fa-eye"></i>
                                 </a>
                                 <a href="' . route('notice.edit', $data->id) . '" class="btn btn-sm btn-success" title="Edit">
                                     <i class="fa fa-edit"></i>
                                 </a>
                                 <a href="' . route('notice.destroy', $data->id) . '" class="btn btn-sm btn-danger" onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                     <i class="fa fa-trash"></i>
                                 </a>
                             </div>';
                 })
                 ->rawColumns(['image', 'title_en', 'title_bn','description_en','description_bn','date','status','action'])
                 ->make(true);
         }
         return view('back-end.pages.notice.index');
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
         return view('back-end.pages.notice.create');
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
         'status' => 'nullable',
         'image' => 'nullable',
     ]);

     // Check if validation fails
     if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
     }

     try {
         // Check if a new PDF file is uploaded
         $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : null;

         // Create a new FormPdf instance with the validated data
         Notice::create([
             'title_en' => $request->title_en,
             'title_bn' => $request->title_bn,
             'description_en' => $request->description_en,
             'description_bn' => $request->description_bn,
             'date' => $request->date,
             'image' => $image_url,
         ]);

         // Redirect with success message if creation is successful
         return redirect()->route('notice.index')->with('success', 'Added Successfully');
     } catch (\Exception $exception) {
         // Redirect back with error message if any exception occurs
         return redirect()->back()->with('error', $exception->getMessage());
     }
 }

 // Show the form for editing the specified resource
 public function edit(Notice $notice)
 {
     try {
         return view('back-end.pages.notice.edit', compact('notice'));
     } catch (\Exception $exception) {
         return back()->with('error', $exception->getMessage());
     }
 }



 // Update the specified resource in storage
 public function update(Request $request, Notice $notice)
 {
     // Validate the incoming request data
     $request->validate([
        'title_en' => 'required',
        'title_bn' => 'required',
        'description_en' => 'required',
        'description_bn' => 'required',
         'date' => 'required',
         'status' => 'nullable',
         'image' => 'nullable',
     ]);

     try {
         // Check if a new PDF file is uploaded
         $image_url = $request->hasFile('image') ? $this->uploadImage($request->file('image')) : $notice->image;

         // Update the FormPdf instance with the new data
         $notice->update([
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'description_en' => $request->description_en,
            'description_bn' => $request->description_bn,
             'date' => $request->date,
             'image' => $image_url,
         ]);

         // Redirect with success message if update is successful
         return redirect()->route('notice.index')->with('success', 'Updated Successfully');
     } catch (\Exception $exception) {
         // Redirect back with error message if any exception occurs
         return redirect()->back()->with('error', $exception->getMessage());
     }
 }

 /**
  * Display the specified resource.
  */
 public function show(Notice $notice)
 {
     try {
         return view('back-end.pages.notice.show', compact('notice'));
     } catch (\Exception $exception) {
         return back()->with($exception->getMessage());
     }
 }

 // Remove the specified resource from storage

 public function destroy(Notice $notice)
 {
     try {
         $notice->delete();
         return redirect()->route('notice.index')->with('success', 'Deleted Successfully');
     } catch (\Exception $e) {
         return back()->with('error', $exception->getMessage());
     }
 }

 // notice_status_change

 public function notice_status_change(Request $request)
 {
     $request->validate([
         'id' => 'required',
         'status' => 'required',
     ]);

     Notice::where('id', $request->id)->update(['status' => $request->status]);

     return back()->with('success', 'Notice status updated successfully.');
 }

 // Private method to handle Image file upload
 private function uploadImage($image)
 {
     $imageName = time() . '.' . $image->getClientOriginalExtension();
     $destinationPath = public_path('uploads-image/notice');
     $image->move($destinationPath, $imageName);
     return 'uploads-image/notice/' . $imageName;
 }


    public function ShowNotice()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $notice = Notice::orderBy('id', 'DESC')->paginate(10);
        return view('front-end.pages.notice.index',compact('siteSetting','notice'));
    }

    public function NoticeDetails(Notice $notice)
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });

        $cacheKey = 'notice_latest' . $notice->id;

        $notice_latest = Cache::remember($cacheKey, 60, function () use ($notice) {
            return Notice::where('id', '!=', $notice->id)
                    ->orderBy('id', 'DESC')
                    ->limit(6)->get();
        });
        return view('front-end.pages.notice.noticeDetails', compact('siteSetting', 'notice','notice_latest'));
    }

}
