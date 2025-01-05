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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('gender_id')->nullable()->constrained();
            $table->foreignId('nationality_id')->nullable()->constrained();
            $table->foreignId('classroom_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('class_id');
            $table->dropConstrainedForeignId('gender_id');
            $table->dropConstrainedForeignId('nationality_id');
        });
    }
};
