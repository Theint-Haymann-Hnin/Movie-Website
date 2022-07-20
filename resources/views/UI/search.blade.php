<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie - @yield('title')</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!--font-awsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <!-- CUSTOM CSS  -->
  
</head>
 {{-- CSS --}}  
 <style>
 /* .project-img {
  width: 70%;
  margin: auto;
  display: block;
} */
.overlay {
  position: absolute;
  bottom: 50%;
  left: 1;
  right: 1;
  background-color: cadetblue;
  overflow: hidden;
  width: 80%;
  height:0;
  margin: auto;
  display: block;
  transition: .5s ease;
}
.project-image-div:hover .overlay {
  bottom: 0;
  height: 100%;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
} 
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: black; //your color
    border-color: white; //your color 
    text-align: center;
}
</style>



<body> 
  <main class="container-fluid" style="background-color:RGB(0, 0, 0);">
    <div class="row">
      <div class="col-md-12">
        {{-- navigation --}}
        <nav class="navbar navbar-expand-lg navbar-light mb-2" style="background-color:RGB(0, 0, 0);">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
               
                
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> --}}
                <li class="nav-item active">
                  <a class="nav-link  text-white" href="{{url('UI/landing')}}"><button class="btn btn-dark btn-sm"><i class="fas fa-home"></i> Home</button> <span class="sr-only">(current)</span></a>
                 </li>
                <li class="nav-item active">
                   <a class="nav-link  text-white" href="{{url('Admin/navmovie')}}"><button class="btn btn-dark btn-sm"><i class="fas fa-caret-square-right"></i> Movie</button> <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link  text-white" href="{{url('Admin/navs')}}"><button class="btn btn-dark btn-sm"><i class="fas fa-tv"></i> TV shows </button><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link  text-white" href="{{url('Admin/navcomingsoon')}}"><button class="btn btn-dark btn-sm"><i class="fas fa-caret-square-right"></i> Coming Soon</button> <span class="sr-only">(current)</span></a>
                       </li>
               
              </ul>
              
              <ul class="navbar-nav ml-auto">

                {{-- Searching 
                <li class="nav-item active">
                <form action="{{url('/search_movies')}}" method="GET">
                    @csrf
                    <div class="input-group mt-1">
                      
                        <div class="input-group-prepend">
                          <button type="submit" class="btn btn-secondary"  style="border-radius:20px 0px 0px 20px" id="basic-addon1"><i class="fa fa-search"></i></button>
                        </div>
                        <input type="text" name="search_data" class="form-control" style="border-radius:0px 20px 20px 0px" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                  </form>
                </li> --}}

                @if(Auth::check())
                <li class="nav-item active">
                  <form action="{{url('/logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm mt-1" onclick="return confirm('Are you sure you want to logout')"><a>Logout</a></button>
                  </form>
                 
                  <li class="nav-item active">
                    <a class="nav-link  text-white" href=""> {{Auth::user()->name}}</a>
                  </li>
                  
                      @else
                     
                      <li class="nav-item active">
                        <a class="nav-link  text-white" href="{{url('/login')}}">Login</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link  text-white" href="{{url('/register')}}">Register </a>
                        </li>
                      
                      @endif
                </ul>
               
            </div>
           
            
          </nav>
          <div class="card bg-dark mt-3">
          <i><h3 class="text-white" align="center">  Your home for free TV and Movie </h3></i>
          <i><h3 class="text-white" align="center">Enjoy an always-changing selection of free movies, shows, , kids’ TV, and more.</h3></i><br><br>
        </div>
        <div class="row mt-5">
    
                @foreach($movies as $movie)
                <div class="col-sm-2">
                  <div class="card text-white bg-dark mb-3" style="border-radius:10px" >
                    <div class="card-header">
                      {{$movie->name}}
                      
                    </div>
                    <div class="card-body">
                      
                      {{-- <img src="https://lumiere-a.akamaihd.net/v1/images/p_mulan_update_ee3c77f3.jpeg?region=0,0,540,810" width="100%" style="height:200px;" alt=""> --}}
                      
                      <img src="{{asset('storage/movie-images/'.$movie->image)}}" alt="" width="100%" style="height:150px;">
                      
                      
                      
                    </div>
                    <div class="card-footer">
                      
                      @if(Auth::check())
                      <a href="UI/detail/{{$movie->id}}"><button  class="btn btn-sm" style="background-color:RGB(175, 238, 238);"><b>Detail</b></button></a>
                      @else
                      <a href="{{url('/login')}}"><button  class="btn btn-sm" style="background-color:RGB(175, 238, 238);"><b>Detail</b></button></a> 
                      @endif
                      
                      
                      
                    </div>
                  </div>
                </div>
                @endforeach
                
              </div>
              
        
         
     

    </div>
   
    
    

  </main>
  
  
  
  
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>