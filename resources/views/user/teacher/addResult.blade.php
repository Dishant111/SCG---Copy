@extends('layouts.App')
@section('css')
{{-- for date picker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet"
    type="text/css" />
@endsection
@section('content')
<section class="counters4 counters cid-rSh8OQehtA" id="counters4-t">
    <div class="container pt-4 mt-2">
        <div class="studentdetails mt-3" style="display: ">
            <div class="container container-table " style="">
                <h3 class="mbr-section-subtitle  mbr-fonts-style align-center pb-5 mbr-light display-5">
                    <strong>Academic details</strong>
                </h3>
                <div class="table-wrapper">
                    <div class="container scroll">
                        <table class="table isSearch" cellspacing="0">
                            <thead>
                                <tr class="table-heads ">
                                    <th class="head-item mbr-fonts-style display-7">
                                        NAME</th>
                                    <th class="head-item mbr-fonts-style display-7">
                                        AGE</th>
                                    <th class="head-item mbr-fonts-style display-7">
                                        DATE</th>
                                    <th class="head-item mbr-fonts-style display-7">
                                        SALARY</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td>
                                    <td class="body-item mbr-fonts-style display-7">44</td>
                                    <td class="body-item mbr-fonts-style display-7">2016-10-17</td>
                                    <td class="body-item mbr-fonts-style display-7">$317.000</td>
                                </tr>
                                <tr>
                                    <td class="body-item mbr-fonts-style display-7">Caren Rials</td>
                                    <td class="body-item mbr-fonts-style display-7">35</td>
                                    <td class="body-item mbr-fonts-style display-7">2013-04-12</td>
                                    <td class="body-item mbr-fonts-style display-7">$445.500</td>
                                </tr>
                                <tr>
                                    <td class="body-item mbr-fonts-style display-7">Leon Rogol</td>
                                    <td class="body-item mbr-fonts-style display-7">66</td>
                                    <td class="body-item mbr-fonts-style display-7">2016-05-22</td>
                                    <td class="body-item mbr-fonts-style display-7">$152.558</td>
                                </tr>
                                <tr>
                                    <td class="body-item mbr-fonts-style display-7">Shala Barrera</td>
                                    <td class="body-item mbr-fonts-style display-7">70</td>
                                    <td class="body-item mbr-fonts-style display-7">2016-05-15</td>
                                    <td class="body-item mbr-fonts-style display-7">$459.146</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container table-info-container">
                        <div class="row info">
                            <div class="col-md-6">
                                <div class="dataTables_info mbr-fonts-style display-7">
                                    <span class="infoBefore">Showing</span>
                                    <span class="inactive infoRows"></span>
                                    <span class="infoAfter">entries</span>
                                    <span class="infoFilteredBefore">(filtered from</span>
                                    <span class="inactive infoRows"></span>
                                    <span class="infoFilteredAfter"> total entries)</span>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form class="studentdetails" action="{{route('addResult',['name'=> Auth::guard('teacher')->user()->fname])}}"
            method="post" style="display: none">
            @csrf
            <input type="hidden" name="student_id" value="none">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <select class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value=""></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <select class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value=""></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationDefaultUsername"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
            </div>
        </form>
        <div class="container-md studentdetails mt-4" style="display: ">

            <form class="col-md-12" action="{{route('addResult',['name'=> Auth::guard('teacher')->user()->fname])}}"
                method="POST">
                @csrf
                <input type="hidden" name="student_id" value="">
                <h3 class="mbr-section-subtitle  mbr-fonts-style align-center pt-5 mbr-light display-5">
                    <strong>Academic details</strong>
                </h3>
                <div class="form-row">
                    <div class="form-group col-lg-3">
                        <select class="form-control  " id="validationServer04" required>
                            <option selected disabled value=""> select year</option>
                            <option>vv</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <select class="form-control  " id="validationServer04" required>
                            <option selected disabled value=""> select Subject</option>
                            <option>vv</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <div class="input-group-prepend">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Marks">
                            <div class="input-group-text">/100</div>
                        </div>
                    </div>
                    <div class="form-group col-lg-3 mbr-section-btn display-4">
                        <button type="submit" class="btn btn-md btn-primary display-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection