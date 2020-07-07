<section class="menu cid-rShqn4yk3p" once="menu" id="menu1-1a">



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
                    <a href="{{route('welcome')}}">
                        <img src="{{asset('/assets/images/logo2.png')}}" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4"
                        href="{{route('welcome')}}">Student Career
                        Guidance</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-white display-4"
                        href="{{route('testPage',['name'=> Auth::guard('student')->user()->fname])}}"
                        aria-expanded="false"><span class="mbrib-edit mbr-iconfont mbr-iconfont-btn"></span>

                        Test</a></li>
                <li class="nav-item">
                <a class="nav-link link text-white display-4" href="{{route('recommandations',['name'=> Auth::guard('student')->user()->fname])}}" aria-expanded="true"><span
                            class="mbrib-photo mbr-iconfont mbr-iconfont-btn"></span>Results</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4"
                        href="{{route('studentProfile',['name'=> Auth::guard('student')->user()->fname])}}"><span
                            class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>
                        Profile</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="#">
                    </a></li>
            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                    href="{{route('studentLogout')}}"><span
                        class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Logout</a></div>
        </div>
    </nav>
</section>