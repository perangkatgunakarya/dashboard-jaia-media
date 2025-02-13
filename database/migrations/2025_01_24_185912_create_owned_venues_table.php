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
        Schema::create('owned_venues', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->string('logo_url');
            $table->string('jumbotron_url');
            $table->text('overview_text');
            $table->string('overview_image_url');
            $table->integer('monthly_customer');
            $table->decimal('daily_revenue');
            $table->text('galleries');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owned_venues');
    }
};
