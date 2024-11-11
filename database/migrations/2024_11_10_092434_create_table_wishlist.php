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
        Schema::create('wishlist', function (Blueprint $table) {
            $table->unsignedBigInteger('gunpla_id_wishlist');
            $table->unsignedBigInteger('user_id_wishlist');
            $table->foreign('gunpla_id_wishlist')
                  ->references('id')
                  ->on('gunpla');
            $table->foreign('user_id_wishlist')
                  ->references('id')
                  ->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_wishlist');
    }
};
