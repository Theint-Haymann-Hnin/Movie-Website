@extends('layouts.master')
@section('title','detail')
@section('movie')
<br>
<div class="card text-white bg-dark">
  <div class="card-body" style="background-color:RGB(0, 0, 0);">
    <div class="row">
      <div class="col-md-4">
        
        <img src="{{asset('storage/movie-images/'.$movie->image)}}" alt="" width="100%" style="height:400px;" class="left" />
        <p align="justify"> Description :{{ $movie->description}}</p>
        
        
      </div>
      <div class="col-md-7">
        {{-- RATING --}}
        @if(Session('successAlert'))
        <div class="alert alert-success alert-dismissible show fade">
          <strong>{{Session('successAlert')}}</strong>
          <button class="close" data-dismiss="alert">&times;</button>
        </div>
        @endif
        
        
        <h1>Rating</h1>
        <div class="row">
          <div class="col-md-5">
            <div class="">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="mb-1">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star blur"></i>
            </div>
            <div class="mb-1">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star blur"></i>
              <i class="fas fa-star blur"></i>
            </div>
            <div class="mb-1">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star blur"></i>
              <i class="fas fa-star blur"></i>
              <i class="fas fa-star blur"></i>
            </div>
            <div class="mb-1"> 
              <i class="fas fa-star"></i>
              <i class="fas fa-star blur"></i>
              <i class="fas fa-star blur"></i>
              <i class="fas fa-star blur"></i>
              <i class="fas fa-star blur"></i>
            </div>
          </div>
          <div class="col-md-7">
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: {{$five}}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: {{$four}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: {{$three}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: {{$two}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: {{$one}}%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>              
          </div>
        </div>
        
        <form method="POST" action="{{url('UI/rating')}}">
          @csrf
          <input type="hidden" name="movie_id" value="{{$movie->id}}">
          <div class="mt-4">
            <input type="checkbox" class="star" name="rating[]">
            <input type="checkbox" class="star"  name="rating[]">
            <input type="checkbox" class="star" name="rating[]">
            <input type="checkbox" class="star" name="rating[]">
            <input type="checkbox" class="star" name="rating[]">
            <br>
            <br>
            <br>
            <textarea class="form-control" name="message" rows="4" placeholder="Message ..." ></textarea>
            <button class="btn btn-outline-primary mt-2">Submit</button>
          </div>
        </form>
        
        <div class="card bg-dark mt-3">
          <div class="card-header bg-dark text-white">Customer reviews
          </div>
          <div class="card-body bg-dark text-white">
            
            
           
              @foreach($messages as $message)
              <div class="row mb-3">
              <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px">  &nbsp;
                  {{$message->message}}
            </div>
              @endforeach
           
            
          </div>
        </div>
        <h3>{{ $movie->name}}</h3>
        
        <p class="card-text">Actor : {{$movie->actor->name}}</p>
        {{-- <p class="card-text">{{$movie->actor->description}}</p> --}}
        <p class="card-text">Actress : {{$movie->actress->name}}</p>
        {{-- <p class="card-text">{{$movie->actress->description}}</p> --}}
        <p class="card-text">Writer : {{$movie->writer->name}}</p>
        {{-- <p class="card-text">{{$movie->writer->description}}</p> --}}
        <p class="card-text">Director : {{$movie->director->name}}</p>
        {{-- <p class="card-text">{{$movie->director->description}}</p> --}}
        <p class="card-text">Genre : {{$movie->genre->name}}</p>
        <p class="card-text">Category : {{$movie->category->name}}</p>
        <p class="card-text">Company : {{$movie->company->name}}</p>
        {{-- <p class="card-text">{{$movie->company->description}}</p> --}}
        <p class="card-text">Date : {{$movie->date}}</p>
        
      </div>
      
    </div>
    <button class="btn btn-outline-dark btn-sm">
      <a class="nav-link  text-white" href="{{url('UI/landing')}}">Back</a>
    </button>
    
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-white"></h3>
        <iframe width="100%" height="450" src=" {{$movie->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
{{-- footer --}}
<footer class="ftco-footer ftco-bg-dark ftco-section mt-15">
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