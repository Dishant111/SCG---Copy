@extends('layouts.app')
{{-- {{dd($childrens)}} --}}
@section('parentheader')
{{-- {{dd($childrens)}} --}}
{{view('user.parent.headerFooter.header')->with('childrens',$childrens)}}
@endsection
@section('content')

<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <!---->
    <!---->
    <!--Overlay-->

    <!--Container-->
    <div class="container pt-4 mt-2">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left pb-3 mbr-fonts-style display-1">
                    Childrens</h2>
            </div>
            <!--Card-1-->
            @foreach ($childrens as $child)
            <div class="card col-12 col-md-6 p-3 col-lg-4" style="border: 1px solid black;">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="/assets/images/mbr-696x696.png" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <br>
                        <h4 class="card-title mbr-fonts-style display-5">{{$child->fname}} {{$child->lname}}</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <label><strong>{{__("Email :")}}</strong></label>{{$child->email}} <br>
                            <label><strong>{{__("Dob :")}}</strong></label>{{$child->DOB}} <br>
                            <label><strong>{{__("Contact :")}}</strong></label>{{$child->contact}} <br>
                        </p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-left"><a href="{{route('childAcedemic',['child'=>$child->student_id])}}" class="btn btn-warning-outline display-7">
                            Acedemic results</a></div>
                        <div class="mbr-section-btn align-left"><a href="{{route('childProfile',['child'=>$child->student_id])}}" class="btn btn-warning-outline display-7">
                                Career field Suggestion</a></div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--Card-2-->

        </div>
    </div>
    {{--  </section>
<section id="">
    <!-- <header class="major">
    </header> -->
    <div class="box">
      
        <div class="container">
            <div class="row">
                <div class="container portfolio">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h3>Select Student to Check Performance</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bio-info">
                        <div class="row">
                            @foreach ($childrens as $child)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$child->student_id}}</h5>
    <ul class="list-group">

        <li class="list-group-item">
            <label><strong>{{__('Firstname:')}}</strong></label>{{$child->fname}}
        </li>
        <li class="list-group-item">
            <label><strong>{{__('Lastname:')}}</strong></label>{{$child->lname}}
        </li>
        <li class="list-group-item">
            <label><strong>{{__("Email :")}}</strong></label>{{$child->email}}
        </li>
        <li class="list-group-item">
            <label><strong>{{__('DOB:')}}</strong></label>{{$child->DOB}}
        </li>
        <li class="list-group-item">
            <label><strong>{{__('Contact:')}}</strong></label>{{$child->contact}}
        </li>
    </ul>
    <a href="studreportcontent.php" class="btn btn-primary">View</a>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section> --}}
@endsection