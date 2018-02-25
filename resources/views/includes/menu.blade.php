<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">IS601</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
            <li class="navbar-brand"><a href="{{route('index')}}">Home</a>
           <!--     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a> -->
            </li>
            <li class="navbar-brand"><a href="{{route('about')}}">About</a>
              <!--  <a class="nav-link" href="/about">About</a> -->
            </li>
            <li class="navbar-brand"><a href="{{route('signup')}}">Signup</a>
              <!--  <a class="nav-link" href="/signup">Sign Up</a> -->
            </li>
            <li class="navbar-brand"><a href="{{route('login')}}">Log In</a>
             <!--   <a class="nav-link" href="/login">Log In</a> -->
            </li>
            <li class="navbar-brand"><a href="{{route('contact')}}">Contact</a>
               <!-- <a class="nav-link" href="/contact">Contact</a> -->
            </li>
            <li class="navbar-brand"><a href="{{route('viewmessage')}}">View Message</a>
              <!--  <a class="nav-link" href="/viewmessage">View Messgae</a>  -->
            </li>
            <li class="navbar-brand"><a href="{{route('thanks',['name' => 'User' ])}}">Thanks</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!-- <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#logoutModal">Logout</button> -->
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('index')}}" role="button">Logout</a>
        </form>
    </div>
</nav>
