@extends('layouts.app')

@section('seo')
    <title>Rasm - Nail Salon & Spa Beauty Care - Blog List</title>
    <meta name="description" content="Read our latest blog posts about nail care, beauty treatments, spa services, and wellness tips from the experts at Rasm Nail Salon & Spa." />
    <meta name="keywords" content="nail salon blog, beauty tips, spa treatments, wellness advice, nail care tutorials" />
@endsection

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Blog List</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Blog List</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Blog List Section -->
<section class="th-blog-list space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="th-blog blog-list-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ url('/blog-details') }}">
                            <img src="{{ asset('assets/img/blog/blog-s-1-1.jpg') }}" alt="Blog Image" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fas fa-user"></i>By Alex Michel</a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>10 July, 2024</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h2 class="blog-title">
                            <a href="{{ url('/blog-details') }}">Maintaining Health and Beauty Through Spas</a>
                        </h2>
                        <p class="blog-text">
                            Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive.
                        </p>
                        <a href="{{ url('/blog-details') }}" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
                <div class="th-blog blog-list-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ url('/blog-details') }}">
                            <img src="{{ asset('assets/img/blog/blog-s-1-2.jpg') }}" alt="Blog Image" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fa-regular fa-user"></i>By-Admin, 2024</a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>02 March</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h2 class="blog-title">
                            <a href="{{ url('/blog-details') }}">Do Massages Have Real Health Benefits?</a>
                        </h2>
                        <p class="blog-text">
                            Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive.
                        </p>
                        <a href="{{ url('/blog-details') }}" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
                <div class="th-blog blog-list-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ url('/blog-details') }}">
                            <img src="{{ asset('assets/img/blog/blog-s-1-3.jpg') }}" alt="Blog Image" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fa-regular fa-user"></i>By-Admin, 2024</a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>02 March</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h2 class="blog-title">
                            <a href="{{ url('/blog-details') }}">Ultra Glam Gold Nail Polishes for Holiday.</a>
                        </h2>
                        <p class="blog-text">
                            Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive..
                        </p>
                        <a href="{{ url('/blog-details') }}" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
                <div class="th-blog blog-list-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ url('/blog-details') }}">
                            <img src="{{ asset('assets/img/blog/blog-s-1-4.jpg') }}" alt="Blog Image" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fa-regular fa-user"></i>By-Admin, 2024</a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>02 March</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h2 class="blog-title">
                            <a href="{{ url('/blog-details') }}">A Relaxation of the Senses with Their Help</a>
                        </h2>
                        <p class="blog-text">
                            Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive..
                        </p>
                        <a href="{{ url('/blog-details') }}" class="th-btn">READ MORE<i class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
                <div class="th-pagination">
                    <ul>
                        <li>
                            <a href="{{ url('/blog-list') }}"><i class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        <li><a href="{{ url('/blog-list') }}">1</a></li>
                        <li><a href="{{ url('/blog-list') }}">2</a></li>
                        <li>
                            <a href="{{ url('/blog-list') }}"><i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection