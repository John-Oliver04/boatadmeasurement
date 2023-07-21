<div>

    <div class="py-2">

    </div>
    <div class="">

        {{-- container --}}
        <div class="">
            {{-- header --}}
            <div class=" p-2 text-xl text-slate-100 bg-blue-500 flex justify-between">
                <div class=" tracking-widest items-center self-center m-2">
                    List
                </div>
                <div class="m-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="text-white text-3xl w-24 bg-green-500 hover:bg-green-600 " data-bs-toggle="modal" data-bs-target="#addmodal">
                        +
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="addmodal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                            <h1 class="text-white modal-title fs-5" id="exampleModalLabel">Add Form</h1>
                            <button type="button" class="text-white bg-red-500 px-2 border hover:bg-red-600" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <form action="{{url('/dashboard/add-boat')}}" class="w-100" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                
                                        <div class="mb-3">
                                            <label for="dateofad" class="form-label">Date of Admeasurement</label><br>
                                            <input type="date" required  name="dateofad" class="form-control" name="dateofad" id="dateofad">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nameofboat" class="form-label">Name of Boat</label><br>
                                            <input type="text" required  class="form-control" id="nameofboat" name="nameofboat" placeholder="boat name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="registeredlength" class="form-label">Registered Length</label><br>
                                            <input type="text" required  class="form-control"  id="registeredlength" name="registeredlength" placeholder="registered length">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tonnagelength" class="form-label">Tonnage Length</label><br>
                                            <input type="text" required class="form-control" id="tonnagelength" name="tonnagelength" placeholder="tonnage length">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tonnagebreadth" class="form-label">Tonnage Breadth</label><br>
                                            <input type="text" required  class="form-control" id="tonnagebreadth" name="tonnagebreadth" placeholder="tonnage breadth">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tonnagedepth"  class="form-label">Tonnage Depth</label><br>
                                            <input type="text" required  class="form-control" id="tonnagedepth" name="tonnagedepth" placeholder="tonnage depth">
                                        </div>
                                        <div class="mb-3">
                                            <label for="enginemake" class="form-label">Engine Make</label><br>
                                            <input type="text" required  class="form-control" id="enginemake" name="enginemake" placeholder="engine make">
                                        </div>
                                        <div class="mb-3">
                                            <label for="engineserial" class="form-label">Engine Serial No.</label><br>
                                            <input type="text" required  class="form-control" id="engineserial" name="engineserialno" placeholder="engine serial number">
                                        </div>
                                        <div class="mb-3">
                                            <label for="enginehorsepower" class="form-label">Engine Horse Power</label><br>
                                            <input type="text" required  class="form-control" id="enginehorsepower" name="enginehorsepower" placeholder="engine horse power">
                                        </div>
                                        <div class="mb-3">
                                            <label for="enginenocylinder" class="form-label">Engine No. of Cylinder</label><br>
                                            <input type="text" required  class="form-control" id="enginenocylinder" name="enginenoofcylinder" placeholder="engine number of cylinder">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nameofbuilder" class="form-label">Name of Builder</label><br>
                                            <input type="text" required  class="form-control" id="nameofbuilder" name="nameofbuilder" placeholder="name of builder">
                                        </div>
                                        <div class="mb-3">
                                            <label for="yearofbuild" class="form-label">Year of Build</label><br>
                                            <input type="text" required  class="form-control" id="yearofbuild" name="yearofbuild" placeholder="year of build">
                                        </div>
                                        <div class="mb-3">
                                            <label for="placeofbuild" class="form-label">Place of Build</label><br>
                                            <input type="text" required  class="form-control" id="placeofbuild" name="placeofbuild" placeholder="place of build">
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="text-white bg-slate-500 px-3 p-1 border hover:bg-slate-600" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="text-white bg-blue-500 px-3 p-1 border hover:bg-blue-600">Save</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- body --}}
            <div class="overflow-x-auto ">
                {{-- unordered list --}}
                <ul>
                    {{-- loop data through loop --}}
                    @php
                        $boatcount = 1;
                    @endphp
                    @foreach ($boats as $boat)    
                        {{-- list --}}
                        <li class="w-full border-b-2 border-blue-500">
                            {{-- list of boat row --}}
                            <div class="bg-blue-200">
                                <div class="flex justify-between">
                                    <div class="p-3">

                                        {{-- header --}}
                                        <div class="flex">
                                            <b>{{$boatcount++ }}</b>
                                            <h1 class="ml-2 text-2xl font-bold tracking-widest ">{{$boat->nameofboat}}</h1>
                                        </div>
                                        {{-- body --}}
                                        <div class="flex">
                                            <div>
                                                <div class="pl-2 border-l-2 border-blue-100">
                                                    <div>Boat details:</div>
                                                    <div class="flex gap-3">
            
                                                        <p>{{$boat->registeredlength}} ft.</p>
                                                        <p>{{$boat->tonnagelength}} m.</p>
                                                        <p>{{$boat->tonnagebreadth}} tonnes</p>
                                                        <p>{{$boat->tonnagedepth}} tonnes</p>
                                                    </div>
                                                </div>
                                                <div class="flex gap-3 pl-2 mt-2 border-l-2 border-blue-100">
                                                    <p>{{$boat->nameofbuilder}}</p>
                                                    <p>{{$boat->yearofbuild}}</p>
                                                    <p>{{$boat->placeofbuild}}</p>
                                                </div>
                                            </div>
                                            <div class="pl-2 ml-2 border-l-2 border-blue-100">
                                                <div>Engine details:</div>
                                                <div class="md:flex gap-2">
                                                    <p>{{$boat->enginemake}}</p>
                                                    <p>{{$boat->engineserialno}}</p>
                                                    <p>{{$boat->enginenoofcylinder}}</p>
                                                    <p>{{$boat->enginehorsepower}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- footer --}}
                                    <div class="flex flex-col p-3 text-white border-l-2 border-blue-100">
                                        <a href="dashboard/view/{{$boat->id}}" class="text-center w-24 p-2 bg-blue-500 hover:bg-blue-600 ">View</a>
                                        <!-- Button trigger modal -->
                                        <button class="w-24 p-2 bg-red-500 hover:bg-red-600"  data-bs-toggle="modal" data-bs-target="#deleteboat{{$boat->id}}">Delete</button>
                                        <!-- Modal -->
                                        <div class="modal fade text-slate-900" id="deleteboat{{$boat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
                                                <button type="button" class="text-white bg-red-500 px-2 border hover:bg-red-600" data-bs-dismiss="modal" aria-label="Close">x</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h1 class="text-lg">{{$boat->nameofboat}}</h1>
                                                    Are you sure to remove this boat from the list?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="text-white bg-slate-500 px-3 p-1 border hover:bg-slate-600" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="text-white bg-red-500 px-3 p-1 border hover:bg-red-600">Remove</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        
                                        <button class="w-24 p-2 bg-indigo-500 hover:bg-indigo-600 ">Print</button>
                                    </div>
                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- footer --}}
            <div>
                {{$boats->links()}}
            </div>
        </div>
    </div> 
</div>




