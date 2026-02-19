@extends('layout.app')

@section('content')
<main>

    <section class="blog-page-section innerpage-padding">
        <div class="blog-page-section-inner">
            <div class="content-section">
                <div class="title-filter">
                    <h1 class="title">Blogs</h1>
                    <select class="filter-event">
                        <option value="0">Categories</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
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
                <div class="sidebar-section-inner">
                    <h3 class="title">Recent Comments</h3>
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>
@endsection