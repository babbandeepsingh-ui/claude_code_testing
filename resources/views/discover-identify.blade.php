@extends('layout.app')

@section('content')
<main>
    <section class="banner-section discover-identify-banner">
        <div class="banner-section-inner">
            <div class="content-box">
                <h1 class="title">Discover & Identify</h1>
                <p>Highly relevant recommendations are built on deep consumer understanding. Fuel your campaign knowing your consumer's actions against every touchpoint across connected devices that serve ethical advertising.</p>
            </div>
        </div>
        <div class="banner-bottom">
            <a href="#section2" class="btn"><img src="{{asset('images/scroll_icon.svg')}}" alt="" class="img-fluid" loading="lazy"><span>Scroll Down</span></a>
        </div>
    </section>

    <section class="image-text-section image-text-section-alternative discover-identify-section2" id="section2">
        <div class="image-text-section-inner appnext-section">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/appnext-logo.svg')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">App Discovery Powered by <span>Technology at Scale</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appnext_icon_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">On-device discovery solutions for app discovery experience</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appnext_icon_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Personalized and contextual recommendations tapping into customers’ daily mobile experiences</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appnext_icon_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">New discovery opportunities with Organic Recommendation Program (ORP)</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appnext_icon_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Explore non-paid discovery channels and reach new users</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore Appnext</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/mac-image1.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-text-section-inner dmp-section">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/dmp.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">Actionable Consumer Intelligence to <span>Turbo-Charge Your Campaigns</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mdmp_ic_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Organize and enrich campaigns with your own data</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mdmp_ic_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Behavior and data-based decisioning</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mdmp_ic_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Structured data sets driving prediction</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mdmp_ic_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Power-packed recommendation algorithms</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore mDMP</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/mdmp_img.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.work-place')
    @include('inc.ad-campaigns')
    @include('inc.newsletter')
</main>
@endsection