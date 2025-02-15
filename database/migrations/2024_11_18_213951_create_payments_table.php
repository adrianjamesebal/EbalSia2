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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('track')->nullable();
            $table->string('Status')->default('Pending');
            $table->string('Request_date')->nullable();
            $table->string('reference')->nullable();
            $table->string('purpose')->nullable();
            $table->string('PaymentMethod')->nullable();
            $table->string('want')->nullable();
            $table->string('pay')->default('100')->nullable();
            $table->string('Gcashnum')->default('09123456789')->nullable();
            $table->unsignedBigInteger('Resident_id')->nullable();
            $table->foreign('Resident_id')->references('id')->on('residents')->onDelete('cascade');
            $table->unsignedBigInteger('Request_id')->nullable() ;
            $table->foreign('Request_id')->references('id')->on('service__requests')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
