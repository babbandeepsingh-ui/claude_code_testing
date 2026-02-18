@extends('layout.app')

@section('content')
<main>

    <section class="blogdetail-page-section innerpage-padding">
        <div class="blogdetail-page-section-inner">
            <h1 class="title">Are You Prepared to Acquire the Last-Minute Festive Shoppers This Diwali?</h1>
            <div class="content">
                <div class="blog-other">
                    <div class="author-box">
                        <div class="profile">
                            <img src="{{asset('images/profile_picture.png')}}" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="profile-text">
                            <h4 class="name">Diksha Sahni</h4>
                            <p class="date">December 31, 2020</p>
                        </div>
                    </div>
                    <div class="blog-analy">
                        <ul class="list">
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/eye.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">2450 Views</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/like.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Like</span>
                            </li>
                            <li class="list-item">
                                <span class="icon"><img src="{{asset('images/comment.svg')}}" alt="" class="img-fluid" loading="lazy"></span>
                                <span class="text">Leave a comment</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="image-box">
                        <img src="{{asset('images/gurugram_img-4.jpg')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                    <div class="text">
                        <p>There are festivities in the air! As people in India gear up to bring in the festive cheer, mobile marketers are looking to catch the last-minute festive shoppers. The festive period in India is a peak time for many Indian consumers to shop, redecorate their homes, purchase new clothes, and exchange presents.</p>
                        <p>Traditionally, the festive season is marked by offline shopping where brick and mortar stores have dominated. But with the growing competition in the online retail space, there is a huge drive to grow sales and acquire new customers during this time. In fact, the number of festive shoppers over the last few years continues to rise, fuelled by the attractive online offers and convenience of delivery. This year, due to the pandemic, a different purchasing pattern has emerged. With the majority of people still continuing to work from home and not many traveling to visit their families and friends, typical Diwali purchases are on the backburner. In general, the traditional buying of jewelry and automobiles is likely to see a slump, whereas demands for apparel, home appliances, and furniture are on the rise. This can also be attributed to the fact that people are being more conservative about their shopping budgets this year, amidst the uncertainty over the future months. How will festive shopping look this year and what trends in consumer behavior are emerging? [More on this in our festive season report!]</p>
                        <p>Our webinar with Branch can help you to get started, where a stellar panel from popular eCommerce and shopping platforms talk about the challenges and opportunities in this year’s festive season. Tune in now to get their insights on how you can successfully acquire, engage, and retain your users.</p>
                    </div>
                    <div class="image-box">
                        <img src="{{asset('images/blog-detail-image.jpg')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                    <div class="text">
                        <p>Want to learn more about mobile advertising opportunities? Download our report and get started on creating a winning user acquisition strategy to skyrocket your festive revenues!</p>
                    </div>
                    <div class="text categories">
                        <h4 class="cat-name">Categories</h4>
                        <p>Customer Acquisition, Marketing Hacks, Mobile Industry, Mobile Marketing, User Acquisition</p>
                    </div>
                    <div class="text categories">
                        <h4 class="cat-name">Tags</h4>
                        <p>Tags: Affle mobile advertising, festive season, indian festive season, mobile ads, mobile advertisement, mobile advertising, mobile marketing, mobile marketing campaign, new user acquisition, user acquisition</p>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3 class="title">Leave a reply</h3>
                <p class="text-center">Your email address will not be published. Required fields are marked *</p>
                <form class="comment-form">
                    <div class="comment-input-box">
                        <label class="col-form-label">Your Comment*</label>
                        <textarea name="comment" class="form-control" cols="30" rows="10"></textarea>
                        <div class="hint">
                            You may use these HTML tags and attributes: <span>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt;</span>
                        </div>
                    </div>
                    <div class="basic-fields">
                        <div class="form-group">
                            <label class="col-form-label">Name</label>
                            <input type="text" name="name" id="" placeholder="John" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email*</label>
                            <input type="email" name="name" id="" placeholder="companyname@abc.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Website</label>
                            <input type="text" name="name" id="" placeholder="www.google.com" class="form-control">
                        </div>
                    </div>
                    <div class="btn-box">
                        <input type="submit" value="Submit" class="btn btn--primary">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="post-section">
        <div class="post-section-inner">
            <div class="section-title">            
                <h3 class="title">Latest Posts</h3>
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
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>
@endsection