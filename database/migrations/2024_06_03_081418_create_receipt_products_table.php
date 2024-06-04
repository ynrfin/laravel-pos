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
        // receipt_products is like an independent product,
        // I don't want it to use product because product would
        // change, maybe the price, so for easier counting,
        // use this receipt_products to record the sold and buy
        // price, when we need report, it would be more accurate
        Schema::create('receipt_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('receipt_id');
            $table->decimal('amount');
            $table->integer('sell_price');
            $table->integer('buy_price');
            $table->timestamps();
            $table->softDeletes(); // Add soft delete column

            $table->foreign('receipt_id')->references('id')->on('receipts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipt_products');
    }
};
