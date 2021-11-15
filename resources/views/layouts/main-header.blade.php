<!--Full width header Start-->
<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header style3 modify2 header-transparent">
        <!-- Topbar Area Start -->
        <div class="topbar-area style2 modify1">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-8">
                        <div class="topbar-contact">
                            <ul>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:info@global-soft.net">{{setting('contact-info.email')}}</a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <a href="tel:++201141998867"> {{setting('contact-info.Phone')}}</a>
                                </li>
                                <li>
                                    <i class="flaticon-location"></i>
                                    {{setting('contact-info.location')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li class="opening"> <em><i class="flaticon-clock"></i> {{setting('contact-info.WorkTime')}}</em> </li>
                                <li><a href="{{setting('social-media.facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{setting('social-media.twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{setting('social-media.linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{setting('social-media.instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-part">
                            <a href="index.html">
                                <img class="normal-logo" src="{{Voyager::image(setting('site.white_logo'))}}" alt="logo">
                                <img class="sticky-logo" src="{{Voyager::image(setting('site.logo'))}}" alt="logo">
                            </a>
                        </div>
                        <div class="mobile-menu">
                            <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu pr-50 lg-pr-50 md-pr-0">
{{--
                                    {{ menu('Home Menu')}}
--}}
                                    <ul class="nav-menu">
                                        <li class="current-menu-item">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Company Introduction</a> </li>
                                                <li><a href="#"> CEO Message</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">Products</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/' . $page='client') }}">Customers</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/' . $page='team') }}">Our Team</a>
                                        </li>



                                        <li class="menu-item-has-children">
                                            <a href="blog.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a> </li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('/' . $page='contact') }}">Contact Us</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                            <div class="expand-btn-inner search-icon hidden-md">
                                <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="nav-expander" class="humburger nav-expander" href="#">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle hidden-md">
        <div class="close-btn">
            <div class="nav-link">
                <a id="nav-close" class="humburger nav-expander" href="#">
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                    <span class="dot4"></span>
                    <span class="dot5"></span>
                    <span class="dot6"></span>
                    <span class="dot7"></span>
                    <span class="dot8"></span>
                    <span class="dot9"></span>
                </a>
            </div>
        </div>
        <div class="canvas-logo">
            <a href=""><img src="{{Voyager::image(setting('sidebar.sdebar_logo'))}}" alt="logo"></a>
        </div>
        <div class="offcanvas-text">
            <p>
                {{setting('sidebar.about')}}
            </p>
        </div>
        <div class="canvas-contact">
            <div class="address-area">
                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-location"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Address</h4>
                        <em> {{setting('sidebar.address')}}</em>
                    </div>
                </div>
                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-email"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Email</h4>
                        <em><a href="mailto:info@global-soft.net">{{setting('sidebar.email')}}</a></em>
                    </div>
                </div>
                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Phone</h4>
                        <em>{{setting('sidebar.phone')}}</em>
                    </div>
                </div>
            </div>
            <ul class="social">
                <li><a href="{{setting('social-media.facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{setting('social-media.twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{setting('social-media.linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{setting('social-media.instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</div>




<!--
<nav class="mobile_bottom">
    <a class="nav-item" href="/">
        <i data-feather="home"></i><span>Home</span>
    </a>

    <a class="nav-item" href="#">
        <i data-feather="activity"></i><span>Activity</span>
    </a>

    <a class="nav-item" href="#">
        <i data-feather="message-square"></i><span>Messages</span>
    </a>

    <a class="nav-item" href="#">
        <i data-feather="settings"></i><span>Settings</span>
    </a>

</nav>
-->
