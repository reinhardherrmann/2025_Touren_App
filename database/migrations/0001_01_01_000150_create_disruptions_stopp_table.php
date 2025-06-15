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
        Schema::create('disruptions_stopps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disruption_id')->references('id')->on('disruptions')->onDelete('cascade');
            $table->foreignId('stopp_id')->references('id')->on('stopps')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disruptions_stopp');
    }
};
