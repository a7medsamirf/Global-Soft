@extends('layouts.master')

@section('content')
    @include('sections.breadcrumbs')
            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-60">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With Expert Engineers.</h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Email:</span>
                                       <a href="#">info@global-soft.net</a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone:</span>
                                       <a href="tel:123222-8888">+201141998867</a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc"> 4 Mahmoud Anwar ST , Ard Algolf ,</div>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>
                                   <p>Contact us via messages and you will be answered as soon as possible

                                   </p>

                               </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <select class="form-control wide" id="exampleFormControlSelect1">
                                                    <option>Inquiry</option>
                                                    <option>Request A Demo</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <div class="btn-part">
                                                    <a class="readon learn-more post" type="submit" href="">submit now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-canvas pt-120 md-pt-80">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.1215851590326!2d31.338340187576367!3d30.079830669262904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e1a6c4e51b9%3A0xaad9b56129a04ddb!2zMzDCsDA0JzQ3LjMiTiAzMcKwMjAnMTkuMiJF!5e1!3m2!1sen!2seg!4v1575723041891!5m2!1sen!2seg"
                        width="100%" height="100" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>                   </div>
            </div>

@endsection
