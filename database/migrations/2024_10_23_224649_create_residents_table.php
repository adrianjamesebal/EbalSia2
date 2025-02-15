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
        Schema::create('residents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('profile')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('alias')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('email')->nullable();
            $table->string('mother')->nullable();
            $table->string('father')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('Gender')->nullable();
            $table->string('VoterStatus')->nullable();
            $table->string('CivilStatus')->nullable();
            $table->string('Citizenship')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('status')->default('Pending');
            $table->string('purok')->nullable();
            $table->string('familyRoles')->nullable();
            
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
            $table->string('desability')->default(false)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
