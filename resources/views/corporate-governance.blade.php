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
    
    <section class="corporate-governance innerpage-padding">
        <div class="corporate-governance-inner">
            <div class="title-section">
                <h1 class="title">Corporate Policies & <span>Disclosures</span></h1>
                <p>Affle (India) Limited is a value-driven organisation with a purpose to establish a long-standing, trust-driven relationship with shareholders, employees, customers, suppliers and all other stakeholders. We always strive to ensure that our performance is driven by utmost integrity and transparency.</p>
                <p>To learn more about our Board composition and corporate governance policies, please refer to the following documents:</p>
            </div>
            
            <div class="accordion" id="corporate-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cp-title">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cp-content" aria-expanded="true" aria-controls="cp-content">Corporate Governance Policies</button>
                    </h2>
                    <div id="cp-content" class="accordion-collapse collapse show" aria-labelledby="cp-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/AIL_Code of Conduct of Directors and Senior Management.pdf')}}"  target="_blank">Code of Conduct of Directors and Senior Management</a></li>
                                <li><a href="{{asset('images/pdf/AIL_Policy on Board Diversity.pdf')}}"  target="_blank">Policy on Board Diversity</a></li>
                                <li><a href="{{asset('images/pdf/2021/AIL_Risk Management Policy.pdf')}}"  target="_blank">Risk Management Policy</a></li>
                                <li><a href="{{asset('images/pdf/AIL_Policy on Document Retention.pdf')}}"  target="_blank">Policy on Document Retention</a></li>
                                <li><a href="{{asset('images/pdf/Terms and conditions of appointment of Independent Directors.pdf')}}"  target="_blank">Terms and Conditions of Appointment of Independent Directors</a></li>
                                <li><a href="{{asset('images/pdf/Q4/Nomination & Remuneration Policy.pdf')}}"  target="_blank">Nomination & Remuneration Policy</a></li>
                                <li><a href="{{asset('images/pdf/2021/Policy on Related Party Transactions.pdf')}}" target="_blank" >Policy on Related Party Transactions</a></li>
                                <li><a href="{{asset('images/pdf/Policy on Determination of Materiality of Disclosures.pdf')}}"  target="_blank">Policy on Determination of Materiality of Disclosures</a></li>
                                <li><a href="{{asset('images/pdf/2021/Policy for determining material subsidiaries.pdf')}}"  target="_blank">Policy for Determining Material Subsidiaries</a></li>
                                <li><a href="{{asset('images/pdf/Contact Details of Authorized Officers to Determine Materiality.pdf')}}"  target="_blank">Contact Details of Authorized Officers to Determine Materiality</a></li>
                                <li><a href="{{asset('images/pdf/Whistle Blower Policy.pdf')}}"  target="_blank">Whistle Blower Policy</a></li>
                                <li><a href="{{asset('images/pdf/Business Responsibility Policy.pdf')}}"  target="_blank">Business Responsibility Policy</a></li>
                                <li><a href="{{asset('images/pdf/Dividend Distribution Policy.pdf')}}"  target="_blank">Dividend Distribution Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cbc-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cbc-content" aria-expanded="false" aria-controls="cbc-content">Composition of Board and its Committees</button>
                    </h2>
                    <div id="cbc-content" class="accordion-collapse collapse" aria-labelledby="cbc-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                            <li><a href="{{asset('images/pdf/2021/Composition-of-Board-of-Directors-and-Board-Committees.pdf')}}" target="_blank">Composition of Board of Directors and Board Committees 2021-22</a></li>
                            <li><a href="{{asset('images/pdf/Composition-of-Board-of-Directors-and-Board-Committees-2020.pdf')}}" target="_blank">Composition of Board of Directors and Board Committees 2020-21</a></li>
                            <li><a href="{{asset('images/pdf/Composition of Board of Directors and Board Committees.pdf')}}" target="_blank">Composition of Board of Directors and Board Committees 2019-20</a></li>
                </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="bfp-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bfp-content" aria-expanded="false" aria-controls="bfp-content">Board Familiarization Programme</button>
                    </h2>
                    <div id="bfp-content" class="accordion-collapse collapse" aria-labelledby="bfp-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                            <li><a href="{{asset('images/pdf/2021/Policy on Familiarization Program for Independent Directors.pdf')}}" target="_blank">Policy on Familiarization Program for Independent Directors</a></li>
                  
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="itpc-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itpc-content" aria-expanded="false" aria-controls="itpc-content">Insider Trading Prohibition Code</button>
                    </h2>
                    <div id="itpc-content" class="accordion-collapse collapse" aria-labelledby="itpc-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Insider Trading Prohibition Code.pdf')}}" target="_blank">Insider Trading Prohibition Code</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cgr-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cgr-content" aria-expanded="false" aria-controls="cgr-content">Corporate Governance Report</button>
                    </h2>
                    <div id="cgr-content" class="accordion-collapse collapse" aria-labelledby="cgr-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report as of June 30, 2021 (1).pdf')}}" target="_blank">Corporate Governance Report <span>(As of June 30, 2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/2021/Corporate Governance Report as of March 31, 2021.pdf')}}" target="_blank">Corporate Governance Report <span>(As of March 31, 2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report as of December 31, 2020.pdf')}}" target="_blank">Corporate Governance Report <span>(As of December 31, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report as of September 30, 2020.pdf')}}" target="_blank">Corporate Governance Report <span>(As of September 30, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report as of June 30 2020.pdf')}}" target="_blank">Corporate Governance Report <span>(As of June 30, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report for quarter ended Mar 31, 2020.pdf')}}" target="_blank">Corporate Governance Report <span>(As of March 31, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report for quarter ended Dec 31, 2019.pdf')}}" target="_blank">Corporate Governance Report <span>(As of December 31, 2019)</span></a></li>
                                <li><a href="{{asset('images/pdf/Corporate Governance Report for quarter ended Sep 30, 2019.pdf')}}" target="_blank">Corporate Governance Report <span>(As of September 30, 2019)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="sdv-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sdv-content" aria-expanded="false" aria-controls="sdv-content">Statement of Deviation or Variation</button>
                    </h2>
                    <div id="sdv-content" class="accordion-collapse collapse" aria-labelledby="sdv-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/2021/Statement of deviation or variation ( As of June 30, 2021).pdf')}}" target="_blank">Statement of Deviation or Variation <span>(As of June 30, 2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/2021/Statement of deviation or variation ( As of March 31, 2021).pdf')}}" target="_blank">Statement of Deviation or Variation <span>(As of March 31, 2021)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="rpt-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rpt-content" aria-expanded="false" aria-controls="rpt-content">Related Party Transactions</button>
                    </h2>
                    <div id="rpt-content" class="accordion-collapse collapse" aria-labelledby="rpt-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Related Party Transaction (As on March 31, 2021).pdf')}}" target="_blank">Related Party Transaction <span>(As of March 31, 2021)</span></a></li>
                                <li><a href="{{asset('images/pdf/Related Party Transaction on consolidated basis for half year period (As of September 30, 2020).pdf')}}" target="_blank">Related Party Transaction <span>(As of September 30, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Related Party Transaction on consolidated basis for half year period (As of March 31, 2020).pdf')}}" target="_blank">Related Party Transaction <span>(As of March 31, 2020)</span></a></li>
                                <li><a href="{{asset('images/pdf/Related Party Transaction on consolidated basis for half year period (As of September 30, 2019).pdf')}}" target="_blank">Related Party Transaction <span>(As of September 30, 2019)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ar-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ar-content" aria-expanded="false" aria-controls="ar-content">Annual Return</button>
                    </h2>
                    <div id="ar-content" class="accordion-collapse collapse" aria-labelledby="ar-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                            <li><a href="{{asset('images/pdf/Q4/Annual Return for financial year ended March 31, 2021.pdf')}}" target="_blank">Annual Return FY2020-21</a></li>
                  <li><a href="{{asset('images/pdf/Q4/Annual Return for financial year ended March 31, 2020.pdf')}}" target="_blank">Annual Return FY2019-20</a></li>
                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="scr-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#scr-content" aria-expanded="false" aria-controls="scr-content">Secretarial Compliance Report</button>
                    </h2>
                    <div id="scr-content" class="accordion-collapse collapse" aria-labelledby="scr-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/Q4/Secretarial Compliance Report.pdf')}}" target="_blank">Secretarial Compliance Report <span>(As of March 31, 2021)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="csr-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#csr-content" aria-expanded="false" aria-controls="csr-content">Corporate Social Responsibility</button>
                    </h2>
                    <div id="csr-content" class="accordion-collapse collapse" aria-labelledby="csr-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="{{asset('images/pdf/2021/CSR_Policy.pdf')}}" target="_blank">Policy on Corporate Social Responsibility</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="shp-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shp-content" aria-expanded="false" aria-controls="shp-content">Shareholding Pattern</button>
                    </h2>
                    <div id="shp-content" class="accordion-collapse collapse" aria-labelledby="shp-title" data-bs-parent="#corporate-accordion">
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
                    <h2 class="accordion-header" id="others-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#others-content" aria-expanded="false" aria-controls="others-content">Others</button>
                    </h2>
                    <div id="others-content" class="accordion-collapse collapse" aria-labelledby="others-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                            <li><a href="{{asset('images/pdf/Affle (India) Limited_MOA.pdf')}}" target="_blank">Memorandum of Association</a></li>
                    <li><a href="{{asset('images/pdf/Affle (India) Limited_AOA.pdf')}}" target="_blank">Article of Association</a></li>
                  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection