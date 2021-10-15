<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <link rel="apple-touch-icon" sizes="76x76" href="img/logotry.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/img/TitleLogo.png">

        <link rel="stylesheet" href={{asset('css/app.css')}}>
        <script src="{{ asset('assets/js/forms.js') }}" type="text/javascript"></script>
        <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>


        <title>{{config('app.name','iTrain')}}</title>

    </head>
    <body>
        @include('defaults.header')
        @include('admin.navbar')

        <div class="content">

        </div>
          

        <div id="main">
        @yield('content')
        </div>

    <script>
        var o =document.getElementById("one");
        var to =document.getElementById("two");
        to.style.display = 'none';
        
        function openNav() {
            document.getElementById("mySidenav").style.width = "270px";
            document.getElementById("main").style.marginLeft = "270px";
            o.style.display = 'none';
            to.style.display = '';
        }
        
        function closeNav() {
        
            document.getElementById("mySidenav").style.width = "100px";
            document.getElementById("main").style.marginLeft= "100px";
            o.style.display = '';
            to.style.display = 'none';
            
        }
        
        
        function openPage(pageName, elmnt, color) {
          // Hide all elements with class="tabcontent" by default */
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
        
          // Remove the background color of all tablinks/buttons
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
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

