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
  /* star-rating */
  
  
  /* .fas{
    font-size: 25px;
    color: orange;
  }
  .progress-bar{
    color:cornsilk;
  } */
  .blur{
    opacity: 0.3;
    color: gray;
  }
  
  input[type=checkbox] {
    width: 20px;
    height: 20px;
  }
  .star {
    visibility:hidden;
    font-size:40px;
    cursor:pointer;
    margin: 0px 0px 40px 10px;
  }
  .star:before {
    content: "\2605";
    position: absolute;
    visibility:visible;
    color:white;
  }
  .star:checked:before {
    content: "\2B50";
    position: absolute;
    font-size: 30px;
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
              
              
              <li class="nav-item dropdown">
                
                <div class="dropdown">
                  <button class="btn btn-dark dropdown-toggle btn-sm mt-2 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:lightseagreen">
                    @foreach($categories as $category)
                    <ul>
                      
                      <span> <a href="{{url('UI/search_by_category/'.$category->id)}}"><p class="text-dark">{{$category->name}}</p></a> </span>
                      
                      
                      
                      
                    </ul>
                    @endforeach
                    
                    
                  </div>
                </div>
              </li>
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
              
              {{-- Searching  --}}
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
              </li>
              
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
          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="500">
                <img src="{{asset('images/movie6.jpg')}}" width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie4.jpg')}}"  width="400" height="420"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie1.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie5.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie7.jpg')}}"  width="400" height="420"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie8.jpg')}}"  width="400" height="420"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie9.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie10.jpg')}}"  width="400" height="420"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie11.jpg')}}"  width="400" height="420"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie12.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\movie13.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="1000">
                <img src="{{asset('images\ITmovie.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
              
              
              <div class="carousel-item">
                <img src="{{asset('images\movie3.jpg')}}"  width="400" height="420" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          @yield('movie')
          
          
        </div>
        
        
      </div>
      
      
      
      
    </main>
    
    
    
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
  </html>