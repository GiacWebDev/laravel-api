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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('image')->after('name')->nullable();
            $table->string('image_original_name')->after('image')->nullable();
            $table->string('slug', 50)->after('name')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('image_original_name');
            $table->dropColumn('slug');
        });
    }
};
