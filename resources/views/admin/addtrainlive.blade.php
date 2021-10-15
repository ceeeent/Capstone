@extends ('layouts.adminlayout')

@section('cont')

<div class="addtraining">

    <legend><h1> Add Webinar </h1></legend>
  
<form action="{{route('live')}}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row">
  
      <div class="addcolumn">
      
      <div class="webtitle">
              <label class=""><b> Webinar Title </b></label>
              <input type="text" name="title" class="form-control" id="" placeholder=" ">
        </div>

  
        <div class="description">
              <label><b> Webinar Description </b></label>
              <input type="text" name="webinars_description" class="form-control" id="" placeholder=" ">
        </div>
      </div>
    
      <div class="addcolumn">
      <div class="adddate">
              <label><b> Webinar Date </b></label>
              <input type="date" name="webinars_date" class="form-control" id="" placeholder=" ">
        </div>
  
        <div class="admission">
              <label><b> Admission </b></label>
              <input type="text" name="admission" class="form-control" id="" placeholder=" ">
        </div>
  
        <div class="speaker">
          <label><b> Speaker </b></label>
          <select type="text" class= "form-control" name = "speaker_id" id = "speaker_id"  required> 

          @foreach ($speaker as $speakers)
          <option value="{{ $speakers->id }}">{{$speakers->speaker_name}}</option>
         @endforeach

          </select> 
        </div>
  
        <div class="exam">
          <label><b> Exam </b></label>
          <select type="text" class= "form-control" name = "" id="" required> 
          <option value="student">           </option>
          <option value="student">Mahirap</option>
          <option value="student">Hindi</option>
          </select>
        </div>
      </div>
      
  </div>

  <div>
  <input type="file"  name="image_url" id="real-file" hidden="hidden" />
  <button type="button" id="custom-button">Select an image</button>
  <span id="custom-text">No file chosen</span>
  </div>
        
  <center>
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Save</button>
  </center>
     
  </form>
  </div>

@endsection