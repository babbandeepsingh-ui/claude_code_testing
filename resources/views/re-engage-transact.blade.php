@extends('layout.app')

@section('content')
<main>
    <section class="banner-section discover-identify-banner re-engage-transact-banner">
        <div class="banner-section-inner">
            <div class="content-box">
                <h1 class="title">Re-Engage & Transact</h1>
                <p>Build meaningful relationships with your consumers as you engage and <br> re-engage with them on the channel, time and personalized content of their preference. Use the power of programmatic ads, social media, owned media, WhatsApp and conversational channels to reach your consumers via integrated omnichannel journeys.</p>
            </div>
        </div>
        <div class="banner-bottom">
            <a href="#section2" class="btn"><img src="{{asset('images/scroll_icon.svg')}}" alt="" class="img-fluid" loading="lazy"><span>Scroll Down</span></a>
        </div>
    </section>

    <section class="image-text-section image-text-section-alternative re-engage-transact-section2" id="section2">
        <div class="image-text-section-inner revx-section1">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/revx-logo.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">Drive incremental conversions and revenue from your existing and first-time users</h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ret_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Retain and accelerate revenue via programmatic advertising </span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ret_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Creative sophistication and expertise to drive users to your app time and time again</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ret_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Drive awareness and build brand affinity through data-powered targeting and optimizations</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ret_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Transparent performance reporting and consistent optimizations.</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore RevX</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/revxx.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-text-section-inner revx-section2">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/vizure-logo.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">Boost Your Customer's <span>Lifetime Value</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/vizury_ic_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Trun one-time visitors into loyal customers and deliver inetrgated customer journeys</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/vizury_ic_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">One platform for all digital and physical customer engagement</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/vizury_ic_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Conversational AI module to turn any messaging app into a commerce channel.</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/vizury_ic_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text"> Omnichannel journey builder to deliver seamless online to offline shopping experiences.</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore Vizury</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/vizury_img.png')}}" alt="" class="img-fluid" loading="lazy">
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