@extends ('layouts.userlayout')

@section('continue')

<div class="content">

<div class="row">


    <div class="profileko">


            <div class="name">



                    
                        <img src="{{asset('img/icons/DP.png')}}" class="photo">

                            <div class="names">

                                <h2> {{ Auth::user()->name }} </h2>
                                <h4>National University</h4>
                                <h4><b>Trainee</b></h4>

                            </div>


                <div id="about" class="container text-center">


                            <ul class="nav nav-tabs">


                            <li class="active"><a data-toggle="tab" href="#home">Train Later</a></li>
                            <li><a data-toggle="tab" href="#menu1">Train Live</a></li>
                            <li><a data-toggle="tab" href="#menu2">Train Now</a></li>
                            <li><a data-toggle="tab" href="#menu3">Train Onsite</a></li>
                            <li><a data-toggle="tab" href="#menu4">CPD</a></li>
                            </ul>
                            <br>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                <p> If user missed the webinar session, user can still watch the webinar through the Train Later option. In their account, user must click the “Train Later” button. He/she have one week to watch the webinar
                            video. After one week, the link will expire and the video cannot be watched. If the user, was able to
                            watch the video the post test and evaluation form have to be answered to receive a certificate of
                            participation online. </p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <p> Hello </p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p> Hello </p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p> Hello </p>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <p> Hello </p>
                            </div>
                            </div>
                </div>



                            

            </div>

    </div>




</div>
</div>
@endsection