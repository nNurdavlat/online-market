<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('discount_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('discount_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('discount_id')->constrained('discounts')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('discount_product');
        Schema::dropIfExists('discounts');
    }
};
