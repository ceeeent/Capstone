
<div class="homelinks">

<button class="tablink" onclick="openPage('online', this, ' white')" id="defaultOpen">Train Online</button>
<button class="tablink" onclick="openPage('offline', this, ' white')">Train On-site</button>

</div>

<!--ONLINE -->

<div id="online" class="tabcontent">

<div>
<h2> TRAIN LIVE </h2>


<div class="row">
  <div class="onlinecolumn">
    <img class="onlineimg" src="img/Starting an Urban Garden.jpg" alt="Nutri-Siomai">
	<br>
	<p class="title">Starting an Urban Garden</p>
	<p>26th of June, 2018 10:00 am</p>
	<p>Status: DONE</p>
  </div>
  
  <div class="onlinecolumn">
    <img class="onlineimg" src="img/Pinggang Pinoy.jpg" alt="Nutri-Siomai">
	<br>
	<p class="title">Pinggang Pinoy</p>
	<p>16th of May, 2018 10:00 am</p>
	<p>Status: DONE</p>
  </div>
  
  <div class="onlinecolumn">
    <img class="onlineimg" src="img/Nutrigenomics.jpg" alt="Nutri-Siomai">
	<br>
	<p class="title">Nutrigenomics</p>
	<p>30th of October, 2018 10:00 am</p>
	<p>Status: DONE</p>
  </div>
  
  <div class="onlinecolumn">
    <img class="onlineimg" src="img/Webinar on Philippine Dietary Reference Intakes (PDRI).jpg" alt="Nutri-Siomai">
	<br>
	<p class="title">Webinar on Philippine Dietary Reference Intakes (PDRI)</p>
	<p>27th of March, 2019 10:00 am</p>
	<p>Status: SOON</p>
  </div>
</div>
</div>

<hr> 


<div>
<h2> TRAIN LATER </h2>

    <p> No Unwatched Webinars Available </p>

</div>


<hr> 

	<h1>Train Now</h1>
	<div class="row">
			<center>
	@if(count($trainnow) > 0)
			@foreach($trainnow as $now)
					
				<div class="onlinecolumn">
						<img src="/public/image_url/{{$now->image_url}}">
						<br>
						<p class="title">{{$now->name}}</p>
						<a href="/now/{{$now->id}}" class="nowplay" id="onlinebutton"> Play Video</a>
						<button class="nowplay" id="onlinebutton">Download PDF</button>
						<p>{{$now->description}}</p>
			
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


<!-- END OF ONLINE -->

<!-- OFFLINE -->

<div id="offline" class="tabcontent">


	<h1>Train On-Site</h1>
	<div class="row">
			<center>
	@if(count($trainings) > 0)
			@foreach($trainings as $training)
					
			<div class="offlinecolumn">
					<img src="/public/image_url/{{$training->image_url}}">
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
	
	{{$trainings->links()}}


</div>


