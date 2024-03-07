<header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ route('dashboard') }}" class="logo">
              <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              @php
              $currentUrl = Request::url();
              @endphp
              <li><a href="{{ route('dashboard') }}" class="{{ $currentUrl === 'http://127.0.0.1:8000/dashboard'? 'active': '' }}">خانه</a></li>
              <li><a href="{{ route('dashboard') }}">درباره</a></li>
              <li><a href="{{ route('traveling.deals') }}" class="{{ $currentUrl === 'http://127.0.0.1:8000/traveling/deals'? 'active': '' }}">معاملات</a></li>
              @guest

              @if (Route::has('login'))
              <li><a href="{{ route('dashboard') }}">ورود</a></li>
              @elseif (Route::has('register'))
              <li><a href="{{ route('dashboard') }}">ثبت نام</a></li>
              @endif
              @endguest
              @if(Auth::user())
              <!-- Settings Dropdown -->
              @include('layouts.navigation')

              @endif
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>