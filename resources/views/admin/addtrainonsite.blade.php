@extends ('layouts.adminlayout')

@section('cont')

<div class="addtraining">
<legend><h1> Add Training </h1></legend>
<form action="{{route('onsite')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

                <div class="addcolumn">

    <div class="details">
            <label class=""><b> Training Title </b></label>
            <input type="text" name="title" class="form-control" id="title" placeholder=" ">
    </div>

    <div class="description">
            <label><b> Training Description </b></label>
            <input type="text" name="description" class="form-control" id="" placeholder=" ">
    </div>

                </div>

                <div class="addcolumn">

    <div class="details">
            <label><b> Training Date </b></label>
            <input type="date" name="date" class="form-control" id="date" placeholder=" ">
    </div>

    <div class="details">
            <label><b> Training Venue </b></label>
            <input type="text" name="venue" class="form-control" id="venue" placeholder=" ">
    </div>

    <div class="details">
            <label><b> Admission </b></label>
            <input type="text" name="admission" class="form-control" id="admission" placeholder=" ">
    </div>


    <br>
                </div>

                <div class="addcolumn">

    <div>
    <input type="file"  name="image_url" id="real-file" hidden="hidden" />
    <button type="button" id="custom-button">Choose a File</button>
    <span id="custom-text">No file chosen</span>
    </div>
    <br>

        

        </div>

</div>

<center>
   <button type="submit" name="submit" class="btn btn-primary">Save</button>
</center>

 

</form>
</div>





@endsection