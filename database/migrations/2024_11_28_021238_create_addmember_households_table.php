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
        Schema::create('addmember_households', function (Blueprint $table) {
            $table->id();
            $table->string('resident_id')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middleinitial')->nullable();
            $table->string('alias')->nullable();
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('rlhead')->nullable();
            $table->string('SSN')->nullable();
            $table->string('gender')->nullable();
            $table->string('OccupationEmpl')->nullable();
            $table->string('EducationLvl')->nullable();
            $table->string('Phonenum')->nullable();
            $table->string('Email')->nullable();
            $table->string('Medicationcon')->nullable();
            $table->string('allergies')->nullable();
            $table->string('medication')->nullable();
            $table->string('primarycarep')->nullable();
            $table->string('emergencycontact')->nullable();
            // Disability checkboxes
            $table->boolean('physical_disability')->default(false)->nullable();
            $table->boolean('visual_impairment')->default(false)->nullable();
            $table->boolean('hearing_impairment')->default(false)->nullable();
            $table->boolean('cognitive_disability')->default(false)->nullable();
            $table->boolean('mental_health_condition')->default(false)->nullable();
            $table->boolean('neurological_condition')->default(false)->nullable();
            $table->boolean('speech_impairment')->default(false)->nullable();
            $table->boolean('chronic_illness')->default(false)->nullable();
            $table->boolean('autism_spectrum')->default(false)->nullable();
            $table->boolean('other_checkbox')->default(false)->nullable();
            $table->string('other_condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addmember_households');
    }
};
