@extends('layout.app')

@section('content')
<main>
    <div class="investor-menu">
        <div class="link">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.779" height="13.6" viewBox="0 0 19.779 13.6"><defs><style>.a{fill:#ffffff;}</style></defs><g transform="translate(0 123)"><g transform="translate(0 64)"><g transform="translate(0 -187)"><rect class="a" width="19.779" height="1.6"/></g><g transform="translate(0 -181)"><rect class="a" width="19.779" height="1.6"/></g><g transform="translate(0 -175)"><rect class="a" width="19.779" height="1.6"/></g></g></g></svg>
            <span>Investor</span><span> Menu</span>
        </div>
    </div>
    @include('inc.investor-menu')

    <section class="media-section1 innerpage-padding">
        <div class="media-section1-inner">
            <h1 class="title">Media</h1>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="press-release-tab" data-bs-toggle="pill" data-bs-target="#press-release" type="button" role="tab" aria-controls="press-release" aria-selected="true">Press Release</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="recent-coverage-tab" data-bs-toggle="pill" data-bs-target="#recent-coverage" type="button" role="tab" aria-controls="recent-coverage" aria-selected="false">Recent Coverage</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="awards-tab" data-bs-toggle="pill" data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">Awards & Recognition</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="press-release" role="tabpanel" aria-labelledby="press-release-tab">
                    <div class="tab-pane-inner">
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                    </div>
                    
                    <div class="pagination">
                        <div class="pagination-list">
                            <a href="#" class="pagination-item active">1</a>
                            <a href="#" class="pagination-item">2</a>
                            <a href="#" class="pagination-item">3</a>
                            <a href="#" class="pagination-item next"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="recent-coverage" role="tabpanel" aria-labelledby="recent-coverage-tab">
                    <div class="tab-pane-inner">
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle announces the global launch of Appnext OOBE platform powered by the acquisition of DiscoverTech</a>
                            <p class="date">25 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle Platforms Accredited by IMDA Singapore and Wins ‘Technology Company of the Year’ at MMA Smarties along with 21 other Industry Recognitions</a>
                            <p class="date">05 May 2021</p>
                        </div>
                        <div class="media-item">
                            <a href="#">Affle’s Mediasmart Platform launches its proprietary Audience Targeting and Household Sync technology on Connected TV (CTV)</a>
                            <p class="date">08 April 2021</p>
                        </div>
                    </div>
                    
                    <div class="pagination">
                        <div class="pagination-list">
                            <a href="#" class="pagination-item active">1</a>
                            <a href="#" class="pagination-item">2</a>
                            <a href="#" class="pagination-item">3</a>
                            <a href="#" class="pagination-item next"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                    <div class="tab-pane-inner awards-tab-content">
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/indawards.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/image136.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/maddies.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">The Maddies</h4>
                                <p>Maximizing Mobile Advertising / Programmatic and Machine Learning Games24x7 (Bronze) 2020</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/indawards.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/image136.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/maddies.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">The Maddies</h4>
                                <p>Maximizing Mobile Advertising / Programmatic and Machine Learning Games24x7 (Bronze) 2020</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/indawards.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/image136.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/maddies.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">The Maddies</h4>
                                <p>Maximizing Mobile Advertising / Programmatic and Machine Learning Games24x7 (Bronze) 2020</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/indawards.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/image136.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">India Digital Awards</h4>
                                <p>Best Omni-Channel Campaign Management & Marketing Automation Games24×7 (Gold) 20</p>
                            </a>
                        </div>
                        <div class="media-item">
                            <a href="#">
                                <div class="image">
                                    <img src="{{asset('images/maddies.png')}}" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <h4 class="title">The Maddies</h4>
                                <p>Maximizing Mobile Advertising / Programmatic and Machine Learning Games24x7 (Bronze) 2020</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>

@endsection