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
            $table->string('name');
            $table->integer('order_no')->default(0);
            $table->enum('type', ['category', 'accessory']);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('accessory_id')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
