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
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Resident_id');
            $table->foreign('Resident_id')->references('id')->on('residents')->onDelete('cascade');
            $table->string('Status')->nullable();
            $table->string('name')->nullable();
            $table->string('ValidateType')->nullable();
            $table->string('contact')->nullable();
            $table->string('Birthday')->nullable();
            $table->string('email')->nullable();
            $table->string('id_pic')->nullable();
            $table->string('id_pic2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifications');
    }
};
