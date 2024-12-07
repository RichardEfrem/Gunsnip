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
        Schema::create('gunpla', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 800);
            $table->integer('price');
            $table->integer('ratings')->nullable();
            $table->date('release_date');
            $table->integer('pBandai');
            $table->integer('totalStock');
            $table->integer('totalSales');
            $table->unsignedBigInteger('series_id');
            $table->foreign('series_id')
                  ->references('id')
                  ->on('series');
            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')
                  ->references('id')
                  ->on('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gunpla');
    }
};
