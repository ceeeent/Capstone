<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="apple-touch-icon" sizes="76x76" href="img/logotry.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/img/TitleLogo.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href={{asset('css/app.css')}}>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/forms.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>

    
    

    <title>{{ config('app.name', 'iTrain') }}</title>




</head>
<body>

<header>

    <span id="one" style="cursor:pointer" onclick="openNav()"><img class="ham"  src= {{asset('img/icons/NavBar.png')}} alt="Navigation"></span>
    <span  id="two" style="cursor:pointer" onclick="closeNav() "><img class="ham"  src={{asset('img/icons/NavBar.png')}} alt="Navigation"></span>
    

    <a href="home.html" class="logo">
    <img class="imglogo" src="img/img/hehe.png" style="width: 100px; height: auto;"> 
    </a>
            <a href="profile.html" class="greet" id="greetings" style="clear:right" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Welcome, 
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>


</header>

@include('user.navbar')

        <div class="main">

            @yield('main')
        </div>
    </div>


<script>
var o =document.getElementById("one");
var to =document.getElementById("two");
to.style.display = 'none';

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    o.style.display = 'none';
    to.style.display = '';
}

function closeNav() {

    document.getElementById("mySidenav").style.width = "75px";
    document.getElementById("main").style.marginLeft= "75px";
    o.style.display = '';
    to.style.display = 'none';
    
}


function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks, onlinetablink;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
    }

    // Remove the background color of all tablinks/buttons
    onlinetablink = document.getElementsByClassName("onlinetablink");
    for (i = 0; i < onlinetablink.length; i++) {
    onlinetablink[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>


<script type="text/javascript">
// Upload a file script
const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function(){
    realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function(){
    if(realFileBtn.value){
        customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    }else{
        customTxt.innerHTML = "No file chosen, yet.";
    }
    })
</script>
</body>
</html>
