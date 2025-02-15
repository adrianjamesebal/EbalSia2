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
        Schema::create('blotter_recodrs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('alias')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('Gender')->nullable();
            $table->string('VoterStatus')->nullable();
            $table->string('CivilStatus')->nullable();
            $table->string('Citizenship')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('qualifier')->nullable();
            $table->string('datereport')->nullable();
            $table->string('dateIncident')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blotter_recodrs');
    }
};
