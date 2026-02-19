@extends('layout.app')

@section('content')

<main>
    <section class="about-section1 innerpage-padding">
        <div class="about-section1-inner">
            <h1 class="title">Driven by Passion, Innovation and <br>Entrepreneurial Commitment</h1>
            <div class="stats-box">
                <div class="stats-item">
                    <span class="numbers counter">20+</span>
                    <span class="text">Countries</span>
                </div>
                <div class="stats-item">
                    <span class="numbers counter">480+</span>
                    <span class="text">Poeples</span>
                </div>
                <div class="stats-item">
                    <span class="numbers counter">35+</span>
                    <span class="text">Languages</span>
                </div>
            </div>
        </div>
        <div class="about-carousel-section">
            <div class="about-carousel-section-inner">
                <div class="owl-carousel owl-theme" id="about-carsousel">
                    <div class="item">
                        <img src="{{asset('images/image_one.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/image_two.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/image_three.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/image_four.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/image_five.png')}}" alt="" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-we-do">
        <div class="what-we-do-inner">
            <h2 class="title">What We Do</h2>
            <p>Affle is a global technology company with a proprietary consumer intelligence platform that transforms ads into recommendations to drive ROI, delivering consumer engagement, acquisitions, and transactions.Affle India successfully completed its IPO in India on 08.08.19 and now trades on the stock exchanges (BSE: 542752 & NSE: AFFLE).</p>
        </div>
    </section>
    
    <section class="product-milestone" id="milestone-history">
        <div class="product-milestone-inner">
            <h3 class="title text-center">Corporate & Product Milestones</h3>
            <div class="milestone-box text-center">
                <img src="{{asset('images/milestone.png')}}" alt="" class="img-fluid" loading="lazy">
            </div>

            <div class="show-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 25 30"><g transform="translate(899.852 -56.148)"><g transform="translate(-152 4)"><g class="a" transform="translate(-744 55.5)"><ellipse class="c" cx="9" cy="9.5" rx="9" ry="9.5"/><ellipse class="d" cx="9" cy="9.5" rx="8.5" ry="9"/></g><path class="b" d="M28.2,15.352A12.852,12.852,0,1,0,15.352,28.2,12.863,12.863,0,0,0,28.2,15.352ZM9.048,17l2-2,2.895,2.895v-9.9h2.814v9.9L19.653,15l2,2-6.3,6.277Z" transform="translate(-750.352 49.648)"/></g></g></svg>
                <span>View All Milestones</span>
            </div>
            
            <div class="show-less">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 25 30"><g transform="translate(899.852 -56.148)"><g transform="translate(-152 4)"><g class="a" transform="translate(-744 55.5)"><ellipse class="c" cx="9" cy="9.5" rx="9" ry="9.5"/><ellipse class="d" cx="9" cy="9.5" rx="8.5" ry="9"/></g><path class="b" d="M28.2,15.352A12.852,12.852,0,1,0,15.352,28.2,12.863,12.863,0,0,0,28.2,15.352ZM9.048,17l2-2,2.895,2.895v-9.9h2.814v9.9L19.653,15l2,2-6.3,6.277Z" transform="translate(-750.352 49.648)"/></g></g></svg>
                <span>View Less</span>
            </div>
        </div>
    </section>

    @include('inc.our-platform')

    <section class="management-section" id="management-team">
        <div class="management-section-inner">
            <h3 class="title text-center">Management Team</h3>
            <span class="title-text">Affle India</span>
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup3">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Kapil Bhutani" class="img-fluid front-image">
                            <img src="{{asset('images/kapil_bhutani.jpg')}}" alt="Kapil Bhutani" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Kapil Bhutani</span>
                            <span class="position">Chief Financial & Operations Officer</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup3" tabindex="-1" aria-labelledby="mb-popup3" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/kapil_bhutani.jpg')}}" alt="Kapil Bhutani" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Kapil Bhutani</h4>
                                            <h6 class="position">Chief Financial & Operations Officer</h6>
                                        </div>
                                        <p>Kapil leads the finance for Affle Group & is also responsible for operations including legal, IT, Admin & HR. Kapil has worked as an audit partner at S. Mohan & Co, a highly respected Chartered Accountancy firm in India and subsequently joined KMG Infotech, a New York based software development company as VP, Finance. Kapil brings in a wealth of Finance, Operations and Legal expertise to Affle and has been part of Affle for >4 Years.</p>
                                        <p>Kapil has over 20 years of audit and industry experience He graduated from Delhi University and is a member of the Institute of Chartered Accountants of India.</p>
                                        <a href="https://www.linkedin.com/in/kapil-bhutani-343a1313/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup4">
                        <div class="member-image">
                            <img src="{{asset('images/vipul_kedia.jpg')}}" alt="Vipul Kedia" class="img-fluid front-image">
                            <img src="{{asset('images/vipul_kedia.jpg')}}" alt="Vipul Kedia" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Vipul Kedia</span>
                            <span class="position">Chief Data & Platforms Officer (Maas)</span>                        
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup4" tabindex="-1" aria-labelledby="mb-popup4" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/vipul_kedia.jpg')}}" alt="Vipul Kedia" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Vipul Kedia</h4>
                                            <h6 class="position">Chief Data & Platforms Officer (Maas)</h6>   
                                        </div>
                                        <p>As the leader of the Data Operations team, Vipul is responsible for building tools and teams to leverage multiple data signals leading to an effective realization of the ROI goals for Affle’s customers, while maintaining high quality. He has a keen interest in mobile advertising fraud and big data technologies. Vipul has been part of Affle for over 10 years and has played multiple roles across Business Development, Partnerships, Product and Operations in the company. Prior to joining Affle, Vipul worked with IBM business consulting specializing in the Telecom Practice.</p>
                                        <p>Vipul has over 13 years of experience in Consulting and Adtech. He holds a Bachelor of Technology in Computer Science Engineering from IIIT-Hyderabad and a Post Graduate Diploma in Management from Indian Institute of Management, Ahmedabad.</p>
                                        <a href="https://www.linkedin.com/pub/vipul-kedia/9/132/b34" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup5">
                        <div class="member-image">
                            <img src="{{asset('images/charles.jpg')}}" alt="Charles Yong" class="img-fluid front-image">
                            <img src="{{asset('images/charles.jpg')}}" alt="Charles Yong" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Charles Yong</span>
                            <span class="position">Chief Architect & Technology Officer</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup5" tabindex="-1" aria-labelledby="mb-popup5" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/charles.jpg')}}" alt="Charles Yong" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Charles Yong</h4>
                                            <h6 class="position">Chief Architect & Technology Officer</h6>
                                        </div>
                                        <p>Charles joined Affle in 2006. With over 20 years of experience, he leads all R&D and Technology efforts for Affle’s platforms as its Chief Architect. His team of engineers is responsible for building multiple Big Data and AI driven platforms at Affle. Charles also plays an active role to coach the lead architects at Affle on the innovation development lifecycle processes.</p>
                                        <p>Charles is a telecom industry veteran and an experienced technologist with over 20 years of consulting and programming design experience. He is an alumnus of the Monash University in Australia.</p>
                                        <a href="https://sg.linkedin.com/in/charlesyong" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup6">
                        <div class="member-image">
                            <img src="{{asset('images/madan.jpg')}}" alt="Madan Sabglikar" class="img-fluid front-image">
                            <img src="{{asset('images/madan.jpg')}}" alt="Madan Sabglikar" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                                <span class="name">Madan Sanglikar</span>
                                <span class="position">Co-Founder, Managing Partner - South East Asia & Chief Of Staff</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup6" tabindex="-1" aria-labelledby="mb-popup6" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/madan.jpg')}}" alt="Madan Sabglikar" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Anuj Kumar</h4>
                                            <h6 class="position">Co-Founder, Chief Revenue & Operating Officer</h6>
                                        </div>
                                        <p>Madan or Maddy, has been leading Affle’s agenda in SEA for over 5 years. With his experience of working with global brands & agency networks, Maddy has forged key partnerships to grow the business in a sustainable manner. Prior to Affle, Maddy worked with market leaders/ start-ups like Mindshare & GroupM, Starcom, Mediaturf & the Times Group.</p>
                                        <p>Maddy has over 20 years of experience in the Media Industry. Maddy holds a Bachelor’s Degree in Engineering from Mumbai University & MBA from Jamnalal Bajaj College in Mumbai, India.</p>
                                        <a href="#" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup7">
                        <div class="member-image">
                            <img src="{{asset('images/viraj.jpg')}}" alt="Viraj Sinh" class="img-fluid front-image">
                            <img src="{{asset('images/viraj.jpg')}}" alt="Viraj Sinh" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Viraj Sinh</span>
                            <span class="position">Co-Founder, Managing Partner - International (Maas)</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup7" tabindex="-1" aria-labelledby="mb-popup7" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/viraj.jpg')}}" alt="Viraj Sinh" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Viraj Sinh</h4>
                                            <h6 class="position">Co-Founder, Managing Partner - International (Maas)</h6>
                                        </div>
                                        <p>Viraj leads International Sales and has played a key role in growing Affle to new markets across the US, Middle East and Europe. Now with Affle for over 6 years, he started his entrepreneurial journey at Mobimasta, joining in post-acquisition of that company by Affle, and has since also been responsible for key initiatives such as publisher growth and management, product development and driving key partnerships for the company.</p>
                                        <p>Viraj has over 15 years of experience across advertising, media and technology. He holds a Bachelor in Economics degree from Delhi University and an MBA from Asian Institute of Management, Philippines.</p>
                                        <a href="https://www.linkedin.com/in/virajsinh" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup8">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Elad Natanson" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Elad Natanson" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Elad Natanson</span>
                            <span class="position">Chief Executive Officer (Appnext)</span>                        
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup8" tabindex="-1" aria-labelledby="mb-popup8" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Anuj Khanna Sohum" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Elad Natanson</h4>
                                            <h6 class="position">Chief Executive Officer (Appnext)</h6>
                                        </div>
                                        <p>Elad Natanson has been at the forefront of innovation for more than 17 years, founding companies in the digital space and focusing on the future of the internet, mobile user experience, products and revenue business models.</p>
                                        <p>Elad sets the strategic direction for Appnext and determines go-to-market strategies that enable it to achieve its vision of recommending users with the apps and services they need throughout their daily mobile journey. Elad has vast experience of evangelizing and leading startups from idea to established companies in various fields.</p>
                                        <a href="#" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup9">
                        <div class="member-image">
                            <img src="{{asset('images/noelia.jpg')}}" alt="Noelia Amoedo" class="img-fluid front-image">
                            <img src="{{asset('images/noelia.jpg')}}" alt="Noelia Amoedo" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Noelia Amoedo</span>
                            <span class="position">Chief Executive Officer (Mediasmart)</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup9" tabindex="-1" aria-labelledby="mb-popup9" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/noelia.jpg')}}" alt="Noelia Amoedo" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Noelia Amoedo</h4>
                                            <h6 class="position">Chief Executive Officer (Mediasmart)</h6>
                                        </div>
                                        <p>Anuj has played a pivotal role in building & growing Affle. He has helped forge important partnerships, integral to Affle’s business, thus helping to make Affle a leading Mobile platform company. Under his leadership, the team has worked with several top marketers globally to help deliver end-to-end mobile advertising and data analytics-driven solutions through Affle’s products and platforms. Prior to Affle, Anuj worked with large global media companies like ESPN STAR Sports, GroupM Mindshare and JWT.</p>
                                        <p>Anuj has over 17 years of relevant media and advertising industry experience and holds a Bachelor’s degree in Economics from St. Stephen's College and a Masters in Advertising & Communication from MICA in India.</p>
                                        <a href="https://www.linkedin.com/in/elad-natanson-652182/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup10">
                        <div class="member-image">
                            <img src="{{asset('images/martje.jpg')}}" alt="Martje Abeldt" class="img-fluid front-image">
                            <img src="{{asset('images/martje.jpg')}}" alt="Martje Abeldt" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Martje Abeldt</span>
                            <span class="position">Chief Revenue Officer (Revx)</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup10" tabindex="-1" aria-labelledby="mb-popup10" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/martje.jpg')}}" alt="Martje Abeldt" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Martje Abeldt</h4>
                                            <h6 class="position">Chief Revenue Officer (Revx)</h6>
                                        </div>
                                        <p>Noelia has extensive experience in the mobile, internet and social media, with a proven track record of success in developing profitable business from scratch in international markets. Her deep knowledge of the mobile industry has been forged working in different positions in the value chain, multiple business models across more than a dozen markets. Before becoming CEO at mediasmart, she held multiple executive positions such as VP of Marketing and Business Development for EMEA at Palm (acquired by HP), VP of Mobile for the social network Hi5 and Managing Director for Buongiorno USA (acquired by NTT DOCOMO).</p>
                                        <p>Noelia holds a Bachelor’s degree in Physics from Santiago de Compostela University (Spain) and a Master of Science in Electrical Engineering from Stanford, where she was a Fulbright Scholar.</p>
                                        <a href="https://www.linkedin.com/in/namoedo/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup11">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Sujoy Golan" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Sujoy Golan" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Sujoy Golan</span>
                            <span class="position">Chief Of Marketing & Omnichannel Platforms</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup11" tabindex="-1" aria-labelledby="mb-popup11" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Sujoy Golan" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Sujoy Golan</h4>
                                            <h6 class="position">Chief Of Marketing & Omnichannel Platforms</h6>
                                        </div>
                                        <p>Sujoy is Affle's chief storyteller and leads the Omnichannel Platforms business. He brings experience scaling consumer internet and enterprise businesses across SaaS(Unbxd), Adtech(InMobi), E-commerce (Flipkart), and Fintech(Lendingkart). In Sujoy's last role at Lendingkart, he was instrumental in building one of India's largest Fintechs in the SMB space.</p>
                                        <p>Sujoy has over 14 years of work experience and holds a degree in Bachelor of Engineering, Mechanical Engineering from Vellore Institute of Technology, and an MBA from Indian Institute of Management, Kozhikode.</p>
                                        <a href="https://www.linkedin.com/in/sujoygolan/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup12">
                        <div class="member-image">
                            <img src="{{asset('images/danny.jpg')}}" alt="Danny Tuttnauer" class="img-fluid front-image">
                            <img src="{{asset('images/danny.jpg')}}" alt="Danny Tuttnauer" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Danny Tuttnauer</span>
                            <span class="position">Chief Operating Officer (Appnext)</span>                        
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup12" tabindex="-1" aria-labelledby="mb-popup12" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/danny.jpg')}}" alt="Danny Tuttnauer" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Danny Tuttnauer</h4>
                                            <h6 class="position">Chief Operating Officer (Appnext)</h6>
                                        </div>
                                        <p>Danny leads the global operations of Appnext and is responsible for the finance & HR activities. Danny is a veteran entrepreneur with extensive knowledge & experience in bootstrapping and growth of media tech companies. Prior to Appnext, Danny led several startups, including a successful digital media tech company for 10 years. Danny’s motto is “Keep it simple”. He holds a bachelor’s degree in Business Administration & East Asian studies from the Hebrew University of Jerusalem and a Computer Practical Engineer degree from the Ort Tech College Israel.</p>
                                        <a href="https://www.linkedin.com/in/dannytuttnauer/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup13">
                        <div class="member-image">
                            <img src="{{asset('images/ankit.jpg')}}" alt="Ankit Rawal" class="img-fluid front-image">
                            <img src="{{asset('images/ankit.jpg')}}" alt="Ankit Rawal" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Ankit Rawal</span>
                            <span class="position">Director - Business Development & Partnerships (Maas)</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup13" tabindex="-1" aria-labelledby="mb-popup13" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/ankit.jpg')}}" alt="Ankit Rawal" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Ankit Rawal</h4>
                                            <h6 class="position">Director - Business Development & Partnerships (Maas)</h6>
                                        </div>
                                        <p>Ankit has 13+ years of experience working across both big companies like Microsoft & Oracle to upstarts like GreedyGame & InMobi. At InMobi he spent 6.5 years from the early founding days and was GM-India in its last remit. His expertise lies in converting white spaces into sustainable business revenues across several emerging markets of IN, SEA, MEA & China. He is currently Business Director & Partnerships at Affle leading the Vizury business. A digital enthusiast, mindful meditation practitioner and a professor for digital advertising at several B-schools.</p>
                                        <a href="https://www.linkedin.com/in/ankitrawal/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup14">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Eran Kariti" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Eran Kariti" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Eran Kariti</span>
                            <span class="position">Chief Technology Officer (Appnext)</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup14" tabindex="-1" aria-labelledby="mb-popup14" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Eran Kariti" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Eran Kariti</h4>
                                            <h6 class="position">Chief Technology Officer (Appnext)</h6>
                                        </div>
                                        <p>Eran Kariti is a technology executive who brings more than 20 years of cutting edge experience in the telecommunications, gaming and mobile domains. Prior to co-founding Appnext, Eran served as CTO of one of the biggest social game companies in the world (Teddy Sagi’s Investment group), where he was responsible for developing and evaluating investment opportunities. Eran was one of the founders of ooVoo, the largest, independent, video chat app and led the R&D and Technology teams. Prior to ooVoo, Eran served as VP R&D and Technology at Arel Communications and Software Ltd. (NASDAQ: ARLC). Eran is a recognized innovator, who has filed several patents in the communications, video and audio domains.</p>
                                        <a href="https://www.linkedin.com/in/erankariti/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup15">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Guillermo Fernandez Sanz" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Guillermo Fernandez Sanz" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Guillermo Fernandez Sanz</span>
                            <span class="position">Chief Technology Officer (Mediasmart)</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup15" tabindex="-1" aria-labelledby="mb-popup15" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Guillermo Fernandez Sanz" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Guillermo Fernandez Sanz</h4>
                                            <h6 class="position">Chief Technology Officer (Mediasmart)</h6>
                                        </div>
                                        <p>Guillermo joined mediasmart in 2012 as CTO. In his more than twenty years of experience, Guillermo has succeeded in executive roles in both Spanish and American companies in industries such as mobile, telecommunications and e-commerce. He has also had exposure to consulting and professional services and has launched several products of his own.</p>
                                        <p>Guillermo has a degree in Computer Science by the Universidad Autónoma in Madrid and has played various roles in product, operations, project management and consulting across organizations as Berggi, Hybris (acquired by SAP), Portal Software (acquired by Oracle), Andago and Buongiorno/Myalert.</p>
                                        <a href="https://www.linkedin.com/in/gfernandez/" target="_blank" class="social-url">
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
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup16">
                        <div class="member-image">
                            <img src="{{asset('images/nagendra.jpg')}}" alt="Nagendra Dhanakeerthi" class="img-fluid front-image">
                            <img src="{{asset('images/nagendra.jpg')}}" alt="Nagendra Dhanakeerthi" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Nagendra Dhanakeerthi</span>
                            <span class="position">Chief Technology Officer (Vizury)</span>                        
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup16" tabindex="-1" aria-labelledby="mb-popup16" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/nagendra.jpg')}}" alt="Nagendra Dhanakeerthi" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Nagendra Dhanakeerthi</h4>
                                            <h6 class="position">Chief Technology Officer (Vizury)</h6>
                                        </div>
                                        <p>Nagendra joins Affle in 2019 to lead the core engineering team of Affle’s Omnichannel Platforms. Shoffr was acquired by Affle to help brands drive footfall into their stores. Nagendra has over 10 years of experience, working in across countries building teams and developing enterprise products. He started his career at Milaap and has since worked with Ingenico, amongst other leaders in the tech and retail industry. Nagendra is a computer science engineer turned entrepreneur and is based out of Bangalore.</p>
                                        <a href="https://www.linkedin.com/in/nagstler/" target="_blank" class="social-url">
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
            <span class="title-text">Affle Holdings</span>
            <div class="members-list members-list-center">
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup18">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Madhusudana Ramakrishna" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Madhusudana Ramakrishna" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Madhusudana Ramakrishna</span>
                            <span class="position">Co-Founder, Director Of Innovation & Corporate Development</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup18" tabindex="-1" aria-labelledby="mb-popup18" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Madhusudana Ramakrishna" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Madhusudana Ramakrishna</h4>
                                            <h6 class="position">Co-Founder, Director Of Innovation & Corporate Development</h6>
                                        </div>
                                        <p>Madhusudana or Madhu, started Affle together with Anuj Khanna Sohum in 2005 and played a key role till 2007. In 2018 he was re-appointed as the Director of Innovation and Corporate Development for Affle Holdings Pte Ltd. Madhu has a strong background in mobile innovations in the telecom and financial industries. He is an experienced technologist who has built multiple products from ideation to launch and is the named inventor of 3 patents owned by Affle.</p>
                                        <p>Madhu has over 15 years of industry experience and is an alumnus of National University of Singapore (EEE) and Nanyang Business School (MBA) and he studied law for 2 years at the University of Birmingham.</p>
                                        <a href="https://www.linkedin.com/in/madhusudanaramakrishna" target="_blank" class="social-url">
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
            </div>
        </div>
        <div class="management-section-inner">
            <h3 class="title text-center">Non Executive Directors</h3>
            <span class="title-text">Affle India</span>
            <div class="members-list members-list-center">
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
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup21">
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
                    <div class="modal fade" id="mb-popup21" tabindex="-1" aria-labelledby="mb-popup21" aria-hidden="true">
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
            </div>
            <span class="title-text">Affle Holdings</span>
            <div class="members-list">
                <div class="members-list-item">
                    <div class="members-list-item-inner" data-bs-toggle="modal" data-bs-target="#mb-popup23">
                        <div class="member-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Richard Humphreys" class="img-fluid front-image">
                            <img src="{{asset('images/no-image.jpg')}}" alt="Richard Humphreys" class="img-fluid hover-image">
                        </div>
                        <div class="member-detail">
                            <span class="name">Richard Humphreys</span>
                            <span class="position">Non Executive Director</span>
                            <button class="read" type="button"><span>Read Bio</span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="15.663" viewBox="0 0 30 15.663"><path d="M28.463,44.668l-1.537-1.558-5.2,5.2V22.5H19.537V48.311l-5.2-5.2L12.8,44.668,20.632,52.5Z" transform="translate(-22.5 28.463) rotate(-90)"/></svg></button>
                        </div>
                    </div>
                    <div class="modal fade" id="mb-popup23" tabindex="-1" aria-labelledby="mb-popup23" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-content-inner">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{asset('images/no-image.jpg')}}" alt="Richard Humphreys" class="img-fluid" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="member-detail">
                                            <h4 class="name">Richard Humphreys</h4>
                                            <h6 class="position">Non Executive Director</h6>
                                        </div>
                                        <p>Richard Humphreys has a vast and rich experience in advertising and media and was previously the President of Saatchi & Saatchi. He was responsible for 63 companies with over five thousand employees in 27 countries. He has vast experience in many aspects of Advertising & Media.</p>
                                        <p>Richard started his career writing for BBC and ITV. He rose to be the Managing Director of an operating division of one of the first publicly listed UK agencies. Following this, he started his own advertising agency in 1978 and took it to the top twenty in the UK by the mid-eighties. His company was acquired by Saatchi & Saatchi. After serving as President, Richard moved on from Saatchi & Saatchi to become President of Adcom Investors, owner of a leading US advertising, new media, and sports marketing group of companies. He negotiated the sale of Adcom to Publicis.</p>
                                        <p>Over the last decade, Richard has advised some of the World’s leading media companies. Based primarily in London, he has been involved in the expansion of various new media companies in the US, television broadcasters in Russia and Japan, film and television production studios in the US and Mexico, and advertising companies in Europe.</p>
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
            </div>
        </div>
    </section>

    <section class="global-presence-section">
        <div class="global-presence-section-inner">
            <h3 class="title text-center">Our Global Presence</h3>
            <div class="map-image">
                <img src="{{asset('images/map.png')}}" alt="" class="img-fluid" loading="lazy">
            </div>
        </div>
    </section>

    <section class="investor-section">
        <div class="investor-section-inner">
            <h3 class="title text-center">Our Investors</h3>
            <p class="title-text">Affle Holdings ("AHPL")</p>
            <div class="investor-images text-center">
                <img src="{{asset('images/investors.png')}}" alt="" class="img-fluid" loading="lazy">
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>


@endsection