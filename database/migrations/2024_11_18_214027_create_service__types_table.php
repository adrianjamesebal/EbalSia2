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
        Schema::create('service__types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ServiceRequest_id');
            $table->foreign('ServiceRequest_id')->references('id')->on('service__requests')->onDelete('cascade');
            $table->string('Service_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service__types');
    }
};
