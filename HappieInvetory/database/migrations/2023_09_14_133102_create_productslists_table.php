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
        Schema::create('productslists', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Category');
            $table->string('ProductName');
            $table->string('Quantity');
            $table->string('BuyPrice');
            $table->string('SalePrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productslists');
    }
};
