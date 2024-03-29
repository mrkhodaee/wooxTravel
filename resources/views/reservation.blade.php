@section('pageTitle' , 'رزرو')
    
<x-app-layout>
    <div class="second-page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h4>کتاب معامله ترجیحی در اینجا</h4>
              <h2>رزرو خود را انجام دهید</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
              <div class="main-button"><a href="about.html">بیشتر</a></div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="more-info reservation-info">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="info-item">
                <i class="fa fa-phone"></i>
                <h4>تماس تلفنی برقرار کنید</h4>
                <a href="#">09919178860</a>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="info-item">
                <i class="fa fa-envelope"></i>
                <h4>از طریق ایمیل با ما تماس بگیرید</h4>
                <a href="#">mrkhodaee24@gmail.com</a>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="info-item">
                <i class="fa fa-map-marker"></i>
                <h4>از دفاتر ما دیدن فرمایید</h4>
                <a href="#">خیابان 24 خیابان شمالی لندن، انگلستان</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="reservation-form">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
              </div>
            </div>
            <div class="col-lg-12">
              <form id="reservation-form" name="gs" method="POST" role="search" action="{{ route('traveling.reservation.store', $city->id) }}">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h4><em>رزرو </em>خود را از طریق این<em> فرم </em>انجام دهید</h4>
                  </div>
                  <div class="col-lg-6">
                      <fieldset>
                          <label for="Name" class="form-label">نام و نام خانوادگی</label>
                          <input type="text" name="name" class="Name" placeholder="رضا :مثال" autocomplete="on" required>
                      </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label for="Number" class="form-label">شماره موبایل</label>
                        <input type="text" name="phone_number" class="Number" placeholder="09" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                      <fieldset>
                          <label for="chooseGuests" class="form-label">Number Of Guests</label>
                          <select name="num_guest" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                              <option selected>انتخاب کنید</option>
                              <option type="checkbox" name="option1" value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                          </select>
                      </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label for="Number" class="form-label">تاریخ ورود</label>
                        <input type="date" name="check_in_date" class="date" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                          <input type="hidden"  value="{{ $city->name }}" name="destination" class="Name" placeholder="Ex. John Smithee" autocomplete="on" required>
                      </fieldset>
                  </div>
                  {{-- <div class="col-lg-12">
                      <fieldset>
                          <label for="chooseDestination" class="form-label">user</label>
                          <input type="text" disabled value="{{ Auth::user()->id }}" name="user_id" class="Name" placeholder="Ex. John Smithee" autocomplete="on" required>
                          
                      </fieldset>
                  </div> --}}
                  
                  <div class="col-lg-12">                        
                      <fieldset>
                          <button type="submit" class="main-button">ایجاد رزرو</button>
                      </fieldset>
                  </div>
                </div>
              </form>
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