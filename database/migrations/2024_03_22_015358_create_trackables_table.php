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
        Schema::create('trackables', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('parent_id', 26)->nullable();
            $table->string('user_id', 26);
            $table->string('name', 127);
            $table->string('slug', 127);
            $table->text('description')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackables');
    }
};
