<header class="th-header header-default header-layout1">
  <div class="header-top">
    <div class="container">
      <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
        <div class="col-auto d-none d-lg-block">
          <div class="header-links">
            <ul>
              <li><i class="fa-solid fa-envelope"></i> <a
                  href="mailto:infomailexample@mail.com">infomailexample@mail.com</a></li>
              <li><i class="fa-solid fa-phone"></i> <a href="tel:+0012345678900">+00 (123) 456 789 00</a></li>
            </ul>
          </div>
        </div>

        <div class="col-auto">
          <div class="header-links">
            <ul>
              <li>
                <div class="th-social">
                  <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                  <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
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
              <a href="{{ route('home') }}"><img src="assets/img/logo-white.svg" alt="Piller-html"></a>
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
                <li class="menu-item-has-children">
                  <a href="#">Agencies</a>
                  <ul class="sub-menu">
                    <li><a href="agency.html">Agencies </a></li>
                    <li><a href="agency-details.html">Agency Details</a></li>
                  </ul>
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
