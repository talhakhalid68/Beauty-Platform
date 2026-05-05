@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="th-hero-wrapper hero-3" id="hero">
    <div class="hero-slider-3 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
        <div class="th-hero-slide">
            <div class="th-hero-bg zoom" data-bg-src="{{ asset('assets/img/hero/hero_bg_3_1.jpg') }}"></div>
            <div class="container">
                <div class="hero-style3">
                    <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                        <img src="{{ asset('assets/img/theme-img/title_left2.svg') }}" alt="shape" />Trust in Our Expert Hair Care
                    </span>
                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                        You Need To Care Of Hair <span class="text-theme">Style</span>
                    </h1>
                    <div class="hero-big" data-ani="slideinup" data-ani-delay="0.6s">
                        <h1 class="hero-big_text">Hair<span class="hero-big_text2">Salon</span></h1>
                    </div>
                    <p class="hero-text mr-50" data-ani="slideinup" data-ani-delay="0.7s">
                        Change Your Look With Our Talented Stylists
                    </p>
                    <div class="btn-group style-1" data-ani="slideinup" data-ani-delay="0.8s">
                        <a href="{{ url('/service') }}" class="th-btn">Our Services<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <a href="{{ url('/contact') }}" class="th-btn style5">Contact Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg zoom" data-bg-src="{{ asset('assets/img/hero/hero_bg_3_2.jpg') }}"></div>
            <div class="container">
                <div class="hero-style3">
                    <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                        <img src="{{ asset('assets/img/theme-img/title_left2.svg') }}" alt="shape" />Styling and Heat Protection
                    </span>
                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                        haircut with a subtle <span class="text-theme">shape</span>
                    </h1>
                    <div class="hero-big" data-ani="slideinup" data-ani-delay="0.6s">
                        <h1 class="hero-big_text">Hair<span class="hero-big_text2">Salon</span></h1>
                    </div>
                    <p class="hero-text mr-50" data-ani="slideinup" data-ani-delay="0.7s">
                        Similar to the messy bun but positioned
                    </p>
                    <div class="btn-group style-1" data-ani="slideinup" data-ani-delay="0.8s">
                        <a href="{{ url('/service') }}" class="th-btn">Our Services<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <a href="{{ url('/contact') }}" class="th-btn style5">Contact Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg zoom" data-bg-src="{{ asset('assets/img/hero/hero_bg_3_3.jpg') }}"></div>
            <div class="container">
                <div class="hero-style3">
                    <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                        <img src="{{ asset('assets/img/theme-img/title_left2.svg') }}" alt="shape" />Seasonal Hair Care
                    </span>
                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                        Timeless classic hair <span class="text-theme">styles</span>
                    </h1>
                    <div class="hero-big" data-ani="slideinup" data-ani-delay="0.6s">
                        <h1 class="hero-big_text">Hair<span class="hero-big_text2">Salon</span></h1>
                    </div>
                    <p class="hero-text mr-50" data-ani="slideinup" data-ani-delay="0.7s">
                        This style features shaved or closely cropped
                    </p>
                    <div class="btn-group style-1" data-ani="slideinup" data-ani-delay="0.8s">
                        <a href="{{ url('/service') }}" class="th-btn">Our Services<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <a href="{{ url('/contact') }}" class="th-btn style5">Contact Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup hero_wrap d-none d-xxl-block jump" data-bottom="0%" data-left="0%">
        <img src="{{ asset('assets/img/shape/leaves_9.png') }}" alt="shape" />
    </div>
</section>

<!-- About Section -->
<div class="about-sec overflow-hidden space" id="about-sec">
    <div class="container align-item-center">
        <div class="row">
            <div class="col-xl-6">
                <div class="img-box4">
                    <div class="img4 wow fadeInUp">
                        <img class="tilt-active" src="{{ asset('assets/img/normal/about_3_1.jpg') }}" alt="About" />
                    </div>
                    <div class="img5 wow fadeInRight">
                        <img class="tilt-active" src="{{ asset('assets/img/normal/about_3_2.jpg') }}" alt="About" />
                    </div>
                    <div class="about-shape">
                        <img src="{{ asset('assets/img/normal/about_3_3.jpg') }}" alt="About" />
                    </div>
                    <div class="about-company-since-wrap">
                        <div class="about-icon">
                            <img src="{{ asset('assets/img/icon/logo-icon.svg') }}" alt="img" />
                        </div>
                        <div class="about-tag">
                            <span class="about-anime">Company Since 1996</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xl-4 wow fadeInUp">
                    <div class="title-area">
                        <span class="sub-title">About Us<img src="{{ asset('assets/img/theme-img/title_right.svg') }}" alt="" /></span>
                        <h2 class="sec-title">
                            Welcome to Our Hair Salon We Will Change Your Look!
                        </h2>
                        <p class="about-desc">
                            We are committed to using high-quality hair care products to ensure that your hair receives the best possible treatment. From shampoos and conditioners to styling products.
                        </p>
                    </div>
                    <div class="about-counter">
                        <div class="th-counterup">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/counter_2_1.svg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h3 class="counter">
                                        <span class="odometer" data-count="26">00</span>
                                    </h3>
                                    <p class="counter-card_text">Years of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="th-counterup">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/man.svg') }}" alt="" />
                                </div>
                                <div class="content">
                                    <h3 class="counter">
                                        <span class="odometer" data-count="42">00</span>
                                    </h3>
                                    <p class="counter-card_text">Our Awesome Expert</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mt-45">
                        <a href="{{ url('/about') }}" class="th-btn">Learn More<i class="fa-solid fa-arrow-right ms-2"></i></a>
                        <div class="about-profile">
                            <div class="about-avater">
                                <img src="{{ asset('assets/img/shape/about-thumb_1.png') }}" alt="about" />
                            </div>
                            <div class="media-body">
                                <h5 class="title">Phillips Lewis</h5>
                                <span class="desig">CEO of Barber Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="overflow-hidden">
    <div class="service-area space" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-25">
                    <span class="sub-title style2">Our Services</span>
                    <img src="{{ asset('assets/img/theme-img/title_shape_3.svg') }}" alt="" />
                    <h2 class="sec-title">Our Premium Hair Care Services</h2>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_overlay" data-bg-src="{{ asset('assets/img/shape/service_shape.png') }}"></div>
                        <h3 class="service-grid_number">01</h3>
                        <div class="service-grid_icon">
                            <img src="{{ asset('assets/img/icon/service_3_1.svg') }}" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="{{ url('/service-details') }}">Haircut</a>
                            </h3>
                            <p class="service-grid_text">
                                A versatile and classic haircut that can be worn in different lengths and styles, suitable for various face shapes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_overlay" data-bg-src="{{ asset('assets/img/shape/service_shape.png') }}"></div>
                        <h3 class="service-grid_number">02</h3>
                        <div class="service-grid_icon">
                            <img src="{{ asset('assets/img/icon/service_3_2.svg') }}" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="{{ url('/service-details') }}">Hairdryer</a>
                            </h3>
                            <p class="service-grid_text">
                                Hairdryers are salons and households for various hair styling purposes, such as drying wet hair after washing
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_overlay" data-bg-src="{{ asset('assets/img/shape/service_shape.png') }}"></div>
                        <h3 class="service-grid_number">03</h3>
                        <div class="service-grid_icon">
                            <img src="{{ asset('assets/img/icon/service_3_3.svg') }}" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="{{ url('/service-details') }}">Hair Coloring</a>
                            </h3>
                            <p class="service-grid_text">
                                Hair coloring is the process of changing the natural color of ones hair using different types color treatments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_overlay" data-bg-src="{{ asset('assets/img/shape/service_shape.png') }}"></div>
                        <h3 class="service-grid_number">04</h3>
                        <div class="service-grid_icon">
                            <img src="{{ asset('assets/img/icon/service_3_4.svg') }}" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="{{ url('/service-details') }}">Hair Style</a>
                            </h3>
                            <p class="service-grid_text">
                                If youre unsure about a specific style or how to achieve it, a hairstylist can offer you achieve the desired look.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_overlay" data-bg-src="{{ asset('assets/img/shape/service_shape.png') }}"></div>
                        <h3 class="service-grid_number">05</h3>
                        <div class="service-grid_icon">
                            <img src="{{ asset('assets/img/icon/service_3_5.svg') }}" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="{{ url('/service-details') }}">Smooth Shaving</a>
                            </h3>
                            <p class="service-grid_text">
                                Once you finish shaving, rinse your skin with cool water to close the pores and then pat dry with a clean towel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_overlay" data-bg-src="{{ asset('assets/img/shape/service_shape.png') }}"></div>
                        <h3 class="service-grid_number">06</h3>
                        <div class="service-grid_icon">
                            <img src="{{ asset('assets/img/icon/service_3_6.svg') }}" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="{{ url('/service-details') }}">Hair Trimming</a>
                            </h3>
                            <p class="service-grid_text">
                                Hair trimming is the process of cutting the ends of your hair to maintain its length, shape, and overall health.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-40">
                    <span>You Get More Services <a class="line-btn" href="{{ url('/service-details') }}">Explore Now<i class="fa-regular fa-arrow-right"></i></a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape-wrapp jump d-none d-xl-block" data-top="5%" data-left="0%">
        <img src="{{ asset('assets/img/shape/leaves_11.png') }}" alt="shape" />
    </div>
    <div class="shape-mockup shape-wrapp jump d-none d-xl-block" data-bottom="5%" data-right="0%">
        <img src="{{ asset('assets/img/shape/leaves_7.png') }}" alt="shape" />
    </div>
</div>

<!-- Brand Section -->
<div class="brand-area overflow-hidden">
    <div class="container th-container">
        <div class="row th-carousel" id="brandSlide1" data-slide-show="7" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_1.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_1.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_2.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_2.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_3.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_3.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_4.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_4.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_5.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_5.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_6.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_6.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_7.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_7.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="brand-box wow fadeInRight">
                    <a href="#"><img class="original" src="{{ asset('assets/img/brand/brand_2_7.png') }}" alt="Brand Logo" />
                    <img class="gray" src="{{ asset('assets/img/brand/brand_2_7.png') }}" alt="Brand Logo" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<section class="team-area-two overflow-hidden space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style2">Expert Team</span>
            <img src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}" alt="" />
            <h2 class="sec-title">Our Experience Specialists</h2>
        </div>
        <div class="row slider-shadow th-carousel" id="teamSlide2" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team" />
                    </div>
                    <div class="team-box_content">
                        <div class="team-content">
                            <h3 class="box-title">
                                <a href="{{ url('/team-details') }}">Daniel Martin</a>
                            </h3>
                            <span class="team-desig">Hair Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social">
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/team_2_2.jpg') }}" alt="Team" />
                    </div>
                    <div class="team-box_content">
                        <div class="team-content">
                            <h3 class="box-title">
                                <a href="{{ url('/team-details') }}">Emma Mary</a>
                            </h3>
                            <span class="team-desig">Hair Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social">
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/team_2_3.jpg') }}" alt="Team" />
                    </div>
                    <div class="team-box_content">
                        <div class="team-content">
                            <h3 class="box-title">
                                <a href="{{ url('/team-details') }}">Michel Jonson</a>
                            </h3>
                            <span class="team-desig">Hair Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social">
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/team_2_4.jpg') }}" alt="Team" />
                    </div>
                    <div class="team-box_content">
                        <div class="team-content">
                            <h3 class="box-title">
                                <a href="{{ url('/team-details') }}">Jessica Lauren</a>
                            </h3>
                            <span class="team-desig">Hair Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social">
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="th-team team-box wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/team_2_5.jpg') }}" alt="Team" />
                    </div>
                    <div class="team-box_content">
                        <div class="team-content">
                            <h3 class="box-title">
                                <a href="{{ url('/team-details') }}">Jenifer Lopez</a>
                            </h3>
                            <span class="team-desig">Hair Specialist</span>
                        </div>
                        <div class="team-social">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                            <div class="th-social">
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump" data-top="0%" data-left="0%">
        <img src="{{ asset('assets/img/shape/flower_1_10.png') }}" alt="shape" />
    </div>
</section>

<!-- Video Section -->
<div class="video-area-2 overflow-hidden" data-pos-for=".card-area" data-sec-pos="bottom-half">
    <div class="container">
        <div class="video-content-box text-center wow fadeInUp" data-bg-src="{{ asset('assets/img/normal/video_2.jpg') }}">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-play-btn play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
        </div>
    </div>
</div>

<!-- Gift Cards Section -->
<div class="card-area bg-top-center overflow-hidden space" data-bg-src="{{ asset('assets/img/bg/card_bg_1.jpg') }}">
    <div class="container">
        <div class="title-area text-center wow fadeInUp">
            <span class="sub-title">Gift & Cards</span>
            <img src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}" alt="" />
            <h2 class="sec-title text-white">Our Special Gifts & Cards</h2>
        </div>
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="card-item wow fadeInUp">
                    <div class="card-item_img">
                        <img src="{{ asset('assets/img/normal/card_1.jpg') }}" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="box-title"><a href="{{ url('/price') }}">Hair Cut</a></h3>
                        <p class="card-item_text">
                            Whether its a simple trim or a complete makeover, our stylists approach.
                        </p>
                        <a href="{{ url('/price') }}" class="th-btn style5">Get Now<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    <span class="card-item_price">$26.99</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="card-item wow fadeInDown">
                    <div class="card-item_img">
                        <img src="{{ asset('assets/img/normal/card_2.jpg') }}" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="box-title"><a href="{{ url('/price') }}">Hair Color</a></h3>
                        <p class="card-item_text">
                            With our expert stylists, personalized consultation precision hair coloring.
                        </p>
                        <a href="{{ url('/price') }}" class="th-btn style5">Get Now<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    <span class="card-item_price">$28.99</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="card-item wow fadeInUp">
                    <div class="card-item_img">
                        <img src="{{ asset('assets/img/normal/card_3.jpg') }}" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="box-title"><a href="{{ url('/price') }}">Hair Wash</a></h3>
                        <p class="card-item_text">
                            We strive to ensure that you leave our salon feeling confident and satisfied.
                        </p>
                        <a href="{{ url('/price') }}" class="th-btn style5">Get Now<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    <span class="card-item_price">$29.99</span>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-lg-block jump" data-bottom="10%" data-left="0%">
        <img src="{{ asset('assets/img/shape/leaves_3.png') }}" alt="shape" />
    </div>
    <div class="shape-mockup d-none d-lg-block jump" data-top="10%" data-right="0%">
        <img src="{{ asset('assets/img/shape/leaves_13.png') }}" alt="shape" />
    </div>
</div>

<!-- Pricing Section -->
<section class="price-area overflow-hidden space">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 wow fadeInLeft">
                <div class="title-area mb-40 text-center text-xl-start">
                    <span class="sub-title">Hair Care Price<img src="{{ asset('assets/img/theme-img/title_right.svg') }}" alt="" /></span>
                    <h2 class="sec-title">Our Offers For The Best Prices</h2>
                </div>
                <div class="nav nav-tabs pricing-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link price-list active" id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button">
                        Women Price
                    </button>
                    <button class="nav-link price-list" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2" type="button">
                        Men Price
                    </button>
                    <button class="nav-link price-list" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3" type="button">
                        Kids Price
                    </button>
                </div>
                <div class="price-list-area">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                            <div class="price-box-wrapper style2">
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Hair Cutting & Trimming</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists approach every haircut
                                            </p>
                                        </div>
                                        <span class="price-box_price">$29</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Classic Hair Color</a>
                                            </h4>
                                            <p class="price-box_desc">Vibrant colors, finishes</p>
                                        </div>
                                        <span class="price-box_price">$45</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Keep Mustache in Good</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Nourish and protect your hair
                                            </p>
                                        </div>
                                        <span class="price-box_price">$44</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Blow Dry & Curl</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists take your hair type
                                            </p>
                                        </div>
                                        <span class="price-box_price">$66</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Shampoo & Set</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Products from reputable brands
                                            </p>
                                        </div>
                                        <span class="price-box_price">$76</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                            <div class="price-box-wrapper style2">
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Hair Cutting & Trimming</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists approach every haircut
                                            </p>
                                        </div>
                                        <span class="price-box_price">$36</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Classic Hair Color</a>
                                            </h4>
                                            <p class="price-box_desc">Vibrant colors, finishes</p>
                                        </div>
                                        <span class="price-box_price">$35</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Keep Mustache in Good</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Nourish and protect your hair
                                            </p>
                                        </div>
                                        <span class="price-box_price">$44</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Blow Dry & Curl</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists take your hair type
                                            </p>
                                        </div>
                                        <span class="price-box_price">$20</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Shampoo & Set</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Products from reputable brands
                                            </p>
                                        </div>
                                        <span class="price-box_price">$56</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                            <div class="price-box-wrapper style2">
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Hair Cutting & Trimming</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists approach every haircut
                                            </p>
                                        </div>
                                        <span class="price-box_price">$26</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Classic Hair Color</a>
                                            </h4>
                                            <p class="price-box_desc">Vibrant colors, finishes</p>
                                        </div>
                                        <span class="price-box_price">$15</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Keep Mustache in Good</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Nourish and protect your hair
                                            </p>
                                        </div>
                                        <span class="price-box_price">$34</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Blow Dry & Curl</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists take your hair type
                                            </p>
                                        </div>
                                        <span class="price-box_price">$60</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="{{ url('/price') }}">Shampoo & Set</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Products from reputable brands
                                            </p>
                                        </div>
                                        <span class="price-box_price">$46</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight">
                <div class="pricing-form">
                    <div class="title-area mb-40 text-center">
                        <h3 class="sec-title mb-0 text-white">Booking Your Seat</h3>
                        <img src="{{ asset('assets/img/theme-img/title_shape_2.svg') }}" alt="" />
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <i class="fa-light fa-user"></i>
                            <input type="text" placeholder="First Name" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fa-light fa-user"></i>
                            <input type="text" placeholder="Last Name" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fa-light fa-envelope"></i>
                            <input type="text" placeholder="Email" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <i class="fa-light fa-phone"></i>
                            <input type="text" placeholder="phone" class="form-control" />
                        </div>
                        <div class="form-group col-12">
                            <i class="fa-regular fa-tag"></i>
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="" disabled="disabled" selected="selected" hidden>Select Subject</option>
                                <option value="Engine Diagnostics">Spa & Massage</option>
                                <option value="Facial & Massage">Facial & Massage</option>
                                <option value="Engine Diagnostics">Head Massage</option>
                                <option value="Sports Massage">Sports Massage</option>
                                <option value="Stone Massage">Stone Massage</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date" />
                            <i class="fa-light fa-calendar-days"></i>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time" />
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="btn-group justify-content-center justify-content-lg-start">
                            <button class="th-btn style4 fw-btn">
                                Booking Now<i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump" data-top="0%" data-right="0%">
        <img src="{{ asset('assets/img/shape/flower_1_11.png') }}" alt="shape" />
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-sec overflow-hidden">
    <div class="container th-container">
        <div class="testi-area">
            <div class="row">
                <div class="col-12">
                    <div class="testi-box-slide th-carousel" id="testiSlide4" data-fade="true" data-slide-show="1">
                        <div>
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ asset('assets/img/testimonial/testi_3_1.jpg') }}" alt="Avater" />
                                    <div class="testi-quote_img">
                                        <img src="{{ asset('assets/img/shape/quote_4.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="testi-box_content wow fadeInUp">
                                    <div class="title-area mb-25">
                                        <span class="sub-title">Testimonials<img src="{{ asset('assets/img/theme-img/title_right.svg') }}" alt="" /></span>
                                        <h2 class="sec-title">Our Customer Feedback</h2>
                                    </div>
                                    <p class="testi-box_text">
                                        Whether it's a simple trim or a complete makeover, our stylists approach every haircut with meticulous attention to detail. We use professional tools and techniques to ensure clean lines and a precise cut that creates a polished and well-groomed look.
                                    </p>
                                    <h3 class="testi-box_name">Angelina Margret</h3>
                                    <span class="testi-box_desig">Customer</span>
                                    <div class="testi-quote">
                                        <img src="{{ asset('assets/img/shape/quote_3.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                    <img src="{{ asset('assets/img/shape/flower_1_8.png') }}" alt="shape" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ asset('assets/img/testimonial/testi_3_2.jpg') }}" alt="Avater" />
                                    <div class="testi-quote_img">
                                        <img src="{{ asset('assets/img/shape/quote_4.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="testi-box_content wow fadeInUp">
                                    <div class="title-area mb-25">
                                        <span class="sub-title">Testimonials<img src="{{ asset('assets/img/theme-img/title_right.svg') }}" alt="" /></span>
                                        <h2 class="sec-title">Our Customer Feedback</h2>
                                    </div>
                                    <p class="testi-box_text">
                                        Whether it's a simple trim or a complete makeover, our stylists approach every haircut with meticulous attention to detail. We use professional tools and techniques to ensure clean lines and a precise cut that creates a polished and well-groomed look.
                                    </p>
                                    <h3 class="testi-box_name">Senjuti das</h3>
                                    <span class="testi-box_desig">Customer</span>
                                    <div class="testi-quote">
                                        <img src="{{ asset('assets/img/shape/quote_3.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                    <img src="{{ asset('assets/img/shape/flower_1_8.png') }}" alt="shape" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ asset('assets/img/testimonial/testi_3_3.jpg') }}" alt="Avater" />
                                    <div class="testi-quote_img">
                                        <img src="{{ asset('assets/img/shape/quote_4.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="testi-box_content wow fadeInUp">
                                    <div class="title-area mb-25">
                                        <span class="sub-title">Testimonials<img src="{{ asset('assets/img/theme-img/title_right.svg') }}" alt="" /></span>
                                        <h2 class="sec-title">Our Customer Feedback</h2>
                                    </div>
                                    <p class="testi-box_text">
                                        Whether it's a simple trim or a complete makeover, our stylists approach every haircut with meticulous attention to detail. We use professional tools and techniques to ensure clean lines and a precise cut that creates a polished and well-groomed look.
                                    </p>
                                    <h3 class="testi-box_name">Jenifer Lopez</h3>
                                    <span class="testi-box_desig">Customer</span>
                                    <div class="testi-quote">
                                        <img src="{{ asset('assets/img/shape/quote_3.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                    <img src="{{ asset('assets/img/shape/flower_1_8.png') }}" alt="shape" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="{{ asset('assets/img/testimonial/testi_3_4.jpg') }}" alt="Avater" />
                                    <div class="testi-quote_img">
                                        <img src="{{ asset('assets/img/shape/quote_4.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="testi-box_content wow fadeInUp">
                                    <div class="title-area mb-25">
                                        <span class="sub-title">Testimonials<img src="{{ asset('assets/img/theme-img/title_right.svg') }}" alt="" /></span>
                                        <h2 class="sec-title">Our Customer Feedback</h2>
                                    </div>
                                    <p class="testi-box_text">
                                        Whether it's a simple trim or a complete makeover, our stylists approach every haircut with meticulous attention to detail. We use professional tools and techniques to ensure clean lines and a precise cut that creates a polished and well-groomed look.
                                    </p>
                                    <h3 class="testi-box_name">Dianne Russell</h3>
                                    <span class="testi-box_desig">Customer</span>
                                    <div class="testi-quote">
                                        <img src="{{ asset('assets/img/shape/quote_3.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                    <img src="{{ asset('assets/img/shape/flower_1_8.png') }}" alt="shape" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-box-tab wow fadeInUp" data-asnavfor=".testi-box-slide">
                        <button class="tab-btn active" type="button">
                            <img src="{{ asset('assets/img/testimonial/testi_3_1.jpg') }}" alt="tab-btn image" />
                        </button>
                        <button class="tab-btn" type="button">
                            <img src="{{ asset('assets/img/testimonial/testi_3_2.jpg') }}" alt="tab-btn image" />
                        </button>
                        <button class="tab-btn" type="button">
                            <img src="{{ asset('assets/img/testimonial/testi_3_3.jpg') }}" alt="tab-btn image" />
                        </button>
                        <button class="tab-btn" type="button">
                            <img src="{{ asset('assets/img/testimonial/testi_3_4.jpg') }}" alt="tab-btn image" />
                        </button>
                        <div class="icon-box">
                            <button data-slick-next="#testiSlide4" class="slick-arrow default">
                                <i class="far fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="space overflow-hidden" id="blog-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style2">Our Blog</span>
            <img src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}" alt="" />
            <h2 class="sec-title">Our Latest News & Blog</h2>
        </div>
        <div class="row slider-shadow th-carousel" id="blogSlide3" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="1" data-sm-slide-show="1" data-arrows="true">
            <div class="col-md-6 col-xl-4">
                <div class="blog-grid wow fadeInLeft">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_3_1.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-grid-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fas fa-user"></i>By Alex Michel </a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>22 May, 2024</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h3 class="box-title">
                            <a href="{{ url('/blog-details') }}">Life Is Beautiful When You Meet The Right Hairdresser</a>
                        </h3>
                        <a href="{{ url('/blog-details') }}" class="line-btn">Read More<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-grid wow fadeInRight">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_3_2.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-grid-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fas fa-user"></i>By Alex Michel </a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>24 Jun, 2024</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h3 class="box-title">
                            <a href="{{ url('/blog-details') }}">What Are The different Types Of Salon Ownership</a>
                        </h3>
                        <a href="{{ url('/blog-details') }}" class="line-btn">Read More<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="blog-grid wow fadeInLeft">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_3_3.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-grid-content">
                        <div class="blog-meta">
                            <a href="{{ url('/blog') }}"><i class="fas fa-user"></i>By Alex Michel </a>
                            <a href="{{ url('/blog') }}"><i class="fa-solid fa-calendar-days"></i>26 July, 2024</a>
                            <a href="{{ url('/blog-details') }}"><i class="fa-solid fa-tags"></i>Beauty Spa</a>
                        </div>
                        <h3 class="box-title">
                            <a href="{{ url('/blog-details') }}">beautiful woman has cutting hair hairdresser.</a>
                        </h3>
                        <a href="{{ url('/blog-details') }}" class="line-btn">Read More<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="10%" data-left="0%">
        <img src="{{ asset('assets/img/shape/leaves_12.png') }}" alt="shape" />
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-right="0%">
        <img src="{{ asset('assets/img/shape/leaves_7.png') }}" alt="shape" />
    </div>
</section>

@endsection