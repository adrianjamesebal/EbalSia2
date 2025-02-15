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
        Schema::create('service__requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Resident_id');
            $table->foreign('Resident_id')->references('id')->on('residents')->onDelete('cascade');
            $table->string('Status')->nullable();
            $table->string('Request_date')->nullable();
            $table->string('Verification_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service__requests');
    }
};
