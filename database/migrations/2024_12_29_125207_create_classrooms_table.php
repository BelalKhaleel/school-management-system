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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained();
            $table->foreignId('section_id')->constrained();
            $table->string('room_number')->unique();
            $table->unsignedTinyInteger('number_of_students');
            $table->unsignedTinyInteger('max_number_of_students');
            $table->string('school_year', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
