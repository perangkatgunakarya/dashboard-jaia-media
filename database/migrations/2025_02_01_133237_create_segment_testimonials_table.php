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
        Schema::create('segment_testimonials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('segment_id')->constrained('segments')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('segment_testimonials');
    }
};
