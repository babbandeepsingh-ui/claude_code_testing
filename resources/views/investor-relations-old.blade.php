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

    <section class="investor-relation-section innerpage-padding" >
        <div class="investor-relation-section-inner">
            <div class="title-section text-center" >
                <h1 class="title">Life at Affle</h1>
            </div>
            <div class="section1 section-box" id="ir-home">
                <div class="left-section box">
                    <div class="left-section-inner">
                        <h3 class="title">Affle (India) Limited</h3>
                        <p>A global technology company with proprietary consumer intelligence platform that delivers consumer acquisitions, engagements and transactions through relevant mobile advertising.</p>
                        <a href="#" class="btn btn--primary">Read More</a>
                    </div>
                </div>
                <div class="right-section box">
                    <div class="right-section-inner">
                        <h3 class="title">Stock Information</h3>
                        <div class="stock-list">
                            <div class="stock-list-item">
                                <h4 class="name">BSE</h4>
                                <a href="https://www.bseindia.com/stock-share-price/affle-(india)-ltd/affle/542752/" class="btn btn--secondary" target="_blank">View Details</a>
                               
                            </div>
                            <div class="stock-list-item">
                                <h4 class="name">NSE</h4>
                                <a target="_blank" href="https://www.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=AFFLE&illiquid=0&smeFlag=0&itpFlag=0" class="btn btn--secondary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section2 section-box" id="ir-corporate">
                <div class="box1 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Corporate <span>Presentation</span></h3>
                            <span class="date">May 2021</span>
                        </div>
                        <div class="bottom-section">
                            <a href="{{asset('images/pdf/2021/Affle Presentation (May, 2021).pdf')}}" class="pdf-btn">
                                <span>Download PDF</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Integrated Annual Report</h3>
                            <span class="date">2020-21</span>
                        </div>
                        <div class="bottom-section">
                            <a href="{{asset('images/pdf/2021/AFFLE INTEGRATED ANNUAL REPORT 2020-21.pdf')}}" target="_blank"class="pdf-btn">
                                <span>View Report</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section3 section-box" id="ir-Annual">
                <div class="box1 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">IPO <span>Prospectus</span></h3>
                        </div>
                        <div class="bottom-section">
                            <a href="{{asset('images/pdf/2021/Yovember - Prospectus- 01082019_1845 - Filing Version.pdf')}}" target="_blank" class="pdf-btn">
                                <span>Download PDF</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Press <span>Release</span></h3>
                        </div>
                        <div class="bottom-section">
                            <a href="https://affle.com/media/" class="pdf-btn">
                                <span>READ LATEST PR</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box3 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Annual  <span>Report 2019-20</span></h3>
                        </div>
                        <div class="bottom-section">
                            <a href="{{asset('images/pdf/2021/Affle Annual Report 2019-20.pdf')}}" class="pdf-btn">
                                <span>Download PDF</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="financial-details-section" id="ir-finance">
        <div class="financial-details-section-inner">
            <h2 class="title">Financial Details</h2>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-fy22-tab" data-bs-toggle="pill" data-bs-target="#pills-fy22" type="button" role="tab" aria-controls="pills-fy22" aria-selected="true">Fy 2022</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-fy21-tab" data-bs-toggle="pill" data-bs-target="#pills-fy21" type="button" role="tab" aria-controls="pills-fy21" aria-selected="false">Fy 2021</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fy20-tab" data-bs-toggle="pill" data-bs-target="#pills-fy20" type="button" role="tab" aria-controls="pills-fy20" aria-selected="false">Fy 2020</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fy19-tab" data-bs-toggle="pill" data-bs-target="#pills-fy19" type="button" role="tab" aria-controls="pills-fy19" aria-selected="false">Fy 2019</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fy18-tab" data-bs-toggle="pill" data-bs-target="#pills-fy18" type="button" role="tab" aria-controls="pills-fy18" aria-selected="false">Fy 2018</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fy17-tab" data-bs-toggle="pill" data-bs-target="#pills-fy17" type="button" role="tab" aria-controls="pills-fy17" aria-selected="false">Fy 2017</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-fy22" role="tabpanel" aria-labelledby="pills-fy22-tab">
                    <ul class="nav nav-pills mb-3 child-pills" id="pills-tab" role="tablist">
                       
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="fy22-q1-tab" data-bs-toggle="pill" data-bs-target="#fy22-q1" type="button" role="tab" aria-controls="fy22-q1" aria-selected="true">Q1</button>
                        </li>
                      
                    </ul>
                    <div class="tab-content tab-content-child" id="pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="fy22-q1" role="tabpanel" aria-labelledby="fy22-q1-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/2021/IND AS Financial Results (Q1  FY2022).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q1 FY2022)</span></a></li>
                                <li><a href="{{asset('images/pdf/2021/Q1 FY2022 Earnings PPT.pdf')}}" target="_blank">Earnings Presentation <span>(Q1 FY2022)</span></a></li>
                                <li><a href="{{asset('images/pdf/2021/Earnings Press Release Q1 FY2022.pdf')}}" target="_blank">Earnings Press Release <span>(Q1 FY2022)</span></a></li>
                               <!--li></li-->
                            </ul>
                        </div>
                      
                </div>
                </div>
                <div class="tab-pane fade " id="pills-fy21" role="tabpanel" aria-labelledby="pills-fy21-tab">
                    <ul class="nav nav-pills mb-3 child-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="fy21-q4-tab" data-bs-toggle="pill" data-bs-target="#fy21-q4" type="button" role="tab" aria-controls="fy21-q4" aria-selected="true">Q4</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy21-q3-tab" data-bs-toggle="pill" data-bs-target="#fy21-q3" type="button" role="tab" aria-controls="fy21-q3" aria-selected="false">Q3</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy21-q2-tab" data-bs-toggle="pill" data-bs-target="#fy21-q2" type="button" role="tab" aria-controls="fy21-q2" aria-selected="false">Q2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy21-q1-tab" data-bs-toggle="pill" data-bs-target="#fy21-q1" type="button" role="tab" aria-controls="fy21-q1" aria-selected="false">Q1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy21-subs-tab" data-bs-toggle="pill" data-bs-target="#fy21-subs" type="button" role="tab" aria-controls="fy21-subs" aria-selected="false">Subsidiary Financials</button>
                        </li>
                    </ul>
                    <div class="tab-content tab-content-child" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="fy21-q4" role="tabpanel" aria-labelledby="fy21-q4-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/IND AS Financial Results (Q4 & 12M FY2021).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q4 & 12M FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Q4 & 12M FY2021 Earnings Presentation.pdf')}}" target="_blank"> Earnings Presentation <span>(Q4 & 12M FY2021)</span> </a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release (Q4 & 12M FY2021).pdf')}}" target="_blank">Earnings Press Release <span>(Q4 & 12M FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Call Transcript - Q4 & 12M FY2021.pdf')}}" target="_blank">Earnings Call Transcript <span>(Q4 & 12M FY2021)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy21-q3" role="tabpanel" aria-labelledby="fy21-q3-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/Ind AS Financial Results (Q3 & 9M FY2021).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q3 & 9M FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Presentation (Q3 & 9M FY2021).pdf')}}" target="_blank">Earnings Presentation <span>(Q3 & 9M FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release (Q3 & 9M FY2021).pdf')}}" target="_blank">Earnings Press Release <span>(Q3 & 9M FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Call Transcript - Q3 & 9M FY2021.pdf')}}" target="_blank">Earnings Call Transcript <span>(Q3 & 9M FY2021)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy21-q2" role="tabpanel" aria-labelledby="fy21-q2-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/IND AS Financial Results (Q2 & H1 FY2021).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q2 & H1 FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Affle Earnings Presentation (Q2 & H1 FY2021).pdf')}}" target="_blank">Earnings Presentation <span>(Q2 & H1 FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release (Q2 & H1 FY2021).pdf')}}" target="_blank">Earnings Press Release <span>(Q2 & H1 FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Call Transcript (Q2 & H1 FY2021).pdf')}}" target="_blank">Earnings Call Transcript <span>(Q2 & H1 FY2021)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy21-q1" role="tabpanel" aria-labelledby="fy21-q1-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/Ind AS Financial Results (Q1 FY2021).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q1 FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Presentation (Q1 FY2021).pdf')}}" target="_blank">Earnings Presentation <span>(Q1 FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release (Q1 FY2021).pdf')}}" target="_blank">Earnings Press Release <span>(Q1 FY2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Call Transcript (Q1 FY2021).pdf')}}" target="_blank">Earnings Call Transcript <span>(Q1 FY2021)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy21-subs" role="tabpanel" aria-labelledby="fy21-subs-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/2021/AINT FY2021.pdf')}}" target="_blank">Affle International Pte. Ltd. ("AINT") Singapore</a></li>
                                <li><a href="{{asset('images/pdf/2021/PT Affle Indonesia FY2021.pdf')}}" target="_blank">PT Affle Indonesia ("PAI") Indonesia </a></li>
                                <li><a href="{{asset('images/pdf/2021/AMEA FY2021.pdf')}}" target="_blank">Affle MEA FZ-LLC ("AMEA") UAE </a></li>
                                <li><a href="{{asset('images/pdf/2021/Mediasmart Mobile S.L. FY2021.pdf')}}" target="_blank">Mediasmart Mobile S.L. ("Mediasmart") Spain</a></li>
                                <li><a href="{{asset('images/pdf/2021/Appnext Pte Ltd FY2021.pdf')}}" target="_blank">Appnext Pte Ltd </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-fy20" role="tabpanel" aria-labelledby="pills-fy20-tab">
                    <ul class="nav nav-pills mb-3 child-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="fy20-q4-tab" data-bs-toggle="pill" data-bs-target="#fy20-q4" type="button" role="tab" aria-controls="fy20-q4" aria-selected="true">Q4</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy20-q3-tab" data-bs-toggle="pill" data-bs-target="#fy20-q3" type="button" role="tab" aria-controls="fy20-q3" aria-selected="false">Q3</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy20-q2-tab" data-bs-toggle="pill" data-bs-target="#fy20-q2" type="button" role="tab" aria-controls="fy20-q2" aria-selected="false">Q2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fy20-q1-tab" data-bs-toggle="pill" data-bs-target="#fy20-q1" type="button" role="tab" aria-controls="fy20-q1" aria-selected="false">Subsidiary Financials</button>
                        </li>
                    </ul>
                    <div class="tab-content tab-content-child" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="fy20-q4" role="tabpanel" aria-labelledby="fy20-q4-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/IND AS Financial Results (Q4 & 12M FY2020).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q4 & 12M FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Affle Earnings Presentation.pdf')}}" target="_blank">Earnings Presentation <span>(Q4 & 12M FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release Q4 & 12M FY2020.pdf')}}" target="_blank">Earnings Press Release <span>(Q4 & 12M FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Call Transcript (Q4 & 12M FY2020).pdf')}}" target="_blank">Earnings Call Transcript <span>(Q4 & 12M FY2020)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy20-q3" role="tabpanel" aria-labelledby="fy20-q3-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/Ind AS Financial Results (Q3 & 9M FY2020).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q3 & 9M FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Affle Earnings Presentation Q3 & 9M FY2020.pdf')}}" target="_blank">Earnings Presentation <span>(Q3 & 9M FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release Q3 & 9M FY2020.pdf')}}" target="_blank">Earnings Press Release <span>(Q3 & 9M FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Affle Earnings Call Transcript - Q3 & 9M FY2020.pdf')}}" target="_blank">Earnings Call Transcript <span>(Q3 & 9M FY2020)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy20-q2" role="tabpanel" aria-labelledby="fy20-q2-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/Ind AS Financial Results (Q2 & H1 FY2020).pdf')}}" target="_blank">Ind AS Financial Results <span>(Q2 & H1 FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Presentation Q2 & H1 FY2020.pdf')}}" target="_blank"> Earnings Presentation <span>(Q2 & H1 FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Press Release Q2 & H1 FY2020.pdf')}}" target="_blank">Earnings Press Release <span>(Q2 & H1 FY2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Earnings Call Transcript - Q2 & H1 FY2020.pdf')}}" target="_blank">Earnings Call Transcript <span>((Q2 & H1 FY2020)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="fy20-q1" role="tabpanel" aria-labelledby="fy20-q1-tab">
                            <ul class="download-links">
                                <li><a href="{{asset('images/pdf/AINT FY2020.pdf')}}" target="_blank">Affle International Pte. Ltd. ("AINT") Singapore <span></span></a></li>
                                <li><a href="{{asset('images/pdf/PT Affle Indonesia FY2020.pdf')}}" target="_blank">PT Affle Indonesia ("PAI") Indonesia<span></span></a></li>
                                <li><a href="{{asset('images/pdf/AMEA FY2020.pdf')}}" target="_blank">Affle MEA FZ-LLC ("AMEA") UAE <span></span></a></li>
                                <li><a href="{{asset('images/pdf/Mediasmart Mobile S.L. FY2020.pdf')}}" target="_blank">Mediasmart Mobile S.L. ("Mediasmart") Spai <span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-fy19" role="tabpanel" aria-labelledby="pills-fy19-tab">
                    <ul class="download-links">
                        <li><a href="{{asset('images/pdf/Ind AS Console financials - March 19 signed.pdf')}}" target="_blank">Ind AS Financial Results <span>(consolidated)</span></a></li>
                        <li><a href="{{asset('images/pdf/Ind AS Standalone financials - March 19 signed.pdf')}}" target="_blank">Ind AS Financial Results <span>(standalone)</span></a></li>
                       
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-fy18" role="tabpanel" aria-labelledby="pills-fy18-tab">
                    <ul class="download-links">
                        <li><a href="{{asset('images/pdf/8.4.2 Signed Financials 2018.pdf')}}" target="_blank">Ind AS Financial Results </a></li>
                       
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-fy17" role="tabpanel" aria-labelledby="pills-fy17-tab">
                    <ul class="download-links">
                        <li><a href="{{asset('images/pdf/8.3.2 Signed Financials 2017.pdf')}}" target="_blank">IGAAP Financial Results </a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="exchange-announcements-section" id="ir-exchange">
        <div class="exchange-announcements-section-inner">
            <h2 class="title">Exchange Announcements</h2>
            <div class="content-box">
                <div class="content-box-section">
                    <div class="box">
                        <h3 class="title">Analyst / Investor Meetings</h3>
                        <div class="box-inner">
                        <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (August 13, 2021).pdf')}}" target="_blank">
                                        <span class="date">13 Aug 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (August 13, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (August 11, 2021).pdf')}}" target="_blank">
                                        <span class="date">11 Aug 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (August 11, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            
                         
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Earnings Call Invite (Aug 3, 2021).pdf')}}" target="_blank"">
                                        <span class="date">3 Aug 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Earnings Call Invite (Aug 3, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (July 22, 2021).pdf')}}" target="_blank">
                                        <span class="date">22 Jul 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (July 22, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/TranscriptJampp.pdf')}}" target="_blank">
                                        <span class="date">21 Jul 2021</span>
                                        <h4 class="text">Jampp acquisition Call Transcript</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/TranscriptJampp.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (July 20, 2021).pdf')}}" target="_blank">
                                        <span class="date">20 Jul 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (July 20, 2021).pdf')}}" target="_blank"">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet  - Intimation (July 5, 2021).pdf')}}" target="_blank">
                                        <span class="date">5 Jul 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet  - Intimation (July 5, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Jampp acquisition Concall Invite (July 1, 2021).pdf')}}" target="_blank">
                                        <span class="date">1 Jul 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Jampp acquisition Concall Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Jampp acquisition Concall Invite (July 1, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet  - Intimation (June 30, 2021).pdf')}}" target="_blank">
                                        <span class="date">30 Jun 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet  - Intimation (June 30, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet  - Intimation (June 24, 2021).pdf')}}" target="_blank">
                                        <span class="date">24 Jun 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet  - Intimation (June 24, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (June 15, 2021).pdf')}}" target="_blank">
                                        <span class="date">15 Jun 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimations</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (June 15, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (June 14, 2021).pdf')}}" target="_blank">
                                        <span class="date">14 Jun 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimations</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (June 14, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Earnings Call Invite (May 25, 2021).pdf')}}" target="_blank">
                                        <span class="date">25 May 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Earnings Call Invite (May 25, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (May 5, 2021).pdf')}}" target="_blank">
                                        <span class="date">05 May 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Analyst & Investor Meet - Intimation (May 5, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (April 8, 2021).pdf')}}" target="_blank">
                                        <span class="date">08 Apr 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (April 8, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (April 6, 2021).pdf')}}" target="_blank">
                                        <span class="date">06 Apr 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (April 6, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (April 1, 2021).pdf')}}" target="_blank">
                                        <span class="date">01 Apr 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (April 1, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (March 26, 2021).pdf')}}" target="_blank">
                                        <span class="date">26 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Analyst & Investor Meet - Intimation (March 26, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 24, 2021).pdf')}}" target="_blank">
                                        <span class="date">24 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 24, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 23, 2021).pdf')}}" target="_blank">
                                        <span class="date">23 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 23, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 18, 2021).pdf')}}" target="_blank">
                                        <span class="date">18 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 18, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 17, 2021).pdf')}}" target="_blank">
                                        <span class="date">17 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 17, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 10, 2021).pdf')}}" target="_blank">
                                        <span class="date">10 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 10, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 8, 2021).pdf')}}" target="_blank"s>
                                        <span class="date">08 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 8, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 3, 2021).pdf')}}" target="_blank">
                                        <span class="date">03 Mar 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (March 3, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Intimation of Analyst Investor Meetings (February 24, 2021).pdf')}}" target="_blank">
                                        <span class="date">24 Feb 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Intimation of Analyst Investor Meetings (February 24, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation February 15, 2021.pdf')}}" target="_blank">
                                        <span class="date">15 Feb 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation February 15, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Earnings Call Invite January 29 2021.pdf')}}" target="_blank">
                                        <span class="date">29 Jan 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Earnings Call Invite January 29 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 21, 2021).pdf')}}" target="_blank">
                                        <span class="date">21 Jan 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 21, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 15, 2021).pdf')}}" target="_blank">
                                        <span class="date">15 Jan 2021</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 15, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 29, 2020).pdf')}}" target="_blank">>
                                        <span class="date">29 Dec 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 29, 2020).pdf')}}" target="_blank">>
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 14, 2020).pdf')}}" target="_blank">
                                        <span class="date">14 Dec 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 14, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 8, 2020).pdf')}}" target="_blank">
                                        <span class="date">08 Dec 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 8, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 2, 2020).pdf')}}" target="_blank">
                                        <span class="date">02 Dec 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 2, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 23, 2020).pdf')}}" target="_blank">
                                        <span class="date">23 Nov 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 23, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 21, 2020).pdf')}}" target="_blank">
                                        <span class="date">21 Nov 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 21, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 11, 2020).pdf')}}" target="_blank">
                                        <span class="date">11 Nov 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 11, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Earnings Call Invite (Nov 3 2020).pdf')}}" target="_blank">
                                        <span class="date">03 Nov 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Earnings Call Invite (Nov 3 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 16, 2020).pdf')}}" target="_blank">
                                        <span class="date">16 Oct 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 16, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 13, 2020).pdf')}}" target="_blank">
                                        <span class="date">13 Oct 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 13, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 30 2020).pdf')}}" target="_blank">
                                        <span class="date">30 Sep 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 30 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 25 2020).pdf')}}" target="_blank">
                                        <span class="date">25 Sep 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 25 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Outcome (Sep 18 2020).pdf')}}" target="_blank">
                                        <span class="date">18 Sep 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Outcome</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Outcome (Sep 18 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 10 2020).pdf')}}" target="_blank">
                                        <span class="date">10 Sep 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 10 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet -Intimation Sep 1 2020.pdf')}}" target="_blank">
                                        <span class="date">01 Sep 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet -Intimation Sep 1 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation Aug 18 2020.pdf')}}" target="_blank">
                                        <span class="date">20 Aug 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation Aug 18 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation Aug 18 2020.pdf')}}" target="_blank">
                                        <span class="date">18 Aug 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation Aug 18 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation Aug 14 2020.pdf')}}" target="_blank">
                                        <span class="date">14 Aug 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation Aug 14 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Q1 FY2021 Earnings Call Invite.pdf')}}" target="_blank">
                                        <span class="date">31 Jul 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Q1 FY2021 Earnings Call Invite.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (July 13 2020).pdf')}}" target="_blank">
                                        <span class="date">13 Jul 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (July 13 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (July 6 2020).pdf')}}" target="_blank">
                                        <span class="date">06 Jul 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (July 6 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (July 3 2020).pdf')}}" target="_blank">
                                        <span class="date">03 Jul 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (July 3 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Affle2.0 & Appnext Call Transcript June 24 2020.pdf')}}" target="_blank">
                                        <span class="date">24 Jun 2020</span>
                                        <h4 class="text">Affle2.0 & Appnext Call Transcript</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Affle2.0 & Appnext Call Transcript June 24 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 22 2020).pdf')}}" target="_blank">
                                        <span class="date">22 Jun 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 22 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 17 2020).pdf')}}" target="_blank">
                                        <span class="date">17 Jun 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 17 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 16 2020).pdf')}}" target="_blank">
                                        <span class="date">16 Jun 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 16 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 11 2020).pdf')}}" target="_blank">
                                        <span class="date">11 Jun 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jun 11 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Affle2.0 & Appnext Concall Invite (June 10 2020).pdf')}}" target="_blank">
                                        <span class="date">10 Jun 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Affle2.0 & Appnext Concall Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Affle2.0 & Appnext Concall Invite (June 10 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Earnings Call Invite (May 22 2020).pdf')}}" target="_blank">
                                        <span class="date">22 May 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Earnings Call Invite (May 22 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/COVID-19 Call Transcript (May 21 2020).pdf')}}" target="_blank">
                                        <span class="date">21 May 2020</span>
                                        <h4 class="text">COVID-19 Call Transcript</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/COVID-19 Call Transcript (May 21 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 27 2020).pdf')}}" target="_blank">
                                        <span class="date">27 Apr 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 27 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - COVID-19 Concall Invite (Apr 22 2020).pdf')}}" target="_blank">
                                        <span class="date">22 Apr 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - COVID-19 Concall Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - COVID-19 Concall Invite (Apr 22 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 21 2020).pdf')}}" target="_blank">
                                        <span class="date">21 Apr 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 21 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 14 2020).pdf')}}" target="_blank">
                                        <span class="date">14 Apr 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 14 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 08 2020).pdf')}}" target="_blank">
                                        <span class="date">08 Apr 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Apr 08 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 26 2020).pdf')}}" target="_blank">
                                        <span class="date">26 Mar 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 26 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 19 2020).pdf')}}" target="_blank">
                                        <span class="date">19 Mar 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 19 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 18 2020).pdf')}}" target="_blank">
                                        <span class="date">18 Mar 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 18 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 17 2020).pdf')}}" target="_blank">
                                        <span class="date">17 Mar 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 17 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 9 2020).pdf')}}" target="_blank">
                                        <span class="date">09 Mar 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Mar 9 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Feb 12 2020).pdf')}}" target="_blank">
                                        <span class="date">12 Feb 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Feb 12 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Feb 3 2020).pdf')}}" target="_blank">
                                        <span class="date">03 Feb 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Feb 3 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Earnings Call Invite (Q3 & 9M FY2020).pdf')}}" target="_blank">
                                        <span class="date">23 Jan 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Earnings Call Invite (Q3 & 9M FY2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 15).pdf')}}" target="_blank">
                                        <span class="date">15 Jan 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 15).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 14).pdf')}}" target="_blank">
                                        <span class="date">14 Jan 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 14).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 8).pdf')}}" target="_blank">
                                        <span class="date">08 Jan 2020</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Jan 8).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 17).pdf')}}" target="_blank">
                                        <span class="date">17 Dec 2019</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 17).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 5).pdf')}}" target="_blank">
                                        <span class="date">05 Dec 2019</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation<</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Dec 5).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 23).pdf')}}" target="_blank">
                                        <span class="date">23 Nov 2019</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 23).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 19).pdf')}}" target="_blank">
                                        <span class="date">19 Nov 2019</span>
                                        <h4 class="text">Analyst & Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 19).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 15).pdf')}}" target="_blank">
                                        <span class="date">15 Nov 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 15).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 11).pdf')}}" target="_blank">
                                        <span class="date">11 Nov 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Nov 11).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Results call Intimation (Oct 31).pdf')}}" target="_blank">
                                        <span class="date">31 Oct 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Earnings Call Invite</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Results call Intimation (Oct 31).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 23).pdf')}}" target="_blank">
                                        <span class="date">23 Oct 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 23).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 22).pdf')}}" target="_blank">
                                        <span class="date">22 Oct 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 22).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 18).pdf')}}" target="_blank">
                                        <span class="date">18 Oct 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 18).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 15).pdf')}}" target="_blank">
                                        <span class="date">15 Oct 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 15).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 7).pdf')}}" target="_blank">
                                        <span class="date">07 Oct 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Oct 7).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 27).pdf')}}" target="_blank">
                                        <span class="date">27 Sep 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 27).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 23).pdf')}}" target="_blank">
                                        <span class="date">23 Sep 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 23).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 19).pdf')}}" target="_blank">
                                        <span class="date">19 Sep 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 19).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 17).pdf')}}" target="_blank">
                                        <span class="date">17 Sep 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 17).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 10).pdf')}}" target="_blank">
                                        <span class="date">10 Sep 2019</span>
                                        <h4 class="text">Analyst / Investor Meet - Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Analyst & Investor Meet - Intimation (Sep 10).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="title">Other Announcements</h3>
                        <div class="box-inner">
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/Financial Results Newspaper Publication (August 9, 2021).pdf')}}" target="_blank">
                                        <span class="date">9 Aug 2021</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/Financial Results Newspaper Publication (August 9, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/Board Meeting outcome (August 7, 2021).pdf')}}" target="_blank">
                                        <span class="date">7 Aug 2021</span>
                                        <h4 class="text">Board Meeting Outcome</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/Board Meeting outcome (August 7, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/Notice of Board Meeting (August 4, 2021).pdf')}}" target="_blank">
                                        <span class="date"> 4 Aug 2021</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/Notice of Board Meeting (August 4, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/Notice of Board Meeting (July 31, 2021).pdf')}}" target="_blank">
                                        <span class="date">31 Jul 2021</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/Notice of Board Meeting (July 31, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Clarification on Patents (July 6, 2021).pdf')}}" target="_blank">
                                        <span class="date">6 Jul 2021</span>
                                        <h4 class="text">Clarification on Patents</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Clarification on Patents (July 6, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Press Release Media Release (July 5, 2021).pdf')}}" target="_blank">
                                        <span class="date">5 Jul 2021</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Press Release Media Release (July 5, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Press Release Media Release (July 1, 2021).pdf')}}" target="_blank">
                                        <span class="date">1 Jul 2021</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Press Release Media Release (July 1, 2021).pdf')}}" target="_blank"">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Acquisition Closure Intimation (July 1, 2021).pdf')}}" target="_blank">
                                        <span class="date">1 Jul 2021</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Acquisition Closure Intimation (July 1, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Closure of Trading Window (June 30, 2021).pdf')}}" target="_blank">
                                        <span class="date">30 Jun 2021</span>
                                        <h4 class="text">Closure of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Closure of Trading Window (June 30, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Press Release Media Release June 30, 2021.pdf')}}" target="_blank">
                                        <span class="date">10 Jun 2021</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Press Release Media Release June 30, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Acquisition announcement June 9, 2021.pdf')}}" target="_blank">
                                        <span class="date">09 Jun 2021</span>
                                        <h4 class="text">Acquisition Announcement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Acquisition announcement June 9, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Closure of Trading Window - June 6, 2021.pdf')}}" target="_blank">
                                        <span class="date">06 Jun 2021</span>
                                        <h4 class="text">Closure of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Closure of Trading Window - June 6, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Financial Results Newspaper Publication May 31, 2021.pdf')}}" target="_blank">
                                        <span class="date">31 May 2021</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Financial Results Newspaper Publication May 31, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/Board Meeting outcome (May 29, 2021).pdf')}}" target="_blank">
                                        <span class="date">29 May 2021</span>
                                        <h4 class="text">Board Meeting Outcome</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/Board Meeting outcome (May 29, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Q4/Announcement regarding Indus OS (May 20, 2021).pdf')}}" target="_blank">
                                        <span class="date">22 May 2021</span>
                                        <h4 class="text">Announcement regarding Indus OS</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Q4/Announcement regarding Indus OS (May 20, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Outcome of Fund Raising Committee Meeting (May 4, 2021) (2).pdf')}}" target="_blank">
                                        <span class="date">04 May 2021</span>
                                        <h4 class="text">Outcome of Fund Raising Committee Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Outcome of Fund Raising Committee Meeting (May 4, 2021) (2).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Outcome of Fundraising Committe Meeting (April 28, 2021).pdf')}}" target="_blank">
                                        <span class="date">28 Apr 2021</span>
                                        <h4 class="text">Outcome of Fund Raising Committee Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Outcome of Fundraising Committe Meeting (April 28, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Closure of Trading Window March 31, 2021.pdf')}}" target="_blank">
                                        <span class="date">31 Mar 2021</span>
                                        <h4 class="text">Closure of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Closure of Trading Window March 31, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Intimation of EGM to Stock Exchanges (March 23, 2021).pdf')}}" target="_blank">
                                        <span class="date">23 Mar 2021<</span>
                                        <h4 class="text">Reminder of EGM to Stock Exchanges</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Intimation of EGM to Stock Exchanges (March 23, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation (Mar 19, 2020).pdf')}}" target="_blank">
                                        <span class="date">19 Mar 2021</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation (Mar 19, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Submission of newspaper advertisement (March 2, 2021).pdf')}}" target="_blank">
                                        <span class="date">02 Mar 2021</span>
                                        <h4 class="text">Submission of newspaper advertisement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Submission of newspaper advertisement (March 2, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Intimation of EGM to Stock Exchanges (March 1, 2021).pdf')}}" target="_blank">
                                        <span class="date">01 Mar 2021</span>
                                        <h4 class="text">Intimation of EGM to Stock Exchanges</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Intimation of EGM to Stock Exchanges (March 1, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Board Meeting outcome (February 27, 2021).pdf')}}" target="_blank">
                                        <span class="date">27 Feb 2021</span>
                                        <h4 class="text">Board Meeting Outcome</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Board Meeting outcome (February 27, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Intimation of Board meeting (February 24, 2021).pdf')}}" target="_blank">
                                        <span class="date">24 Feb 2021</span>
                                        <h4 class="text">Intimation of Board meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Intimation of Board meeting (February 24, 2021).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Announcement February 18, 2021.pdf')}}" target="_blank">
                                        <span class="date">18 Feb 2021</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Announcement February 18, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Opening of Trading Window February 10, 2021.pdf')}}" target="_blank">
                                        <span class="date">10 Feb 2021</span>
                                        <h4 class="text">Opening of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Opening of Trading Window February 10, 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication February 8 2021.pdf')}}" target="_blank">
                                        <span class="date">08 Feb 2021</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication February 8 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication January 28 2021.pdf')}}" target="_blank">
                                        <span class="date">28 Jan 2021</span>
                                        <h4 class="text">Board Meeting Notice Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication January 28 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting January 27 2021.pdf')}}" target="_blank">
                                        <span class="date">27 Jan 2021</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting January 27 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release Media Release January 27 2021.pdf')}}" target="_blank">
                                        <span class="date">27 Jan 2021</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release Media Release January 27 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Announcement January 26 2021.pdf')}}" target="_blank">
                                        <span class="date">26 Jan 2021</span>
                                        <h4 class="text">Acquisition Announcement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Announcement January 26 2021.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Closure of Trading Window Dec 31, 2020.pdf')}}" target="_blank">
                                        <span class="date">31 Dec 2020</span>
                                        <h4 class="text">Closure of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Closure of Trading Window Dec 31, 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release Media Release December 3 2020.pdf')}}" target="_blank">
                                        <span class="date">03 Dec 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release Media Release December 3 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication (Nov 9 2020).pdf')}}" target="_blank">
                                        <span class="date">09 Nov 2020</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication (Nov 9 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication (Oct 31 2020).pdf')}}" target="_blank">
                                        <span class="date">31 Oct 2020</span>
                                        <h4 class="text">Board Meeting Notice Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication (Oct 31 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting (Oct 30 2020).pdf')}}" target="_blank">
                                        <span class="date">30 Oct 2020</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting (Oct 30 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release  Media Release (Oct 23 2020).pdf')}}" target="_blank">
                                        <span class="date">23 Oct 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release  Media Release (Oct 23 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release  Media Release (Oct 22 2020).pdf')}}" target="_blank">
                                        <span class="date">22 Oct 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release  Media Release (Oct 22 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Closure of Trading Window Sep 30 2020.pdf')}}" target="_blank">
                                        <span class="date">30 Sep 2020</span>
                                        <h4 class="text">Closure of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Closure of Trading Window Sep 30 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Summary of Proceedings and Outcome of AGM (Sep 25 2020).pdf')}}" target="_blank">
                                        <span class="date">25 Sep 2020</span>
                                        <h4 class="text">Summary of Proceedings and Outcome of AGM</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Summary of Proceedings and Outcome of AGM (Sep 25 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/AGM Reminder Notice Sep 23 2020.pdf')}}" target="_blank">
                                        <span class="date">23 Sep 2020</span>
                                        <h4 class="text">AGM Reminder Notice</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/AGM Reminder Notice Sep 23 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Intimation under SEBI (PIT) Regulations, 2015.pdf')}}" target="_blank">
                                        <span class="date">15 Sep 2020</span>
                                        <h4 class="text">Intimation under SEBI (PIT) Regulations, 2015</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Intimation under SEBI (PIT) Regulations, 2015.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation Sept 3 2020.pdf')}}" target="_blank">
                                        <span class="date">03 Sep 2020</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation Sept 3 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/AGM Notice & Annual Report Newspaper Publication Sept 3 2020.pdf')}}" target="_blank">
                                        <span class="date">03 Sep 2020</span>
                                        <h4 class="text">AGM Notice & Annual Report Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/AGM Notice & Annual Report Newspaper Publication Sept 3 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Change of Registered Office Aug 30 2020.pdf')}}" target="_blank">
                                        <span class="date">30 Aug 2020</span>
                                        <h4 class="text">Change of Registered Office</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Change of Registered Office Aug 30 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release  Media Release Aug 26 2020.pdf')}}" target="_blank">
                                        <span class="date">26 Aug 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release  Media Release Aug 26 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Shareholders Appeal Newspaper Publication Aug 24 2020.pdf')}}" target="_blank">
                                        <span class="date">24 Aug 2020</span>
                                        <h4 class="text">Shareholders Appeal Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Shareholders Appeal Newspaper Publication Aug 24 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Appeal for email updation Aug 23 2020.pdf')}}" target="_blank">
                                        <span class="date">23 Aug 2020</span>
                                        <h4 class="text">Appeal for email updation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Appeal for email updation Aug 23 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Opening of Trading Window Aug 13 2020.pdf')}}" target="_blank">
                                        <span class="date">13 Aug 2020</span>
                                        <h4 class="text">Opening of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Opening of Trading Window Aug 13 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release  Media Release Aug 13 2020.pdf')}}" target="_blank">
                                        <span class="date">13 Aug 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release  Media Release Aug 13 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Announcement Aug 13 2020.pdf')}}" target="_blank">
                                        <span class="date">13 Aug 2020</span>
                                        <h4 class="text">Acquisition Announcement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Announcement Aug 13 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication August 10, 2020.pdf')}}" target="_blank">
                                        <span class="date">10 Aug 2020</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication August 10, 2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/2021/Acquisition Closure Intimation (August 5, 2020).pdf')}}" target="_blank">
                                        <span class="date">05 Aug 2020</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/2021/Acquisition Closure Intimation (August 5, 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication (July 31 2020).pdf')}}" target="_blank">
                                        <span class="date">31 Jul 2020</span>
                                        <h4 class="text">Board Meeting Notice Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication (July 31 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting (July 30 2020).pdf')}}" target="_blank">
                                        <span class="date">30 Jul 2020</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting (July 30 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release Media Release (July 14 2020).pdf')}}" target="_blank">
                                        <span class="date">14 Jul 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release Media Release (July 14 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Announcement (July 02 2020).pdf')}}" target="_blank">
                                        <span class="date">02 Jul 2020</span>
                                        <h4 class="text">Acquisition Announcement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Announcement (July 02 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release Media Release (July 02 2020).pdf')}}" target="_blank">
                                        <span class="date">02 Jul 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release Media Release (July 02 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation (June 30 2020).pdf')}}" target="_blank">
                                        <span class="date">30 Jun 2020</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation (June 30 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release Media Release (June 09 2020).pdf')}}" target="_blank">
                                        <span class="date">09 Jun 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release Media Release (June 09 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Announcement (June 08 2020).pdf')}}" target="_blank">
                                        <span class="date">08 Jun 2020</span>
                                        <h4 class="text">Acquisition Announcement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Announcement (June 08 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting to consider Q4 & 12M FY2020 Results (May 21 2020).pdf')}}" target="_blank">
                                        <span class="date">21 May 2020</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting to consider Q4 & 12M FY2020 Results (May 21 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release Media Release (May 19 2020).pdf')}}" target="_blank">
                                        <span class="date">19 May 2020</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release Media Release (May 19 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Closure on Trading Window Q4 FY2020.pdf')}}" target="_blank">
                                        <span class="date">31 Mar 2020</span>
                                        <h4 class="text">Closure of Trading Window Q4 FY2020</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Closure on Trading Window Q4 FY2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation (Mar 5 2020).pdf')}}" target="_blank">
                                        <span class="date">05 Mar 2020</span>
                                        <h4 class="text">Acquisition Closure Intimation</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Closure Intimation (Mar 5 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Acquisition Announcement (Feb 28 2020).pdf')}}" target="_blank">
                                        <span class="date">28 Feb 2020</span>
                                        <h4 class="text">Acquisition Announcement</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Acquisition Announcement (Feb 28 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Closure of Trading Window (Feb 20 2020).pdf')}}" target="_blank">
                                        <span class="date">20 Feb 2020</span>
                                        <h4 class="text">Closure of Trading Window</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Closure of Trading Window (Feb 20 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication (Q3 FY2020).pdf')}}" target="_blank">
                                        <span class="date">04 Feb 2020</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication (Q3 FY2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication.pdf')}}" target="_blank">
                                        <span class="date">24 Jan 2020</span>
                                        <h4 class="text">Board Meeting Notice Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting to consider Q3 & 9M FY2020 Results (Jan 23 2020).pdf')}}" target="_blank">
                                        <span class="date">23 Jan 2020</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting to consider Q3 & 9M FY2020 Results (Jan 23 2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Closure of Trading window Q3 FY2020.pdf')}}" target="_blank">
                                        <span class="date">31 Dec 2019</span>
                                        <h4 class="text">Closure of Trading Window Q3 FY2020</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Closure of Trading window Q3 FY2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Change of Name of Share Transfer Agent (Dec 11 2019).pdf')}}" target="_blank">
                                        <span class="date">11 Dec 2019</span>
                                        <h4 class="text">Change of Name of Share Transfer Agent</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Change of Name of Share Transfer Agent (Dec 11 2019).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release  (Dec 5 2019).pdf')}}" target="_blank">
                                        <span class="date">05 Dec 2019</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release  (Dec 5 2019).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release (Nov 26 2019).pdf')}}" target="_blank">
                                        <span class="date">26 Nov 2019</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release (Nov 26 2019).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication (Q2 FY2020).pdf')}}" target="_blank">
                                        <span class="date">11 Nov 2019</span>
                                        <h4 class="text">Financial Results Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Financial Results Newspaper Publication (Q2 FY2020).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication Q2 & H1 FY2020 Results (Oct 31).pdf')}}" target="_blank">
                                        <span class="date">31 Oct 2019</span>
                                        <h4 class="text">Board Meeting Notice Newspaper Publication</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Board Meeting Notice Newspaper Publication Q2 & H1 FY2020 Results (Oct 31).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting to consider Q2 & H1 FY2020 Results (Oct 30).pdf')}}" target="_blank">
                                        <span class="date">30 Oct 2019</span>
                                        <h4 class="text">Notice of Board Meeting</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Notice of Board Meeting to consider Q2 & H1 FY2020 Results (Oct 30).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release (Oct 22).pdf')}}" target="_blank">
                                        <span class="date">22 Oct 2019</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release (Oct 22).pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Press Release.pdf')}}" target="_blank">
                                        <span class="date">02 Oct 2019</span>
                                        <h4 class="text">Press Release / Media Release</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Press Release.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="content">
                                    <a href="{{asset('images/pdf/Closure of Trading Window Q2 FY2020.pdf')}}" target="_blank">
                                        <span class="date">30 Sept 2019</span>
                                        <h4 class="text">Closure of Trading Window Q2 FY2020</h4>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="{{asset('images/pdf/Closure of Trading Window Q2 FY2020.pdf')}}" target="_blank">
                                        <img src="{{asset('images/download-icon.svg')}}" alt="" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ir-section4">
        <div class="ir-section4-inner">
            <div class="section-box">
                <div class="box1 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Corporate <span>Presentation</span></h3>
                        </div>
                        <div class="bottom-section">
                            <a href="{{url('corporate-governance')}}" class="pdf-btn">
                                <span>View All</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Shareholders & <span>AGM Information</span></h3>
                        </div>
                        <div class="bottom-section">
                            <a href="{{url('shareholders')}}" class="pdf-btn">
                                <span>View All</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box3 box">
                    <div class="box-inner">
                        <div class="top-section">
                            <h3 class="title">Corporate <span>Actions</span></h3>
                        </div>
                        <div class="bottom-section">
                            <a href="{{url('corporate-action')}}" class="pdf-btn">
                                <span>View All</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><defs><style>.a{fill:#fff;}</style></defs><path class="a" d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="investor-faqs-section">
        <div class="investor-faqs-section-inner">
            <h2 class="title">Investor FAQs</h2>
            <div class="accordion" id="inverstor-faqs">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ifs-title1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ifs-content1" aria-expanded="true" aria-controls="ifs-content1">Which are the stock exchanges where the Company shares are listed?</button>
                        </h2>
                        <div id="ifs-content1" class="accordion-collapse collapse show" aria-labelledby="ifs-title1" data-bs-parent="#inverstor-faqs">
                            <div class="accordion-body">
                                <p>Affle (India) Limited is listed on both NSE and BSE.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ifs-title2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifs-content2" aria-expanded="false" aria-controls="ifs-content2">When did the company have its initial public offering (IPO) and at what price were the shares offered?</button>
                        </h2>
                        <div id="ifs-content2" class="accordion-collapse collapse" aria-labelledby="ifs-title2" data-bs-parent="#inverstor-faqs">
                            <div class="accordion-body">
                                <p>The Company was listed on August 8, 2019, for cash at a price of Rs. 745 per equity share, including a share premium of Rs. 735 per equity share (The "Offer Price"), aggregating to a capital of Rs.4,590 million.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ifs-title3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifs-content3" aria-expanded="false" aria-controls="ifs-content3">What is financial year period for Affle?</button>
                        </h2>
                        <div id="ifs-content3" class="accordion-collapse collapse" aria-labelledby="ifs-title3" data-bs-parent="#inverstor-faqs">
                            <div class="accordion-body">
                                <p>We follow a financial year period starting from April 1 to March 31</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ifs-title4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifs-content4" aria-expanded="false" aria-controls="ifs-content4">What is the complete address of Company’s corporate office?</button>
                        </h2>
                        <div id="ifs-content4" class="accordion-collapse collapse" aria-labelledby="ifs-title4" data-bs-parent="#inverstor-faqs">
                            <div class="accordion-body">
                                <p><b>Registered Office:</b> 102, Wellington Business Park-I, Off Andheri Kurla Road, Marol, Andheri (East), Mumbai – 400059, Maharashtra</p>
                                <p><b>Corporate Office:</b> 601-612, 6th Floor, Tower C, JMD Megapolis, Sohna Road, Sector 48, Gurgaon - 122 018</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ifs-title5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifs-content5" aria-expanded="false" aria-controls="ifs-content5">What is the Company’s CIN Number</button>
                        </h2>
                        <div id="ifs-content5" class="accordion-collapse collapse" aria-labelledby="ifs-title5" data-bs-parent="#inverstor-faqs">
                            <div class="accordion-body">
                                <p>CIN: L65990MH1994PLC080451</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ifs-title6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifs-content6" aria-expanded="false" aria-controls="ifs-content6">What is the Company’s ISIN Number</button>
                        </h2>
                        <div id="ifs-content6" class="accordion-collapse collapse" aria-labelledby="ifs-title6" data-bs-parent="#inverstor-faqs">
                            <div class="accordion-body">
                                <p>ISIN: INE00WC01019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="irc-section" id="ir-contact">
        <div class="irc-section-inner">
            <h2 class="title">Investor Relations Contact</h2>
            <div class="box-section">
                <div class="box">
                    <div class="box-inner">
                        <h3 class="title">For Investors and Analysts, <span>Please Contact:</span></h3>
                        <div class="box-item">
                            <h4 class="name">Kapil Bhutani</h4>
                            <span>Chief Financial & Operations Officer</span>
                        </div>
                        <div class="box-item">
                            <h4 class="name">Karish Manchanda</h4>
                            <span>Investor Relations & Strategy</span>
                        </div>
                        <div class="box-item">
                            <span class="text">Email: <a href="mailto:investor.relations@affle.com">investor.relations@affle.com</a></span>
                            <span class="text">Tel: <a href="tel:+911244992914">+91 124 4992 914</a></span>
                        </div>
                    </div>
                    <div class="box-inner">
                        <h3 class="title">For investor grievance and compliance related queries, please contact</h3>
                        <div class="box-item">
                            <h4 class="name">Compliance Officer</h4>
                        </div>
                        <div class="box-item">
                            <span class="text">Email: <a href="mailto:compliance@affle.com">compliance@affle.com</a></span>
                            <span class="text">Tel: <a href="tel:+911244992914">+91 124 4992 914</a></span>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-inner">
                        <h3 class="title">Contact Details of our Share Registrar <span>and Transfer Agent</span></h3>
                        <div class="box-item">
                            <h4 class="name name2">KFin Technologies Private Limited <span>(formerly known as Karvy Fintech Private</span> <span>Limited)</span></h4>
                            <span>Karvy Selenium Tower B Plot 31-32, Gachibowli </span>
                            <span>Financial District, Nanakramguda Hyderabad </span>
                            <span>500 032, India</span>
                        </div>
                        <div class="box-item">
                            <span class="text">Tel: <a href="tel:+914067162222">+91 40 6716 2222</a></span>
                            <span class="text">Fax: <a href="#">+91 40 2343 1551</a></span>
                            <span class="text">Email: <a href="mailto:einward.ris@karvy.com">einward.ris@karvy.com</a></span>
                            <span class="text">Investor Grievance E-mail: <a href="mailto:affletechnology.ipo@karvy.com">affletechnology.ipo@karvy.com</a></span>
                            <span class="text">Website: <a href="https://karisma.karvy.com">https://karisma.karvy.com</a></span>
                            <span class="text text2">SEBI Registration No.: INR000000221</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection