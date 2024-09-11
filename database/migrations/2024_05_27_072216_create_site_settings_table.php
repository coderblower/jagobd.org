<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_en')->nullable();
            $table->string('site_name_bn')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            
            $table->text('description_en')->nullable();
            $table->text('description_bn')->nullable();

            $table->text('contact_description_en')->nullable();
            $table->text('contact_description_bn')->nullable();

            $table->string('about_subtitle_en')->nullable();
            $table->string('about_subtitle_bn')->nullable();

            $table->string('notice_title_en')->nullable();
            $table->string('notice_title_bn')->nullable();
            
            $table->string('form_sec_title_en')->nullable();
            $table->string('form_sec_title_bn')->nullable();

            $table->string('program_subtitle_en')->nullable();
            $table->string('program_subtitle_bn')->nullable();

            $table->string('program_title_en')->nullable();
            $table->string('program_title_bn')->nullable();

            $table->string('news_subtitle_en')->nullable();
            $table->string('news_subtitle_bn')->nullable();

            $table->string('news_title_en')->nullable();
            $table->string('news_title_bn')->nullable();
       
            $table->string('video_subtitle_en')->nullable();
            $table->string('video_subtitle_bn')->nullable();

            $table->string('video_title_en')->nullable();
            $table->string('video_title_bn')->nullable();
         
            $table->string('member_subtitle_en')->nullable();
            $table->string('member_subtitle_bn')->nullable();

            $table->string('member_title_en')->nullable();
            $table->string('member_title_bn')->nullable();
    
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->longText('map_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
