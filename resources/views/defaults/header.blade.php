<header>

    <span id="one" style="cursor:pointer" onclick="openNav()"><img class="ham"  src= {{asset('img/icons/NavBar.png')}} alt="Navigation"></span>
    <span  id="two" style="cursor:pointer" onclick="closeNav() "><img class="ham"  src={{asset('img/icons/NavBar.png')}} alt="Navigation"></span>
    

    
    <img src={{asset('img/img/hehe.png')}} style="width: 100px; height: auto;"> 
            <a href="/profile" class="greet" id="greetings" style="clear:right" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Welcome, 
                {{ Auth::user()->username }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>


</header>