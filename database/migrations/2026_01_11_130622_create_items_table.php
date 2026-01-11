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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title',255);
            $table->mediumInteger('volume_number');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('series');
            $table->string('description');
            $table->string('cover_image')->nullable();
            $table->string('author',255)->nullable();
            $table->string('year',4)->nullable();
            $table->string('isbn',13)->nullable();
            $table->string('publisher')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
