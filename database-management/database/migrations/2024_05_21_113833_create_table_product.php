<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists("Product");
        Schema::create('Product', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->string('ProductType', 3)->nullable(false);
            $table->string('ProductCode', 6)->nullable(false);
            $table->string('ProductName', 50);
            $table->decimal('Quantity');
            $table->string('Note', 60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Product');
    }
};