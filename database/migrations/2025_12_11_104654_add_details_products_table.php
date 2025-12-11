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
        Schema::table('products', function (Blueprint $table) {
            $table->string('delivery_time')->after('sales_price');
            $table->string('desc')->after('delivery_time');
            $table->string('ingredients')->after('desc');
            $table->string('spicy_level')->after('ingredients');
            $table->string('cooking_time')->after('spicy_level');
            $table->string('calories')->after('cooking_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
