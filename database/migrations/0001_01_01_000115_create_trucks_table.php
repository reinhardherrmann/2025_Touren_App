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
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacturer_id')->constrained('manufacturers');
            $table->foreignId('trailer_id')->nullable()->constrained('trucks');
            $table->integer('truck_number');
            $table->string('licence_plate');
            $table->integer('capacity');    // in TE
            $table->integer('height')->nullable();      // in cm
            $table->integer('weight')->nullable();      // in kg
            $table->string('type');         // 'truck', 'trailer'
            $table->boolean('is_active')->default(true);
            $table->text('remark')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
