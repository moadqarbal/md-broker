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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('city');
            $table->string('secteur');
            $table->string('type_property'); // e.g., "Appartement", "Villa"
            $table->string('type'); // e.g., "Rent", "Own-Property"
            $table->string('floors'); // e.g., "Ground Floor", "First Floor"
            $table->string('floor_area'); // e.g., "200 m²"
            $table->string('capacity'); // e.g., "4 persons"
            $table->text('description');
            $table->integer('price'); // Using integer for simplicity
            $table->integer('view_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
