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
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->string('name')->nullable(); // Order number, integer type
            $table->integer('order_no')->nullable(); // Order number, integer type
            $table->string('file_path'); // File path for the uploaded PDF
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogue');
    }
};
