<header class="th-header header-default header-layout1">
  <div class="header-top">
    <div class="container">
      <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
        <div class="col-auto d-none d-lg-block">
          <div class="header-links">
            <ul>
              <li><i class="fa-solid fa-envelope"></i> <a
                  href="mailto:{{ $settings->site_email ?? 'Andylam882@gmail.com' }}">{{ $settings->site_email ?? 'Andylam882@gmail.com' }}</a></li>
              <li><i class="fa-solid fa-phone"></i> <a href="tel:{{ $settings->site_phone ?? '+7144545464' }}">{{ $settings->site_phone ?? '(714) 454-5464' }}</a></li>
              @if($settings->site_phone_sub)
              <li><i class="fa-solid fa-phone"></i> <a href="tel:{{ $settings->site_phone_sub }}">{{ $settings->site_phone_sub }}</a></li>
              @endif
            </ul>
          </div>
        </div>

        <div class="col-auto">
          <div class="header-links">
            <ul>
              <li>
                <div class="th-social">
                  @if($settings->facebook_url)
                  <a href="{{ $settings->facebook_url }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  @endif
                  @if($settings->youtube_url)
                  <a href="{{ $settings->youtube_url }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                  @endif
                  @if($settings->instagram_url)
                  <a href="{{ $settings->instagram_url }}" target="_blank"><i class="fab fa-instagram"></i></a>
                  @endif
                  @if($settings->linkedin_url)
                  <a href="{{ $settings->linkedin_url }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  @endif
                  @if($settings->viber_url)
                  <a href="{{ $settings->viber_url }}" target="_blank"><i class="fab fa-viber"></i></a>
                  @endif
                </div>
              </li>
              <li class="lang-wrapper">
                  <div class="lang-menu">
                      <div class="icon">
                          <img src="{{ asset('assets/img/icon/english.png') }}" alt="icon">
                      </div>
                      <select class="form-select nice-select">
                          <option selected="">English</option>
                      </select>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticky-wrapper">
    <!-- Main Menu Area -->
    <div class="menu-area">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="header-logo">
              @if($settings->logo)
              <a href="{{ route('home') }}"><img src="{{ Storage::url($settings->logo) }}" alt="{{ $settings->logo_alt ?? 'Logo' }}"></a>
              @else
              <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-premier.png') }}" alt="{{ $settings->logo_alt ?? 'Andy Lam - real estate' }}"></a>
              @endif
            </div>
          </div>
          <div class="col-auto">
            <nav class="main-menu d-none d-lg-inline-block">
              <ul>
                <li class="active">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                  <a href="{{ route('properties.index') }}">Property</a>
                </li>
                <li>
                  <a href="{{ route('projects.index') }}">Project</a>
                </li>
                <li>
                  <a href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>
            </nav>
            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
          </div>
          <div class="col-auto d-none d-xl-block">
            <div class="header-button">
              <a href="{{ route('contact') }}" class="th-btn outline pill text-white"><i
                  class="fa-regular fa-house-chimney me-2"></i> Add Listing </a>
              <button type="button" class="icon-btn searchBoxToggler text-white"><i
                  class="far fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
