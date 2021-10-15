@extends ('layouts.adminlayout')

@section('cont')

<div class="sticklinks">

		<button class="onlinetablink" onclick="openPage('live', this, 'white')" id="defaultOpen">Train Live</button>
		<button class="onlinetablink" onclick="openPage('later', this, 'white')">Train Later</button>
		<button class="onlinetablink" onclick="openPage('now', this, 'white')">Train Now</button>

</div>
		
<div class="content">
		
		<!-- LIVE -->

		<div id="live" class="tabcontent">
		
		<div class="row">
				<center>
		@if(count($trainlive) > 0)
			@foreach($trainlive as $live)
					
					<div class="onlinecolumn">
	
						<img class="onlineimg" src="/uploads/{{$live->image_url}}">
						<br>
						<p class="title">{{$live->title}}</p>
						<p>{{$live->webinars_description}}</p>
						<p>{{$live->webinars_date}}</p>
						<p>Status: {{$live->status}}</p>
						
						<button class="nowplay" id="onlinebutton">Enroll Now</button>
			 
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
		
		<!-- END OF LIVE -->
		
		<!-- LATER -->
		
		<div id="later" class="tabcontent">
			
		<div class="row">
		<p> No Unwatched Webinars Available </p>
		</div>
		</div>
		
		<!-- END OF LATER -->
		
		<!-- NOW -->
		
		<div id="now" class="tabcontent">
		
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
		

</div>


@endsection