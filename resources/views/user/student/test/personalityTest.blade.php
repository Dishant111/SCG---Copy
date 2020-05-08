@extends('layouts.app')
@section('css')
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

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
</style>
@endsection
@section('content')

<script>
    try {
      fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
        return true;
      }).catch(function(e) {
        var carbonScript = document.createElement("script");
        carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
      });
    } catch (error) {
      console.log(error);
    }
</script>
<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    {{-- {{dd(isset($answers))}} --}}
    <div class="container pt-4 mt-2">
        <div class="container text-center">
            <h3 class="list-group-item list-group-item-action list-group-item-info">Personality Test</h3>
            <hr style="margin-bottom: 20px">
        </div>
        <form id="personalityTest" method="POST"
            action="{{route('perTest',['name'=> Auth::guard('student')->user()->fname])}}">
            @csrf

            @if (isset($answers))
            {{--personality Test Answers--}}
            {{-- {{dd(count($answers))}} --}}
            @php
            $questionIndex=1;
            $page=1;
            $length=count($answers);
            @endphp


            @foreach ($answers as $answer)
            {{-- {{dd($answer)}} --}}
            {{-- {{dd(!next($answers) )}} --}}
            @if ($questionIndex==1)
            <div id="container-pagnation{{$page}}" class="page-inactive">
                @php
                $page=$page+1;
                @endphp

                @endif
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        <h4 class="p-3 mb-2 bg-info text-white">
                            {{ $page*10-20+$questionIndex }} {{$answer->questions->question_text}}</h4>
                        {{-- <input type="hidden" name="qid{{$question['id']}}"> --}}
                        @foreach ($answer->questions->option as $options)
                        <div>
                            <input type="radio" name="{{$options->question_id}}" id="{{$options->id}}"
                                value="{{$options->id}}" @if ($answer->option_id == $options->id)
                            checked
                            @else
                            disabled
                            @endif
                            />
                            <label for="{{$options->id}}">{{$options['option']}} </label>
                        </div>
                        @endforeach
                    </li>
                </ul>
                <br>

                @if (($page*10-20+$questionIndex) == $length)
            </div>
            @php
            $questionIndex=1;
            @endphp
            @elseif($questionIndex == 10)
    </div>
    @php
    $questionIndex=1;
    @endphp

    @else
    {{-- </div> --}}
    @php
    $questionIndex=$questionIndex + 1;
    @endphp
    @endif
    @endforeach


    @else



    {{--peronality Test Q-A--}}
    @foreach ($testtypes as $testtype)
    @if ($testtype['test_type_id'] == 1)
    @php
    $questionIndex=1;
    $page=1;
    $length=count($testtype['questions']);
    @endphp
    @foreach ($testtype['questions'] as $question)
    @if ($questionIndex==1)
    <div id="container-pagnation{{$page}}" class="page-inactive">
        {{-- {{$questionIndex}} --}}
        @php
        $page=$page+1;
        @endphp
        @endif
        <ul class="list-group">
            <li class="list-group-item list-group-item-info">
                <h4 class="p-3 mb-2 bg-info text-white">
                    {{$page*10-20+$questionIndex.' '.$question['question_text']}}</h4>
                {{-- <input type="hidden" name="qid{{$question['id']}}"> --}}
                @foreach ($question['option'] as $options)
                <div>
                    <input type="radio" name="{{$question['id']}}" id="{{$page*10-20+$questionIndex+$options['id']}}"
                        value="{{$options['id']}}" />
                    <label for="{{$page*10-20+$questionIndex+$options['id']}}">{{$options['option']}}
                    </label>

                </div>
                @endforeach
            </li>
        </ul>
        <br>
        @if ($question=== end($testtype['questions']))

        <hr>
        <div class="mbr-section-btn">
            <input type="button" id="submit-btn" class="btn btn-warning-outline" value="submit">
        </div>
        <hr>
    </div>
    @php
    $questionIndex=1;
    @endphp
    @elseif($questionIndex==10)
    </div>
    @php
    $questionIndex=1;
    @endphp
    @else
    @php
    $questionIndex=$questionIndex+1;
    // echo $questionIndex;
    @endphp
    @endif
    @endforeach
    @endif
    @endforeach
    @endif



    {{-- <ul class="list-group">
                <li class="list-group-item list-group-item-info">
                    <h4 class="p-3 mb-2 bg-info text-white">Which of the following suits you.</h4>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">I've been romantic and imaginative. </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">I've been pragmatic and down to earth. </label>
                    </div>
                </li>
            </ul> --}}
    {{-- <br> --}}
    {{-- </div> --}}
    <ul id="luckmoshy" class="pagination justify-content-center pagination-lg">
        {{-- pagination field --}}
    </ul>


    </form>
    </div>
</section>


@endsection
@section('js')
{{-- pagination --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="/assets/pagination/luckmoshyJqueryPagnation.js"></script>

<script>
    $(document).ready(function () {

        $('#luckmoshy').luckmoshyPagination({
        totalPages: {{ceil($length/10)}},
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