<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    use HasFactory;

    protected $table = "boats";
    protected $fillable = [
        'dateofad',
        'nameofboat',
        'registeredlength',
        'tonnagelength',
        'tonnagebreadth',
        'tonnagedepth',
        'enginemake',
        'engineserialno',
        'enginehorsepower',
        'enginenoofcylinder',
        'nameofbuilder',
        'yearofbuild',
        'placeofbuild',
    ];
}
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