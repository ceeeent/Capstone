<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        
        <link rel="apple-touch-icon" sizes="76x76" href="img/logotry.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/img/TitleLogo.png">
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    
        <!-- Styles -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">

         <!--MGA DINAGDAG KO -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet prefetch" href="http://fonts.googleapis.com/css?family=Neuton|Oswald">
        <!-- end -->
        <!--parallax script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <script type="text/javascript" src="parallax.min.js"></script>

        <script src="{{ asset('js/parallax.min.js') }}" defer></script>


        <!--end-->
        
    
        <title>{{ config('app.name', 'iTrain') }}</title>


</head>
<body>


<button onclick="topFunction()" id="myBtn" title="Back on top"><i class="fas fa-angle-double-up"></i></button>

<div id="navbar" >

 
  
  <img class="logo" src="img/hehe.png"> 
  
  <a href="#home" class="nv">Home</a>
  <a href="#services" class="nv">Services</a>
  <a href="#webinars" class="nv">Webinars</a>
  <a href="#trainings" class="nv">Trainings</a>
  <a href="#faqs" class="nv">FAQs</a>
  <a href="#contact" class="nv">Contact</a>
  <a href="#login" class="nv" onclick="document.getElementById('id01').style.display='block'">Login</a>
  <center>
<div id="id01" class="modal">

        <div class="card-header">{{ __('Login') }}</div>
  
<form class="modal-content animate" id="form-horizontal" method="POST" action="{{ route('login.custom') }}">
    @csrf


    <fieldset class="field">
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Login') }}</div>
                
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login.custom') }}"> 
                                        @csrf
                
                                        <div class="form-group row">
                                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                
                                                @if ($errors->has('username'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </fieldset>

</form>

</div>
</center>
</div>
	
	
	<div class="parallaxmain" id="home">
  <p>
    <dfn id="dfn">Welcome To FNRI</dfn>
    <span>
      iTrain Website
    </span>
    <dfn>&mdash;The official webiste of DOST-FNRI Training Unit.&mdash;</dfn>
  </p>
  </div>



<div id="services"> </div>

<div class="section-header">
<center>
    <h2 class="homehead">Our Services</h2>
    <p class="homeheaddesc">The Food and Nutrition Research Institute (DOST-FNRI) is committed to its mandate of diffusing
information to various stakeholders and clients. This information empowers Filipinos to make healthy
food choices and become well-nourished. DOST-FNRI has been conducting training and seminars as
away of disseminating credible nutrition information.</p>

</center>

<center>
<div class="row">

	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/home" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-laptop-phone"></i>
    </div>
    <h4>Train Live</h4>
    <p>Enjoy free webinars at your home and hassle free.</p>
	</a>
	</center>
	</div>
	
	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/home" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-license"></i>
    </div>
    <h4>Train Offline</h4>
    <p>If you are not a fan of webinar, you can request trainings from us.</p>
	</a>
	</center>
	</div>
	
	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/trainow" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-pencil"></i>
    </div>
    <h4>Train Now</h4>
    <p>Learn the kitchen tested recipes by the DOST-FNRI.</p>
	</a>
	</center>
	</div>
</div>
</center>
</div>


<div class="par1Q" data-parallax="scroll"></div>



<div id="webinars"> </div>
<div class="section-header">
<center>
    <h2 class="homehead">AVAILABLE WEBINARS</h2>
    <p class="homeheaddesc">Watch live webinar videos by DOST-FNRI.</p>

</center>

<center>
<div class="row">

	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/home" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-laptop-phone"></i>
    </div>
    <h4>Train Live</h4>
    <p>Enjoy free webinars at your home and hassle free.</p>
	</a>
	</center>
	</div>
	
	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/home" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-license"></i>
    </div>
    <h4>Train Offline</h4>
    <p>If you are not a fan of webinar, you can request trainings from us.</p>
	</a>
	</center>
	</div>
	
	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/trainow" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-pencil"></i>
    </div>
    <h4>Train Now</h4>
    <p>Learn the kitchen tested recipes by the DOST-FNRI.</p>
	</a>
	</center>
	</div>
</div>
</center>
</div>

<div class="par3Q"></div>

<div id="trainings"> </div>

<div class="section-header">
<center>
    <h2 class="homehead">AVAILABLE TRAININGS</h2>
    <p class="homeheaddesc">You can enroll in the face to face trainings offered by DOST-FNRI. If you enroll here, you will have to go to the office of DOST-FNRI to attend the trainings.</p>

</center>

<center>
<div class="row">

	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/home" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-laptop-phone"></i>
    </div>
    <h4>Train Live</h4>
    <p>Enjoy free webinars at your home and hassle free.</p>
	</a>
	</center>
	</div>
	
	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/home" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-license"></i>
    </div>
    <h4>Train Offline</h4>
    <p>If you are not a fan of webinar, you can request trainings from us.</p>
	</a>
	</center>
	</div>
	
	<div class="urow">
	<center>
	<a href="http://trainings.fnri.dost.gov.ph/itrain#/trainow" class="secheadlink">
    <div class="icon">
    <i class="lnr lnr-pencil"></i>
    </div>
    <h4>Train Now</h4>
    <p>Learn the kitchen tested recipes by the DOST-FNRI.</p>
	</a>
	</center>
	</div>
</div>
</center>
</div>


<div class="par2Q"></div>


<div id="faqs"> </div>

<center>
    <h2 class="homehead">FAQs</h2>
    <p class="homeheaddesc">Frequently Asked Questions</p>

</center>

<center>
<div class="row pricing-tables">
<button class="accordion" type="button">Who can register in the iTrain website?</button>
<div class="panel">
  <p>Those who have an account in the iFNRI website automatically have an account in the iTrain website. To use or activate the account, user has to fill up the account completion form in the iTrain website</p>
</div>

<button class="accordion">How to enroll in a course offering under in the iTrain website?</button>
<div class="panel">
  <p>iTrain users have two training options. The Train Online option allows users to watch cooking demo
videos and webinars online. The Train Offline option allows users to enroll in the face to face trainings of
DOST-FNRI.</p>
</div>

<button class="accordion">Will I get a certificate if I attended the Train Online option?</button>
<div class="panel">
  <p>Under the Train Online, users have three options: Train Now, Train Live and Train Later. They can get a
certificate if they choose the Train Live and Train Later.</p>
</div>

<button class="accordion">How does the Train Live option works?</button>
<div class="panel">
  <p>Users should have have an account in the iTrain website. Participant need to login in their account and
they will see a list of webinar offerings. Click the enroll button to enroll.</p><p>Each webinar offering has a pre/post test. Participants need to click the "Profile" button in
their account. In each webinar enrolled, participant needs to click the “Take Pre-Test”.
Participant needs to take the pre-test at most one hour before the scheduled webinar. If he/she did not
take the pre-test before the webinar session, he/she cannot watch the webinar.</p><p>After the live streaming of the webinar, participant also needs to take the post-test and evaluation which are available
immediately after the webinar.</p>
</div>

<button class="accordion">How does the Train Later option work?</button>
<div class="panel"><br>
  <p>If user missed the webinar session, user can still watch the webinar through the Train Later option. In
their account, user must click the “Train Later” button. He/she have one week to watch the webinar
video. After one week, the link will expire and the video cannot be watched. If the user, was able to
watch the video the post test and evaluation form have to be answered to receive a certificate of
participation online.</p>
</div>

<button class="accordion">How does the Train Offline option work?</button>
<div class="panel"><br>
  <p>Train Offline is for the online enrollment of the face to face trainings of DOST-FNRI. Trainings offered in
the Train Offline option will be conducted in DOST-FNRI, Bicutan, Taguig City.</p>
</div>



<button class="accordion">How will I pay for the trainings in the Train Offline option?</button>
<div class="panel"><br>
  <p>After three working days of enrollment, the training fee will have to be deposit in DOST-FNRI’s bank
account.</p><p><center><b>Land Bank of the Philippines</b></center></p><p><center><b>Account Name: FNRI Project Account</b></center></p><p><center><b>Account Number: 1822-1032-40</b></center></p><p>Make sure to email the scanned deposit slip to <b>itrainfnri@gmail.com</b> to reserve your slot.</p>
</div>


<button class="accordion">What if I will not be able to deposit within three working days?</button>
<div class="panel"><br>
  <p>If the secretariat was not able to receive the scanned deposit slip after three working days, your
reservation will be <b>forfeited</b>.</p>
</div>



<button class="accordion">How will I know if my reservation is guarantee?</button>
<div class="panel"><br>
  <p>You will receive an email from the iTrain secretariat acknowledging the received of payment.</p>
</div>


<button class="accordion">Can I refund the training fee I paid?</button>
<div class="panel"><br>
  <p>No you cannot refund but the payment is transferable. The primary participant should emailed the
iTrain secretartiat who is attending on her/his behalf.</p>
</div>

<button class="accordion">Can I use the training fee I paid as payment for another training of DOST-FNRI in case I will not be
able to attend?</button>
<div class="panel"><br>
  <p>No, the payment for a particular training cannot be used as payment for another training of DOST-FNRI.</p>
</div>


</div>
</center>



<hr>
<div id="contact"> </div>
<div class="foot">
<center>
    <h2 class="">Contact us</h2>
    <p class="">FNRI Bldg., DOST Compound, Gen. Santos Avenue Bicutan, Taguig City Metro Manila PHILIPPINES 1631</p>
	<p class="">Phone: (02)837-2071 local 2287</p>
	<p class="">E-mail: mvc@fnri.dost.gov.ph / mar.v.c@yahoo.com</p>
	

</center>
</div>




<footer class="foot">
<center>
<div class="copyright">

    <p>All copyrights reserved &copy; 2018 - Designed & Developed by DOST-FNRI</p>
</div>
</center>
</footer>



<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>



<script>

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Get the input field
var input = document.getElementById("username");

// Get the warning text
var text = document.getElementById("text");

// When the user presses any key on the keyboard, run the function
input.addEventListener("keyup", function(event) {

  // If "caps lock" is pressed, display the warning text
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

// Get the input field
var input = document.getElementById("inputpassword");

// Get the warning text
var text = document.getElementById("text1");

// When the user presses any key on the keyboard, run the function
input.addEventListener("keyup", function(event) {

  // If "caps lock" is pressed, display the warning text
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

</script>
<!-- accordion script ito -->
<script>

  var acc = document.getElementsByClassName("accordion");
  var i;

  for(i=0; i<acc.length; i++){
    acc[i].onclick = function(){
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if(panel.style.maxHeight){
        panel.style.maxHeight = null;
      }
      else{
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    }
  }  

</script>

<script type="text/javascript" src="top.js"></script>
</body>

</html>