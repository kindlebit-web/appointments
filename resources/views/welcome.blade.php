@extends('layouts.master')
@section('content')
<section id="home" class="video-hero" style="height: 700px; background-image: url(frontend/images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
      <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
      <div class="display-t text-center">
        <div class="display-tc">
          <div class="container">
            <div class="col-md-12 col-md-offset-0">
              <div class="animate-box">
                <h2>Schedule your appointments online</h2>
                <p>And its free</p>
                {{-- <p><a href="gallery.html" class="btn btn-primary btn-lg btn-custom">Get premium</a></p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="colorlib-featured">
      <div class="row animate-box">
        <div class="featured-wrap">
          <div class="owl-carousel">
            <div class="item">
              <div class="col-md-8 col-md-offset-2">
                <div class="featured-entry">
                  <img class="img-responsive" src="{{ asset('frontend/images/screely-1.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="col-md-8 col-md-offset-2">
                <div class="featured-entry">
                  <img class="img-responsive" src="{{ asset('frontend/images/screely-2.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="col-md-8 col-md-offset-2">
                <div class="featured-entry">
                  <img class="img-responsive" src="{{ asset('frontend/images/screely-3.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <a name="features"></a>
    <div class="colorlib-services colorlib-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center animate-box">
            <div class="services">
              <span class="icon">
                <i class="icon-calendar3"></i>
              </span>
              <div class="desc">
                <h3>Create your own appointment</h3>
                <p>You can scheduled your own appointments.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center animate-box">
            <div class="services">
              <span class="icon">
                <i class="icon-alarm"></i>
              </span>
              <div class="desc">
                <h3>Notifications</h3>
                <p>Get email alerts whenever make any change in appointment.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center animate-box">
            <div class="services">
              <span class="icon">
                <i class="icon-cogs"></i>
              </span>
              <div class="desc">
                <h3>Features</h3>
                <p>Add users from backend, check client, services or employess status.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(frontend/images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4 col-sm-4 text-center animate-box">
              <div class="counter-entry">
                <span class="icon"><i class="flaticon-ribbon"></i></span>
                <div class="desc">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="{{ App\User::count() }}" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">Of customers are satisfied with our professional support</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center animate-box">
              <div class="counter-entry">
                <span class="icon"><i class="flaticon-church"></i></span>
                <div class="desc">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="{{ App\Appointment::count() }}" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">Appointments has been scheduled.</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center animate-box">
              <div class="counter-entry">
                <span class="icon"><i class="flaticon-dove"></i></span>
                <div class="desc">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="{{ App\Appointment::count() * 10 }}" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">Appointment Reminders has been sent.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
