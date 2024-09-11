<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index()
    {
        try {
            $site_info = SiteSetting::first();

            return view('back-end.pages.site-settings.index', compact('site_info'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'site_name_en' => 'required|string',
            'site_name_bn' => 'required|string',
            'logo' => 'image',
            'page_hader_img' => 'image',
            'favicon' => 'image',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'map_url' => 'nullable|string',
            'facebook_url' => 'nullable|string',
            'instagram_url' => 'nullable|string',
            'twitter_url' => 'nullable|string',
            'linkedin_url' => 'nullable|string',

            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',

            'contact_description_en' => 'nullable|string',
            'contact_description_bn' => 'nullable|string',

            'about_subtitle_en' => 'nullable|string',
            'about_subtitle_bn' => 'nullable|string',

            'notice_title_en' => 'nullable|string',
            'notice_title_bn' => 'nullable|string',

            'form_sec_title_en' => 'nullable|string',
            'form_sec_title_bn' => 'nullable|string',

            'program_subtitle_en' => 'nullable|string',
            'program_subtitle_bn' => 'nullable|string',

            'program_title_en' => 'nullable|string',
            'program_title_bn' => 'nullable|string',

            'news_subtitle_en' => 'nullable|string',
            'news_subtitle_bn' => 'nullable|string',

            'news_title_en' => 'nullable|string',
            'news_title_bn' => 'nullable|string',

            'video_subtitle_en' => 'nullable|string',
            'video_subtitle_bn' => 'nullable|string',

            'video_title_en' => 'nullable|string',
            'video_title_bn' => 'nullable|string',

            'member_subtitle_en' => 'nullable|string',
            'member_subtitle_bn' => 'nullable|string',

            'member_title_en' => 'nullable|string',
            'member_title_bn' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $settings = SiteSetting::firstOrNew();
            $settings->fill($request->only([
                'site_name_en',
                'site_name_bn',
                'email',
                'phone',
                'address',
                'map_url',
                'facebook_url',
                'instagram_url',
                'twitter_url',
                'linkedin_url',

                'description_en',
                'description_bn',

                'contact_description_en',
                'contact_description_bn',

                'about_subtitle_en',
                'about_subtitle_bn',

                'notice_title_en',
                'notice_title_bn',

                'form_sec_title_en',
                'form_sec_title_bn',

                'program_subtitle_en',
                'program_subtitle_bn',

                'program_title_en',
                'program_title_bn',

                'news_subtitle_en',
                'news_subtitle_bn',

                'news_title_en',
                'news_title_bn',

                'video_subtitle_en',
                'video_subtitle_bn',

                'video_title_en',
                'video_title_bn',

                'member_subtitle_en',
                'member_subtitle_bn',
                
                'member_title_en',
                'member_title_bn',
            ]));

            if ($request->hasFile('logo')) {
                $settings->logo = $this->uploadFile($request->file('logo'), 'site-image');
            }

            if ($request->hasFile('page_hader_img')) {
                $settings->page_hader_img = $this->uploadFile($request->file('page_hader_img'), 'site-image');
            }

            if ($request->hasFile('favicon')) {
                $settings->favicon = $this->uploadFile($request->file('favicon'), 'site-image');
            }

            $settings->save();

            return redirect()->route('site-setting.index')->with('success', 'Settings added successfully');
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
