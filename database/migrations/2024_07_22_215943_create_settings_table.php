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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('password')->nullable();
            $table->string('accessoryh')->nullable();
            $table->string('accessorysh')->nullable();
            $table->string('categoryh')->nullable();
            $table->string('categorysh')->nullable();
            $table->string('catalogueh')->nullable();
            $table->string('cataloguesh')->nullable();
            $table->string('mediah')->nullable();
            $table->string('mediash')->nullable();
            $table->string('eventh')->nullable();
            $table->string('eventsh')->nullable();
            $table->string('abouth')->nullable();
            $table->string('aboutsh')->nullable();
            $table->string('contacth')->nullable();
            $table->string('contactsh')->nullable();
            $table->string('producth')->nullable();
            $table->string('productsh')->nullable();
            $table->string('bannercontact')->nullable();
            $table->string('bannermsg')->nullable();
            $table->string('banneremail')->nullable();
            $table->string('footerfb')->nullable();
            $table->string('footerinsta')->nullable();
            $table->string('footertwitter')->nullable();
            $table->string('footeryoutube')->nullable();
            $table->string('LPVheading')->nullable();
            $table->string('LPVdescription')->nullable();
            $table->string('videoId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
