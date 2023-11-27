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
            $table->string('contractnumber',255);
            $table->integer('company_id');
            $table->integer('branch_id');
            $table->integer('customer_id');
            $table->string('product_id',255)->nullable();
            $table->string('chargetype',255)->enum('weight','distance','fixed');
            $table->decimal('amount')->default('0');
            $table->date('startdate')->nullable();
            $table->date('finishdate')->nullable();
            $table->string('collectform')->nullable();
            $table->string('deliveredto')->nullable();
            $table->decimal('totalweight')->nullable();
            $table->decimal('totaldistance')->nullable();
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
