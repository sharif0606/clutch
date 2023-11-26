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
            $table->id();
            $table->integer('contract_id');
            $table->integer('driver_id');
            $table->integer('customer_id');
            $table->string('asset_id',255)->enum('weight','distance','fixed');
            $table->integer('product_id');
            $table->date('startdate')->nullable();
            $table->date('finishdate')->nullable();
            $table->time('starttime')->nullable();
            $table->time('finishtime')->nullable();
            $table->decimal('totalweight(10,2)')->nullable();
            $table->decimal('totaldistance(10,2)')->nullable();
            $table->string('chargetype',255)->enum('weight','distance','fixed');
            $table->decimal('amount(10,2)')->default();
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
