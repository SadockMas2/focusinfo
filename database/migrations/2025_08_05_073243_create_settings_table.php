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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('banner_photo')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('site_name')->default('Soma Media Lab');
            $table->string('site_url')->default('https://somamedialab.org');
            $table->string('history_title')->default('Notre Histoire');
            $table->longText('history_content')->nullable();
            $table->longText('missions')->nullable();
            $table->longText('visions')->nullable();
            $table->longText('apercu')->nullable();
            $table->longText('objectifs')->nullable();
            $table->integer('counter')->default('29');
            $table->string('counter_text')->default('Années d\'expérience');
            $table->longText('objectifs_specifiques')->nullable();
            $table->string('photo_1')->nullable();
            $table->longText('maps')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('video_url')->nullable();

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
