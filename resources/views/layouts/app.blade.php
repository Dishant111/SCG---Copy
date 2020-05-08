<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="/assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="">

    <title>Home</title>
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="/assets/theme/css/style.css">
    <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">

    @yield('css')
</head>

<body id="top">
    {{--  <div class="se-pre-con"></div>  --}}
    @if (Auth::guard('teacher')->check())
    @yield('teacherheader',view('user.teacher.headerFooter.header'))
    @elseif(Auth::guard('student')->check())
    @yield('studentheader',view('user.student.headerFooter.header'))
    @elseif(Auth::guard('parent')->check())
    {{-- {{dd(Auth::guard('parent')->id())}} --}}
    @yield('parentheader',view('user.parent.headerFooter.header'))
    @else
    @yield('header',view('layouts.header'))
    @endif
    {{-- @yield('header',view('layouts.header')) --}}



    @yield('content','<div></div>')

    @if (Auth::guard('teacher')->check())
    @yield('teacherfooter',view('user.teacher.headerFooter.footer'))
    @elseif(Auth::guard('student')->check())
    @yield('studentfooter',view('user.student.headerFooter.footer'))
    @elseif(Auth::guard('parent')->check())
    @yield('parentfooter',view('user.parent.headerFooter.footer'))
    @else
    @yield('footer',view('layouts.footer'))
    @endif

    {{-- @yield('footer',view('layouts.footer')) --}}



    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script> --}}
    @if (!is_null(session('msg')))
    <script>
        alert("{{session('msg')}}");
    </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    {{-- new Scripts by sonu and patil--}}
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}

    {{-- <script src="/assets/web/assets/jquery/jquery.min.js"></script> --}}
    <script src="/assets/popper/popper.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/parallax/jarallax.min.js"></script>
    <script src="/assets/tether/tether.min.js"></script>
    <script src="/assets/dropdown/js/nav-dropdown.js"></script>
    <script src="/assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="/assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="/assets/theme/js/script.js"></script>
    @yield('js')
</body>

</html>