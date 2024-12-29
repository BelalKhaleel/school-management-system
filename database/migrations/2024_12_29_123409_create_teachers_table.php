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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string("father's_name", 30);
            $table->string("mother's_name", 30);
            $table->string('phone_number', 10)->unique();
            $table->string('address', 20);
            $table->date('date_of_birth');
            $table->string('email', 20)->unique();
            $table->string('password', 20);
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('nationality_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
