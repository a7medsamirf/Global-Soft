@extends('layouts.master')

@section('content')

    @include('sections.slider')

    @include('sections.about')

    <!-- Services Section Start -->
    <div class="pt-relative rs-services style4 modify1 services3 gray-color pt-120 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">SOLUTIONS</span>
                <h2 class="title">
                    We Are Offering All Kinds of IT Solutions Services
                </h2>
            </div>
        </div>
        <div class="bg-section pb-120 md-pb-80">
            <div class="container">
                <div class="row gray-color pb-35 pl-25 pr-25 md-pl-0 md-pr-0">
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/icons/5.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="software-development.html">
                                        Our mission
                                    </a>
                                </h2>
                                <p class="desc">
                                    To provide continued customers satisfaction,
                                    by providing out the best in technology with top quality
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/style1/1.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="web-development.html">Our vision
                                    </a></h2>
                                <p class="desc">
                                    To become a prime performer,
                                    in providing quality medical Software solutions in the competitive field
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/icons/3.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="analytic-solutions.html">Our values
                                    </a></h2>
                                <p class="desc">
                                    At Global-Soft, the values we stand by have made us who we are today.
                                    They've shaped our culture, our work ethics, and our decisions;


                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="shape-part">
                <div class="left-side">
                    <img src="assets/images/services/shape-2.png" alt="">
                </div>
                <div class="right-side">
                    <img src="assets/images/services/shape-3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->


    

    @include('sections.clients')

    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog pt-108 pb-120 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">Blogs</span>
                <h2 class="title testi-title">
                    Read Our Latest Tips & Tricks
                </h2>
                <div class="heading-line">

                </div>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="assets/images/blog/main-home/1.jpg" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-single.html">Software Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best Virtual Court System</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="assets/images/blog/main-home/2.jpg" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-single.html"> Web Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="assets/images/blog/main-home/3.jpg" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-single.html">It Services</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More Openings Fewer</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="assets/images/blog/main-home/4.jpg" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-single.html">Artifical Intelligence</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes Them Effective</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="assets/images/blog/main-home/5.jpg" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-single.html">Digital Technology</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei Restriction, Balk at Cost</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="assets/images/blog/main-home/6.jpg" alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-single.html">It Services</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Pricing section start -->
    <div class="rs-pricing white-bg pt-255 pb-150 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">Pricing</span>
                <h2 class="title">
                    Our Pricing Plan
                </h2>
                <div class="heading-line">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 md-mb-50">
                    <div class="pricing-table new-style">
                        <div class="pricing-badge">
                            Silver
                        </div>
                        <div class="pricing-icon">
                            <img src="assets/images/pricing/main-home/icons/1.png" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">29.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="single-team.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-50">
                    <div class="pricing-table primary-bg">
                        <div class="pricing-badge white-color-bg">
                            Gold
                        </div>
                        <div class="pricing-icon">
                            <img src="assets/images/pricing/main-home/icons/2.png" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">39.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="single-team.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-table new-style">
                        <div class="pricing-badge">
                            Platinum
                        </div>
                        <div class="pricing-icon">
                            <img src="assets/images/pricing/main-home/icons/3.png" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">79.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="single-team.html">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing section end -->

    <!-- Cta section start -->
    <div class="rs-cta style1 bg7 pt-70 pb-70">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                        <div class="title-wrap">
                            <h2 class="epx-title">HealthCare Solution Platform
                                Powering the Most Successful Hospitals
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 text-righ">
                        <div class="button-wrapt md-center">
                            <a class="readon learn-more" href="contact.html">Get a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->
@endsection
