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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->contractnumber('string',255);
            $table->customer_id('integer');
            $table->product_id('string',255)->nullable();
            $table->chargetype('string',255)->enum('weight','distance','fixed');
            $table->amount('decimal(10,2)')->default('0');
            $table->startdate('date')->nullable();
            $table->finishdate('date')->nullable();
            $table->collectform('string')->nullable();
            $table->deliveredto('string')->nullable();
            $table->totalweight('decimal(10,2)')->nullable();
            $table->totaldistance('decimal(10,2)')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
