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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->nullable();
            $table->string('id_name')->nullable();
            $table->string('id_name_bn')->nullable();
            $table->integer('position_id')->nullable();
            $table->integer('organization_id')->nullable();
            $table->integer('committee_id')->nullable();
            $table->string('recommended_by')->nullable();
            $table->float('rating')->nullable();
            $table->string('father')->nullable(); 
            $table->string('profile_photo')->nullable();
            $table->string('nid_front')->nullable();
            $table->string('nid_back')->nullable();
            $table->date('dob')->nullable();  
            $table->integer('age')->nullable(); 
            $table->string('gender')->nullable();
            $table->string('place_of_birth')->nullable(); 
            $table->string('nid_number')->nullable();
            $table->string('document_type')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('upazila')->nullable();
            $table->string('union')->nullable(); 
            $table->string('ward')->nullable();
            $table->string('requestId')->nullable(); 
            $table->string('responseID')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
