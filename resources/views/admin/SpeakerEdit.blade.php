@extends ('layouts.adminlayout')

@section('cont')

<div class="addtraining">
  <legend><h1>  </h1></legend>

  <form method="POST" action="{{route('Speaker.update',$speaker->id) }}"enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="row">

      <div class="addcolumn">

      <div class="details">
            <label class=""><b> Speakaer Name:</b></label>
            <input type="text" name="speaker_name" class="form-control" id="speaker_name" placeholder=" " value="{{$speaker->speaker_name}}" required>
      </div>

      <div class="details">
            <label><b> Profession</b></label>
            <input type="text" name="profession" class="form-control" id="youtube_url" placeholder=" " value="{{$speaker->profession}}" required>
      </div>

      </div>

      <div class="addcolumn">

      <div class="description">
            <label><b> Company: </b></label>
            <input type="text" name="company" class="form-control" id="description" placeholder=" " value="{{$speaker->company}}" required>
      </div>

      <div class="description">
            <label><b> Position: </b></label>
            <input type="text" name="position" class="form-control" id="description" placeholder=" " value="{{$speaker->position}}" required>
      </div>

      </div>


      <div class="addcolumn">
            <div>
            <label>Select an image</label>
            <input  name="image_url" type="file" value="{{$speaker->image_url}}" >
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