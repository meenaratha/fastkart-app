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
            $table->string('product_name')->nullable();
            $table->text('product_description')->nullable();
            $table->string('original_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('weight')->nullable();
            $table->string('brand')->nullable();
            $table->string('product_code')->nullable();
            $table->string('product_type')->nullable();
            $table->string('stock')->nullable();
            $table->string('offer')->nullable();
            $table->string('meta_tag')->nullable();
            $table->string('productimage')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->string('discount_percentage')->nullable();
            $table->string('product_short_description')->nullable();
            $table->string('store_info')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();

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
