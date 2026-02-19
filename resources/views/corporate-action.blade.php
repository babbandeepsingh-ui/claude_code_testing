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
                <h1 class="title">Corporate <span>Actions</span></h1>
            </div>
            
            <div class="accordion" id="corporate-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cp-title">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cp-content" aria-expanded="true" aria-controls="cp-content">Placement Document</button>
                    </h2>
                    <div id="cp-content" class="accordion-collapse collapse show" aria-labelledby="cp-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Placement Document May 04, 2021</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="cbc-title">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cbc-content" aria-expanded="false" aria-controls="cbc-content">Special Purpose Interim Condensed Financial Statements</button>
                    </h2>
                    <div id="cbc-content" class="accordion-collapse collapse" aria-labelledby="cbc-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                            <li><a href="{{asset('images/pdf/2021/Special Purpose Interim Condensed Consolidated Financial Statements As at and For the Nine Months Ended December 31, 2020.pdf')}}" target="_blank">Special Purpose Interim Condensed Consolidated Financial Statements As at and For the Nine Months Ended December 31, 2020</a></li>
                            <li><a href="{{asset('images/pdf/2021/Special Purpose Interim Condensed Consolidated Financial Statements As at and For the Nine Months Ended December 31, 2019.pdf')}}" target="_blank"> Special Purpose Interim Condensed Consolidated Financial Statements As at and For the Nine Months Ended December 31, 2019 </a></li>

                            <li><a href="{{asset('images/pdf/2021/Special Purpose Interim Condensed Standalone Financial Statements As at and For the Nine Months Ended December 31, 2020.pdf')}}" target="_blank"> Special Purpose Interim Condensed Standalone Financial Statements As at and For the Nine Months Ended December 31, 2020 </a></li>

                            <li><a href="{{asset('images/pdf/2021/Special Purpose Interim Condensed Standalone Financial Statements As at and For the Nine Months Ended December 31, 2019.pdf')}}" target="_blank"> Special Purpose Interim Condensed Standalone Financial Statements As at and For the Nine Months Ended December 31, 2019  </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ipo-pros-title">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ipo-pros-content" aria-expanded="false" aria-controls="ipo-pros-content">IPO Prospectus</button>
                    </h2>
                    <div id="ipo-pros-content" class="accordion-collapse collapse" aria-labelledby="ipo-pros-title" data-bs-parent="#corporate-accordion">
                        <div class="accordion-body">
                            <ul>
                                <li> <a href="{{asset('images/pdf/2021/Yovember - Prospectus- 01082019_1845 - Filing Version.pdf')}}" target="_blank">Download Pdf</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="modal"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Important Disclaimer </strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="main_pop_IR">
      <p><strong>Important Disclaimer </strong></p>
      <p>PLEASE   READ   THIS   DISCLAIMER   CAREFULLY   AND   AGREE   WITH   THE   TERMS   AND CONDITIONS OF THIS DISCLAIMER BEFORE CONTINUING. IT APPLIES TO ALL PERSONS WHO VIEW THIS  WEBSITE. VIEWING THIS INFORMATION MAY NOT BE LAWFUL IN CERTAIN JURISDICTIONS. PLEASE NOTE THAT THE DISCLAIMER SET OUT BELOW MAY BE ALTERED OR UPDATED. YOU SHOULD READ IT IN FULL EACH TIME YOU VISIT THE WEBSITE.<p>
      <p>THESE MATERIALS ARE NOT DIRECTED AT OR INTENDED TO BE ACCESSED BY PERSONS OUTSIDE INDIA.</p>
      <p>The following disclaimer applies to the placement  document (the “Placement Document”) in relation to the qualified institutions placement of equity shares (“Equity Shares”) of Affle (India) Limited (the “Company”). You are advised to read this disclaimer carefully before reading, accessing or making any other use of the Placement Document. By accessing the Placement Document, you agree to follow the following terms and conditions, including any modifications to them from time to time.</p>
      <p>The Placement Document presented herein is made available by the Company on this website in electronic form solely to comply with the provisions of the Securities and Exchange Board of India (Issue of Capital and Disclosure Requirements) Regulations, 2018, as amended (the “SEBI ICDR Regulations”) and the Companies Act, 2013, as amended (“Companies Act”). </p>
      
      <p>The offer of the Equity Shares referred to in the  Placement Document is being made in reliance upon Chapter VI of the SEBI ICDR Regulations, and Sections 42 and 62 of the Companies Act read withRule 14 of the Companies (Prospectus and Allotment of Securities) Rules, 2014, as amended and is meant only for qualified institutional buyers (as defined in the SEBI ICDR Regulations) (“QIBs”) on a private placement basis and is not an offer to the public or to any other class of investors. The  Placement Document has not been and will not be registered or filed as a prospectus or a statement in lieu of prospectus with the offices of the Registrar of Companies (“RoC”) in India under the Companies Act. The  Placement Document has not been reviewed or approved by any regulatory authority in India or abroad, including the Securities and Exchange Board of India, the RoC or any stock exchange in India.</p>
      <p>Unless a pre-numbered preliminary placement document has been addressed to a specific QIB inviting such QIB to make a bid through such application form, no offer and/or invitation of offer shall be deemed to have been made.</p>
      <p>None of the Company, the BRLMs (as defined in the  Placement Document) or their respective affiliates accepts any liability whatsoever, direct or indirect, that may arise from the use of the information contained   on   this   website.  Access   to   the      Placement   Document   does   not   constitute a recommendation by the Company, the BRLMs or any of their respective affiliates or any other party to subscribe to the Equity Shares.</p>
      <p>The information in the  Placement Document is as of the date thereof unless specified therein, and none of the Company, the BRLMs or their respective affiliates or any of the Company’s or the BRLMs’ respective directors, officers, employees, agents, representatives or advisers accept any liability whatsoever, direct or indirect, that may arise from the use of the information contained on this website or are under any obligation to update or revise the  Placement Document to reflect circumstances arising after the date thereof.</p>
      <p>The Equity Shares have not been and will not be registered under the U.S. Securities Act of 1933, as amended (the “U.S. Securities Act”), or the securities laws of any state of the United States and may not be offered or sold in the Unites States, except pursuant to an exemption from, or in a transaction not subject to, the registration requirements of the U.S. Securities Act and applicable state securities laws. The Equity
      Shares are being offered and sold only outside the United States in reliance on Regulation S under the U.S. Securities Act. The  Placement Document may not be viewed by any person located in the United States.</p>
      <p>The Equity Shares may not be offered or sold and the  Placement Document may not be distributed, directly or indirectly, in or into any jurisdiction if to do so would constitute a violation of the relevant laws of, or require registration thereof in, such jurisdiction.</p>
      <p>You are hereby notified that any forwarding, delivery, distribution or reproduction of the  Placement Document, in whole or in part, is strictly prohibited. Failure to comply with this disclaimer may result in a violation of the applicable laws. If you access the  Placement Document, you agree not to forward, deliver or distribute it, in whole or in part, to any other person. </p>
      <p>You are accessing this website at your own risk. None of the Company, the BRLMs or any of their respective affiliates, directors, or employees will be liable or have any responsibility of any kind for any loss or damage that you incur in the event of any failure or disruption of this website, or resulting from the act or omission of any other party involved in making this website or the data contained therein available to you, or from any other cause relating to your access to, inability to access, or use of the website or these materials.</p>
      <p>You are reminded that documents transmitted in electronic form may be altered or changed during the process of transmission and consequently neither the Company, the BRLMs nor any of their respective affiliates nor their respective directors, officers, employees, agents, representatives or advisers accept any liability or responsibility whatsoever in respect of alterations or changes which may have taken place during the course of transmission of the  Placement Document in electronic format.</p>
      <p>You are responsible for protecting against viruses and other destructive items. You are accessing this website at your own risk and it is your responsibility to take precautions to ensure that it is free from viruses and other items of a destructive nature.</p>
      <p>You are reminded that you are accessing the  Placement Document on the basis that you are located in India. If this is not the case or if you do not agree to the terms contained in this notice, then you must not access the  Placement Document.</p>
      <p>If you are not permitted to view the  Placement Document or are in any doubt as to whether you are permitted to view the  Placement Document, please exit this webpage</p>
      <p><strong>Confirmation of your acceptance of the terms and conditions</strong></p>
      <p>By clicking on the “I Agree button below you represent to the Company and the BRLMs that: </p>
      <ul>
      <li>1. You have read the disclaimer set out above and you agree to be bound by its terms; </li>
      <li>2. You are currently located in India; and </li>
      <li>3. You are permitted to view the  Placement Document in accordance with the above terms.</li>
      </ul>
    </div>
      </div>
      <div class="modal-footer">
      <a href="{{asset('images/pdf/2021/Placement Document May 4, 2021.pdf')}}" target="_blank"> <button type="button" class="btn btn-primary">I Agree</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">I Do Not Agree</button>
 
      </div>
    </div>
  </div>
</div>




@endsection