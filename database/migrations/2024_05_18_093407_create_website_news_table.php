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
        Schema::create('website_news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en');
            // $table->string('slug');
            $table->longText('body');
            $table->longText('body_en');
            $table->integer('order');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_news');
    }
};
