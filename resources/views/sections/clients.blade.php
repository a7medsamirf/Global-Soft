


<!-- Project Section Start -->
<div class="rs-project bg5 style1 pt-110 md-pt-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45 md-mb-30">
            <span class="sub-text white-color">Our clients</span>
            <h2 class="title white-color">
                We are so proud to serve our customer

            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
            @foreach($data['clients'] as $client)
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img src="{{ Voyager::image($client->image) }}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="case-studies-single.html">{{ $client->hospital_name }}</a></h3>
                    <span class="category"><a href="case-studies-single.html">Operating date : {{ $client->operating }}</a></span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project Section End -->

