<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Post</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >

   
    <script src="{{  asset ('js/jquery-slim.min.js') }}"></script>
    <script src="{{  asset ('js/popper.min.js') }}"></script>
    <script src="{{  asset ('js/bootstrap.min.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg ">

  <h3><a class="navbar-brand fa-solid fa-cubes" href="/posts">Posts</a></h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/posts">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Homepage</a>
      </li>  -->
      @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/register') }}">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/login') }}">Login <span class="sr-only">(current)</span></a>
      </li>
      @else 
      
      <li class="nav-item ">
        <a href="" class="nav-link">Hi
          {{ Auth::user()->name }} ^_^
        </a>
      </li> 

      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/addpost') }}">Add Post <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/logout') }}">Logout<span class="sr-only">(current)</span></a>
      </li>

      
     
      @endguest
    </ul>
   
  </div>
</nav>
    @yield("content")
    

</body>
</html>