<section class="menu cid-rShq5VTRq5" once="menu" id="menu1-17">
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
        {{-- {{dd($childrens)}} --}}
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                        <img src="/assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5"
                        href="https://mobirise.com">Student Career Guidance</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-white display-4"
                        href="{{route('parentDashBoard',['name'=>Auth::guard('parent')->user()->fname])}}"
                        aria-expanded="false"><span
                            class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Dashboard</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4"
                        href="{{route('parentProfile',['name'=>Auth::guard('parent')->user()->fname])}}"
                        aria-expanded="false"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                        Profile</a></li>
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4"
                        href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu"><span
                            class="mobi-mbri mobi-mbri-users mbr-iconfont mbr-iconfont-btn"></span>

                        Children</a>

                    <div class="dropdown-menu">
                        @if ($childrens)
                        @foreach ($childrens as $child)
                        <a class="text-white dropdown-item display-4"
                            href="{{route('childProfile',['child'=>$child->student_id])}}" aria-expanded="false"><span
                                class="socicon socicon-odnoklassniki mbr-iconfont mbr-iconfont-btn"></span>{{$child->fname}}</a>
                        @endforeach
                        @else
                        <a class="text-white dropdown-item display-4" href="https://mobirise.com"
                            aria-expanded="false"><span
                                class="socicon socicon-odnoklassniki mbr-iconfont mbr-iconfont-btn"></span>child does
                            not exixt</a>
                        @endif


                    </div>
                </li>

            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                    href="{{route('parentLogout')}}"><span
                        class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Logout</a></div>
        </div>
    </nav>
</section>