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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('contact_page_image')->nullable();
            $table->text('contact_information')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('timing')->nullable();
            $table->string('days')->nullable();
            $table->text('map_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
