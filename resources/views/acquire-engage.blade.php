@extends('layout.app')

@section('content')
<main>
    <section class="banner-section discover-identify-banner acquire-engage-banner">
        <div class="banner-section-inner">
            <div class="content-box">
                <h1 class="title">Acquire & Engage</h1>
                <p>Affle's user acquisition and engagement solutions help apps, businesses and brands to discover their most valuable customers. Advertise with greater transparency, control, and efficiency with our platforms that are driven by data science.</p>
            </div>
        </div>
        <div class="banner-bottom">
            <a href="#section2" class="btn"><img src="{{asset('images/scroll_icon.svg')}}" alt="" class="img-fluid" loading="lazy"><span>Scroll Down</span></a>
        </div>
    </section>

    <section class="image-text-section image-text-section-alternative acquire-engage-section2" id="section2">
        <div class="image-text-section-inner appnext-section">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/appnext-logo.svg')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">End-to-End Solutions Blending Into <span>the Users’ Mobile Experience</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appmext_icon_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Engage with consumers on-device and in-app through OEM and operator partnerships</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appmext_icon_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Personalized app recommendations to acquire and re-engage users.</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appmext_icon_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">App recommendations on Samsung, Xiaomi, Oppo and 60,000 Apps</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/appmext_icon_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Self-serve platform for 360° view over campaign targeting, creatives, goals and performance</span>
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
        <div class="image-text-section-inner jampp-section">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/jampp-logo.svg')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">The Programmatic Platform to Grow Your App Business</h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/jam-_icon_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Full-funnel user acquisition to forecast LTV and in-app event conversions</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/jam-_icon_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Drive incremental growth with global scale</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/jam-_icon_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">High-impact creatives with proprietary Dynamic Creative Optimization</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/jam-_icon_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Predictive Machine Learning that optimizes both behavioral and contextual data signals</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore Jamp</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/mac-image2.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-text-section-inner mass-section">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/mass-logo.svg')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">Acquire Users at Scale Through a <span>Unified Audience</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mass_ic_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Single unified access of channels across directly integrated publishers, programmatic platforms and app recommendations</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mass_ic_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Unify your audiences on a single dashboard for greater transparency</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mass_ic_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Access consolidated supply sources to drive scale and get actionable insights across channels</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mass_ic_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Diversified technology, creative and KPI-based optimization, and precision targeting</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore Maas</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/maas_img.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-text-section-inner mediasmart-section">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/mediasmart-logo.svg')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">The Programmatic Platform to Grow <span>Your App Business</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mediasmart_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Integrated mobile-first advertising platform to efficiently reach the target audiences</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mediasmart_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Transparency, control and advanced insights to generate real value</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mediasmart_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">High-impact measurable CTV advertising with Household Sync technology</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/mediasmart_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Omnichannel audience management and proximity marketing with incremental measurement</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn--primary">Explore Mediasmart</a>
                    </div>
                </div>
                <div class="box box2">
                    <div class="box-inner">
                        <img src="{{asset('images/mediasmart_ic.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-text-section-inner revx-section1">
            <div class="content-box">
                <div class="box box1">
                    <div class="box-inner">
                        <div class="head-icon"><img src="{{asset('images/revx-logo.png')}}" alt="" class="img-fluid" loading="lazy"></div>
                        <h4 class="title">Acquire Users at Scale Through a <span>Unified Audience</span></h4>
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ic_one.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">100% programmatic and fraud-less environment</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ic_three.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Find the right users where they are based on contextual data</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ic_two.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Advanced DS models to target LAT inventory efficiently to drive maximum performance</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/revx_ic_four.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Creative sophistication in ad campaigns to bring those users to you.</span>
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
    </section>

    @include('inc.work-place')
    @include('inc.ad-campaigns')
    @include('inc.newsletter')
</main>
@endsection