@section('pageTitle' , 'داشبورد')

<x-app-layout>

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content" style="background-image: url('{{ asset('assets/images/'.$country->image) }}');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg" style="background-image: url('{{ asset('assets/images/'.$country->image) }}');"></div>
            <h4>EXPLORE OUR COUNTRY</h4>
            <div class="line-dec"></div>
            <h2>به {{ $country->name }} خوش آمدید</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore
              et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
            <div class="main-button">
              <a href="reservation.html">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>{{ $country->name }}’s <em>Cities &amp; Towns</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                @foreach ($cities as $key => $city)
                <div wire:key='{{ $key }}' class="item">
                  <div class="thumb">
                    <img src="{{ asset('assets/images/'.$city->image) }}" alt="{{ $city->name }}">
                    <h4>{{ $city->name }}</h4>
                  </div>
                </div>
                @endforeach


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Weekly Offers In Each City</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            @foreach ($cities as $city)
            <div class="item">
              <div class="thumb">
                <img src="{{ asset('assets/images/'.$city->image) }}" alt="{{ $city->name }}">
                <div class="text">
                  <h4>{{ $city->name }}<br><span></span></h4>
                  <h6>{{ $city->price }}<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i>سفر {{ $city->num_days }} روزه > شامل هتل</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="{{ asset('assets/images/about-left-image.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover More About Our Country</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-item">
                <h4>150.640 +</h4>
                <span>Total Guests Yearly</span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-item">
                <h4>175.000+</h4>
                <span>Amazing Accomoditations</span>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>{{ count($cities) }}+</h4>
                    <span>Amazing Places</span>
                  </div>
                  <div class="col-lg-6">
                    <h4>240.580+</h4>
                    <span>Different Check-ins Yearly</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem
            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <div class="main-button">
            <a href="reservation.html">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-locations">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Locations In Caribbeans</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2">
          <div class="options">
            <div class="option active" style="--optionBackground:url({{ asset('assets/images/cities-01.jpg') }});">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="fas fa-expand"></i>
                </div>
                <div class="info">
                  <div class="main">Havana</div>
                  <div class="sub">Population: 2M</div>
                </div>
              </div>
            </div>
            <div class="option" style="--optionBackground:url({{ asset('assets/images/cities-01.jpg') }});">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="fas fa-expand"></i>
                </div>
                <div class="info">
                  <div class="main">Kingston</div>
                  <div class="sub">Population: 3.5M</div>
                </div>
              </div>
            </div>
            <div class="option" style="--optionBackground:url({{ asset('assets/images/cities-01.jpg') }});">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="fas fa-expand"></i>
                </div>
                <div class="info">
                  <div class="main">London</div>
                  <div class="sub">Population: 4.1M</div>
                </div>
              </div>
            </div>
            <div class="option" style="--optionBackground:url({{ asset('assets/images/cities-01.jpg') }});">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="fas fa-expand"></i>
                </div>
                <div class="info">
                  <div class="main">Pristina</div>
                  <div class="sub">Population: 520K</div>
                </div>
              </div>
            </div>
            <div class="option" style="--optionBackground:url({{ asset('assets/images/cities-01.jpg') }});">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="fas fa-expand"></i>
                </div>
                <div class="info">
                  <div class="main">Paris</div>
                  <div class="sub">Population: 3M</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="main-button text-center">
            <a href="deals.html">Discover All Places</a>
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

  <script>
    $(".option").click(function(){
          $(".option").removeClass("active");
          $(this).addClass("active"); 
        });
  </script>
</x-app-layout>