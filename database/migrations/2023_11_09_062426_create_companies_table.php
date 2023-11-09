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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->name('string',255)->nullable();
            $table->contactperson('string',255)->nullable();
            $table->contactnumber('string',255)->nullable();
            $table->address('text')->nullable();
            $table->logo('string',255)->nullable();
            $table->created_by('integer')->nullable();
            $table->updated_by('integer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
