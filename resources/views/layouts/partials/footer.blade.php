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
                      <h3 class="widget_title">Featured Houses</h3>
                      <div class="menu-all-pages-container">
                        <ul class="menu">
                          <li><a href="service.html">#Villa</a></li>
                          <li><a href="service.html">#Commercial</a></li>
                          <li><a href="service.html">#Farm Houses</a></li>
                          <li><a href="service.html">#Apartments</a></li>
                          <li><a href="service.html">#Apartments</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-item">
                    <div class="widget widget_nav_menu footer-widget">
                      <h3 class="widget_title">Quick Links</h3>
                      <div class="menu-all-pages-container">
                        <ul class="menu">
                          <li><a href="service.html">Strategy Services</a></li>
                          <li><a href="service.html">Management</a></li>
                          <li><a href="service.html">Privacy & Policy</a></li>
                          <li><a href="service.html">Sitemap</a></li>
                          <li><a href="service.html">Term & Conditions</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-item">
                    <div class="widget widget_nav_menu footer-widget">
                      <h3 class="widget_title">Support</h3>
                      <div class="menu-all-pages-container">
                        <ul class="menu">
                          <li><a href="contact.html">Help Center</a></li>
                          <li><a href="service.html">FAQs</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                          <li><a href="contact.html">Ticket Support</a></li>
                          <li><a href="contact.html">Live Chat</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-item">
                    <div class="widget widget_banner footer-widget">
                      <h3 class="widget_title">Andy Location</h3>
                      <div class="widget-map">
                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1658812932163!5m2!1sen!2sbd"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-bottom-community">
                  <div class="content">
                    <p>@Andy on Instagram</p>
                    <h4 class="box-title">Nice Gallery</h4>
                  </div>
                  <div class="footer-gallery-wrapper">
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-1.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-1.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-2.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-2.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-3.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-3.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-5.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-5.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-6.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-6.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-7.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-7.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
                    <div class="simple-gallery-card">
                      <div class="gallery-img">
                        <img src="https://html.themehour.net/piller/demo/assets/img/gallery/footer-gallery-1-4.jpg"
                          alt="Gallery-Image">
                        <a href="assets/img/gallery/footer-gallery-1-4.jpg" class="icon-btn popup-image"> <i
                            class="fa-brands fa-instagram"></i> </a>
                      </div>
                    </div>
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
