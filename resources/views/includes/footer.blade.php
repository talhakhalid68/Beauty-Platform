<footer class="footer-wrapper footer-layout3" data-bg-src="{{ asset('assets/img/bg/footer_bg_3.jpg') }}">
    <div class="widget-area">
        <div class="container th-container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3 col-xxl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/white-logo.png') }}" alt="Rasm" /></a>
                            </div>
                            <p class="about-text">
                                Centric applications productize front end portals visualize front end.
                            </p>
                            <div class="th-widget-about">
                                <p class="footer-info">
                                    <i class="fa-sharp fa-solid fa-phone"></i>
                                    <a class="text-inherit" href="tel:+256214203215">+256 214 203 215</a>
                                </p>
                                <p class="footer-info">
                                    <i class="fas fa-envelope"></i>
                                    <a class="text-inherit" href="mailto:info@rasm.com">info@rasm.com</a>
                                </p>
                            </div>
                            <div class="th-social footer-social mt-40">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick link</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/courses') }}">Our Courses</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">our courses</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ url('/course-detail') }}">Brow Perfect</a></li>
                                <li><a href="{{ url('/course-detail') }}">Spray Tanning</a></li>
                                <li><a href="{{ url('/course-detail') }}">Standard Waxing</a></li>
                                <li><a href="{{ url('/course-detail') }}">Intimate Waxing</a></li>
                                <li><a href="{{ url('/course-detail') }}">Brow Lamination</a></li>
                                <li><a href="{{ url('/course-detail') }}">Lash Lifting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-xxl-2">
                    <div class="widget footer-widget footer-widget">
                        <h4 class="widget_title">Opening Hours</h4>
                        <div class="th-widget-schedule">
                            <p class="footer-info">Monday: <span>9am - 8pm</span></p>
                            <p class="footer-info">Tuesday: <span>9am - 8pm</span></p>
                            <p class="footer-info">Wednesday: <span>9am - 8pm</span></p>
                            <p class="footer-info">Thursday: <span>9am - 8pm</span></p>
                            <p class="footer-info">Fri - Sat: <span>9am - 6pm</span></p>
                            <p class="footer-info">Sunday: <span>Closed</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-xxl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Photos Gallery</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/widget/gallery_2_1.jpg') }}" alt="Gallery Image" />
                                <a href="{{ asset('assets/img/widget/gallery_2_1.jpg') }}" class="gallery-btn popup-image">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/widget/gallery_2_2.jpg') }}" alt="Gallery Image" />
                                <a href="{{ asset('assets/img/widget/gallery_2_2.jpg') }}" class="gallery-btn popup-image">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/widget/gallery_2_3.jpg') }}" alt="Gallery Image" />
                                <a href="{{ asset('assets/img/widget/gallery_2_3.jpg') }}" class="gallery-btn popup-image">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/widget/gallery_2_4.jpg') }}" alt="Gallery Image" />
                                <a href="{{ asset('assets/img/widget/gallery_2_4.jpg') }}" class="gallery-btn popup-image">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/widget/gallery_2_5.jpg') }}" alt="Gallery Image" />
                                <a href="{{ asset('assets/img/widget/gallery_2_5.jpg') }}" class="gallery-btn popup-image">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/widget/gallery_2_6.jpg') }}" alt="Gallery Image" />
                                <a href="{{ asset('assets/img/widget/gallery_2_6.jpg') }}" class="gallery-btn popup-image">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">
                        <i class="fal fa-copyright"></i> {{ date('Y') }}
                        <a class="text-theme" href="#">Rasm. </a>All Rights Reserved By
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ url('/contact') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('/contact') }}">Terms &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
</footer>