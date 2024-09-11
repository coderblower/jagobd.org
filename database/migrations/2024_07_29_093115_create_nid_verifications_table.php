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
        Schema::create('nid_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('nid_no');
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('father');
            $table->string('mother');
            $table->date('birth_date');
            $table->string('address');
            $table->string('gender');
            $table->string('nationality');
            $table->string('blood_group');
            $table->string('birth_place');
            $table->date('issue_date');
            $table->text('mrz');
            $table->boolean('face_match');
            $table->string('profile_image')->nullable();
            $table->string('nid_front_image_path')->nullable();
            $table->string('nid_back_image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nid_verifications');
    }
};
