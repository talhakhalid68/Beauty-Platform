@extends('layouts.app')

@section('seo')
    <title>Rasm - Nail Salon & Spa Beauty Care - Blog Details</title>
    <meta name="description" content="Read our detailed blog post about maintaining health and beauty through spas. Discover expert tips and insights from Rasm Nail Salon & Spa professionals." />
    <meta name="keywords" content="spa treatments, beauty care, health benefits, relaxation techniques, nail care tips" />
@endsection

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Blog Details</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Blog Details Section -->
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ url('/blog-details') }}">
                            <img src="{{ asset('assets/img/blog/blog-s-1-1.jpg') }}" alt="Blog Image" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-user"></i>By Alex Michel</a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>10 July, 2024</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h2 class="blog-title">
                            <a href="{{ url('/blog-details') }}">Maintaining Health and Beauty Through Spas.</a>
                        </h2>
                        <p>
                            Uniquely iterate e-business catalysts for change without cross functional supply chains. Completely harness extensible infrastructures via future-proof infomediaries. Rapaciously grow competitive collaboration and idea-sharing without intuitive.
                        </p>
                        <p class="mt-4">
                            As you step through our doors, you will be enveloped in an ambiance of calmness and serenity. Our beauty spa salon is meticulously designed to create a peaceful and soothing atmosphere,
                        </p>
                        <blockquote>
                            <p>
                                Dramatically develop market positioning expertise with long-term high-impact ROI. Authoritatively provide access to adaptive web-readiness.
                            </p>
                            <cite>Michel Clarck</cite>
                        </blockquote>
                        <h4 class="blog-title mt-4">
                            <a href="{{ url('/blog-details') }}">Indulge in Pampering Treatments:</a>
                        </h4>
                        <p class="mt-2">
                            Indulge yourself in our pampering treatments designed to nourish your body, mind, and soul. Choose from a variety of massages, such as Swedish, deep tissue, or hot stone, to release tension and promote deep relaxation.
                        </p>
                        <p class="mt-4">
                            Our facials are customized to address your specific skin concerns and leave you with a radiant glow. Additionally, our body treatments, like exfoliating scrubs and wraps, are designed to rejuvenate and moisturize your skin, leaving it velvety smooth..
                        </p>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="blog-img">
                                    <img class="w-100" src="{{ asset('assets/img/blog/blog_inner_1.jpg') }}" alt="Blog Image" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-img">
                                    <img class="w-100" src="{{ asset('assets/img/blog/blog_inner_2.jpg') }}" alt="Blog Image" />
                                </div>
                            </div>
                        </div>
                        <p>
                            Experience the ultimate in relaxation and rejuvenation at our exquisite beauty spa salon. Let our skilled professionals pamper you from head to toe, restoring balance and harmony to your body and mind. Discover a world of tranquility.
                        </p>
                    </div>
                    <div class="share-links clearfix">
                        <div class="row justify-content-between">
                            <div class="col-sm-auto">
                                <div class="tagcloud">
                                    <a href="{{ url('/blog') }}">Beauty Spa</a>
                                    <a href="{{ url('/blog') }}">Skincare</a>
                                </div>
                            </div>
                            <div class="col-sm-auto text-xl-end">
                                <span class="share-links-title">Follow Us:</span>
                                <ul class="social-links">
                                    <li>
                                        <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-comments-wrap">
                    <h2 class="blog-inner-title h3">Comments (3)</h2>
                    <ul class="comment-list">
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="{{ asset('assets/img/blog/comment-author-1.jpg') }}" alt="Comment Author" />
                                </div>
                                <div class="comment-content">
                                    <div class="">
                                        <h3 class="name">Adam Jhon</h3>
                                        <span class="commented-on">25Aug, 2024 08:56pm</span>
                                    </div>
                                    <p class="text">
                                        Credibly pontificate transparent quality vectors with quality mindshare. Efficiently architect worldwide strategic theme areas after user.
                                    </p>
                                    <div class="reply_and_edit">
                                        <a href="{{ url('/blog-details') }}" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="children">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="{{ asset('assets/img/blog/comment-author-2.jpg') }}" alt="Comment Author" />
                                        </div>
                                        <div class="comment-content">
                                            <div class="">
                                                <h3 class="name">Jhon Abraham</h3>
                                                <span class="commented-on">25Aug, 2024 08:56pm</span>
                                            </div>
                                            <p class="text">
                                                It is different from airport transfer or port transfer, which are services that pick you up
                                            </p>
                                            <div class="reply_and_edit">
                                                <a href="{{ url('/blog-details') }}" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="{{ asset('assets/img/blog/comment-author-3.jpg') }}" alt="Comment Author" />
                                </div>
                                <div class="comment-content">
                                    <div class="">
                                        <h3 class="name">Anadi Juila</h3>
                                        <span class="commented-on">25Aug, 2024 08:56pm</span>
                                    </div>
                                    <p class="text">
                                        Credibly pontificate transparent quality vectors with quality mindshare. Efficiently architect worldwide strategic theme areas after user.
                                    </p>
                                    <div class="reply_and_edit">
                                        <a href="{{ url('/blog-details') }}" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="th-comment-form">
                    <div class="form-title">
                        <h3 class="blog-inner-title mb-2">
                            <i class="fa-solid fa-reply"></i>Leave a Reply
                        </h3>
                        <p class="form-text">
                            Your email address will not be published. Required fields are marked
                        </p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-6 form-group">
                            <i class="fal fa-user"></i>
                            <input type="text" placeholder="Your Name*" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <i class="fal fa-envelope"></i>
                            <input type="text" placeholder="Your Email*" class="form-control" />
                        </div>
                        <div class="col-12 form-group">
                            <i class="fa-sharp fa-light fa-comments"></i>
                            <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <input type="checkbox" id="html" />
                            <label for="html">Save my name, email, and website in this browser for the next time I comment.</label>
                        </div>
                        <div class="col-12 form-group mb-0">
                            <button class="th-btn">Post Comment<i class="fa-regular fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword" />
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Body Treatments</a>
                                <span>(8)</span>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Facials</a>
                                <span>(6)</span>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Massages</a>
                                <span>(5)</span>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Nail Art</a>
                                <span>(2)</span>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Waxing</a>
                                <span>(7)</span>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Hair care</a>
                                <span>(9)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">Recent Posts<span class="shape"></span></h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('assets/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image" /></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="{{ url('/blog') }}"><i class="fas fa-calendar-days"></i>21 June, 2024</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="{{ url('/blog-details') }}">Lighting The Way With Guest Daniel Stern</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('assets/img/blog/recent-post-1-2.jpg') }}" alt="Blog Image" /></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="{{ url('/blog') }}"><i class="fas fa-calendar-days"></i>24 June, 2024</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="{{ url('/blog-details') }}">Lighting The Way With Guest Daniel Stern</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('assets/img/blog/recent-post-1-3.jpg') }}" alt="Blog Image" /></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="{{ url('/blog') }}"><i class="fas fa-calendar-days"></i>27 June, 2024</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="{{ url('/blog-details') }}">Lighting The Way With Guest Daniel Stern</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="{{ url('/blog') }}">Beauty Spa</a>
                            <a href="{{ url('/blog') }}">Care</a>
                            <a href="{{ url('/blog') }}">Massage</a>
                            <a href="{{ url('/blog') }}">Skincare</a>
                            <a href="{{ url('/blog') }}">Relax</a>
                            <a href="{{ url('/blog') }}">Beauty Fix</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection