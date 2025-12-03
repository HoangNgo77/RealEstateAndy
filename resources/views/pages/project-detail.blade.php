@extends('layouts.page')

@section('content')
<!--==============================
Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://html.themehour.net/piller/demo/assets/img/blog/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ $project->title }}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                <li>{{ $project->title }}</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Project Details Area
==============================-->
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{ $project->featured_image_url ?: 'https://html.themehour.net/piller/demo/assets/img/agencies/agencies_1_1.jpg' }}" alt="{{ $project->title }}">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('projects.show', $project->slug) }}"><i class="fa-light fa-user"></i> {{ $project->user?->name ?? 'Admin' }}</a>
                            <a href="{{ route('projects.show', $project->slug) }}"><i class="fa-regular fa-calendar"></i> {{ $project->published_at?->format('d M Y') ?? $project->created_at->format('d M Y') }}</a>
                        </div>
                        <h2 class="blog-title">{{ $project->title }}</h2>
                        
                        @if($project->excerpt)
                        <p class="lead">{{ $project->excerpt }}</p>
                        @endif
                        
                        {!! $project->content !!}

                        @if($project->getMedia('gallery')->count() > 0)
                        <div class="project-gallery mt-4 mb-4">
                            <h3>Project Gallery</h3>
                            <div class="row gy-4">
                                @foreach($project->getMedia('gallery') as $media)
                                <div class="col-md-6">
                                    <img src="{{ $media->getUrl() }}" alt="{{ $project->title }}" class="img-fluid rounded">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto text-xl-end">
                                    <span class="share-links-title">Share this project:</span>
                                    <div class="th-social">
                                        <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(route('projects.show', $project->slug)) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('projects.show', $project->slug)) }}&text={{ urlencode($project->title) }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://linkedin.com/shareArticle?mini=true&url={{ urlencode(route('projects.show', $project->slug)) }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    @if($recentProjects->count() > 0)
                    <div class="widget">
                        <h3 class="widget_title">Recent Projects</h3>
                        <div class="recent-post-wrap">
                            @foreach($recentProjects as $recentProject)
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{ route('projects.show', $recentProject->slug) }}">
                                        <img src="{{ $recentProject->featured_image_url ?: 'https://html.themehour.net/piller/demo/assets/img/blog/recent-post-1-1.jpg' }}" alt="{{ $recentProject->title }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="{{ route('projects.show', $recentProject->slug) }}">{{ $recentProject->title }}</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="{{ route('projects.show', $recentProject->slug) }}"><i class="fa-regular fa-calendar"></i>{{ $recentProject->published_at?->format('M d, Y') ?? $recentProject->created_at->format('M d, Y') }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    
                    <div class="widget sidebar-contact-form">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="contact-form-widget">
                            <form action="{{ route('contact.store') }}" method="POST" class="newsletter-form">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Your Phone" required="">
                                </div>
                                <div class="form-group mb-4">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
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
                            <a href="{{ route('contact') }}" class="th-btn radius">Contact with Agent</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
