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
            $table->id(); // shorthand for bigIncrements('id')
            $table->decimal('amount', 10, 2);
            $table->string('sku', 50)->unique();
            $table->boolean('in_stock');
            $table->integer('stock_qt');
            $table->foreignId('id_stores')->constrained('stores')->onDelete('cascade');
            $table->timestamps(); // creates created_at and updated_at with default to current
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
