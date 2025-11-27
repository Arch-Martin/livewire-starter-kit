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
        Schema::table('lunar_countries', function (Blueprint $table) {
            $table->string('continent')->nullable();
        });

        Schema::table('lunar_countries', function (Blueprint $table) {
            $table->string('iso3')->nullable()->change();
            $table->string('emoji')->nullable()->change();
            $table->string('emoji_u')->nullable()->change();
        });

        Schema::table('lunar_tax_zones', function (Blueprint $table) {
            $table->string('price_display')->nullable()->change();
        });

        Schema::table('lunar_tax_rates', function (Blueprint $table) {
            $table->decimal('percentage', 10, 4)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lunar_countries', function (Blueprint $table) {
            //
        });
    }
};
