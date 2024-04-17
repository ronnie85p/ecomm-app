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
        Schema::create('product_accountings', function (Blueprint $table) {
            $table->id();
           
            $table->foreignId('product_id')->constrained();

            $table->integer('total')->default(0)->nullable();
            $table->integer('need_to_make')->default(0)->nullable();
            $table->integer('reserved')->default(0)->nullable();
            $table->integer('defected')->default(0)->nullable();
            $table->integer('removed_from_balance')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_accountings');
    }
};
