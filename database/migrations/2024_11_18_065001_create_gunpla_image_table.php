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
        Schema::create('gunpla_image', function (Blueprint $table) {
            $table->text('image_path');
            $table->unsignedBigInteger('gunpla_id');
            $table->foreign('gunpla_id')
                  ->references('id')
                  ->on('gunpla');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gunpla_image');
    }
};