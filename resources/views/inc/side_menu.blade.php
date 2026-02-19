<div class="sidemenu">
    <div class="sidemenu-inner">
        <div class="sidemenu-content">

            <div class="sidemenu1" >
                <h2>Consumer Platform </h2>
                <button type="button" class="btn drop_btn" data-toggle="collapse" data-target="#forAdvertisers">For Advertisers<i class="fa fa-caret-down"></i></button>
                <div id="forAdvertisers">
                    <span><a href="{{url('mobile-marketing-platform')}}" class="{{ Request::is('mobile-marketing-platform') ? 'active' : '' }}">Overview</a></span>
                    <span><a onclick="sendToUrl('{{url('mobile-marketing-platform#user-acquistion')}}')">User Acquisition</a></span>
                    <span><a onclick="sendToUrl('{{url('mobile-marketing-platform#brand-advertising')}}')">Brand Marketing</a></span>
                    <span><a onclick="sendToUrl('{{url('mobile-marketing-platform#vizury_home_section')}}')">Re-Targeting Platform</a></span>
                    <span><a onclick="sendToUrl('{{url('mobile-marketing-platform#award-section')}}')"> Case Studies</a></span>
                    <span><a onclick="sendToUrl('{{url('mobile-marketing-platform#fraud-section')}}')">Ad Fraud Detection</a></span>
                </div>
                <button type="button" class="btn drop_btn" data-toggle="collapse" data-target="#forPublisher">For Publishers<i class="fa fa-caret-down"></i></button>
                <div id="forPublisher">
                    <span><a href="{{url('ad-monetization')}}" class="{{ Request::is('ad-monetization') ? 'active' : '' }}" >Ad Monetization </a></span>
                    <span><a href="{{url('data-monetization')}}" class="{{ Request::is('data-monetization') ? 'active' : '' }}" >Data Monetization</a></span>
                </div>
            </div>

            <div class="sidemenu2" >
                <h2>Enterprise Platform</h2>
                <span><a href="{{url('app-development-platform-arc')}}" class="{{ Request::is('app-development-platform-arc') ? 'active' : '' }}" >App Development</a></span>
                <span><a href="{{url('online-to-offline-marketing-platform-shoffr')}}" class="{{ Request::is('online-to-offline-marketing-platform-shoffr') ? 'active' : '' }}">O2O Marketing Platform</a></span>
                <span><a href="{{url('customer-data-platform-cdp')}}" class="{{ Request::is('customer-data-platform-cdp') ? 'active' : '' }}">Audience Intelligence</a></span>
                <span><a href="{{url('dmp-data-management-platform')}}" class="{{ Request::is('dmp-data-management-platform') ? 'active' : '' }}">Data Management Platform</a></span>
            </div>

            <div class="sidemenu3" >
                <h2>Products</h2>
                <span><a href="{{url('mobile-advertising-platform-maas')}}" class="{{ Request::is('mobile-advertising-platform-maas') ? 'active' : '' }}">MAAS | Mobile Advertising </a></span>
                <span><a href="{{url('programmatic-user-acquisition-retargeting')}}" class="{{ Request::is('programmatic-user-acquisition-retargeting') ? 'active' : '' }}">RevX | Programmatic Ad Platform </a></span>
                <span><a href="https://www.appnext.com" class="" target="_blank">Appnext | App Recommendations</a></span>
                <span><a href="{{url('browser-push-notification-platform-ecommerce')}}" class="{{ Request::is('browser-push-notification-platform-ecommerce') ? 'active' : '' }}">Vizury Engage360 | Omnichannel Marketing</a></span>
                <span><a href="{{url('proximity-marketing-platform')}}" class="{{ Request::is('proximity-marketing-platform') ? 'active' : '' }}">mediasmart | Programmatic &amp; Proximity Marketing </a></span>
                <span><a href="{{url('mobile-ad-fraud-detection-mfaas')}}" class="{{ Request::is('mobile-ad-fraud-detection-mfaas') ? 'active' : '' }}">mFaaS | Fraud Detection</a></span>
                <span><a href="{{url('online-to-offline-marketing-platform-shoffr')}}" class="{{ Request::is('online-to-offline-marketing-platform-shoffr') ? 'active' : '' }}"> Shoffr | O2O Marketing Platform</a></span>
                <span><a href="{{url('mobile-ad-authoring-platform-mkr8')}}" class="{{ Request::is('mobile-ad-authoring-platform-mkr8') ? 'active' : '' }}"> mKr8 | Rich Media & Video</a></span>
                <span><a href="{{url('dmp-data-management-platform')}}" class="{{ Request::is('dmp-data-management-platform') ? 'active' : '' }}">mDMP | Data Management</a></span>
                <span><a href="{{url('customer-data-platform-cdp')}}" class="{{ Request::is('customer-data-platform-cdp') ? 'active' : '' }}">mCDP | Audience Intelligence</a></span>
                <!--<span><a href="{{url('audience-monetization-ssp')}}" class="{{ Request::is('audience-monetization-ssp') ? 'active' : '' }}">mSSP | Ad Monetization</a></span>-->
                <span><a href="{{url('app-development-platform-arc')}}" class="{{ Request::is('app-development-platform-arc') ? 'active' : '' }}"> ARC | App Development</a></span>
                <span><a href="{{url('o2o-offline-to-online-markt')}}" class="{{ Request::is('o2o-offline-to-online-markt') ? 'active' : '' }}">Markt | Multi-Channel Commerce</a></span>
            </div>

            <div class="sidemenu6">
                <h2>About Us</h2>
                <span><a href="{{url('about-us')}}" class="{{ Request::is('about-us') ? 'active' : '' }}">About Affle</a></span>
                <span><a onclick="sendToUrl('{{url('about-us#management-team')}}')">Leadership</a></span>
                <span><a onclick="sendToUrl('{{url('about-us#boardDirectorSection')}}')">Board</a></span>
                <span><a onclick="sendToUrl('{{url('about-us#boardinvestorSection')}}')" >Investors (AHPL)</a></span>
                <span><a onclick="sendToUrl('{{url('about-us#historyContent')}}')">History</a></span>
                {{-- <span><a onclick="sendToUrl('{{url('about-us#testimonial_about')}}')">Customer Experiences</a></span> --}}
                <span><a onclick="sendToUrl('{{url('about-us#culture-container')}}')">Life@affle</a></span>
            </div>

            <div class="sidemenu7">
                <h2>Media</h2>
                <span><a href="http://affle.com/press-releases/">Press Releases</a></span>
                <span><a href="http://affle.com/recent_coverage/">Recent Coverage</a></span>
                <span><a href="http://affle.com/awards">Awards</a></span>
                <span><a href="http://affle.com/events">Events</a></span>
                <span><a href="{{url('ceo-direct-talk-series')}}">CEO Direct Talk Series</a></span>
				<span><a href="https://affle.com/app-marketing-knights/">App Marketing Knights</a></span>
                <span><a href="{{url('customer-speak')}}">Customer Speak</a></span>
            <!-- </div>

            <div class="sidemenu8">      -->
                <h2><a href="{{url('investor-relations')}}" class="{{ Request::is('investor-relations') ? 'active' : '' }}">Investor Relations</a></h2>
                <h2><a  href="http://affle.com/blog">Blogs</a></h2>
                <!-- <h2><a href="http://affle.com/jobs">Careers</a></h2> -->
                <h2><a href='https://affle.darwinbox.in/ms/candidate/careers'>Careers</a></h2>
                <h2><a href="{{url('contact-us')}}" class="{{ Request::is('contact-us') ? 'active' : '' }}">Contact us</a></h2>
            </div>

        </div>
    </div>
</div>

<div id='cssmenu'>
    <ul>
        <li class='has-sub'><a href='#'><span>Consumer Platform </span></a>
            <ul>
                <li><a href="{{url('mobile-marketing-platform')}}" class="{{ Request::is('mobile-marketing-platform') ? 'active' : '' }}"><span>For Advertisers</span></a></li>
                <li><a href="{{url('ad-monetization')}}" class="{{ Request::is('ad-monetization') ? 'active' : '' }}"><span>For Publishers</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Enterprise Platform </i></span></a>
            <ul>
                <li><a href="{{url('app-development-platform-arc')}}" class="{{ Request::is('app-development-platform-arc') ? 'active' : '' }}"><span>App Development </span></a></li>
                <li><a href="{{url('online-to-offline-marketing-platform-shoffr')}}" class="{{ Request::is('online-to-offline-marketing-platform-shoffr') ? 'active' : '' }}"><span>O2O Marketing Platform</span></a></li>
                <li class=''><a href="{{url('customer-data-platform-cdp')}}" class="{{ Request::is('customer-data-platform-cdp') ? 'active' : '' }}" ><span>Audience Intelligence</span></a></li>
                <li class='last'><a href="{{url('dmp-data-management-platform')}}" class="{{ Request::is('dmp-data-management-platform') ? 'active' : '' }}"><span>Data Management Platform</span></a></li>
            </ul>
        </li>
        <li class='has-sub'><a href='#'><span>Products </i></span></a>
            <ul>
                <li><a href="{{url('mobile-advertising-platform-maas')}}" class="{{ Request::is('mobile-advertising-platform-maas') ? 'active' : '' }}"><span>MAAS | Mobile Advertising </span></a></li>
                <li><a href="{{url('programmatic-user-acquisition-retargeting')}}" class="{{ Request::is('programmatic-user-acquisition-retargeting') ? 'active' : '' }}"><span>RevX | Programmatic Ad Platform </span></a></li>
                <li><a href="https://www.appnext.com" class="" target="_blank"><span>Appnext | App Recommendations</span></a></li>
                <li class='last'><a href="{{url('browser-push-notification-platform-ecommerce')}}" class="{{ Request::is('browser-push-notification-platform-ecommerce') ? 'active' : '' }}"><span>Vizury Engage360 | Omnichannel Marketing</span></a></li>
                <li><a href="{{url('proximity-marketing-platform')}}" class="{{ Request::is('proximity-marketing-platform') ? 'active' : '' }}"><span>mediasmart | Programmatic & Proximity Marketing </span></a></li>
                <li class=''><a href="{{url('mobile-ad-fraud-detection-mfaas')}}" class="{{ Request::is('mobile-ad-fraud-detection-mfaas') ? 'active' : '' }}"><span>mFaaS | Fraud Detection</span></a></li>
                <li class=''><a href="{{url('online-to-offline-marketing-platform-shoffr')}}" class="{{ Request::is('online-to-offline-marketing-platform-shoffr') ? 'active' : '' }}"><span> Shoffr | O2O Marketing Platform</span></a></li>                             
                <li class=''><a href="{{url('mobile-ad-authoring-platform-mkr8')}}" class="{{ Request::is('mobile-ad-authoring-platform-mkr8') ? 'active' : '' }}"><span> mKr8 | Rich Media & Video</span></a></li>
                <li class=''><a href="{{url('dmp-data-management-platform')}}" class="{{ Request::is('dmp-data-management-platform') ? 'active' : '' }}"><span>mDMP | Data Management</span></a></li>
                <li class=''><a href="{{url('customer-data-platform-cdp')}}" class="{{ Request::is('customer-data-platform-cdp') ? 'active' : '' }}"><span>mCDP | Audience Intelligence</span></a></li>
                <!--<li class=''><a href="{{url('audience-monetization-ssp')}}" class="{{ Request::is('audience-monetization-ssp') ? 'active' : '' }}" ><span>mSSP | Ad Monetization</span></a></li>-->
                <li class=''><a href="{{url('app-development-platform-arc')}}" class="{{ Request::is('app-development-platform-arc') ? 'active' : '' }}"><span> ARC | App Development</span></a></li>
                <li class='last'><a href="{{url('o2o-offline-to-online-markt')}}" class="{{ Request::is('o2o-offline-to-online-markt') ? 'active' : '' }}"><span>Markt | Multi-Channel Commerce</span></a></li>
            </ul>
        </li>
        <li class=''><a href="{{url('about-us')}}" class="{{ Request::is('about-us') ? 'active' : '' }}"><span>About Us</span></a></li>
        <li class='has-sub'><a href='#'><span>Media </i></span></a>
            <ul>
                <li><a href='http://affle.com/media/press-releases'><span>Press Releases</span></a></li>
                <li class=''><a href='http://affle.com/media/recent_coverage/'><span>Recent Coverage</span></a></li>
                <li class=''><a href='http://affle.com/media/awards'><span>Awards</span></a></li>
                <li class=''><a href='http://affle.com/events'><span>Events</span></a></li>
                <!-- <li class=''><a href="{{url('ceo-direct-talk-series')}}"><span>CEO Direct Talk Series</span></a></li> -->
            </ul>

        </li>
        <li class=''><a href="{{url('ceo-direct-talk-series')}}"><span>CEO Direct Talk Series</span></a></li>
        <li class=''><a href="https://affle.com/app-marketing-knights/"><span>App Marketing Knights</span></a></li>
        <li class=''><a href="{{url('customer-speak')}}" class="{{ Request::is('customer-speak') ? 'active' : '' }}"><span>Customer Speak</span></a></li>
        <li class=''><a href="{{url('investor-relations')}}" class="{{ Request::is('investor-relations') ? 'active' : '' }}"><span>Investor Relations</span></a></li>
        <li class=''><a href='http://affle.com/blog'><span>Blog</span></a></li>
        <!-- <li class=''><a href='http://affle.com/jobs'><span>Careers</span></a></li> -->
        <li class=''><a href='https://affle.darwinbox.in/ms/candidate/careers'><span>Careers</span></a></li>
        <li class=''><a href="{{url('contact-us')}}" class="{{ Request::is('contact-us') ? 'active' : '' }}"><span>Contact us</span></a></li>
    </ul>
</div>