<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->string('dateofad')->null();
            $table->string('nameofboat')->null();
            $table->string('registeredlength')->null();
            $table->string('tonnagelength')->null();
            $table->string('tonnagebreadth')->null();
            $table->string('tonnagedepth')->null();
            $table->string('enginemake')->null();
            $table->string('engineserialno')->null();
            $table->string('enginehorsepower')->null();
            $table->string('enginenoofcylinder')->null();
            $table->string('nameofbuilder')->null();
            $table->string('yearofbuild')->null();
            $table->string('placeofbuild')->null();
            $table->timestamps();
        });
        // {{-- Date of Admeasurement
        //     Name of Boat
        //     Registered Lenght
        //     Tonnage Lenght
        //     Tonnage Breadth
        //     Tonnage Depth
        //     Engine Make
        //     Engine Serial No.
        //     Engine Horse Power
        //     Engine No. of Cylender
        //     Name of Builder
        //     Year of Build
        //     Palce of Build --}}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
};
