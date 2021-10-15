@extends ('layouts.adminlayout')

@section('cont')

<div class="addtraining">
  <legend><h1>  </h1></legend>

  <form method="POST" action="{{route('Trainnow.update',$trainnow->id) }}"enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="row">

      <div class="addcolumn">

      <div class="details">
            <label class=""><b> Video Name </b></label>
            <input type="text" name="name" class="form-control" id="name" placeholder=" " value="{{$trainnow->name}}" required>
      </div>

      <div class="details">
            <label><b> Video id </b></label>
            <input type="text" name="youtube_url" class="form-control" id="youtube_url" placeholder=" " value="{{$trainnow->youtube_url}}" required>
      </div>

      </div>

      <div class="addcolumn">

      <div class="description">
            <label><b> Video Description </b></label>
            <input type="text" name="description" class="form-control" id="description" placeholder=" " value="{{$trainnow->description}}" required>
      </div>

      </div>


      <div class="addcolumn">
            <div>
            <label>Select an image</label>
            <input  name="image_url" type="file" value="{{$trainnow->image_url}}" >
            {{-- <span id="custom-text">No file chosen</span> --}}
            </div>
      </div>


      <div class="addcolumn">
      
          <div>
            <label>Choose a File</label>
          <input  name="pdf_url" type="file" value="{{$trainnow->pdf_url}}" >
          {{-- <span id="custom-text">No file chosen</span> --}}
          </div>

      </div>

        </div>

      <center>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </center>

  </form>
</div>


@endsection