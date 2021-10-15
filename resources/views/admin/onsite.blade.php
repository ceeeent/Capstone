@extends ('layouts.adminlayout')

@section('cont')




<div class="content">

<h2>Train On-Site</h2>
<div class="row">
    <center> 
    <form action="{{route('enroll.store')}}" method="POST" enctype="multipart/form-data">
        @csrf


@if(count($trainings) > 0)
    @foreach($trainings as $training)



    <input type="hidden" name="trainings_id" class="form-control" id="description" placeholder=" " value="{{$training->id}}" required>
    <div class="offlinecolumn">
        <img class="onlineimg" src="/uploads/{{$training->image_url}}">
        <br>
        <p>{{$training->title}}</p>
        <p>{{$training->admission}}</p>
        <p>{{$training->date}}</p>
        <p>{{$training->venue}}</p>
        <p>{{$training->description}}</p>

   
        <button type = "submit" class="btn btn-primary btn-sm">Enroll Now</button>
    </div>
  





    @endforeach
    
@else
    <br>
    <br>
    <p>No posts found</p>
@endif

    </center>
</div>
</form>
{{$trainings->links()}}


</div>

@endsection