    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Piller-html"></a>
            </div>
            <div class="th-mobile-menu">
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
                  <a href="{{ route('agencies.index') }}">Project</a>
                </li>
                <li>
                  <a href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>
                </ul>
            </div>
        </div>
    </div>
