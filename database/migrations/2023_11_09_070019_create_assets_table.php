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
            $table->string('name',255);
            $table->string('registrationnumber',255);
            $table->integer('driver_id');
            $table->string('registrationcard',255)->nullable();
            $table->decimal('gml(10,2)')->default();
            $table->decimal('cml(10,2)')->default();
            $table->decimal('hml(10,2)')->default();
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
