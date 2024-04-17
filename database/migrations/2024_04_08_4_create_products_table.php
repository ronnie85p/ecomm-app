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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained();
            $table->foreignId('trademark_id')->constrained();

            $table->string('made_in', length: 255);
            $table->string('short_name', length: 255);
            $table->string('long_name', length: 255);

            $table->text('description');
            $table->text('benefits')->nullable();

            $table->json('options');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
