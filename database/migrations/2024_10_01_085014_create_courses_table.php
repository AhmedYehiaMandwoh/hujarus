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
        Schema::create('courses', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensures the table uses InnoDB

            $table->id();
            $table->nullableMorphs('created_by');
            $table->nullableMorphs('updated_by');
            $table->nullableMorphs('deleted_by');

            // Foreign key for category
            $table->integer('category_id')->nullable()->constrained('categories')->onDelete('set null');

            // Course specific fields
            $table->string('title');
            $table->longText('description');
            $table->decimal('price', 10, 2);
            $table->string('instructor');
            $table->string('duration');
            $table->unsignedInteger('student_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->string('avatar')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
