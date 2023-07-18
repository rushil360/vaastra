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
        Schema::create('inward', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_id')->onDelete('cascade');
            $table->foreign('office_id')->references('id')->on('office')->onDelete('cascade');
            $table->unsignedBigInteger('vehicle_id')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicle')->onDelete('cascade');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inward');
    }
};
