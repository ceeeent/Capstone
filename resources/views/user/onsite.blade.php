@extends ('layouts.userlayout')

@section('continue')

<div class="content">

        <h2>Train On-Site</h2>
        <div class="row">
            <center>


        @if(count($trainings) > 0)
            @foreach($trainings as $training)
                
    
    <div class="offlinecolumn">
        <img class="onlineimg" src="/uploads/{{$training->image_url}}">
        <br>
        <p type ="hidden" class="title">{{$training->id}}</p>
        <p class="title">{{$training->title}}</p>
        
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
        
        {{$trainings->links()}}
        
        
        </div>
        
        @endsection