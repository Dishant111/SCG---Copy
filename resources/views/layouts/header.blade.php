<section class="menu cid-rShqa5v38i" once="menu" id="menu1-18">
    <nav
        class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="/assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="#">Student Career
                        Guidance</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-white display-4" href="{{route('welcome')}}#home"
                        aria-expanded="false"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="{{route('welcome')}}#feature"
                        aria-expanded="false"><span
                            class="mbri-features mbr-iconfont mbr-iconfont-btn"></span>Feature</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="{{route('welcome')}}#howitwork"
                        aria-expanded="false"><span class="mbrib-question mbr-iconfont mbr-iconfont-btn"></span>How it
                        works?</a></li>
                {{-- @if (Request::route()->getName()!='loginPage' )
                <li class="nav-item"><a class="nav-link link text-white display-4" href="{{route('loginPage')}}">
                </a></li>
                @endif --}}
            </ul>@if (Request::route()->getName()!='loginPage' )
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                    href="{{route('loginPage')}}"><span
                        class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Login</a></div>
            @endif
        </div>
    </nav>
</section>