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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('start_stock_id')->nullable()->constrained('stocks');
            $table->foreignId('target_stock_id')->nullable()->constrained('stocks');
            $table->foreignId('truck_id')->nullable()->constrained('trucks');
            $table->foreignId('trip_type_id')->nullable()->references('id')->on('trip_types');
            $table->foreignId('status_id')->nullable()->constrained('statuses');

            $table->string('trip_number');
            $table->date('date');
            $table->date('plan_date')->nullable();
            $table->time('duration')->nullable();
            $table->time('depot_vt')->nullable();
            $table->time('depot_nt')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->integer('plan_distance',)->nullable();
            $table->integer('distance_driven')->nullable();
            $table->integer('start_km')->nullable();
            $table->integer('end_km')->nullable();
            $table->string('status')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
