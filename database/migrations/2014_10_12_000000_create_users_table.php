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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // First name field
            $table->string('last_name');  // Last name field
            $table->string('username')->unique(); // Unique username field
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role'); // e.g., "Admin", "User", etc.
            
            // Optional fields
            $table->string('phone')->nullable(); // Optional phone number
            $table->string('whatsapp_number')->nullable(); // Optional WhatsApp number
            $table->string('user_image')->nullable(); // Optional profile image path
            $table->text('bio')->nullable(); // Optional biography
            $table->string('instagram')->nullable(); // Optional Instagram handle
            $table->string('facebook')->nullable(); // Optional Facebook or X (formerly Twitter) handle
        
            // Banning fields
            $table->boolean('is_banned')->default(false); // Is the user banned?
            $table->timestamp('banned_until')->nullable(); // Date until the user is banned, null for permanent ban
        
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
