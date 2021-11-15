<!-- Banner Section Start -->
<div class="rs-banner style3 rs-rain-animate modify1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"> {{ $data['slider']->title }}</h1>
                    <p class="desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        {{ $data['slider']->documentation }}
                    </p>
                    <ul class="banner-btn">

                        <li><a class="readon started  wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms" href="{{ url('/' . $page='contact') }}">Request Demo</a></li>
                        <li>
                            <div class="rs-videos">
                                <div class="animate-border white-color">
                                    <a class="popup-border popup-videos wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms" href="{{ $data['slider']->video }}">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="images-part d-none d-lg-block">
        <img alt="" class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms" src="{{ Voyager::image($data['slider']->image) }}">
    </div>
    <div class="line-inner style2">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

</div>

<!-- Banner Section End -->



