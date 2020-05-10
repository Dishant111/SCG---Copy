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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="#"
                        data-toggle="dropdown-submenu" aria-expanded="false"><span
                            class="mobi-mbri mobi-mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        Parent</a>
                    <div class="dropdown-menu"><a class="text-white dropdown-item display-4"
                            href="{{route('createParentPage',['name' => Auth::guard('teacher')->user()->fname])}}">Registration</a><a
                            class="text-white dropdown-item display-4"
                            href="{{route('updateParent',['name' => Auth::guard('teacher')->user()->fname])}}"
                            aria-expanded="false">Edit</a></div>
                </li>
                <li class="nav-item dropdown open">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="#" aria-expanded="true"
                        data-toggle="dropdown-submenu"><span
                            class="mobi-mbri mobi-mbri-user mbr-iconfont mbr-iconfont-btn"></span>Student</a>
                    <div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4"
                            href="{{route('createStudentPage',['name' => Auth::guard('teacher')->user()->fname])}}"
                            aria-expanded="false">Ragistration</a>
                        <a class="text-white dropdown-item display-4"
                            href="{{route('updateStudent',['name' => Auth::guard('teacher')->user()->fname])}}"
                            aria-expanded="false">Edit profile</a>
                        <a class="text-white dropdown-item display-4"
                            href="{{route('academic',['name' => Auth::guard('teacher')->user()->fname])}}"
                            aria-expanded="false">Academics</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4"
                        href="{{route('teacherDashBoard', ['name' => Auth::guard('teacher')->user()->fname])}}"><span
                            class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>
                        Profile</a></li>
            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                    href="{{route('teacherLogout')}}"><span
                        class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Logout</a></div>
        </div>

    </nav>
</section>