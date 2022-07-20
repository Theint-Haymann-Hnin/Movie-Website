@extends('layouts.master')
@section('title','Home Page')
@section('movie')
<div class="container-fluid">
    <div class="row">
        <h3 class="text-white" align="center">LATEST MOVIES</h3>
      </div>
  {{-- Recent movie  --}}
  <div class="row mt-3">
    <div class="col-sm-2 col-md-3 mb-2">
      <a href="{{url('Admin/latestkoreanseries')}}">
        <div class="project-image-div">
          
          <img src="{{asset('images/korean1.jpg')}}" width="260" height="300" class="project-img" alt="">
          
          <div class="overlay">
            <div class="text mb-3">Latest Korean  Series</div>
          </div> 
          
        </div>
      </a>
    </div>
    
    <div class="col-sm-2 col-md-3 mb-2">
      <a href="{{url('Admin/latestmovie')}}">
        <div class="project-image-div">
          
          <img src="{{asset('images/aventure1.jpg')}}" width="260" height="300" class="project-img" alt="">
          
          <div class="overlay">
            <div class="text">Latest  Adventure Movies</div>
          </div>
        </div>
      </a>
    </div>
    
    <div class="col-sm-2 col-md-3 mb-2">
      <a href="{{url('Admin/latesthorrormovie')}}" >
        <div class="project-image-div">
          
          <img src="{{asset('images/horror.png')}}" width="260" height="300" class="project-img" alt="">
          
          <div class="overlay">
            <div class="text">Latest Horrror Movies</div>
          </div>
        </div>
      </a>
    </div>
    
    <div class="col-sm-2 col-md-3 mb-2">
      <a href="{{url('Admin/latestcomedymovie')}}">
        <div class="project-image-div">
          
          <img src="{{asset('images/comedy.jpg')}}" width="260" height="300" class="project-img" alt="">
          
          <div class="overlay">
            <div class="text">Latest Comedy Movies</div>
          </div>
        </div>
      </a> 
    </div>
    
  </div> 
  <div class="row">
      <h3 class="text-white" align="center">ALL MOVIES</h3>
    </div>
  
  
  
  
  {{-- Movie  --}}
  
  <div class="row mt-2">
    
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
          <a href="{{url('UI/detail/'.$movie->id)}}"><button  class="btn btn-sm" style="background-color:RGB(175, 238, 238);"><b>Detail</b></button></a>
          @else
          <a href="{{url('/login')}}"><button  class="btn btn-sm" style="background-color:RGB(175, 238, 238);"><b>Detail</b></button></a> 
          @endif
          
          
          
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
  
  <div class="page-item.active .page-link " >
    
    
      {!! $movies->links() !!}
   
    
  </div>
  
  <footer class="ftco-footer ftco-bg-dark ftco-section mt-7">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="text-white">About</h2>
            <p class="text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum excepturi molestiae dolore? Beatae distinctio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum excepturi molestiae dolore? Beatae distinctio.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h3 class="text-white">MOVIE</h3>
            <ul class="list-unstyled">
              <li><a href="https://www.google.com/search?q=latest+movies+2020&rlz=1C1CHBD_enMM891MM891&oq=latest+movie&aqs=chrome.0.35i39j69i57j69i59j0i457j69i60j69i65j69i60j69i61.5170j0j7&sourceid=chrome&ie=UTF-8" class="py-2 d-block">latest movie 2020</a></li>
              <li><a href="https://www.google.com/search?q=popular+movie+2020&rlz=1C1CHBD_enMM891MM891&oq=popular+movie+2020&aqs=chrome..69i57j0i22i30l7.8062j0j7&sourceid=chrome&ie=UTF-8" class="py-2 d-block">popular movie 2020</a></li>
              <li><a href="https://www.google.com/search?rlz=1C1CHBD_enMM891MM891&sxsrf=ALeKk02MjOoK6TvBcnPTgIfJmYosTXvRFg%3A1602607066200&ei=2teFX6vbC9aA9QPq8a2IAg&q=old+classic+flims&oq=old+classic+flims&gs_lcp=CgZwc3ktYWIQAzIHCAAQyQMQDTIECAAQDTIECAAQDTIECAAQDTIECAAQDTIECAAQDTIECAAQDTIGCAAQDRAeMgYIABANEB4yCAgAEA0QBRAeOgcIIxDJAxAnOgQIIxAnOgQIABBDOgQILhBDOggIABCxAxCDAToCCC46BQgAELEDOgcILhDJAxBDOgUIABCRAjoHCAAQFBCHAjoCCAA6CAguEMcBEKMCOggIABDJAxCRAjoKCAAQyQMQFBCHAjoFCAAQyQM6CAgAEBYQChAeOgYIABAWEB46CQgAEMkDEBYQHlDJX1iRlAFg05cBaABwAHgAgAHiAYgB9hKSAQU2LjkuMpgBAKABAaoBB2d3cy13aXrAAQE&sclient=psy-ab&ved=0ahUKEwirsJTHgLLsAhVWQH0KHep4CyEQ4dUDCA0&uact=5" class="py-2 d-block">old  flims</a></li>
              <li><a href="https://www.google.com/search?q=tv+shows&rlz=1C1CHBD_enMM891MM891&oq=TV+shows&aqs=chrome.0.0i67i457j0i67j0l2j0i67j69i61j69i60l2.6573j0j7&sourceid=chrome&ie=UTF-8" class="py-2 d-block">TV shows</a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h3 class="text-white">FOLLOW US</h3>
            <ul class="list-unstyled">
              <li><a href="https://www.facebook.com/wuttyee.min" target="_blank">
                <i class="fab fa-facebook-square"></i>  Facebook
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
              <li><a href="https://www.instagram.com/theinthaymannhnin/" target="_blank">
                <i class="fab fa-instagram-square"></i>  Instagram
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
              
              <li><a href="https://www.linkedin.com/" target="_blank">
                <i class="fab fa-linkedin"></i>  Linkedin
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li> <br>
              <li><a href="https://twitter.com/">
                <i class="fab fa-twitter-square"></i>  Twitter
              </a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="text-white">CONTACT INFO</h2>
            <span> <h class="text-white"> <i class="fas fa-mobile-alt"></i> 09798059425 </h></span><br><br>
            <span> <h  class="text-white"> <i class="far fa-envelope"></i> haymann.hh@gmail.com </h></span>
            <div class="block-23 mb-3">
             
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          
          <p class="text-white">THANKS FOR VISITING</p>
          <p  class="text-white">By Theint Haymann Hnin</p>
        </div>
      </div>
    </div>
  </footer>
  
  
  @endsection