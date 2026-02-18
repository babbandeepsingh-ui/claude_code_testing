@extends('layout.app')

@section('content')
<main>

    <section class="author-section-1 innerpage-padding">
        <div class="author-section-1-inner">
            <div class="profile">
                <img src="{{asset('images/profile_picture.png')}}" alt="" class="img-fluid" loading="lazy">
            </div>
            <div class="author-text">
                <h1 class="title">Diksha Sahni</h1>
                <p>Diksha Sahni is a senior content marketing manager at Affle. A journalist turned marketer, He has worked in the B2B and AdTech industries and writes on all things mobile on the enterprise blog.</p>
            </div>
            <div class="social-list">
                <a href="#" class="social-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="18" viewBox="0 0 9 18"><path class="a" d="M1128,5753h0v3.6h-1.8c-.621,0-.9.729-.9,1.35v2.25h2.7v3.6h-2.7v7.2h-3.6v-7.2H1119v-3.6h2.7v-3.6a3.6,3.6,0,0,1,3.6-3.6Z" transform="translate(-1119 -5753)"/></svg>
                </a>
                <a href="#" class="social-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.524" height="15" viewBox="0 0 18.524 15"><path class="a" d="M1167.52,5757.765a7.6,7.6,0,0,1-2.178.609,3.8,3.8,0,0,0,1.665-2.1,7.68,7.68,0,0,1-2.408.927,3.745,3.745,0,0,0-2.8-1.2,3.787,3.787,0,0,0-3.781,3.785,3.912,3.912,0,0,0,.1.864,10.81,10.81,0,0,1-7.827-3.953,3.762,3.762,0,0,0,1.178,5.038,3.767,3.767,0,0,1-1.727-.441v.026a3.791,3.791,0,0,0,3.046,3.715,3.744,3.744,0,0,1-1,.132,3.794,3.794,0,0,1-.708-.07,3.788,3.788,0,0,0,3.542,2.629,7.56,7.56,0,0,1-4.72,1.624,7.673,7.673,0,0,1-.9-.053,10.813,10.813,0,0,0,16.638-9.071c0-.167,0-.327-.009-.494A7.571,7.571,0,0,0,1167.52,5757.765Z" transform="translate(-1148.996 -5756)"/></svg>
                </a>
                <a href="#" class="social-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path class="a" d="M1240,5773h-4v-6.75a2.247,2.247,0,0,0-2.25-1.94,1.8,1.8,0,0,0-1.75,1.94V5773h-4v-12h4v2a4.586,4.586,0,0,1,3.5-1.76,4.509,4.509,0,0,1,4.5,4.51V5773m-14,0h-4v-12h4v12m-2-18a2,2,0,1,1-2,2A2,2,0,0,1,1224,5755Z" transform="translate(-1222 -5755)"/></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="blog-page-section author-section-2">
        <div class="blog-page-section-inner">
            <div class="content-section">
                <div class="title-filter">
                    <h3 class="title">12 Blogs</h3>
                </div>
                <div class="blog-list">
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/gurugram_img.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/banglore_img.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/gurugram_img-1.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/banglore_img-1.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/gurugram_img-2.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/banglore_img-2.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/gurugram_img-3.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <a href="#" class="blog-image">
                            <img src="{{asset('images/banglore_img-3.jpg')}}" alt="" class="img-fluid" loading="lazy">
                        </a>
                        <div class="blog-content">
                            <div class="date">December 31, 2020</div>
                            <div class="content">
                                <h3 class="title">Lookback 2020: Affle’s Year in Review</h3>
                                <p>2020 has been a year that brought with it significant transformations globally. This year marked the beginning of</p>
                            </div>
                            <div class="author">By <a href="#">Diksha Sahni</a></div>
                        </div>
                    </div>
                </div>
                <div class="pagination-box">
                    <div class="pagination-list">
                        <a href="#" class="pagination-item active">1</a>
                        <a href="#" class="pagination-item">2</a>
                        <a href="#" class="pagination-item">3</a>
                        <a href="#" class="pagination-item">4</a>
                        <a href="#" class="pagination-item next">Next</a>
                    </div>
                </div>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-section-inner">
                    <h3 class="title">Affle Tweets</h3>
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>
@endsection