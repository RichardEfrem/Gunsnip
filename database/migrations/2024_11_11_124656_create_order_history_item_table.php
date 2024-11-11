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
        Schema::create('orderhistoryitem', function (Blueprint $table) {
            $table->unsignedBigInteger('history_id');
            $table->foreign('history_id')
                  ->references('id')
                  ->on('orderHistory');
            $table->unsignedBigInteger('gunpla_id');
            $table->foreign('gunpla_id')
                  ->references('id')
                  ->on('gunpla');
            $table->integer('quantity');
            $table->integer('sub_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_history_item');
    }
};
