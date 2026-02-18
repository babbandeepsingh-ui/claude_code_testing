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

    <section class="corporate-governance innerpage-padding shareholders-section arai-section">
        <div class="corporate-governance-inner">
            <div class="title-section">
                <h1 class="title">Annual Reports <span>& AGM Information</span></h1>
            </div>

            <div class="financial-details-section">
                <div class="financial-details-section-inner">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-2021-tab" data-bs-toggle="pill" data-bs-target="#pills-2021" type="button" role="tab" aria-controls="pills-2021" aria-selected="true">2020-21</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-1920-tab" data-bs-toggle="pill" data-bs-target="#pills-1920" type="button" role="tab" aria-controls="pills-1920" aria-selected="false">2019-20</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-2021" role="tabpanel" aria-labelledby="pills-2021-tab">
                            <div class="tab-pane-inner">
                                <div class="image-box">
                                    <img src="{{asset('images/arai-image.jpg')}}" alt="" class="img-fluid" loading="lazy">
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <h3 class="title">Integrated Annual <span>Report 2020-21</span></h3>
                                        <a href="{{asset('images/pdf/2021/AFFLE INTEGRATED ANNUAL REPORT 2020-21.pdf')}}" target="_blank"> <button class="read" type="button"><span>View Report</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"></path></svg></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-1920" role="tabpanel" aria-labelledby="pills-1920-tab">
                            <div class="tab-pane-inner">
                                <div class="image-box">
                                    <img src="{{asset('images/arai-image2.jpg')}}" alt="" class="img-fluid" loading="lazy">
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <h3 class="title">Annual Report <span>2019-20</span></h3>
                                        <a href="{{asset('images/pdf/2021/Affle Annual Report 2019-20.pdf')}}" target="_blank"><button class="read" type="button"><span>View Report</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"></path></svg></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="accordion" id="corporate-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="bfp-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bfp-content" aria-expanded="false" aria-controls="bfp-content">AGM 2020-21 (To be held on September 23, 2021)</button>
                    </h2>
                    <div id="bfp-content" class="accordion-collapse collapse" aria-labelledby="bfp-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Notice of AGM.pdf')}}" target="_blank">AGM Notice</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
               
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cbc-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cbc-content" aria-expanded="false" aria-controls="cbc-content">EGM 2020-21 (Held on March 24, 2021)</button>
                    </h2>
                    <div id="cbc-content" class="accordion-collapse collapse" aria-labelledby="cbc-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Notice of EGM.pdf')}}" target="_blank">EGM Notice</a></li>
                                <li><a href="{{asset('images/pdf/Voting results_1.pdf')}}" target="_blank">Voting Results</a></li>
                                <li><a href="{{asset('images/pdf/Summary of AGM Proceedings 24 March.pdf')}}" target="_blank">Summary of Proceedings</a></li>
                                <li><a href="{{asset('images/pdf/Scrutinizers Report_1.pdf')}}" target="_blank">Scrutinizer's Report</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection