@extends('layouts.app')

@section('content')
{{-- {{dd($test)}} --}}
<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">

        <section class="services1 cid-rU5wUybJVJ" id="services1-1y">

            <div class="container">
                <div class="row justify-content-center">
                    <!--Titles-->
                    {{-- <div class="title pb-5 col-12">
                        <h2 class="align-left pb-3 mbr-fonts-style display-1">
                            Our Shop
                        </h2>

                    </div> --}}

                    <div class="card col-12 col-md-6 p-3">
                        <div class="card-wrapper">
                            {{-- <div class="card-img">
                                <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                            </div> --}}
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Personality
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Take this free Personality Test and find out more about who you are and your
                                    strengths. This is valuable information for choosing a career. This personality quiz
                                    measures the personality traits that were developed over three or four
                                    decades by several independent scientific researchers.
                                </p>
                                <!--Btn-->
                                {{-- {{dd($test)}} --}}
                                @if (in_array(1,$test))
                                <div class="mbr-section-btn align-right">
                                    <a href="{{route('perTestPage',['name'=> Auth::guard('student')->user()->fname])}}"
                                        class="btn btn-warning-outline display-4">
                                        My Answers
                                    </a>
                                </div>
                                @else
                                {{-- {{dd($test)}} --}}
                                <div class="mbr-section-btn align-right">
                                    <a href="{{route('perTestPage',['name'=> Auth::guard('student')->user()->fname])}}"
                                        class="btn btn-warning-outline display-4">
                                        Give Test
                                    </a>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- {{dd($test)}} --}}
                    <!--Card-2-->
                    <div class="card col-12 col-md-6 p-3 last-child">
                        <div class="card-wrapper">
                            {{-- <div class="card-img">
                                <img src="assets/images/product1.jpg" alt="Mobirise">
                            </div> --}}
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Skill Test
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    In order for companies, firms and organizations to effectively and efficiently gauge
                                    where their staff is in terms of performance they use a variety of assessment tools.
                                    These are used to evaluate the potential employee on whether or not they possess the
                                    necessary skills required to perform the job in question
                                </p>
                                <!--Btn-->
                                @if (!in_array(1,$test))
                                <div class="mbr-section-btn align-right">
                                    <button class="btn btn-danger-outline display-3">
                                        Finish personality test first
                                    </button>
                                </div>
                                @else
                                @if (in_array(2,$test))
                                <div class="mbr-section-btn align-right">
                                    <a href="#" class="btn btn-warnin  g-outline display-4">
                                        My Answers
                                    </a>
                                </div>
                                @else
                                {{-- {{dd($test)}} --}}
                                <div class="mbr-section-btn align-right">
                                    <a href="#" class="btn btn-warning-outline display-4">
                                        Give Test
                                    </a>
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@if (Session::has('testmsg'))
<section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="max-height:50%">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{Session::get('testmsg')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#myModal').modal('show');
    });
</script>
@endsection