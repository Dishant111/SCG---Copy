@extends('layouts.admin')
@section('content')

<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><strong>My Profile</strong></h2>
        <div class="media-container-row">
            <div class="media-block m-auto" style="width: 23%;">
                <div class="mbr-figure">
                    <img src="/assets/images/mbr-736x736.png" alt="" title="">
                </div>
            </div>
            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    1
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">First Name : <span
                                        style="font-weight: normal;">{{Auth::guard('admin')->user()->fname}}</span><br><span
                                        style="font-weight: normal;">&nbsp;</span><br>Last Name : <span
                                        style="font-weight: normal;">{{Auth::guard('admin')->user()->lname}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    2
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">ID : <span
                                        style="font-weight: normal;">{{Auth::guard('admin')->user()->admin_id}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    3
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Email :
                                    <span style="font-weight: normal;">{{Auth::guard('admin')->user()->email}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    4
                                </h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Contact:<span
                                        style="font-weight: normal;">{{Auth::guard('admin')->user()->contact}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection