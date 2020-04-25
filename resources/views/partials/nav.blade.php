<nav class="navbar bg-white shadows-sm"> 

    <a class="navbar-brand" href="{{ route('home')   }}">{{config('app.name')}}</a>
    <ul class="nav nav-pills">

        <li class="nav-item "><a class="nav-link  {{ setActive('home') }}" href="{{route('home')}}">Home</a></li>
        <li class="nav-item  "><a class="nav-link {{ setActive('about') }}" href="{{route('about')}}">About</a></li>
        <li class="nav-item  "><a class="nav-link {{ setActive('projects.index') }}" href="{{route('projects.index')}}">Reservations</a></li>
        <li class="nav-item  "><a class="nav-link {{ setActive('contact') }}" href="{{route('contact')}}">Contact</a></li>
        @guest
            <li class="nav-item" ><a  class="nav-link" href="{{  route('login')  }}">Login</a></li>
            <li class="nav-item" ><a  class="nav-link" href="{{  route('register')  }}">Register</a></li>
      
        @else
            <li class="nav-item"><a  class="nav-link" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">logout
                
                </a></li>

        @endguest
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>