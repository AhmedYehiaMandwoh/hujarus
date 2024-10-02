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
        Schema::create('enroll_orders', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name');
            $table->string('student_name');
            $table->integer('student_age');
            $table->string('course_needed');
            $table->string('phone_number');
            $table->string('email');
            $table->string('country');
            $table->string('days');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('time_zone');
            $table->string('class_duration');
            $table->string('preferred_teacher');
            $table->text('goals')->nullable();
            $table->nullableMorphs('created_by');
            $table->nullableMorphs('updated_by');
            $table->nullableMorphs('deleted_by');
            $table->softDeletes();
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
        Schema::dropIfExists('enroll_orders');
    }
};
