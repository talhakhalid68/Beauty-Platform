@extends('layouts.app')

@section('seo')
    <title>Rasm - Nail Salon & Spa Beauty Care - Course Details</title>
    <meta name="description" content="Discover our professional beauty courses at Rasm Nail Salon & Spa. Learn from industry experts and enhance your skills in nail art, massage therapy, and beauty treatments." />
    <meta name="keywords" content="beauty courses, nail art training, massage therapy certification, spa education, beauty school, professional training" />
@endsection

@section('content')
<!-- Breadcrumb Section -->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Course Details</h2>
            <div class="breadcumb-menu-wrapper">
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Course Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Course Details Section -->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single course-single">
                    <div class="page-img">
                        <img src="{{ asset('assets/img/service/service_details.jpg') }}" alt="Course Image" />
                    </div>
                    <div class="page-content">
                        <h2 class="">Body Massage Course</h2>
                        <p>
                            Whether you're seeking to learn rejuvenating facial techniques, soothing massage body treatments, our experienced instructors are dedicated to providing you with exceptional training. We utilize only the finest products and techniques to ensure optimal results and a truly educational experience.
                        </p>
                        <p class="mb-30">
                            Body massage course is a therapeutic and educational program that involves learning techniques to manipulate the body's muscles, tissues, and joints to promote overall well-being and alleviate physical and mental stress. This course has been designed for centuries and is known for its numerous health benefits. Here are some details about our body massage course
                        </p>
                        <h3 class="mb-20">Benefits of Our Body Massage Course</h3>
                        <p class="mb-4">
                            Our body massage course offers a wide range of health benefits. You will learn to reduce muscle tension, improve circulation, relieve pain and soreness, enhance flexibility, and promote relaxation. Completing this course can also help you boost the immune system of your clients, improve their sleep quality, and reduce anxiety and depression.
                        </p>
                        <div class="checklist style4">
                            <ul>
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>Best For Human Health</li>
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>Always Be Strong & Motivate</li>
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>Hair loss prevention</li>
                            </ul>
                        </div>
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="page-img">
                                    <img src="{{ asset('assets/img/service/service_inner_1.jpg') }}" alt="Course Image" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="page-img">
                                    <img src="{{ asset('assets/img/service/service_inner_2.jpg') }}" alt="Course Image" />
                                </div>
                            </div>
                        </div>
                        <p>
                            To ensure a safe and effective learning experience, it is crucial to learn from trained and licensed massage therapists. These professionals have a deep understanding of anatomy and can teach you to target specific areas of tension or pain.
                        </p>
                        <h3 class="mb-20">Massage Techniques You'll Learn</h3>
                        <p class="mb-0">
                            During our body massage course, you will learn a combination of techniques, such as effleurage (long strokes), petrissage (kneading), friction, tapping, and gentle stretching. Each technique serves a different purpose, working to release tension and improve blood flow.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword" />
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Course Categories</h3>
                        <ul>
                            <li>
                                <a href="{{ url('/courses') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Body Treatments</a>
                                <span>(8)</span>
                            </li>
                            <li>
                                <a href="{{ url('/courses') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" /> Facials</a>
                                <span>(6)</span>
                            </li>
                            <li>
                                <a href="{{ url('/courses') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" />Massages</a>
                                <span>(5)</span>
                            </li>
                            <li>
                                <a href="{{ url('/courses') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" />Nail Art</a>
                                <span>(2)</span>
                            </li>
                            <li>
                                <a href="{{ url('/courses') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" />Waxing</a>
                                <span>(7)</span>
                            </li>
                            <li>
                                <a href="{{ url('/courses') }}"><img src="{{ asset('assets/img/theme-img/flower.svg') }}" alt="" />Hair care</a>
                                <span>(9)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Course Enrollment</h3>
                        <div class="appointment-form wow fadeInUp">
                            <div class="row">
                                <div class="form-group col-12">
                                    <i class="fa-light fa-user"></i>
                                    <input type="text" placeholder="First Name" class="form-control" />
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-light fa-envelope"></i>
                                    <input type="text" placeholder="Email" class="form-control" />
                                </div>
                                <div class="form-group col-12">
                                    <i class="fa-regular fa-tag"></i>
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Select Course</option>
                                        <option value="Spa & Massage Course">Spa & Massage Course</option>
                                        <option value="Facial & Massage Course">Facial & Massage Course</option>
                                        <option value="Head Massage Course">Head Massage Course</option>
                                        <option value="Sports Massage Course">Sports Massage Course</option>
                                        <option value="Stone Massage Course">Stone Massage Course</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write message...."></textarea>
                                    <i class="fal fa-comment"></i>
                                </div>
                                <div class="btn-group justify-content-center justify-content-lg-start">
                                    <button class="th-btn fw-btn">
                                        Enroll in Course
                                        <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Course Tags</h3>
                        <div class="tagcloud">
                            <a href="{{ url('/courses') }}">Beauty</a>
                            <a href="{{ url('/courses') }}">Training</a>
                            <a href="{{ url('/courses') }}">Certification</a>
                            <a href="{{ url('/courses') }}">Professional</a>
                            <a href="{{ url('/courses') }}">Skills</a>
                            <a href="{{ url('/courses') }}">Career</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection