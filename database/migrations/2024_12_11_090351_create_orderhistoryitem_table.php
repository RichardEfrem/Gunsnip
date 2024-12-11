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
            $table->unsignedBigInteger('orderhistory_id');
            $table->foreign('orderhistory_id')->references('id')->on('orderhistory');
            $table->unsignedBigInteger('gunpla_id');
            $table->foreign('gunpla_id')->references('id')->on('gunpla');
            $table->integer('total_items');
            $table->integer('sub_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderhistoryitem');
    }
};
