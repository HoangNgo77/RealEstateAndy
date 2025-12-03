<header class="th-header header-default header-layout1">
  <div class="header-top">
    <div class="container">
      <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
        <div class="col-auto d-none d-lg-block">
          <div class="header-links">
            <ul>
              <li><i class="fa-solid fa-envelope"></i> <a
                  href="mailto:Andylam882@gmail.com">Andylam882@gmail.com</a></li>
              <li><i class="fa-solid fa-phone"></i> <a href="tel:+7144545464">(714) 454-5464</a></li>
            </ul>
          </div>
        </div>

        <div class="col-auto">
          <div class="header-links">
            <ul>
              <li>
                <div class="th-social">
                  <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.whatsapp.com/"><i class="fa-brands fa-youtube"></i></a>
                </div>
              </li>
              <li class="lang-wrapper">
                  <div class="lang-menu">
                      <div class="icon">
                          <img src="assets/img/icon/english.png" alt="icon">
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
              <a href="{{ route('home') }}"><img src="assets/img/logo-premier.png" alt="Andy Lam - real estate"></a>
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
