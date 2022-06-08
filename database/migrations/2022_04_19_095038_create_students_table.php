<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('father_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('cnic')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('instructor')->nullable();
            $table->string('home_address')->nullable();
            $table->string('previous_address')->nullable();
            $table->string('image')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('course_id')->nullable();
            $table->string('previous_school')->nullable();
            $table->string('add_type')->nullable();
            $table->string('Enroll_type')->nullable();

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
        Schema::dropIfExists('students');
    }
};
