@extends('layout.app')

@section('content')
<main>

    <section class="affle-life-section innerpage-padding">
        <div class="affle-life-section-inner">
            <div class="content-box">
                <h1 class="title">Life at Affle</h1>
                <p>At Affle, we are committed to building a culture of high trust and high performance, which has won the certification of Great Place to Work as well as "Commitment to Being a Great Place to Work" by the Great Place to Work Institute. Our passion for excellence in everything we do is seen in our recognition of “Enabling Technology Company of the Year 2020” at the MMA Smarties, as well as top honors at industry awards including IDMA, Mobexx, The Maddies, IDA etc, which inspires us to consistently level up our own industry-benchmark.</p>
            </div>
            <div class="image-box">
                <div class="image-box-inner">
                    <img src="{{asset('images/career-banner.jpg')}}" alt="" class="img-fluid" loading="lazy">
                    <div class="play-btn popup-box">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="170.667" height="170.667" viewBox="0 0 128 128"><path d="M17.5 1.9c-4.2 2.5-6.5 5.3-8.1 9.8-1.7 4.8-2 97.5-.4 103.5 1.3 4.4 5.2 9.3 9.1 11.3 4.1 2.2 12.7 1.9 16.7-.5 2.4-1.5 3.2-2.7 3.2-4.9 0-4.3-2-5.4-8.8-4.6-5.1.6-6 .4-7.7-1.5-1.9-2.1-2-4.1-2.3-50.4-.3-47.7-.2-48.3 1.8-50.9 1.4-1.8 3.1-2.7 4.9-2.7 4.1 0 81 47.5 82.2 50.8 1.9 4.9-.4 6.8-29 24.3-15.1 9.2-28.3 17.7-29.4 18.7-2.5 2.5-1.6 6.8 1.7 8.3 3 1.4 2.4 1.7 35.8-18.8 30.4-18.7 32.2-20.4 32.2-29.7 0-6.7-2.7-12-7.8-15.5-5.7-3.9-73.4-45.5-77.3-47.5-4.4-2.2-13-2.1-16.8.3z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="popup-content">
            <div class="close-popup">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="170.667" height="170.667" viewBox="0 0 128 128"><path d="M2.9 2.9c-5.7 5.7-5.6 5.8 23.3 34.8L52.4 64 26.2 90.3C2.7 113.9 0 116.9 0 119.8c0 4.4 3.8 8.2 8.2 8.2 2.9 0 5.9-2.7 29.5-26.2L64 75.6l26.3 26.2c23.6 23.5 26.6 26.2 29.5 26.2 4.4 0 8.2-3.8 8.2-8.2 0-2.9-2.7-5.9-26.2-29.5L75.6 64l26.2-26.3c28.9-29 29-29.1 23.3-34.8-5.7-5.7-5.8-5.6-34.8 23.3L64 52.4 37.7 26.2C8.7-2.7 8.6-2.8 2.9 2.9z"/></svg>
            </div>
            <div class="popup-content-inner">
                <iframe width="950" height="534" src="https://www.youtube.com/embed/bXBi4bsz6Pg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="culture-section">
        <div class="culture-section-inner">
            <div class="title-section">
                <h2 class="title">Our culture</h2>
                <p>Affle prides itself in creating an environment that bridges the gap between business and people. We are committed to continiously build upon our culture of open communication, trust and putting our people first. </p>
            </div>
            <div class="box-section">
                <div class="box">
                    <div class="box-inner">
                        <img src="{{asset('images/people_first.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        <h3 class="image-name">People-First</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="box-inner">
                        <img src="{{asset('images/open_image.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        <h3 class="image-name">Open</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="box-inner">
                        <img src="{{asset('images/invigorating.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        <h3 class="image-name">Invigorating</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="join-team-section">
        <div class="join-team-section-inner">
            <div class="box box1">
                <div class="box-inner">
                    <h3 class="title">Open Positions</h3>
                    <p>Have what it takes to be an Affler? Check out our open positions! </p>
                    <a href="https://affle.darwinbox.in/ms/candidate/careers" class="btn btn--primary">Check Our Current Openings</a>
                </div>
            </div>
            <div class="box box2">
                <div class="box-inner">
                    <img src="{{asset('images/opening-positions.jpg')}}" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>
@endsection