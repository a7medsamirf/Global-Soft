@extends('layouts.master')



@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Our Customers</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="/">Home</a>
                </li>
                <li>Our Customers</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Project Section Start -->
    <div class="rs-project style3 modify1 case-style3">
        <div class="container">
            <div class="row">
                @foreach($clients as $client)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="#"><img src="{{ Voyager::image($client->image) }}" alt="images"></a>
                        </div>
                        <div class="project-content">
                            <div class="portfolio-inner">
                                <h3 class="title"><a href="#">{{ $client->hospital_name }}</a></h3>
                                <span class="category"> <a href="#">Operating date : {{ $client->operating }}</a></span>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Project Section End -->


@endsection
