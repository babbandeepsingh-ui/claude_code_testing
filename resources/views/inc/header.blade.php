<header class="header-section <?php if(Request::is('/','discover-identify','acquire-engage','re-engage-transact')){echo 'home-header';} ?>">
    <div class="header-section-inner">
        <div class="logo-box">
            <a href="{{ url('/') }}">
                <img src="{{asset('images/affle_logo.svg')}}" alt="Affle Logo" class="img-fluid" loading="lazy">
            </a>
        </div>
        <div class="navigation">
            <ul class="menu">
                <li class="menu-item {{ (request()->is('discover-identify*')) ? 'active' : '' }}">
                    <a href="{{url('discover-identify')}}">Discover & Identify</a>
                </li>
                <li class="menu-item {{ (request()->is('acquire-engage*')) ? 'active' : '' }}">
                    <a href="{{url('acquire-engage')}}">Acquire & Engage</a>
                </li>
                <li class="menu-item {{ (request()->is('re-engage-transact*')) ? 'active' : '' }}">
                    <a href="{{url('re-engage-transact')}}">Re-Engage & Transact</a>
                </li>
            </ul>
        </div>
        <div class="breadcrumb-box">
            <span>Menu</span>
            <img src="{{asset('images/menu.svg')}}" alt="" class="img-fluid">
        </div>
    </div>
</header>
    
<div class="secondary-menu">
    <div class="secondary-menu-inner">
        <div class="close-icon">
            <span>
                <img src="{{asset('images/close-icon.svg')}}" alt="" class="img-fluid">
            </span>
        </div>
        <ul class="menu">
            <li class="menu-item">
                <a href="{{url('about')}}">About Us</a>
            </li>
            <li class="menu-item">
                <a href="{{url('discover-identify')}}">Discover & Identify</a>
            </li>
            <li class="menu-item">
                <a href="{{url('acquire-engage')}}">Acquire & Engage</a>
            </li>
            <li class="menu-item">
                <a href="{{url('re-engage-transact')}}">Re-Engage & Transact</a>
            </li>
            <li class="menu-item">
                <a href="{{url('digital-transformation')}}">Digital Transformation</a>
            </li>
            <li class="menu-item">
                <a href="{{url('investor-relations')}}">Investor Relations</a>
            </li>
            <li class="menu-item">
                <a href="{{url('career')}}">Careers</a>
            </li>
            <li class="menu-item">
                <a href="http://media.affle.com/">Media</a>
            </li>
            <li class="menu-item">
                <a href="http://media.affle.com/blog">Blogs</a>
            </li>
            <li class="menu-item">
                <a href="{{url('contact')}}">Contact Us</a>
            </li>
        </ul>
        <div class="social-list">
            <a href="https://www.facebook.com/affle" target="_blank" class="social-item">
                <img src="{{asset('images/facebook.svg')}}" alt="" class="img-fluid">
            </a>
            <a href="https://twitter.com/affle" target="_blank" class="social-item">
                <img src="{{asset('images/twitter.svg')}}" alt="" class="img-fluid">
            </a>
            <a href="https://www.instagram.com/afflers/?hl=en" target="_blank" class="social-item">
                <img src="{{asset('images/instagram.svg')}}" alt="" class="img-fluid">
            </a>
            <a href="https://www.linkedin.com/company/affle/" target="_blank" class="social-item">
                <img src="{{asset('images/linkedin.svg')}}" alt="" class="img-fluid">
            </a>
            <a href="https://www.youtube.com/channel/UCalYanQuQzlhmDZhi4qoInw" target="_blank" class="social-item">
                <img src="{{asset('images/youtube.svg')}}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
</div>