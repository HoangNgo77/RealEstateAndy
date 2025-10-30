@extends('layouts.page')

@section('content')

<!--==============================
Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://html.themehour.net/piller/demo/assets/img/blog/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Grid</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Blog Grid</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Blog Area
==============================-->
<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row gy-30 justify-content-center">

            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <img src="{{ $post->featured_image_url }}" alt="Image">
                        </a>
                        <div class="date">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->created_at->format('d M Y') }}</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blog.show', $post->slug) }}"><i class="fa-solid fa-user"></i> Emma</a>
                            <a href="{{ route('blog.show', $post->slug) }}"><i class="fa-solid fa-comments"></i> No Comments</a>

                        </div>
                        <h3 class="box-title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
                        <a href="{{ route('blog.show', $post->slug) }}" class="th-btn pill style3"> Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="th-pagination text-center pt-4">
                <ul>
                    <li><a href="{{ route('blog.index') }}"><i class="far fa-arrow-left"></i></a></li>
                    <li><a href="{{ route('blog.index') }}">1</a></li>
                    <li><a href="{{ route('blog.index') }}">2</a></li>
                    <li><a href="{{ route('blog.index') }}">3</a></li>
                    <li><a class="next-page" href="{{ route('blog.index') }}">Next <i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection