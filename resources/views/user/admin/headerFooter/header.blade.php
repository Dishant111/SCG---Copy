<section class="menu cid-rShqetzSMm" once="menu" id="menu1-19">
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
                        <img src="/assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4"
                        href="{{route('welcome')}}">Student Career Guidance</a></span>
            </div>
        </div>
        @if (Request::route()->getName()!='adminLoginPage' )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="#"
                        data-toggle="dropdown-submenu" aria-expanded="false"><span
                            class="mobi-mbri mobi-mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        Teacher</a>
                    <div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4"
                            href="{{route('createTeacherPage')}}">Registration</a>
                        {{-- <a class="text-white dropdown-item display-4"
                            href="{{route('updateParent',['name' => Auth::guard('teacher')->user()->fname])}}"
                        aria-expanded="false">Edit</a> --}}
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link link text-white display-4"
                        href="{{route('adminDashboard')}}"><span
                            class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>
                        Profile</a></li>
            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                    href="{{route('adminLogout')}}"><span
                        class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Logout</a></div>
        </div>
        @endif
    </nav>
</section>







<header id="header" class="skel-layers-fixed">
    <h4><a href="{{route('welcome')}}">STUDENT CAREER GUIDANCE</a></h4>
    <nav id="nav">
        @if (Request::route()->getName()!='adminLoginPage' )
        <ul>
            <li><a href="{{route('createTeacherPage')}}">add Teacher</a>
            </li>
            {{-- <li><a href="{{route('parentProfile',['name'=>Auth::guard('parent')->user()->fname])}}">Profile</a>
            </li> --}}

            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Action</button>
                    <button class="dropdown-item" type="button">Another action</button>
                    <button class="dropdown-item" type="button">Something else here</button>
                </div>
            </div> --}}

            <li><a href="{{route('adminLogout')}}" class="button special"><i class="icon-off"></i> Logout</a>


                {{-- <li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div> --}}
                {{-- <ul class="nav ">
                    <li class="dropdown"><a href="#" type="button" class="dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" id="dropdownMenu2" style="background-color=black;">Welcome, User <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li class="divider"></li>
                            <li><a href="{{route('parentLogout')}}"><i class="icon-off"></i> Logout</a>
            </li>
        </ul>
        </li>
        </ul> --}}
        </li>

        </ul>
        @endif
    </nav>
</header>