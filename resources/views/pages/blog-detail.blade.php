@extends('layouts.page')


@section('content')
<!--==============================
Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://html.themehour.net/piller/demo/assets/img/blog/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ $post->title }}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li>{{ $post->title }}</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Blog Area
==============================-->
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{ $post->featured_image_url }}" alt="Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blog.show', $post->slug) }}"><i class="fa-light fa-user"></i> Admin</a>
                            <a href="{{ route('blog.show', $post->slug) }}"><i class="fa-regular fa-calendar"></i> {{ $post->created_at->format('d M Y') }}</a>
                        </div>
                        <h2 class="blog-title">{{ $post->title }}</h2>
                        {!! $post->content !!}

                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.html">luxury home</a>
                                        <a href="blog.html">Strategey</a>
                                        <a href="blog.html">Villa Home</a>
                                        <a href="blog.html">Project</a>
                                    </div>
                                </div>
                                <div class="col-sm-auto text-xl-end">
                                    <span class="share-links-title">Share this article:</span>
                                    <div class="th-social">
                                        <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div><!-- End Social Share -->
                                </div><!-- Share Links Area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-comments-wrap ">
                    <h2 class="blog-inner-title h4">Comments (3)</h2>
                    <ul class="comment-list">
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="https://html.themehour.net/piller/demo/assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                </div>
                                <div class="comment-content">
                                    <h3 class="name">Adam Jhon</h3>
                                    <span class="commented-on">25 Jun, 2025 08:56pm</span>
                                    <p class="text">Through this blog, we aim to inspire readers and of the blog to embrace education as a lifelong journey and to advocate for quality education</p>
                                    <div class="reply_and_edit">
                                        <a href="blog-details.html" class="reply-btn"><i class="fa-solid fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="children">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="https://html.themehour.net/piller/demo/assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h3 class="name">Jhon Abraham</h3>
                                            <span class="commented-on">25 Jun, 2025 08:56pm</span>
                                            <p class="text">Education News and Trends: and of the blog We provide updates on the latest blog and developments and trends in the education sector.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn"><i class="fa-solid fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="https://html.themehour.net/piller/demo/assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                </div>
                                <div class="comment-content">
                                    <h3 class="name">Anadi Juila</h3>
                                    <span class="commented-on">25 Jun, 2025 08:56pm</span>
                                    <p class="text">We discuss strategies to and of the blog help students and other people public make informed decisions about their educational and career paths.</p>
                                    <div class="reply_and_edit">
                                        <a href="blog-details.html" class="reply-btn"><i class="fa-solid fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- Comment end --> <!-- Comment Form -->
                
                <div class="th-comment-form blog-comment-wrap">
                    <div class="form-title mb-25">
                        <h3 class="blog-inner-title h4">Leave a Reply</h3>
                        <p class="form-text">Your email address will not be published. Required fields are marked</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group style-border">
                            <i class="fa-regular fa-user"></i>
                            <input id="name" name="name" type="text" placeholder="Your name*" class="form-control">
                        </div>
                        <div class="col-md-6 form-group style-border">
                            <i class="fa-regular fa-envelope"></i>
                            <input id="email" name="email" type="text" placeholder="Your email*" class="form-control">
                        </div>
                        <div class="col-12 form-group style-border">
                            <i class="fa-solid fa-globe"></i>
                            <input id="website" name="name" type="text" placeholder="Website*" class="form-control">
                        </div>
                        <div class="col-12 form-group style-border">
                            <i class="fa-regular fa-pen"></i>
                            <textarea placeholder="Comment*" class="form-control"></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <input id="reviewcheck" name="reviewcheck" type="checkbox">
                            <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
                        </div>
                        <div class="col-12 form-group style-border mb-0">
                            <button class="th-btn radius">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search  ">
                        <h3 class="widget_title">search</h3>
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Featured Listings</h3>
                        <div class="recent-post-wrap featured-listing">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="property-details.html"><img src="https://html.themehour.net/piller/demo/assets/img/blog/featured-listing-sidebar-1-1.jpg" alt="Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="property-details.html">Cometes contabesco audacia aeneus tui canonicus</a></h4>
                                    <div class="property-features-wrap">
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bed.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bed 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bath.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bath 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/sqft.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">1599 sqft</h5>
                                        </div>
                                    </div>
                                    <div class="recent-post-meta">
                                        <a href="property-details.html">$9850,00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="property-details.html"><img src="https://html.themehour.net/piller/demo/assets/img/blog/featured-listing-sidebar-1-2.jpg" alt="Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="property-details.html">Cometes contabesco audacia aeneus tui canonicus</a></h4>
                                    <div class="property-features-wrap">
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bed.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bed 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bath.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bath 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/sqft.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">1599 sqft</h5>
                                        </div>
                                    </div>
                                    <div class="recent-post-meta">
                                        <a href="property-details.html">$9850,00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="property-details.html"><img src="https://html.themehour.net/piller/demo/assets/img/blog/featured-listing-sidebar-1-3.jpg" alt="Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="property-details.html">Cometes contabesco audacia aeneus tui canonicus</a></h4>
                                    <div class="property-features-wrap">
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bed.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bed 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bath.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bath 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/sqft.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">1599 sqft</h5>
                                        </div>
                                    </div>
                                    <div class="recent-post-meta">
                                        <a href="property-details.html">$8850,00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="property-details.html"><img src="https://html.themehour.net/piller/demo/assets/img/blog/featured-listing-sidebar-1-4.jpg" alt="Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="property-details.html">Cometes contabesco audacia aeneus tui canonicus</a></h4>
                                    <div class="property-features-wrap">
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bed.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bed 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/bath.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">Bath 2</h5>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="property-features-item">
                                            <div class="thumb">
                                                <img src="https://html.themehour.net/piller/demo/assets/img/icon/sqft.svg" alt="icon">
                                            </div>
                                            <h5 class="feature-title">1599 sqft</h5>
                                        </div>
                                    </div>
                                    <div class="recent-post-meta">
                                        <a href="property-details.html">$7850,00</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget sidebar-contact-form">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="contact-form-widget">
                            <form action="#" class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your Email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your Phone" required="">
                                </div>
                                <div class="form-group mb-4">
                                    <textarea name="Your message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-btn pt-2">
                                    <button type="submit" class="th-btn radius">Send Us</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget widget_banner  " data-bg-src="https://html.themehour.net/piller/demo/assets/img/bg/widget_banner.jpg">
                        <div class="widget-banner">
                            <h2 class="title">We can help you to find real estate agency</h2>
                            <a href="contact.html" class="th-btn radius">Contact with Agent</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection