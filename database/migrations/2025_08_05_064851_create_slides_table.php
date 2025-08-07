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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('s_titre')->unique();
            $table->string('s_image')->nullable();
            $table->string('s_desc')->nullable();
            $table->string('s_bg_image')->nullable();
            $table->string('s_link')->nullable();
            $table->string('s_linkText');
            $table->enum('s_status', ['masqued', 'active'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
