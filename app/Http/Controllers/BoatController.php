<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoatController extends Controller
{
   public function store(Request $request)
   {
        Boat::updateorCreate([
        'dateofad' => $request->dateofad,
        'nameofboat' => $request->nameofboat,
        'registeredlength' => $request->registeredlength,
        'tonnagelength' => $request->tonnagelength,
        'tonnagebreadth' => $request->tonnagebreadth,
        'tonnagedepth' => $request->tonnagedepth,
        'enginemake' => $request->enginemake,
        'engineserialno' => $request->engineserialno,
        'enginehorsepower' => $request->enginehorsepower,
        'enginenoofcylinder' => $request->enginenoofcylinder,
        'nameofbuilder' => $request->nameofbuilder,
        'yearofbuild' => $request->yearofbuild,
        'placeofbuild' => $request->placeofbuild
    ]);

    return redirect('/dashboard')->with('message','Saved Success!');
   }

   public function editboat(Request $request){
      return view('EditBoat');
   }
   public function updateboat(Request $request)
   {
      DB::update("update boats set dateofad='". $request->input('dateofad').
      "' , nameofboat='". $request->input('nameofboat').
      "', registeredlength='". $request->input('registeredlength').
      "', tonnagelength='". $request->input('tonnagelength').
      "', tonnagedepth='". $request->input('tonnagedepth').
      "', enginemake='". $request->input('enginemake').
      "', enginehorsepower='". $request->input('enginehorsepower').
      "', enginenoofcylinder='". $request->input('enginenoofcylinder').
      "', nameofbuilder='". $request->input('nameofbuilder').
      "', yearofbuild='". $request->input('yearofbuild').
      "', placeofbuild='". $request->input('placeofbuild').
      "' where id ='".$request->input('id')."'");

      
      return redirect('/dashboard')->with('message', 'Updated Success!');
   }

   public function viewboat(Request $request, $id)
   {  
      
      $boats = DB::select('select * from boats where id = ?', [$id]);
      $id = $id;
      // dd($boats);
      return view('EditBoat',
      [
         'boats'=> $boats,
         'id'=> $id
      ]);
   }
}
