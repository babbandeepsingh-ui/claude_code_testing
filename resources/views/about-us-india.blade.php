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

    <section class="about-us-india-section innerpage-padding">
        <div class="about-us-india-section-inner">
            <div class="content-box">
                <h1 class="title">About Us</h1>
                <p>Affle (India) Limited (“Affle India” or the “Company” or “AIL”) started its business in 2006 and was publicly listed on BSE and NSE on August 8, 2019. The Company is registered in Mumbai and Corporate Office is in Gurgaon.</p>
                <p>Affle India is a global technology company with proprietary consumer intelligence platform that delivers consumer acquisitions, engagements and transactions through relevant mobile advertising.</p>
            </div>
            <div class="image-box">
                <div class="image-box-inner">
                    <img src="{{asset('images/about-us-india.jpg')}}" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.our-platform')
    
    <section class="management-section about-us-india-management">
        <div class="management-section-inner">
            <h3 class="title text-center">Board Of Directors</h3>
            <div class="members-list">
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup1">
                        <div class="member-image">
                            <img src="{{asset('images/Anuj_khana.jpg')}}" alt="Anuj Khanna Sohum" class="img-fluid front-image">
                            <img src="{{asset('images/Anuj_khana.jpg')}}" alt="Anuj Khanna Sohum" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Anuj Khanna Sohum</span>
                            <span class="position">Founder, Chairman & Chief Executive Officer</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup1" tabindex="-1" aria-labelledby="mb-popup1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/Anuj_khana.jpg')}}" alt="Anuj Khanna Sohum" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Anuj Kumar</h4>
                                            <h6 class="position">Co-Founder, Chief Revenue & Operating Officer</h6>
                                        </div>
                                        <p>Anuj's entrepreneurial leadership & strategic vision has set Affle on the growth path to be the global audience & data platform for both commerce and brand customers. He aims to address industry challenges including digital fraud and data privacy through technology innovations. Anuj ensures strategic alignment across all key stakeholders resulting in sustainable growth & value creation.</p>
                                        <p>Anuj is a serial entrepreneur with 18 years of experience in leading tech & data platform-based businesses. He is an alumnus of Harvard Business School (OPM), Stanford GSB (SEP) & NUS Computer Engineering.</p>
                                        <a href="https://www.linkedin.com/pub/anuj-khanna-sohum/1/753/9a4" target="_blank" class="social-url">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="close-btn" data-bs-dismiss="modal">
                                    <img src="{{asset('images/cross.png')}}" alt="" class="img-fluid" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup2">
                        <div class="member-image">
                            <img src="{{asset('images/anuj_kumar.jpg')}}" alt="Anuj Kumar" class="img-fluid front-image">
                            <img src="{{asset('images/anuj_kumar.jpg')}}" alt="Anuj Kumar" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Anuj Kumar</span>
                            <span class="position">Co-Founder, Chief Revenue & Operating Officer</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup2" tabindex="-1" aria-labelledby="mb-popup2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/anuj_kumar.jpg')}}" alt="Anuj Kumar" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Anuj Kumar</h4>
                                            <h6 class="position">Co-Founder, Chief Revenue & Operating Officer</h6>
                                        </div>
                                        <p>Anuj has played a pivotal role in building & growing Affle. He has helped forge important partnerships, integral to Affle’s business, thus helping to make Affle a leading Mobile platform company. Under his leadership, the team has worked with several top marketers globally to help deliver end-to-end mobile advertising and data analytics-driven solutions through Affle’s products and platforms. Prior to Affle, Anuj worked with large global media companies like ESPN STAR Sports, GroupM Mindshare and JWT.</p>
                                        <p>Anuj has over 17 years of relevant media and advertising industry experience and holds a Bachelor’s degree in Economics from St. Stephen's College and a Masters in Advertising & Communication from MICA in India.</p>
                                        <a href="http://in.linkedin.com/in/anujk" target="_blank" class="social-url">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="close-btn" data-bs-dismiss="modal">
                                    <img src="{{asset('images/cross.png')}}" alt="" class="img-fluid" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup19">
                        <div class="member-image">
                            <img src="{{asset('images/mei-theng.jpg')}}" alt="Mei Theng Leong" class="img-fluid front-image">
                            <img src="{{asset('images/mei-theng.jpg')}}" alt="Mei Theng Leong" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Mei Theng Leong</span>
                            <span class="position">Chief Financial & Commercial Officer – International</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup19" tabindex="-1" aria-labelledby="mb-popup19" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/mei-theng.jpg')}}" alt="Mei Theng Leong" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Mei Theng Leong</h4>
                                            <h6 class="position">Chief Financial & Commercial Officer – International</h6>
                                        </div>
                                        <p>Mei Theng Leong leads finance and commercial functions for Affle International. She has played a pivotal role in the ERP implementation and the SG:Accreditation of Affle’s platform. She was previously the Group Financial Controller in a diversified group listed on Singapore Stock Exchange (“SGX-ST”). She has played an active role in corporate actions including investments & divestment opportunities as well as post-acquisition integration activities.</p>
                                        <p>Mei Theng Leong has 18 years of experience and she holds a Bachelor of Commerce Degree, majoring in Accounting and Finance from Curtin University of Technology and an MBA from The University of Hong Kong. She is also a fellow member of CPA of Australia.</p>
                                        <a href="#" target="_blank" class="social-url">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="close-btn" data-bs-dismiss="modal">
                                    <img src="{{asset('images/cross.png')}}" alt="" class="img-fluid" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup26">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Bijay Nawal" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Bijay Nawal" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Bijay Nawal</span>
                            <span class="position">Independent Non Executive Director</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup26" tabindex="-1" aria-labelledby="mb-popup26" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Bijay Nawal" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Bijay Nawal</h4>
                                            <h6 class="position">Independent Non Executive Director</h6>
                                        </div>
                                        <p>Bijay Nawal read law at Oxford University. He is a corporate lawyer with two decades of legal practice experience with a particular focus on M&A and regulatory work. He started practice as a litigation lawyer with Wong Partnership, a Singapore law practice, and later practiced with the Capital Markets and M&A teams of Shearman & Sterling, a US law firm. Bijay was a partner with Drew & Napier and oversaw various IPOs of local and foreign companies on both boards of the Singapore Stock Exchange. Bijay was the Managing Director of PwC’s network law firm in Singapore prior to him establishing the law firm, Oxon Law.</p>
                                        <a href="https://www.linkedin.com/in/bijay-nawal-27581613" target="_blank" class="social-url">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="close-btn" data-bs-dismiss="modal">
                                    <img src="{{asset('images/cross.png')}}" alt="" class="img-fluid" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup22">
                        <div class="member-image">
                            <img src="{{asset('images/sumit_chadha.jpg')}}" alt="Sumit Chadha" class="img-fluid front-image">
                            <img src="{{asset('images/sumit_chadha.jpg')}}" alt="Sumit Chadha" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Sumit Chadha</span>
                            <span class="position">Independent Non Executive Director</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup22" tabindex="-1" aria-labelledby="mb-popup22" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/sumit_chadha.jpg')}}" alt="Sumit Chadha" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Sumit Chadha</h4>
                                            <h6 class="position">Independent Non Executive Director</h6>
                                        </div>
                                        <p>Sumit has 30 years of multi-faceted experience in the Financial Services Industry having worked 20+ years with Citibank across various role; 2 years with BlackRock Services India Pvt. Ltd as Country Head & Managing Director; 3+ years running her management practice, consulting in diverse areas; 4+ years as Head of Enterprise Shared Services at AXA XL, a division of AXA, leading all the global shared services centers across India & Poland.</p>
                                        <p>Currently, she serves as an Independent Trustee on the Board of Trustees of Canara Robeco Mutual Fund since April 2016 and is advising a few start ups.</p>
                                        <p>Her expertise lies in Setting up/Scaling up operations, Strategy development & Execution excellence, Establishing relevant Governance & Risk frameworks, Leading Business & Digital Transformation, Driving Continuous Improvement, Experimentation & Innovation, Assembling, developing & leading high-impact leadership teams, Enhancing the value of Global Shared services organizations, Applying sound ethical judgement, Advising on Diversity & Inclusion practices.</p>
                                        <p>She is B.A. Economics (Hons) from St. Stephen’s College, University of Delhi and M.A. Economics from Delhi School of Economics and from University of California, Los Angeles, US. She is a recipient of many awards & recognitions during her academic and professional career."</p>
                                        <a href="https://www.linkedin.com/in/sumitmchadha/" target="_blank" class="social-url">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="close-btn" data-bs-dismiss="modal">
                                    <img src="{{asset('images/cross.png')}}" alt="" class="img-fluid" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup20">
                        <div class="member-image">
                            <img src="{{asset('images/vivek.jpg')}}" alt="Vivek N Gour" class="img-fluid front-image">
                            <img src="{{asset('images/vivek.jpg')}}" alt="Vivek N Gour" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Vivek N Gour</span>
                            <span class="position">Independent Non Executive Director</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup20" tabindex="-1" aria-labelledby="mb-popup20" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/vivek.jpg')}}" alt="Vivek N Gour" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Vivek N Gour</h4>
                                            <h6 class="position">Independent Non Executive Director</h6>
                                        </div>
                                        <p>Vivek has over 35 years of experience in marketing, financial services and aviation industry. Previously he has worked in Genpact India, GE Capital Services India and has also been the managing director and the chief executive officer of Air Works India (Engineering) Private Limited. Currently, he is also serving as a Director on the Board of IndiaMART InterMESH Limited and Cyient Ltd. He holds a bachelor’s degree in commerce from University of Bombay and a master’s degree in business administration from Faculty of Management Studies, University of Delhi. He also completed the Owner/ President Management Program from the Harvard Business School.</p>
                                        <a href="https://www.linkedin.com/in/vivek-n-gour-a3537321/" target="_blank" class="social-url">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="close-btn" data-bs-dismiss="modal">
                                    <img src="{{asset('images/cross.png')}}" alt="" class="img-fluid" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about-us-india-section3">
        <div class="about-us-india-section3-inner">
            <div class="box1 box">
                <div class="box-inner">
                    <div class="box-content">
                        <a href="{{url('about#management-team')}}">
                            <h3 class="title">Management Team</h3>
                            <span>Affle India</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box2 box">
                <div class="box-inner">
                    <div class="box-content">
                        <a href="{{url('about#milestone-history')}}">
                            <h3 class="title">Group History</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box3 box">
                <div class="box-inner">
                    <div class="box-content">
                        <a href="#">
                            <h3 class="title">Press Release</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection