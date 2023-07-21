<?php

namespace App\Http\Livewire;

use App\Models\Boat;
use Livewire\Component;
use App\Http\Livewire\Rules\Password;
use Illuminate\Http\Request;

class CrudForm extends Component
{


    public function mount()
    {
        
 
 
    }

    public function editboat(Request $request)
    {

        
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
    public function render()
    {
        $boats = Boat::paginate(10);
        return view('livewire.crud-form', compact('boats'));
    }
}
