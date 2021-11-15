@extends('layouts.master')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Our Team</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="/">Home</a>
                </li>
                <li>Our Team</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->


    <!-- Team Section Start -->
    <div class="rs-team modify1 pt-120 pb-95 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                <div class="col-lg-4 col-md-6 sm-mb-50">
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="{{ Voyager::image($team->image) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">{{ $team->name }}</a></h4>
                            <span class="designation">{{ $team->jobtitle }}</span>
                            <ul class="team-social">
                                <li><a href="{{ $team->facebook }}" target="_blank"><i class="fa fa-facebook" ></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team Section End -->

@endsection
