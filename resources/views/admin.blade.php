@extends('layouts.adminlayout')

@section('cont')

<div class="sticklinks">

    <button class="tablink" onclick="openPage('online', this, ' white')" id="defaultOpen">Train Online</button>
    <button class="tablink" onclick="openPage('offline', this, ' white')">Train On-site</button>
    
    </div>
    
    <!--ONLINE -->

    <div class="content">
    
<div id="online" class="tabcontent">

<!-- LIVE -->
    
<div>
<h2> TRAIN LIVE </h2>

<div class="row">
@if(count($trainlive) > 0)
        @foreach($trainlive as $live)
                
                <div class="onlinecolumn">

                        <img class="onlineimg" src="/uploads/{{$live->image_url}}">
                        <br>
                        <p class="title">{{$live->title}}</p>
                        <p>{{$live->webinars_description}}</p>
                        <p>{{$live->webinars_date}}</p>
                        
                        <button class="nowplay" id="onlinebutton">Enroll Now</button>
        
                </div>
                        
        @endforeach
@else
        <br>
        <br>
        <p>No posts found</p>
@endif


</div>

</div>
    
<hr> 

<!-- END OF LIVE -->
    
<!-- LATER -->
    
<div>
<h2>Train Now</h2>
<div class="row">
<p> No Unwatched Webinars Available </p>
</div>
</div>
    
<!-- END OF LATER -->
    
<!-- NOW -->
    
<hr> 

<div>

<h2>Train Now</h2>
<div class="row">

@if(count($trainnow) > 0)
        @foreach($trainnow as $now)
                        
        <div class="onlinecolumn">

        <img class="onlineimg" src="/uploads/{{$now->image_url}}">
        <br>
        <p class="title">{{$now->name}}</p>
        <a href="/AdminTrainNow/{{$now->id}}" class="nowplay" id="onlinebutton"> Play Video</a>
        <button class="nowplay" id="onlinebutton">Download PDF</button>
        <p>{{$now->description}}</p>

        </div>
                        
        @endforeach
@else
        <br>
        <br>
        <p>No posts found</p>
@endif

</div>
</div>
    
</div>

<!-- END OF NOW -->

    
    
    <!-- END OF ONLINE -->
    
    <!-- OFFLINE -->
    
<div id="offline" class="tabcontent">


<h2>Train On-Site</h2>
<div class="row">
        <center>
@if(count($trainings) > 0)
        @foreach($trainings as $training)
        
        <div class="offlinecolumn">
        <img class="onlineimg" src="/uploads/{{$training->image_url}}">
        <br>
        <p class="title">{{$training->title}}</p>
        <button class="nowplay" id="offlinebutton">Enroll Now</button>
        <p>{{$training->admission}}</p>
        <p>{{$training->date}}</p>
        <p>{{$training->venue}}</p>

        <p>{{$training->description}}</p>
        
        </div>
                
        
        @endforeach
        
@else
        <br>
        <br>
        <p>No posts found</p>
@endif

        </center>
</div>


</div>

    <!-- END OF OFFLINE -->

</div>
        
                
@endsection
