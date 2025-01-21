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
        Schema::create('client_segment', function (Blueprint $table) {
            $table->foreignUuid('client_id')->constrained('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('segment_id')->constrained('segments')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_segment');
    }
};
