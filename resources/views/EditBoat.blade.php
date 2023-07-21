<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
           
            <!-- Page Content -->
            <main>
                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6 overflow-auto text-gray-900">
                                <div>
            
                                    <div class="modal-header bg-primary p-2 mb-5">
                                        <h1 class="text-white modal-title fs-5" id="exampleModalLabel">Boat's Information</h1>

                                        {{-- <button type="button" class="text-white btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close">X</button> --}}
                                    </div>
                                    <form action="{{route('dashboard.update.boat')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            {{-- @php
                                                dd($id);
                                            @endphp --}}
                                            @foreach ($boats as $boat) 
                                                <input type="hidden" name="id" value="{{$id}}">
                                                <div class="mb-3">
                                                    <label for="dateofad" class="form-label">Date of Admeasurement</label><br>
                                                    <input type="date"  required value="{{$boat->dateofad}}" name="dateofad" class="form-control" name="dateofad" id="dateofad">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nameofboat" class="form-label">Name of Boat</label><br>
                                                    <input type="text" required value="{{$boat->nameofboat}}" class="form-control" id="nameofboat" name="nameofboat" placeholder="boat name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="registeredlength" class="form-label">Registered Length</label><br>
                                                    <input type="text" required value="{{$boat->registeredlength}}"   class="form-control"  id="registeredlength" name="registeredlength" placeholder="registered length">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tonnagelength" class="form-label">Tonnage Length</label><br>
                                                    <input type="text" required   value="{{$boat->tonnagelength}}"  class="form-control" id="tonnagelength" name="tonnagelength" placeholder="tonnage length">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tonnagebreadth" class="form-label">Tonnage Breadth</label><br>
                                                    <input type="text" required  value="{{$boat->tonnagebreadth}}"  class="form-control" id="tonnagebreadth" name="tonnagebreadth" placeholder="tonnage breadth">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tonnagedepth"  class="form-label">Tonnage Depth</label><br>
                                                    <input type="text" required  value="{{$boat->tonnagedepth}}"  class="form-control" id="tonnagedepth" name="tonnagedepth" placeholder="tonnage depth">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="enginemake" class="form-label">Engine Make</label><br>
                                                    <input type="text" required   value="{{$boat->enginemake}}"  class="form-control" id="enginemake" name="enginemake" placeholder="engine make">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="engineserial" class="form-label">Engine Serial No.</label><br>
                                                    <input type="text" required  value="{{$boat->engineserialno}}"  class="form-control" id="engineserial" name="engineserialno" placeholder="engine serial number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="enginehorsepower" class="form-label">Engine Horse Power</label><br>
                                                    <input type="text" required  value="{{$boat->enginehorsepower}}"   class="form-control" id="enginehorsepower" name="enginehorsepower" placeholder="engine horse power">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="enginenocylinder" class="form-label">Engine No. of Cylinder</label><br>
                                                    <input type="text" required   value="{{$boat->enginenoofcylinder}}"  class="form-control" id="enginenocylinder" name="enginenoofcylinder" placeholder="engine number of cylinder">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nameofbuilder" class="form-label">Name of Builder</label><br>
                                                    <input type="text" required  value="{{$boat->nameofbuilder}}"   class="form-control" id="nameofbuilder" name="nameofbuilder" placeholder="name of builder">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="yearofbuild" class="form-label">Year of Build</label><br>
                                                    <input type="text" required  value="{{$boat->yearofbuild}}"   class="form-control" id="yearofbuild" name="yearofbuild" placeholder="year of build">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="placeofbuild" class="form-label">Place of Build</label><br>
                                                    <input type="text" required   value="{{$boat->placeofbuild}}"  class="form-control" id="placeofbuild" name="placeofbuild" placeholder="place of build">
                                                </div>               
                                            @endforeach
                                        </div>
                                        <div class="modal-footer gap-2">
                                            <a href="{{route('dashboard')}}" class="btn btn-secondary bg-secondary">Close</a>
                                            <button type="submit" class="btn btn-primary bg-primary">Update</button>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </main>
        </div>

        @livewireScripts
    </body>
</html>
 