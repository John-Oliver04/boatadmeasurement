<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="modal-header bg-warning">
        <h1 class="text-white modal-title fs-5" id="exampleModalLabel">Edit Form</h1>
        <button type="button" class="text-white btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <form action="{{route('dashboard.edit.boat')}}" method="get" enctype="multipart/form-data">
        <div class="modal-body">
            
            <div class="mb-3">
                <label for="dateofad" class="form-label">Date of Admeasurement</label><br>
                <input type="date"  required value="" name="dateofad" class="form-control" name="dateofad" id="dateofad">
            </div>
            <div class="mb-3">
                <label for="nameofboat" class="form-label">Name of Boat</label><br>
                <input type="text" required value="{{$boat->nameofboat}}" class="form-control" id="nameofboat" name="nameofboat" placeholder="boat name">
            </div>
            <div class="mb-3">
                <label for="registeredlength" class="form-label">Registered Length</label><br>
                <input type="text" required  class="form-control"  id="registeredlength" name="registeredlength" placeholder="registered length">
            </div>
            <div class="mb-3">
                <label for="tonnagelength" class="form-label">Tonnage Length</label><br>
                <input type="text" required   class="form-control" id="tonnagelength" name="tonnagelength" placeholder="tonnage length">
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
                <input type="text" required   class="form-control" id="enginemake" name="enginemake" placeholder="engine make">
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
                <input type="text" required   class="form-control" id="enginenocylinder" name="enginenoofcylinder" placeholder="engine number of cylinder">
            </div>
            <div class="mb-3">
                <label for="nameofbuilder" class="form-label">Name of Builder</label><br>
                <input type="text" required   class="form-control" id="nameofbuilder" name="nameofbuilder" placeholder="name of builder">
            </div>
            <div class="mb-3">
                <label for="yearofbuild" class="form-label">Year of Build</label><br>
                <input type="text" required   class="form-control" id="yearofbuild" name="yearofbuild" placeholder="year of build">
            </div>
            <div class="mb-3">
                <label for="placeofbuild" class="form-label">Place of Build</label><br>
                <input type="text" required   class="form-control" id="placeofbuild" name="placeofbuild" placeholder="place of build">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary bg-primary">Update</button>
        </div>
    </form>

</body>
</html>