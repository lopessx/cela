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
        Schema::create('sales_products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('id_sales')->constrained('sales')->onDelete('cascade');
            $table->foreignId('id_products')->constrained('products')->onDelete('cascade');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_products');
    }
};
