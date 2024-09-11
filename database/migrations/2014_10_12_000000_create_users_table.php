<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_bn')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('phone')->unique();
            $table->integer('position_id')->nullable();
            $table->integer('organization_id')->nullable();
            $table->integer('committee_id')->nullable();
            $table->integer('recommended_by')->nullable();
            $table->integer('status')->default(0);
            $table->integer('active')->default(0);
            $table->string('approved')->default(0);
            $table->integer('is_admin')->default(0);
            $table->integer('is_verified')->default(0);
            $table->date('register_date')->nullable();
            $table->date('submit_date')->nullable();
            $table->date('expired_date')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
