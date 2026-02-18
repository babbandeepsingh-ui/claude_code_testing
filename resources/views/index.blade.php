@extends('layout.app')

@section('content')
<main>
    <section class="banner-section">
        <div class="banner-section-inner">
            <div class="content-box">
                <h1 class="title" data-aos="zoom-in" data-aos-duration="1200"><span>Creating Impactful</span> <span>Consumer Journeys on</span> <span>Connected Devices</span></h1>
                <p data-aos="zoom-in" data-aos-duration="1200">Build real connections throughtout the consumer's journeys to <span>drive acquisition, engagement and conversions.</span></p>
                <a href="#section2" class="btn btn--primary">Discover More <img src="{{asset('images/arrow.svg')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </section>

    <section class="ad-solution-section" id="section2">
        <div class="ad-solution-section-inner">
            <div class="title-section text-center" data-aos="fade-up" data-aos-duration="500">
                <h2 class="title"><span>Transform Ads Into Recommendations With </span><span>Consumer Insights-Led Solutions</span></h2>
                <p data-aos="fade-up" data-aos-duration="700">Discover and identify your most valuable users, and then continue on to acquire and re-engage them through Affle's platforms and offerings. Designed to help marketers connect with consumers, our deep-learning, AI-powered algorithms transform ads into powerful consumer recommendations to deliver enhanced ROI and engagement.</p>
            </div>
            <div class="box-section">
                <div class="box box-1" data-aos="fade-up" data-aos-duration="1200">
                    <div class="box-inner">
                        <div class="image">
                            <img src="{{asset('images/discover-identity-image.jpg')}}" alt="Discover & Identify" loading="lazy" class="img-fluid">
                        </div>
                        <h3 class="title">Discover & Identify</h3>
                        <a href="{{url('discover-identify')}}" class="btn btn--primary">Read More</a>
                    </div>
                </div>
                <div class="box box-2" data-aos="fade-up" data-aos-duration="1200">
                    <div class="box-inner">
                        <div class="image">
                            <img src="{{asset('images/acquire-engage-image.jpg')}}" alt="Discover & Identify" loading="lazy" class="img-fluid">
                        </div>
                        <h3 class="title">Acquire & Engage</h3>
                        <a href="{{url('acquire-engage')}}" class="btn btn--primary">Read More</a>
                    </div>
                </div>
                <div class="box box-3"data-aos="fade-up" data-aos-duration="1200">
                    <div class="box-inner">
                        <div class="image">
                            <img src="{{asset('images/re-engage-transact-image.jpg')}}" alt="Discover & Identify" loading="lazy" class="img-fluid">
                        </div>
                        <h3 class="title">Re-Engage & Transact</h3>
                        <a href="{{url('re-engage-transact')}}" class="btn btn--primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="growth-section">
        <div class="growth-section-inner">
            <div class="title-section col-xl-8">
                <h3 class="title" data-aos="fade-up" data-aos-duration="1200">Create Greater Impact Through <span>Vernacular & Verticalization</span></h3>
                <p data-aos="fade-up" data-aos-duration="1200">Our comprehensive ability to drive real growth for your marketing needs is anchored in the 2Vs - vernacular and verticalization. We create unique and integrated consumer journeys for marketers to help them get more out of their advertising. Our solutions aim to reach >10Bn connected devices including Connected TV, personal wearables, and smart household appliances.</p>
            </div>
            <div class="content-box">
                <div class="row content-box-inner">
                    <div class="col-md-6 content-box-image" data-aos="fade-up" data-aos-duration="1200">
                        <!-- <img src="{{asset('images/vernacular-image.png')}}" alt="Vernacular" class="img-fluid" loading="lazy"> -->
                        <video autoplay="" data-autoplay="" muted="" preload="auto" loop="" playsinline id="dmp-video">
                            <source src="{{asset('videos/vernacular.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-md-6 content-box-details" data-aos="fade-up" data-aos-duration="1200">
                        <div class="content-box-details-inner">
                            <h3 class="title">Vernacular</h3>
                            <p>Create hyper-personalised actionable advertising and deliver integrated on-device experiences to consumers in their own languages.</p>
                        </div>
                    </div>
                </div>
                <div class="row content-box-inner" data-aos="fade-up" data-aos-duration="1800">
                    <div class="col-md-6 content-box-image">
                        <!-- <img src="{{asset('images/verticalization-image.png')}}" alt="Vernacular" class="img-fluid" loading="lazy"> -->
                        <video autoplay="" data-autoplay="" muted="" preload="auto" loop="" playsinline id="dmp-video">
                            <source src="{{asset('videos/verticalization.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-md-6 content-box-details">
                        <div class="content-box-details-inner">
                            <h3 class="title">Verticalization</h3>
                            <p>Achieve higher conversions with tailor-made advertising to drive exceptional performance through deeper vertical-specific insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="stats-section-inner">
            <div class="title-section text-center">
                <h3 class="title" data-aos="fade-up" data-aos-duration="1200">High-Impact Technology at Scale</h3>
                <p data-aos="fade-up" data-aos-duration="1200">Affle's first patent on "Consumer Acceptable Advertising" was filed in 2005 in the U.S. Leading the path of innovation, Affle's technology and its platforms continue to pass the stringent of industry accreditations and uphold the highest standards in ethical advertising.</p>
            </div>
            <div class="row stats-box-section">
                <div class="stats-box col-lg-4" data-aos="fade-up" data-aos-duration="1200">
                    <div class="stats-box-inner">
                        <img src="{{asset('images/icon_1.png')}}" alt="" class="img-fluid" loading="lazy">
                        <h3 class="title counter">18</h3>
                        <p class="text">Patents Filed</p>
                        <p class="date">Period Oct 01, 2019 to Sept 30 2020</p>
                    </div>
                </div>
                <div class="stats-box col-lg-4" data-aos="fade-up" data-aos-duration="1200">
                    <div class="stats-box-inner">
                        <img src="{{asset('images/icon_2.png')}}" alt="" class="img-fluid" loading="lazy">
                        <h3 class="title counter">936,982,257</h3>
                        <p class="text">Connected Devices Reached</p>
                        <p class="date">Period Oct 01, 2019 to Sept 30 2020</p>
                    </div>
                </div>
                <div class="stats-box col-lg-4" data-aos="fade-up" data-aos-duration="1200">
                    <div class="stats-box-inner">
                        <img src="{{asset('images/icon_3.png')}}" alt="" class="img-fluid" loading="lazy">
                        <h3 class="title counter">979,436,652,477</h3>
                        <p class="text">Data Points Processed</p>
                        <p class="date">Period Oct 01, 2019 to Sept 30 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.our-platform')
    @include('inc.work-place')
    @include('inc.ad-campaigns')
    @include('inc.newsletter')
</main>

@endsection