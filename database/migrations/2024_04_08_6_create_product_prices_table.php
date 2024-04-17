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
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('product_id')->constrained();
            $table->foreignId('purchase_currency_id')->constrained(
                table: 'currencies'
            );

            $table->float('purchase_price')->default('0.00')->nullable();
            $table->float('wholesale_price')->default('0.00')->nullable();
            $table->integer('wholesale_qty')->default(0)->nullable();
            $table->float('small_wholesale_price')->default('0.00')->nullable();
            $table->integer('small_wholesale_qty')->default(0)->nullable();
            $table->float('price')->default('0.00');
            $table->float('old_price')->default('0.00')->nullable();

            $table->index([
                'price', 
                // 'purchase_price', 
                // 'wholesale_price', 
                // 'small_wholesail_price'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};
