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
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });
    }


// Task 4: Add a Publisher (15 mins)

// Create Publisher model with migration
// Add columns: name, country
// Add publisher_id to books table (new migration)
// Create 2 publishers
// Assign publishers to your books

// Test: Books have publisher_id values


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publishers');
    }
};
