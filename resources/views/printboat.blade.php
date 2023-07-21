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
        <script src="https://cdn.tailwindcss.com"></script>
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
                        {{-- <div class="flex justify-end w-full my-3 ">
                            <button class="p-1 px-3 text-white bg-blue-500 border hover:bg-blue-600">Print</button>
                        </div> --}}
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6 overflow-auto text-gray-900">
                               {{-- container --}}
                                <div>
                                    {{-- header --}}
                                    <div class="mb-5">
                                        <h1 class="text-3xl">
                                            Boat's Information
                                        </h1>
                                    </div>
                                    {{-- body --}}
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <th>Boats Name</th>
                                                <th>Registered Length</th>
                                                <th>Tonnage Length</th>
                                                <th>Tonnage Breadth</th>
                                                <th>Tonnage Depth</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($boats as $boat)
                                                    <tr>
                                                        <td>{{$boat->nameofboat}}</td>
                                                        <td>{{$boat->registeredlength}} ft.</td>
                                                        <td>{{$boat->tonnagelength}} m.</td>
                                                        <td>{{$boat->tonnagebreadth}} ton.</td>
                                                        <td>{{$boat->tonnagedepth}} ton.</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <table class="table">
                                            <thead>
                                                <th>Engine Make</th>
                                                <th>Engine Serial No.</th>
                                                <th>Engine Horse Power</th>
                                                <th>Engine No. of Cylinder</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($boats as $boat)
                                                    <tr>
                                                        <td>{{$boat->enginemake}}</td>
                                                        <td>{{$boat->engineserialno}} </td>
                                                        <td>{{$boat->enginehorsepower}} </td>
                                                        <td>{{$boat->enginenoofcylinder}} </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="flex gap-4 mt-5">
                                            <small>Name of Builder: {{$boat->nameofbuilder}}</small>
                                            <small>Place of Build: {{$boat->placeofbuild}} </small>
                                            <small>Year of Build: {{$boat->yearofbuild}} </small>

                                        </div>
                                    </div>
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
 