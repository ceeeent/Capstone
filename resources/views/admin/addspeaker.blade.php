@extends ('layouts.adminlayout')

@section('cont')


<div class="addtraining">
        <legend><h1> Add Speaker </h1></legend>
      
        <form action="{{ route('admin/addspeaker') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="addcolumn">
            <div class="speakername">
                  <label class=""><b> Speaker Name </b></label>
                  <input type="text" name="speaker_name" class="" id=""  value= "{{ old('speaker_name') }}">
            </div>

            <div class="profession">
                  <label><b> Profession </b></label>
                  <input type="text" name="profession" class="Profession" id="" value= "{{ old('profession') }}">
            </div>
      </div>
      
      
      <div class="addcolumn">
            <div class="company">
                  <label><b> Company </b></label>
                  <input type="text" name="company" class="" id=""value= "{{ old('company') }}">
            </div>
      
            <div class="position">
                  <label><b> Position </b></label>
                  <input type="text" name="position" class="" id="" value= "{{ old('position') }}">
            </div>
      
       </div>     
      
       <div>
  <input type="file"  name="image_url" id="real-file" hidden="hidden" />
  <button type="button" id="custom-button">Select an image</button>
  <span id="custom-text">No file chosen</span>
  </div>
      
      </div>
      <center>
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Save</button>
  </center>
            </form>
      </div>

@endsection