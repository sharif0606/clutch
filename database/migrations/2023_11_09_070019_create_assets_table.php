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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->name('string',255);
            $table->registrationnumber('string',255);
            $table->driver_id('integer');
            $table->registrationcard('string',255)->nullable();
            $table->gml('decimal(10,2)')->default();
            $table->cml('decimal(10,2)')->default();
            $table->hml('decimal(10,2)')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
