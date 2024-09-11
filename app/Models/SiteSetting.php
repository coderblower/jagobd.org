<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model {
    use HasFactory;

    protected $fillable = [
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
    ];
}