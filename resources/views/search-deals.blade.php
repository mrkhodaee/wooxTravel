@section('pageTitle' , 'معاملات')
    
<x-app-layout>
     
      <div class="search-form" style="margin-top: 71px;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <form id="search-form" name="gs" method="POST" role="search" action="{{ route('traveling.deals.search') }}">
                @csrf
                <div class="row">
                  <div class="col-lg-3">
                    <h4>مرتب سازی معاملات بر اساس:</h4>
                  </div>
                  <div class="col-lg-3">
                      <fieldset>
                          <select name="country_id" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                              <option selected>کشور</option>
                              @foreach ($countries as $country)
                              <option value="{{ $country->id }}">{{ $country->name }}</option>
                              @endforeach
                          </select>
                      </fieldset>
                  </div>
                  <div class="col-lg-3">
                      <fieldset>
                          <select name="price" class="form-select" aria-label="Default select example" id="choosePrice" onChange="this.form.click()">
                              <option selected>قیمت از</option>
                              @foreach ($cities as $city)

                              <option value="{{ $city->price }}">{{ $city->price }}</option>
                              @endforeach
                          </select>
                      </fieldset>
                  </div>
                  <div class="col-lg-3">                        
                      <fieldset>
                          <button class="border-button">سرچ</button>
                      </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <div class="amazing-deals">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading text-center">
                <h2>بهترین پیشنهادات هفتگی در هر شهر</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            @if (count($searches))
            @foreach ($searches as $city)
                    
                
            <div class="col-lg-6 col-sm-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="image">
                      <img src="{{ asset('assets/images/'.$city->image) }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 align-self-center">
                    <div class="content">
                      <span class="info">*Limited Offer Today</span>
                      <h4>{{ $city->name }}</h4>
                      <div class="row">
                        <div class="col-6">
                          <i class="fa fa-clock"></i>
                          <span class="list">{{ $city->num_days }} روز</span>
                        </div>
                        <div class="col-6">
                          <i class="fa fa-map"></i>
                          <span class="list">Daily Places</span>
                        </div>
                      </div>
                      <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                      <div class="main-button">
                        <a href="{{ route('traveling.reservation' , $city->id) }}">رزرو</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
                  <p class=" alert alert-success text-center"><-- Nothing found --></p>  
            @endif
           

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