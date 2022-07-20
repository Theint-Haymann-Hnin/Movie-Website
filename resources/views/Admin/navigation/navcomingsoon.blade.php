<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Coming Soon</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!--font-awsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <!-- CUSTOM CSS  -->
  
</head>
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
               
                
                <li class="nav-item active">
                    <a class="nav-link  text-white" href="{{url('UI/landing')}}"><button class="btn btn-dark btn-sm"><i class="fas fa-backward"></i> Home</button> <span class="sr-only">(current)</span></a>
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
                <li class="nav-item active">
                  
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
        <div class="row mt-3 ml-5">
            <marquee direction="left" height="90" width="1200" style="background-color:RGB(0, 0, 0);"><h1 class="text-white"><b><i>Coming Soon</i></b></h1></marquee>
        </div>

        <div class="row mt-2 ml-2">
            <h3 class="text-white" align="center"> Adventure Movies>>>></h3>
          </div>
        
        <div class="row mt-3">
            <div class="col-sm-2 col-md-2 mb-2">
              <a href="https://www.youtube.com/watch?v=jWcg2uGhT88"  target="_blank">
                <div class="project-image-div">
                  
                  <img src="{{asset('images/m1.jpg')}}" width="200" height="250" class="project-img" alt="">
                  
                  <div class="overlay">
                    <div class="text mb-3">Wonder Woman </div>
                  </div> 
                  
                </div>
              </a>
            </div>
            <div class="col-sm-2 col-md-2 mb-2">
                <a href="https://www.youtube.com/watch?v=AZGcmvrTX9M"  target="_blank">
                  <div class="project-image-div">
                    
                    <img src="{{asset('images/m2.jpg')}}" width="200" height="250" class="project-img" alt="">
                    
                    <div class="overlay">
                      <div class="text mb-3">Tenet</div>
                    </div> 
                    
                  </div>
                </a>
              </div>
              <div class="col-sm-2 col-md-2 mb-2">
                <a href="https://www.youtube.com/watch?v=TytGnUdMfS4"  target="_blank">
                  <div class="project-image-div">
                    
                    <img src="{{asset('images/m3.jpg')}}" width="200" height="250" class="project-img" alt="">
                    
                    <div class="overlay">
                      <div class="text mb-3">Bill & Ted Face the Music</div>
                    </div> 
                    
                  </div>
                </a>
              </div>
              <div class="col-sm-2 col-md-2 mb-2">
                <a href="https://www.youtube.com/watch?v=RxAtuMu_ph4"  target="_blank">
                  <div class="project-image-div">
                    
                    <img src="{{asset('images/m4.jpg')}}" width="200" height="250" class="project-img" alt="">
                    
                    <div class="overlay">
                      <div class="text mb-3">Black Widow</div>
                    </div> 
                    
                  </div>
                </a>
              </div>
              <div class="col-sm-2 col-md-2 mb-2">
                <a href="https://www.youtube.com/watch?v=OAaZIfeQzT0"  target="_blank">
                  <div class="project-image-div">
                    
                    <img src="{{asset('images/m5.jpg')}}" width="200" height="250" class="project-img" alt="">
                    
                    <div class="overlay">
                      <div class="text mb-3">The Trial of the Chicago 7</div>
                    </div> 
                    
                  </div>
                </a>
              </div>
              <div class="col-sm-2 col-md-2 mb-2">
                <a href="https://www.youtube.com/watch?v=eLEwNo78f0k"  target="_blank">
                  <div class="project-image-div">
                    
                    <img src="{{asset('images/m6.jpg')}}" width="200" height="250" class="project-img" alt="">
                    
                    <div class="overlay">
                      <div class="text mb-3">Ava</div>
                    </div> 
                    
                  </div>
                </a>
              </div>
              <div class="row mt-2 ml-2">
                <h3 class="text-white" align="center"> Horror Movies>>>></h3>
              </div>
              <div class="row mt-3">
              <div class="col-sm-2 col-md-2 mb-2">
                <a href="https://www.youtube.com/watch?v=De2KRpafQ2A&list=PLnReTjjdr7sYgPBiNnoob4xCQ7vQXPWdn&index=128&app=desktop"  target="_blank">
                  <div class="project-image-div">
                    
                    <img src="{{asset('images/h1.jpg')}}" width="200" height="250" class="project-img" alt="">
                    
                    <div class="overlay">
                      <div class="text mb-3">Incident in a Ghost Land</div>
                    </div> 
                    
                  </div>
                </a>
              </div>
              <div class="col-sm-2 col-md-2 mb-2">
                  <a href="https://www.youtube.com/watch?v=eyl1Wf90AgY"  target="_blank">
                    <div class="project-image-div">
                      
                      <img src="{{asset('images/h2.jpg')}}" width="200" height="250" class="project-img" alt="">
                      
                      <div class="overlay">
                        <div class="text mb-3">Wildling</div>
                      </div> 
                      
                    </div>
                  </a>
                </div>
                <div class="col-sm-2 col-md-2 mb-2">
                  <a href="https://www.youtube.com/watch?v=20LeBoejmF4"  target="_blank">
                    <div class="project-image-div">
                      
                      <img src="{{asset('images/h3.jpg')}}" width="200" height="250" class="project-img" alt="">
                      
                      <div class="overlay">
                        <div class="text mb-3">Cult of Chucky</div>
                      </div> 
                      
                    </div>
                  </a>
                </div>
                <div class="col-sm-2 col-md-2 mb-2">
                  <a href="https://www.youtube.com/watch?v=iMWqCzTRNJc"  target="_blank">
                    <div class="project-image-div">
                      
                      <img src="{{asset('images/h4.jpg')}}" width="200" height="250" class="project-img" alt="">
                      
                      <div class="overlay">
                        <div class="text mb-3">Veronica</div>
                      </div> 
                      
                    </div>
                  </a>
                </div>
                <div class="col-sm-2 col-md-2 mb-2">
                  <a href="https://www.youtube.com/watch?v=TOXWohAlnZc"  target="_blank">
                    <div class="project-image-div">
                      
                      <img src="{{asset('images/h5.jpg')}}" width="200" height="250" class="project-img" alt="">
                      
                      <div class="overlay">
                        <div class="text mb-3">Selfie from Hell</div>
                      </div> 
                      
                    </div>
                  </a>
                </div>
                <div class="col-sm-2 col-md-2 mb-2">
                  <a href="https://www.youtube.com/watch?v=xiBFGYwmc6E"  target="_blank">
                    <div class="project-image-div">
                      
                      <img src="{{asset('images/h6.jpg')}}" width="200" height="250" class="project-img" alt="">
                      
                      <div class="overlay">
                        <div class="text mb-3">Boarding School</div>
                      </div> 
                      
                    </div>
                  </a>
                </div>
              </div>
                <div class="row mt-2 ml-2">
                    <h3 class="text-white" align="center"> Korea Serires>>>></h3>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-2 col-md-2 mb-2">
                      <a href="https://www.youtube.com/watch?v=DWRtVkheXVc"  target="_blank">
                        <div class="project-image-div">
                          
                          <img src="{{asset('images/korean1.jpg')}}" width="200" height="250" class="project-img" alt="">
                          
                          <div class="overlay">
                            <div class="text mb-3">The King:Eternal Monarch</div>
                          </div> 
                          
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=V3NVR1uXlYo"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/korea1.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">It's Okay to Not Be Okay</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=tDhOBBrOeXk"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/korea2.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">When My Love Blooms</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=xqIM2cenBAs"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/korea3.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">Hospital Playlist</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=qiHfMceiKg8&vl=en"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/korea4.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">Crash Landing on You</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=8sXTfzaLmiQ"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/korea5.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">Love Alarm</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                  </div>
                  <div class="row mt-2 ml-2">
                    <h3 class="text-white" align="center"> Comedy Movies>>>></h3>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-2 col-md-2 mb-2">
                      <a href="https://www.youtube.com/watch?v=WTJW2Ol1c0g"  target="_blank">
                        <div class="project-image-div">
                          
                          <img src="{{asset('images/c1.jpg')}}" width="200" height="250" class="project-img" alt="">
                          
                          <div class="overlay">
                            <div class="text mb-3">Ginny Weds Sunny</div>
                          </div> 
                          
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=GzlEnS7MmUo"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/c2.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">Scoob!</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=Hhz3QxMxDQE"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/c3.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">Life of the Party</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=p2MeiwpuJH4"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/c4.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">The Festival</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=LZ3ZppwhMOA"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/c5.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">The Con Is On</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                      <div class="col-sm-2 col-md-2 mb-2">
                        <a href="https://www.youtube.com/watch?v=ZoxHlMXNCdY"  target="_blank">
                          <div class="project-image-div">
                            
                            <img src="{{asset('images/c6.jpg')}}" width="200" height="250" class="project-img" alt="">
                            
                            <div class="overlay">
                              <div class="text mb-3">The Long Dumb Road</div>
                            </div> 
                            
                          </div>
                        </a>
                      </div>
                  </div>
              
              </div>
        <li class="nav-item active">
            <a class="nav-link  text-white" href="{{url('UI/landing')}}"><button class="btn btn-dark btn-sm mb-2"><i class="fas fa-backward"></i> Back</button> <span class="sr-only">(current)</span></a>
           </li>

        {{-- footer --}}
        <footer class="ftco-footer ftco-bg-dark ftco-section mt-10">
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
                  <p>By Theint Haymann Hnin</p>
                </div>
              </div>
            </div>
          </footer>
            
  </main>
  
  
  
  
  
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>