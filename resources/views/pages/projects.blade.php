@extends('layouts.page')

@section('content')

<!--==============================
Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://html.themehour.net/piller/demo/assets/img/blog/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Project Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Projects Area
==============================-->
<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row gy-30 justify-content-center">

            @forelse($projects as $project)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('projects.show', $project->slug) }}">
                            <img src="{{ $project->featured_image_url ?: 'https://html.themehour.net/piller/demo/assets/img/agencies/agencies_1_1.jpg' }}" alt="{{ $project->title }}">
                        </a>
                        <div class="date">
                            <a href="{{ route('projects.show', $project->slug) }}">{{ $project->published_at?->format('d M Y') ?? $project->created_at->format('d M Y') }}</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3 class="box-title"><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></h3>
                        @if($project->excerpt)
                        <p>{{ Str::limit($project->excerpt, 100) }}</p>
                        @endif
                        <a href="{{ route('projects.show', $project->slug) }}" class="th-btn pill style3"> Read More</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No projects available at the moment.</p>
            </div>
            @endforelse

            @if($projects->hasPages())
            <div class="th-pagination text-center pt-4">
                {{ $projects->links() }}
            </div>
            @endif
        </div>
    </div>
</section>

@endsection
