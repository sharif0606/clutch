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
        Schema::create('loads', function (Blueprint $table) {
            $table->id('integer');
            $table->contract_id('integer');
            $table->driver_id();
            $table->customer_id('intege');
            $table->asset_id('string',255)->enum('weight','distance','fixed');
            $table->product_id('integer');
            $table->startdate('date')->nullable();
            $table->finishdate('date')->nullable();
            $table->starttime('time')->nullable();
            $table->finishtime('time')->nullable();
            $table->totalweight('decimal(10,2)')->nullable();
            $table->totaldistance('decimal(10,2)')->nullable();
            $table->chargetype('string',255)->enum('weight','distance','fixed');
            $table->amount('decimal(10,2)')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loads');
    }
};
