@section('pageTitle' , 'داشبورد')
    
<x-app-layout>
     <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      @foreach ($countries as $key => $country)
      <input type="radio" id="banner{{ $country->id }}" class="sec-1-input" name="banner" checked>
      @endforeach
      <div class="slider">
        @foreach ($countries as $key => $country)
             
        
        <div id="top-banner-{{ $country->id }}" class="banner" style="background-image: url('{{ asset('assets/images/'.$country->image.'') }}');">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2 class=" bg-primary w-50 m-auto rounded-5 p-2 bg-opacity-50">:نگاهی اجمالی به کشور زیبای آن بیندازید</h2>
              <h1>{{ $country->name }}</h1>
              <div class="border-button"><a href="{{ route('traveling.about' , $country->id) }}">برو اونجا</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>جمعیت:</span><br>{{ $country->population }} M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>{{ $country->territory }} KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>${{ $country->avg_price }}</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="{{ route('traveling.about' , $country->id) }}">بیشتر</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <nav>
        <div class="controls">
          @foreach ($countries as $key => $country)
          <label for="banner{{ $country->id }}"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">{{ $country->id }}</span></label>
      @endforeach
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>اکنون از یکی از کشورهای ما دیدن کنید</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">

              @foreach ($countries as $country)
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{ asset('assets/images/'.$country->image) }}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>{{ Str::upper($country->name)}}</h4>
                        <span>{{ $country->continent }}</span>
                        <div class="main-button">
                          <a href="{{ route('traveling.about' , $country->id) }}">بیشتر</a>
                        </div>
                        <p>{{ $country->description }}</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> {{ $country->population }} Mil مردم</li>
                          <li><i class="fa fa-globe"></i> {{ $country->territory }} km2</li>
                          <li><i class="fa fa-home"></i> ${{ $country->avg_price }}</li>
                        </ul>
                        <div class="text-button">
                          <a href="about.html">به دستورالعمل نیاز دارید؟ <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              
              

               {{-- paginate --}}
              <div class="col-lg-12">
                <ul class="page-numbers">
                  <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="side-bar-map">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="550px" frameborder="0" style="border:0; border-radius: 23px; " allowfullscreen=""></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking To Travel ?</h2>
          <h4>Make A Reservation By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="reservation.html">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
