<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-20">
                        <a href="/"> <img src="{{Voyager::image(setting('site.logo'))}}" alt=""> </a>
                    </div>
                    <div class="textwidget pb-30"><p> {{setting('sidebar.about')}}</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="{{setting('social-media.facebook')}}" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="{{setting('social-media.twitter')}}" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="{{setting('social-media.linkedin')}}" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        <li>
                            <a href="{{setting('social-media.instagram')}}" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{setting('contact-info.location')}}</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:+201141998867">{{setting('contact-info.Phone')}}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:info@global-soft.net">{{setting('contact-info.email')}}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                {{setting('contact-info.WorkTime')}}
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h3 class="widget-title">Newsletter</h3>
                    <p class="widget-desc">You will receive all our news first-hand on your inbox </p>
                    <p>
                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                        <em class="paper-plane"><input type="submit" value="Sign up"></em>
                        <i class="flaticon-send"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 text-right md-mb-10 order-last">
                    <ul class="copy-right-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; 2021 All Rights Reserved. Developed By <a href="https://www.global-soft.net/">Global Soft</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
