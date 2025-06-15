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
        Schema::table('disruptions', function (Blueprint $table) {
            //$table->unsignedBigInteger('disruption_type_id')->nullable()->unsigned()->after('id');
            $table->foreignId('disruption_type_id')->nullable()->references('id')->on('disruption_types');
        });

       Schema::table('disruption_types', function (Blueprint $table) {
//           $table->unsignedBigInteger('disruption_id')->nullable()->unsigned()->after('id');
            $table->foreignId('disruption_id')->nullable()->references('id')->on('disruptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('disruptions', function (Blueprint $table) {
            $table->dropColumn('disruption_type_id');
        });

        Schema::table('disruption_types', function (Blueprint $table) {
            $table->dropColumn('disruption_id');
        });
    }
};
