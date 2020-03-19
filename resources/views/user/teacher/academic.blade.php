@extends('layouts.App')
@section('css')
{{-- for date picker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet"
    type="text/css" />
@endsection
@section('content')
<section class="counters4 counters cid-rSh8OQehtA" id="counters4-t">
    <div class="container pt-4 mt-2">
        <form>
            <div class="form-row align-items-center">
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputName">{{__("User ID")}}</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Student Id">
                </div>
                <div class="col-auto my-1">
                    <button type="button" id="searchUser" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <hr>
        <div style="display: none" id="loading">
            <div class="d-flex justify-content-center" id="loading" style="display: none">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <div class="media-container-row studentdetails" id="studentdetails" style="display: none">
            <div class="media-block m-auto" style="width: 23%;">
                <div class="mbr-figure">
                    <img src="/assets/images/mbr-736x736.png" alt="" title="">
                </div>
            </div>
            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-6">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    1
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Student ID : <span
                                        style="font-weight: normal;" id="student_id"></span>
                                    <br> First Name :<span style="font-weight: normal;" id="fname"></span>
                                    <br>Last Name : <span style="font-weight: normal;" id="lname"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-6">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    2
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Parent name : <span
                                        style="font-weight: normal;" id="parentName"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-6">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    3
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Email :
                                    <span style="font-weight: normal;" id="email"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-6">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    4
                                </h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Contact:<span
                                        style="font-weight: normal;" id="contact"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-6">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    4
                                </h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">class :<span
                                        style="font-weight: normal;" id="class"></span><br>
                                    stream: <span style="font-weight: normal;" id="stream"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-6">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    4
                                </h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Associated teacher
                                    :<span style="font-weight: normal;" id="teacher_id"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{route('academic',['name'=>Auth::guard('teacher')->user()->fname])}}">
            @csrf
            <input type="hidden" name="student_id" value="">
            <input type="hidden" name="stream_id" value="">
            <div class="mbr-section-btn studentdetails" style="display: none">
                <button type="submit" class="btn btn-md btn-secondary display-4" href="#">results</button>
                <a class="btn btn-md btn-secondary display-4" href="#">LEARN MORE</a>
            </div>
        </form>
    </div>
</section>



@endsection
@section('js')

<script>
    $(document).ready(function () {
        $('#user_id').on('input', function () {
            $('.studentdetails').css("display", "none");
        });
        function setData(student) {
            console.log(student.student_id);
            $('input[name="student_id"]').val(student.student_id);
            $('input[name="stream_id"]').val(student.stream_id);
            $('#student_id').text(student.student_id);
            $('#fname').text(student.fname);
            $('#lname').text(student.lname);
            $('#contact').text(student.contact);
            
            $('#email').text(student.email);
            $('#parentName').text(student.parentFname);
            $('#stream').text(student.stream_name);
            $('#class').text(student.class);
            $('#teacher_id').text(student.teacher_id);
            
            let newdata= {
                    student_id: student.student_id
                };


            getStudentAcademic(newdata).then((data) => {
                    console.log(data);
                    if (data.student_id == false) {
                        // alert(' student id is not valid.');
                    } else {
                        $('.studentdetails').css("display", "flex");
                        setData(data);
                    }
                    $('#loading').css("display", "none");
                });
            // $('#user_id').prop("disabled", true);
        }
        async function getStudentAcademic(data) {
            let url = '/validation/getstudentAcademic';
            let response = await fetch(url, {
                method: 'POST',
                mode: 'cors', // no-cors, *cors, same-origin
                cache: 'no-cache',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                },
                redirect: 'follow', // manual, *follow, error
                referrerPolicy: 'no-referrer',
                body: JSON.stringify(data)
            });
            return await response.json();
        }

        async function getStudent(data) {
            let url = '/validation/getstudentProfile';
            let response = await fetch(url, {
                method: 'POST',
                mode: 'cors', // no-cors, *cors, same-origin
                cache: 'no-cache',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/json',
                },
                redirect: 'follow', // manual, *follow, error
                referrerPolicy: 'no-referrer',
                body: JSON.stringify(data)
            });
            return await response.json();
        }
        $('#searchUser').on('click', function () {
            $('.studentdetails').css("display", "none");
            $('#loading').css("display", "flex");
            let id = $('#user_id').val().trim();
            if (id === '') {
                alert('please enter student id');
                $('#loading').css("display", "none");
            } else {
                var newdata = {
                    student_id: id
                };
                getStudent(newdata).then((data) => {
                    console.log(data);
                    
                    if (data.student_id == false) {
                        alert(' student id is not valid.');
                        
                    } else {
                        $('.studentdetails').css("display", "flex");
                        setData(data);
                    }
                    $('#loading').css("display", "none");
                });
            }

        });



    });
</script>
@endsection