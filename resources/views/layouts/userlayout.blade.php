<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
  
  
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/img/logotry.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/img/logotry.png')}}">
  
    <link rel="stylesheet" href={{asset('css/app.css')}}>
  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  
    <script src="{{ asset('js/forms.js') }}" type="text/javascript"></script>
  
  
    <script src="{{ asset('js/addexam.js') }}" defer></script>
  
  
  
  
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  
  
  
    <!--Exam Tags -->
  
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
    <!--content material DASHBOARD TEMPORARY  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    
    <script src="{{ asset('js/dashboard.js') }}" type="text/javascript"></script>
  
   
  
  
    <title>{{config('app.name','iTrain')}}</title>


</head>
<body>
    @include('defaults.header')
    @include('user.navbar')
    

    <div id="main">
        @include('defaults.messages')
    @yield('continue')
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

<script>
    function tab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script> 

</body>
</html>

