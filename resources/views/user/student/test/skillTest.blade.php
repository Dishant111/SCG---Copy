@extends('layouts.app')

@section('css')
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
{{-- <link href="/extra/rangeslider.css" rel="stylesheet" type="text/css"></link> --}}
<style>
    .page-inactive {
        display: none;
    }

    .page-active {
        display: block;
    }

    .container text-center {
        background-color: black;
        width: 500px;
        border: 100px solid green;
        padding: 250px;
        margin: 500px;
    }

    * {
        font-family: 'Lato', sans-serif;
        /* font-size: 20px; */
    }

    .prompt {
        display: block;
        font-size: 20px;
    }

    .btn {
        margin: 0 20px 0 20px;
    }

    .btn-strongly-agree {
        color: #89d298;
        font-weight: bold;
    }

    .btn-strongly-agree.active,
    .btn-strongly-agree:active,
    .btn-strongly-agree:focus,
    .btn-strongly-agree:active:focus,
    .btn-strongly-agree.active:focus,
    .btn-strongly-agree:hover {
        background-color: #89d298;
    }

    .btn-agree {
        color: #89d298;
    }

    .btn-agree.active,
    .btn-agree:active,
    .btn-agree:focus,
    .btn-agree:active:focus,
    .btn-agree.active:focus,
    .btn-agree:hover {
        background-color: rgba(137, 210, 152, 0.5);
    }

    .btn-disagree {
        color: #e28181;
    }

    .btn-disagree.active,
    .btn-disagree:active,
    .btn-disagree:focus,
    .btn-disagree:active:focus,
    .btn-disagree.active:focus,
    .btn-disagree:hover {
        background-color: rgba(226, 129, 129, 0.5);
    }

    .btn-strongly-disagree {
        color: #e28181;
        font-weight: bold;
    }

    .btn-strongly-disagree.active,
    .btn-strongly-disagree:active,
    .btn-strongly-disagree:focus,
    .btn-strongly-disagree:active:focus,
    .btn-strongly-disagree.active:focus,
    .btn-strongly-disagree:hover {
        background-color: #e28181;
    }

    .bottom {
        margin-bottom: 100px;
    }

    .hide {
        display: none;
    }

    .show {
        display: block;
    }

    /* RESULTS */
    .results {
        margin-bottom: 40px;
        margin-top: 40px;
    }






    /* rating css */
</style>
@endsection
@section('content')

    <script>
        try {
            fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                method: 'HEAD',
                mode: 'no-cors'
            })).then(function (response) {
                return true;
            }).catch(function (e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
            });
        } catch (error) {
            console.log(error);
        }
    </script>
{{-- {{dd($questions)}} --}}
    <section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
        {{-- {{dd(isset($answers))}} --}}
        <div class="container pt-4 mt-2">
            <div class="container text-center">
                <h3 class="list-group-item list-group-item-action list-group-item-info">Skill Test</h3>
                <hr style="margin-bottom: 20px">
            </div>
            <form id="personalityTest" method="POST"
                action="{{route('skillTest',['name'=> Auth::guard('student')->user()->fname])}}">
                @csrf
                    @php
                    // $length =7;
                    // $length=count($questions);
                @endphp
            @if (isset($answers))
            {{-- {{dd($answers)}} --}}
                {{--personality Test Answers--}}
                {{-- {{dd(count($answers))}} --}}
                @php
                $length=count($answers);
                    $page= 1;
                    $qindex = 1;
                    $itrat = 1;
                    $maxCount=5;
                @endphp

                @foreach ($answers as $answer)
                    @if ($qindex==1 || $qindex == ($page*$maxCount)-$maxCount+1)
                        <div id="container-pagnation{{$page}}" class="page-inactive">
                            <ul class="list-group">
                    @endif
                                <li class="list-group-item list-group-item-info">
                                    <h5 class="p-3 mb-2 bg-info text-white">
                                        {{$qindex.".  "}} {{$answer->questions->question_text}}</h5>

                    @php
                        $end = $itrat+10;
                        $i=1;
                    @endphp
                    @while ($itrat<$end) 
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="{{$itrat}}" value="{{$i}}" name="{{$answer->question_id}}"
                                        class="custom-control-input"  @if ($i == $answer->std_answer)
                                            checked
                                        @else
                                            disabled
                                        @endif>
                            <label class="custom-control-label" for="{{$itrat}}">{{$i}}</label>
                            @php
                                $itrat=$itrat+1;
                                $i=$i+1;
                            @endphp
                        </div>
                    @endwhile
                    </li>

                    @if ($qindex == $length)
                            </ul>
                            {{-- <hr>
                            <div class="mbr-section-btn">
                                <input type="button" id="submit-btn" class="btn btn-warning-outline" value="submit">
                            </div>
                            <hr> --}}
                        </div>
                    @else
                        @if ($qindex == ($page*$maxCount))
                            @php
                                $page=$page+1;
                            @endphp
                            </ul>
                            </div>
                        @endif
                    @endif
                        @php
                            $qindex=$qindex+1;
                        @endphp
                    @endforeach

            @else
                    {{--peronality Test Q-A--}}
                @php
                $length=count($questions);
                    $page= 1;
                    $qindex = 1;
                    $itrat = 1;
                    $maxCount=5;
                @endphp

                @foreach ($questions as $question)
                    @if ($qindex==1 || $qindex == ($page*$maxCount)-$maxCount+1)
                        <div id="container-pagnation{{$page}}" class="page-inactive">
                            <ul class="list-group">
                    @endif
                                <li class="list-group-item list-group-item-info">
                                    <h5 class="p-3 mb-2 bg-info text-white">
                                        {{$qindex.".  "}} {{$question->question_text}}</h5>

                    @php
                        $end = $itrat+10;
                        $i=1;
                    @endphp
                    @while ($itrat<$end) 
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="{{$itrat}}" value="{{$i}}" name="{{$question->id}}"
                                        class="custom-control-input">
                            <label class="custom-control-label" for="{{$itrat}}">{{$i}}</label>
                            @php
                                $itrat=$itrat+1;
                                $i=$i+1;
                            @endphp
                        </div>
                    @endwhile
                    </li>

                    @if ($qindex == $length)
                            </ul>
                            <hr>
                            <div class="mbr-section-btn">
                                <input type="button" id="submit-btn" class="btn btn-warning-outline" value="submit">
                            </div>
                            <hr>
                        </div>
                    @else
                        @if ($qindex == ($page*$maxCount))
                            @php
                                $page=$page+1;
                            @endphp
                            </ul>
                            </div>
                        @endif
                    @endif
                        @php
                            $qindex=$qindex+1;
                        @endphp
                    @endforeach
            @endif
            <ul id="luckmoshy" class="pagination justify-content-center pagination-lg" style="margin-top: 20px">
                {{-- pagination field --}}
            </ul>


            </form>
        </div>
    </section>


@endsection
@section('js')
{{-- <script src="/extra/rangeslider.min.js"></script> --}}
{{-- pagination --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="/assets/pagination/luckmoshyJqueryPagnation.js"></script>

<script>
    $(document).ready(function () {

        $('#luckmoshy').luckmoshyPagination({
        totalPages: {{ceil($length/$maxCount)}},
        // the current page that show on start
        startPage: 1,

        // maximum visible pages
        visiblePages: 3,

        initiateStartPageClick: true,

        // template for pagination links
        href: false,

        // variable name in href template for page number
        hrefVariable: '@{{number}}',

        // Text labels
        first: 'First',
        prev: 'Previous',
        next: 'Next',
        last: 'Last',

        // carousel-style pagination
        loop: false,

        // callback function
        onPageClick: function (event, page) {
            $('.page-active').removeClass('page-active');
            $('#container-pagnation' + page).addClass('page-active');
        },

        // pagination Classes
        paginationClass: 'pagination',
        nextClass: 'next',
        prevClass: 'prev',
        lastClass: 'last',
        firstClass: 'first',
        pageClass: 'page-item ',
        activeClass: 'active',
        disabledClass: 'disabled'

    });

   


       
       
       
            $('#submit-btn').click(function () {
                var check = true;
                $("input:radio").each(function () {
                    var name = $(this).attr("name");
                    if ($("input:radio[name=" + name + "]:checked").length == 0) {
                        check = false;
                    }
                });

                if (check) {
                    // alert('One radio in each group is checked.');
                    $('#personalityTest').submit();
                } else {
                    alert('Please select one option in each question.');
                }
            });



            $('#ex1').slider({
	formatter: function(value) {
		return 'Current value: ' + value;
	}
});

// Without JQuery
var slider = new Slider('#ex1', {
	formatter: function(value) {
		return 'Current value: ' + value;
	}
});
        });
</script>
<script>
    var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

@endsection