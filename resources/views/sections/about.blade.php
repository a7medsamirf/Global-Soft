<!-- About Section Start -->
<div class="rs-about bg4 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50">
                <div class="images wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                    <img alt="" class="" src="{{ Voyager::image($data['about']->image) }}">

                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style2 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">About Us</div>
                        <h2 class="title pb-38 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            {{ $data['about']->title }}
                        </h2>

                        <p class="margin-0 pb-15 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            {{ $data['about']->desc }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
