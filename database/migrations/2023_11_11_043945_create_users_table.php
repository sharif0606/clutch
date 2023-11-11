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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->name('string',255);
            $table->contactnumber('string',255)->unique();
            $table->email('string',255)->unique()->nullable();
            $table->password('string',255);
            $table->role_id('integer');
            $table->company_id('integer')->nullable();
            $table->brunch_id('integer')->nullable();
            $table->status('integer')->default(1)->comment('1 active 0 inactive');
            $table->access_block('text')->nullable();
            $table->token('string',255)->nullable();
            $table->softdelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
