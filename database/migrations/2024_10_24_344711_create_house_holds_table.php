<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\HouseHolds;
use App\Models\Resident;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('house_holds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HouseHoldname')->nullable();
            $table->string('member')->nullable();
            $table->string('address')->nullable();
            $table->string('PrimaryPhone')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('birthdates')->nullable();
            $table->string('Relationshiphead')->nullable();
            $table->string('PrimaryHousehold')->nullable();
            $table->unsignedBigInteger('Resident_id')->nullable();;
            $table->foreign('Resident_id')->references('id')->on('residents')->onDelete('cascade');
            $table->timestamps();
        });
        $useradmin = new User();
        $useradmin->name = 'Administrator';
        $useradmin->UserAdmin = 'admin';
        $useradmin->email= 'admin@gmail.com';
        $useradmin->password= Hash::make('admin');
        $useradmin->save();

        $Resident = new Resident();
        $Resident->name = "admin";
        $Resident->email = "admin@gmail.com";
        $Resident->user_id = 1;
        $Resident->save();

        $household = new HouseHolds();
        $household->name = "admin";
        $household->email = "admin@gmail.com";
        $household->Resident_id = 1;
        $household->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_holds');
    }
};
