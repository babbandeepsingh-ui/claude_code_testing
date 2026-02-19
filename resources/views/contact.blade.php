@extends('layout.app')

@section('content')
<main>

    <section class="contact-section1 innerpage-padding">
        <div class="contact-section1-inner">
            <div class="form-section">
                <h1 class="title">Get In Touch</h1>
                <form class="contact-form">
                    <div class="contact-form-inner">
                        <div class="form-group">
                            <label class="label-text">Name</label>
                            <input type="text" id="hub_name" class="form-control form-input" name="name">
                        </div>
                        <div class="form-group">
                            <label class="label-text">Email<sup>*</sup></label>
                            <input type="email" id="hub_email" class="form-control form-input" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="label-text">Organization Name<sup>*</sup></label>
                            <input type="text" id="hub_company" class="form-control form-input" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Intrested In<sup>*</sup></label>
                            <select class="txt-field" name="interest" id="interest" required>
                                <option value="" disabled="disabled" selected="selected">Please Select</option>
                                <option value="Mobile Advertising - User Acquisition">Mobile Advertising - User Acquisition</option>
                                <option value="Mobile Advertising - User Acquisition">Mobile Advertising - Proximity Marketing</option>
                                <option value="Mobile Advertising - User Acquisition">Mobile Advertising - Omnichannel Retargeting</option>
                                <option value="Chat Bots">Chat Bots</option>
                                <option value="Data Management">Data Management</option>
                                <option value="Audience Intelligence">Audience Intelligence</option>
                                <option value="Fraud Detection">Fraud Detection</option>
                                <option value="Ad Monetization">Ad Monetization</option>
                                <option value="Rich Media &amp; Video">Rich Media &amp; Video</option>
                                <option value="App Developmen">App Development</option>
                                <option value="O2O Commerce">O2O Commerce</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-text">Mobile Number</label>
                            <input type="text" id="hub_mobile" class="form-control form-input" name="mobile">
                        </div>
                        <div class="form-group">
                            <label class="label-text">Skype ID</label>
                            <input type="text"  id="hub_skype" class="form-control form-input" name="skype">
                        </div>
                        <div class="form-group textarea-box">
                            <label class="label-text">Tell us a bit about your project</label>
                            <textarea name="description" id="hub_message" cols="30" rows="1" class="form-control form-input" maxlength="1000" spellcheck="false"></textarea>
                        </div>
                    </div>
                    <div class="form-button">
                        <input type="submit" class="btn btn--primary" id="addContact" value="Submit">
                        <input type="reset" class="btn btn--primary-outline" value="Reset ">
                    </div>
                </form>
            </div>
            <div class="address-section">
                <div class="address-section-inner">
                    <h3 class="title">For other queries, please write to us at:</h3>
                    <div class="details">
                        <div class="details-inner">
                            <span class="head">Partnerships</span>
                            <a href="mailto:partners@affle.com" class="highlight">partners@affle.com</a>
                        </div>
                        <div class="details-inner">
                            <span class="head">Data & Privacy</span>
                            <a href="mailto:dpo@affle.com" class="highlight">dpo@affle.com</a>
                        </div>
                        <div class="details-inner">
                            <span class="head">Investor</span>
                            <a href="mailto:investor.relations@affle.com" class="highlight">investor.relations@affle.com</a>
                        </div>
                        <div class="details-inner">
                            <span class="head">Media</span>
                            <a href="mailto:pr@affle.com" class="highlight">pr@affle.com</a>
                        </div>
                    </div>
                    <div class="social-networks">
                        <h3 class="title">Follow Us</h3>
                        <a href="https://www.facebook.com/affle" target="_blank" class="social-item"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/affle" target="_blank" class="social-item"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/afflers/?hl=en" target="_blank" class="social-item"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/affle/" target="_blank" class="social-item"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/channel/UCalYanQuQzlhmDZhi4qoInw" target="_blank" class="social-item"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="banner-bottom">
            <a href="#section2" class="btn"><img src="{{asset('images/scroll_icon-black.svg')}}" alt="" class="img-fluid" loading="lazy"><span>Scroll Down</span></a>
        </div>
    </section>

    <section class="address-location-section" id="section2">
        <div class="address-location-section-inner">
            <div class="title-section">
                <h3 class="title">Our Offices</h3>
            </div>
            <div class="office-address">
                <div class="office-address-list">
                    <ul class="nav flex-column nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-singapore" type="button" role="tab" aria-controls="pills-singapore" aria-selected="true">Singapore</button><span>Headquaters</span></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-india" type="button" role="tab" aria-controls="pills-india" aria-selected="false">India</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-israel" type="button" role="tab" aria-controls="pills-israel" aria-selected="false">Israel</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-spain" type="button" role="tab" aria-controls="pills-spain" aria-selected="false">Spain</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-argentina" type="button" role="tab" aria-controls="pills-argentina" aria-selected="false">Argentina</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-uae" type="button" role="tab" aria-controls="pills-uae" aria-selected="false">UAE</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-brazil" type="button" role="tab" aria-controls="pills-brazil" aria-selected="false">Brazil</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-cyprus" type="button" role="tab" aria-controls="pills-cyprus" aria-selected="false">Cyprus</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-indonesia" type="button" role="tab" aria-controls="pills-indonesia" aria-selected="false">Indonesia</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-united-states" type="button" role="tab" aria-controls="pills-united-states" aria-selected="false">United States</button></li>
                    </ul>
                </div>
                <div class="tab-content office-address-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-singapore" role="tabpanel" aria-labelledby="pills-singapore-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/singapore.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Singapore</h4>
                                    <p>100 Pasir Panjang Road, #06-07 Singapore, 118518</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-india" role="tabpanel" aria-labelledby="pills-india-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/india.png')}}" alt="India" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Gurugram</h4>
                                    <p>601 - 612, 6th Floor, Tower C, JMD Megapolis, Sector-48, Sohna Road, Gurgaon, Haryana - 122018, India</p>
                                </div>
                                <div class="address-detail-inner">
                                    <h4 class="name">Bangalore</h4>
                                    <p>IndiQube Lexington, situated at Municipal, No.18, 2nd Cross Road, Chikka Audugodi, Bengaluru - 560 029, India</p>
                                </div>
                                <div class="address-detail-inner">
                                    <h4 class="name">Mumbai</h4>
                                    <p>B-312, Kanakia Wall Street, Hanuman Nagar, Andheri East, Mumbai, Maharashtra 400047</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-israel" role="tabpanel" aria-labelledby="pills-israel-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/Israel.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Israel</h4>
                                    <p>Jabotinsky 9, Hachsharat Hayeshuv Tower, Bnei Brak, 5126417, IL, Israel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-spain" role="tabpanel" aria-labelledby="pills-spain-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/spain.png')}}" alt="Spain" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Spain</h4>
                                    <p>Calle García de Paredes 12, 1º B, Madrid, 28010</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-argentina" role="tabpanel" aria-labelledby="pills-argentina-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/argentina.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Argentina</h4>
                                    <p>Honduras 5952 Piso 1 Buenos Aires, C1414BNL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-uae" role="tabpanel" aria-labelledby="pills-uae-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/dubai.png')}}" alt="UAE" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">UAE</h4>
                                    <p>Affle MEA, Building 17, Office 351, Third Floor, Dubai Internet City, Dubai, UAE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-brazil" role="tabpanel" aria-labelledby="pills-brazil-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/brazil.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Brazil</h4>
                                    <p>R. Prof. Atilio Innocenti, 165 - 16º <span>Andar - Sala 119 São Paulo,</span> CEP 04538-000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-cyprus" role="tabpanel" aria-labelledby="pills-cyprus-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/cyprus.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Cyprus</h4>
                                    <p>Spyrou Kyprianou Leoforos 37, Floor 2, Kato Polemidia, Limassol 4154</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-indonesia" role="tabpanel" aria-labelledby="pills-indonesia-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/Indonesia.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">Indonesia</h4>
                                    <p>PT. Affle Indonesia, WeWork Noble House, Noble House, 30th Floor, Jl Dr. Ide Anak Agung Gde Agung Kav E.4. No. 2, Kuningan, Jakarta Selatan 12950</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-united-states" role="tabpanel" aria-labelledby="pills-united-states-tab">
                        <div class="tab-pane-inner">
                            <div class="image">
                                <img src="{{asset('images/united_states.png')}}" alt="Singapore" class="img-fluid" loading="lazy">
                            </div>
                            <div class="address-detail">
                                <div class="address-detail-inner">
                                    <h4 class="name">United States</h4>
                                    <p>7th Floor 650 California Street, San Francisco, CA 94108</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="office-address-mobile">
                <div class="office-address-mobile-inner">
                    <div class="address-item">
                        <h3 class="location-name">Singapore <span>Headquaters</span></h3>
                        <p>100 Pasir Panjang Road, #06-07 Singapore, 118518</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Gurugram - India</h3>
                        <p>601 - 612, 6th Floor, Tower C, JMD Megapolis, Sector-48, Sohna Road, Gurgaon, Haryana - 122018, India</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Bangalore - India</h3>
                        <p>IndiQube Lexington, situated at Municipal, No.18, 2nd Cross Road, Chikka Audugodi, Bengaluru - 560 029, India</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Mumbai - India</h3>
                        <p>B-312, Kanakia Wall Street, Hanuman Nagar, Andheri East, Mumbai, Maharashtra 400047</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Israel</h3>
                        <p>Jabotinsky 9, Hachsharat Hayeshuv Tower, Bnei Brak, 5126417, IL, Israel</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Spain</h3>
                        <p>Calle García de Paredes 12, 1º B, Madrid, 28010</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Argentina</h3>
                        <p>Honduras 5952 Piso 1 Buenos Aires, C1414BNL</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">UAE</h3>
                        <p>Affle MEA, Building 17, Office 351, Third Floor, Dubai Internet City, Dubai, UAE</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Brazil</h3>
                        <p>R. Prof. Atilio Innocenti, 165 - 16º Andar - Sala 119 São Paulo, CEP 04538-000</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Cyprus</h3>
                        <p>Spyrou Kyprianou Leoforos 37, Floor 2, Kato Polemidia, Limassol 4154</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">Indonesia</h3>
                        <p>PT. Affle Indonesia, WeWork Noble House, Noble House, 30th Floor, Jl Dr. Ide Anak Agung Gde Agung Kav E.4. No. 2, Kuningan, Jakarta Selatan 12950</p>
                    </div>
                    <div class="address-item">
                        <h3 class="location-name">United States</h3>
                        <p>7th Floor 650 California Street, San Francisco, CA 94108</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.newsletter')
</main>

@endsection