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

    <section class="corporate-governance innerpage-padding shareholders-section">
        <div class="corporate-governance-inner">
            <div class="title-section">
                <h1 class="title"><span>Shareholders & AGM</span><span>Information</span></h1>
            </div>
            
            <div class="accordion" id="corporate-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cp-title">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cp-content" aria-expanded="true" aria-controls="cp-content">Shareholding Pattern</button>
                    </h2>
                    <div id="cp-content" class="accordion-collapse collapse show" aria-labelledby="cp-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/2021/Shareholding Pattern (As on June 30, 2021).pdf')}}" target="_blank">Shareholding Pattern <span>(As on June 30, 2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/2021/Shareholding Pattern (As on March 31, 2021).pdf')}}" target="_blank">Shareholding Pattern <span>(As on March 31, 2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Shareholding Pattern (As on December 31, 2020).pdf')}}" target="_blank">Shareholding Pattern <span>(As on December 31, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Shareholding Pattern (As on September 30, 2020).pdf')}}" target="_blank">Shareholding Pattern <span>(As on September 30, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Shareholding Pattern (As on June 30, 2020).pdf')}}" target="_blank">Shareholding Pattern <span>(As on June 30, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Shareholding Pattern (As on March 31, 2020).pdf')}}" target="_blank">Shareholding Pattern <span>(As on March 31, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Shareholding pattern for quarter ended December 31, 2019.pdf')}}" target="_blank">Shareholding Pattern <span>(As on December 31, 2019)</span></a></li>
                                <li><a href="{{asset('images/pdf/Shareholding pattern for quarter ended September 30, 2019.pdf')}}" target="_blank">Shareholding Pattern <span>(As on September 30, 2019)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="bfp-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bfp-content" aria-expanded="false" aria-controls="bfp-content">AGM 2019-20 (Held on September 24, 2020)</button>
                    </h2>
                    <div id="bfp-content" class="accordion-collapse collapse" aria-labelledby="bfp-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Affle AGM Notice.pdf')}}" target="_blank">AGM Notice</a></li>
                                <li><a href="{{asset('images/pdf/Summary of AGM Proceedings.pdf')}}" target="_blank">Summary of Proceedings</a></li>
                                <li><a href="{{asset('images/pdf/Voting results.pdf')}}" target="_blank">Voting Results</a></li>
                                <li><a href="{{asset('images/pdf/Scrutinizer%27s Report.pdf')}}" target="_blank">Scrutinizer’s Report</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection