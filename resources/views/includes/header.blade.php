<div class="th-menu-wrapper">
    <div class="th-menu-area">
        <div class="mobile-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/white-logo.png') }}" alt="Rasm" /></a>
            <div class="close-menu">
                <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            </div>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/courses') }}">Courses</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('/course-detail') }}">Straight to Volume Lash Extensions</a></li>
                        <li><a href="{{ url('/course-detail') }}">Brow Perfect</a></li>
                        <li><a href="{{ url('/course-detail') }}">Spray Tanning</a></li>
                        <li><a href="{{ url('/course-detail') }}">Standard Waxing</a></li>
                        <li><a href="{{ url('/course-detail') }}">Intimate Waxing</a></li>
                        <li><a href="{{ url('/course-detail') }}">Brow Lamination</a></li>
                        <li><a href="{{ url('/course-detail') }}">Lash Lifting</a></li>
                        <li><a href="{{ url('/course-detail') }}">Manicure & Pedicure</a></li>
                        <li><a href="{{ url('/course-detail') }}">Facials</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/about') }}">About us</a>
                </li>
                <li>
                    <a href="{{ url('/blogs') }}">Blog</a>
                </li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                
                
            </ul>
        </div>
    </div>
</div>

<div class="sidemenu-wrapper shopping-cart d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_1.jpg') }}" alt="Cart Image" />OPI Nail Polish</a>
                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>94</span>,</span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_2.jpg') }}" alt="Cart Image" />Sunscreen Lotion</a>
                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>89</span></span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_3.jpg') }}" alt="Cart Image" />Wholesale Liquid</a>
                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>75</span></span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_4.jpg') }}" alt="Cart Image" />Hair Dryers</a>
                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>72</span></span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_5.jpg') }}" alt="Cart Image" />Argan Hair oil</a>
                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>81</span></span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>43</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="{{ url('/cart') }}" class="th-btn wc-forward">View cart</a>
                    <a href="{{ url('/checkout') }}" class="th-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content bg-black2">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget footer-widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Rasm" /></a>
                </div>
                <p class="about-text">
                    Centric applications productize front end portals visualize front end is results and value added
                </p>
                <div class="working-time">
                    <span class="title">We Are Available:</span>
                    <p class="desc">Mon-Sat: 08.00 am to 5.00 pm</p>
                </div>
                <div class="th-social footer-social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                </div>
            </div>
        </div>
        <div class="widget footer-widget">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="{{ url('/blog-details') }}"><img src="{{ asset('assets/img/blog/recent-post-2-1.jpg') }}" alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="text-inherit" href="{{ url('/blog-details') }}">Local residents and a few celebrities, too</a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="{{ url('/blog') }}"><i class="fal fa-calendar-days"></i>19 June, 2024</a>
                        </div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="{{ url('/blog-details') }}"><img src="{{ asset('assets/img/blog/recent-post-2-2.jpg') }}" alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="text-inherit" href="{{ url('/blog-details') }}">Local residents and a few celebrities, too</a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="{{ url('/blog') }}"><i class="fal fa-calendar-days"></i>22 June, 2024</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget footer-widget">
            <h4 class="widget_title">Newsletter</h4>
            <div class="newsletter-widget">
                <p class="md-10">
                    Sign Up to get updates & news about us . Get Latest Deals from Walker's Inbox to our mail address.
                </p>
                <div class="footer-search-contact mt-25">
                    <form>
                        <input class="form-control" type="email" placeholder="Enter your email" />
                    </form>
                    <div class="footer-btn mt-10">
                        <button type="submit" class="th-btn style3 fw-btn">
                            Subscribe Now <i class="fa-regular fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?" />
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>

<header class="th-header header-layout3">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-info-wrap">
                        <div class="header-info">
                            <div class="header-info_icon">
                                <i class="fat fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Call us any time:</span>
                                <p class="header-info_link">
                                    <a href="tel:+256214203215">+256 214 203 215</a>
                                </p>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="header-info_icon">
                                <i class="fat fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Email us:</span>
                                <p class="header-info_link">
                                    <a href="mailto:info@rasm.com">info@rasm.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="header-info_icon">
                                <i class="fat fa-clock"></i>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Opening hours:</span>
                                <p class="header-info_link">Mon - Fri: 9:00am - 8:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="social-links header-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a  href="{{ url('/') }}"><img style="width:200px !important;" src="{{ asset('assets/img/logo.png') }}" alt="Rasm" /></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                 <li class="menu-item-has-children">
                                    <a href="{{ url('/courses') }}">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/course-detail') }}">Straight to Volume Lash Extensions</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Brow Perfect</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Spray Tanning</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Standard Waxing</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Intimate Waxing</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Brow Lamination</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Lash Lifting</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Manicure & Pedicure</a></li>
                                        <li><a href="{{ url('/course-detail') }}">Facials</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/about') }}">About us</a></li>
                                 <li >
                                    <a href="{{ url('/blogs') }}">Blogs</a>
                                </li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                               
                               
                            </ul>
                        </nav>
                        <button class="th-menu-toggle d-inline-block d-lg-none">
                            <i class="far fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." />
                                <button type="submit">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </button>
                            </form>
                            <a href="#" class="icon-btn sideMenuToggler2">
                                <i class="fa-light fa-cart-shopping"></i>
                                <span class="badge">5</span>
                            </a>
                            <a href="#" class="icon-btn sideMenuToggler">
                                <i class="fa-light fa-grid"></i>
                            </a>
                            <a href="{{ url('/appointment') }}" class="th-btn style3">
                                Appointment Now<i class="fa-regular fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>