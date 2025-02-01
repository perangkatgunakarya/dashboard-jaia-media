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
        Schema::create('owned_venue_testimonials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('owned_venue_id')->constrained('owned_venues')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->string('origin');
            $table->integer('rating');
            $table->tinyText('testimonial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owned_venue_testimonials');
    }
};
