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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            
            // Morphs for created_by, updated_by, and deleted_by
            $table->nullableMorphs('created_by');
            $table->nullableMorphs('updated_by');
            $table->nullableMorphs('deleted_by');

            // Category specific fields
            $table->string('title');                  // Category title
            $table->text('description')->nullable();  // Category description
            $table->boolean('is_active')->default(true); // Active status
            $table->string('avatar')->nullable();

            $table->softDeletes();                    // Soft delete column
            $table->timestamps();                     // Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
