@extends ('layouts.adminlayout')

@section('cont')

<div class="addtraining">
<legend><h1> Add Training </h1></legend>
<form action="{{route('Trainings.update' ,$trainings->id)}}" method="POST" enctype="multipart/form-data">
        @csrf



        @method('PATCH')
        <div class="row">

                <div class="addcolumn">

    <div class="details">
            <label class=""><b> Training Title </b></label>
            <input type="text" name="title" class="form-control" value="{{$trainings->title}}" id="title" placeholder=" ">
    </div>

    <div class="description">
            <label><b> Training Description </b></label>
            <input type="text" name="description" class="form-control" value="{{$trainings->description}}" id="" placeholder=" ">
    </div>

                </div>

                <div class="addcolumn">

    <div class="details">
            <label><b> Training Date </b></label>
            <input type="date" name="date" class="form-control"  value="{{$trainings->date}}" id="date" placeholder=" ">
    </div>

    <div class="details">
            <label><b> Training Venue </b></label>
            <input type="text" name="venue" class="form-control" value="{{$trainings->venue}}" id="venue" placeholder=" ">
    </div>

    <div class="details">
            <label><b> Admission </b></label>
            <input type="text" name="admission" class="form-control" value="{{$trainings->admission}}" id="admission" placeholder=" ">
    </div>


    <br>
                </div>

                <div class="addcolumn">

    <div>
    
    <button type="button"   id="custom-button">Choose a File</button>
    <div class = "col-md-8">
        <input type="file"  name="image_url" id="real-file" value="{{$trainings->image_url}}" hidden="hidden" />
        <img src="{{URL::to('/')}}/uploads/{{$trainings->image_url}}"
            class="img-thumbnail" width ="100"   >

            <input type="file"  name="hidden_image" id="real-file" value="{{$trainings->image_url}}" hidden="hidden" />
    <div>





    
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