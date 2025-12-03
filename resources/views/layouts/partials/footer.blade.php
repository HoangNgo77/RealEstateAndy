    <footer class="footer-wrapper footer-layout1">
      <div class="footer-top-shape animation-infinite" data-bg-src="{{ asset('assets/img/icon/footer-top-shape.png') }}"></div>
      <div class="widget-area">
        <div class="container">
          <div class="footer-all-widget-wrapper">
            <div class="footer-all-widget-item">
              <div class="widget footer-widget">
                <h3 class="widget_title">{{ $settings->site_name ?? 'Premier Agent Network' }}</h3>
                <div class="th-widget-about">
                  <p class="about-text">{{ $settings->footer_description ?? "I'm Andy, a dedicated real estate agent with a strong record of successful projects. I blend market insight, data-driven strategy, clear communication, and skilled negotiation to turn complex deals into smooth, successful outcomes helping clients buy, sell, and invest with confidence through transparency and client-first service." }}</p>

                  <div class="footer-info-wrap">
                    <div class="footer-info">
                      <i class="fas fa-phone"></i>
                      <p class="info-box_link"><a href="tel:{{ $settings->site_phone ?? '+7144545464' }}">{{ $settings->site_phone ?? '(714) 454-5464' }}</a></p>
                    </div>
                    @if($settings->site_phone_sub)
                    <div class="footer-info">
                      <i class="fas fa-phone"></i>
                      <p class="info-box_link"><a href="tel:{{ $settings->site_phone_sub }}">{{ $settings->site_phone_sub }}</a></p>
                    </div>
                    @endif
                    <div class="footer-info">
                      <i class="fas fa-envelope"></i>
                      <p class="info-box_link"> <a href="mailto:{{ $settings->site_email ?? 'Andylam882@gmail.com' }}">{{ $settings->site_email ?? 'Andylam882@gmail.com' }}</a></p>

                    </div>
                    <div class="footer-info">
                      <i class="fas fa-location-dot"></i>
                      <p class="info-box_link"><span>{{ $settings->site_address ?? 'West 2nd lane, Inner circular road, New York City' }}</span></p>
                    </div>
                  </div>

                  <div class="about-logo">
                    @if($settings->logo)
                    <a href="{{ route('home') }}"><img src="{{ Storage::url($settings->logo) }}" alt="{{ $settings->logo_alt ?? 'Logo' }}"></a>
                    @else
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-premier.png') }}" alt="{{ $settings->logo_alt ?? 'Piller-html' }}"></a>
                    @endif
                  </div>

                </div>
              </div>
            </div>
            <div class="footer-all-widget-item">
              <div class="footer-right-wrap">
                <div class="footer-item-wrap">
                  <div class="footer-item">
                    <div class="widget widget_nav_menu footer-widget">
                      <h3 class="widget_title">Quick Links</h3>
                      <div class="menu-all-pages-container">
                        <ul class="menu">
                          <li><a href="{{ route('home') }}">Home</a></li>
                          <li><a href="{{ route('about') }}">About Us</a></li>
                          <li><a href="{{ route('properties.index') }}">Properties</a></li>
                          <li><a href="{{ route('projects.index') }}">Projects</a></li>
                          <li><a href="{{ route('blog.index') }}">Blog</a></li>
                          <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-bottom-community">
                  <div class="content">
                    @if($settings->instagram_url)
                    <p>@{{ $settings->site_name ?? 'Andy' }} on Instagram</p>
                    @endif
                    <h4 class="box-title">Nice Gallery</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-wrap">
        <div class="footer-bottom-top-shape animation-infinite"
          data-bg-src="{{ asset('assets/img/icon/footer-bottom-top-shape.png') }}"></div>
        <div class="container">
          <div class="row gy-3 justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-7">
              <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} <a
                  href="{{ route('home') }}">{{ $settings->site_name ?? 'Andy' }}</a>. All Rights Reserved.</p>
            </div>
            <div class="col-auto">
              <div class="footer-default-copy-right">
                <p>Social Media:</p>
                <div class="th-social">
                  @if($settings->facebook_url)
                  <a href="{{ $settings->facebook_url }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  @endif
                  @if($settings->youtube_url)
                  <a href="{{ $settings->youtube_url }}" target="_blank"><i class="fab fa-youtube"></i></a>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
