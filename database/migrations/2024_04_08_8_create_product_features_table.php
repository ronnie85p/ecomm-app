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
        Schema::create('product_features', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('product_id')->constrained();

            $table->string('article', 255)->nullable();

            $table->string('color', 255)->nullable();
            $table->string('size', 255)->nullable();
            $table->float('weight')->default('0.00')->nullable();

            $table->string('pallet_qty', 255)->nullable();
            $table->string('product_material', 255)->nullable();
            $table->string('product_type', 255)->nullable();
            $table->string('product_brand', 255)->nullable();
            $table->string('measure_unit', 255)->nullable();

            $table->boolean('is_popular')->default(0)->nullable();
            $table->boolean('is_favorite')->default(0)->nullable();
            $table->boolean('is_new')->default(0)->nullable();

            $table->index([
                'article', 
                // 'color', 
                // 'size', 
                // 'weight', 
                // 'is_popular', 
                // 'is_favorite',
                // 'is_new'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_features');
    }
};
