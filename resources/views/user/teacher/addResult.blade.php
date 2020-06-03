@extends('layouts.App')
@section('css')
{{-- for date picker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet"
    type="text/css" />
@endsection
@section('content')
{{-- {{dd(Session::get('student'))}} --}}
<section class="counters4 counters cid-rSh8OQehtA" id="counters4-t">
    <div class="container pt-4 mt-2">
        <div class="studentdetails mt-3" style="display: ">

            <div class="container-md studentdetails mt-4" style="display: ">

                <form class="col-md-12" action="{{route('addResult',['name'=> Auth::guard('teacher')->user()->fname])}}"
                    method="POST">
                    @csrf
                    {{-- {{dd(Session::get('student')['student_id'])}} --}}
                    <input type="hidden" name="student_id" id="student_id"
                        value="{{Session::get('student')['student_id']}}">
                    <input type="hidden" name="stream_id" id="stream_id"
                        value="{{Session::get('student')['stream_id']}}">
                    <h3 class="mbr-section-subtitle  mbr-fonts-style align-center pt-5 mbr-light display-5">
                        <strong>Academic details</strong>
                    </h3>
                    <div class="form-row">
                        <div class="form-group col-lg-3">
                            <select class="form-control " name="year" id="year" required>
                                <option selected disabled value=""> select year</option>
                                @foreach ($years as $year)
                                <option value="{{$year}}">{{$year}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <select class="form-control  " name="class" id="class" required>
                                <option selected disabled value=""> select class</option>
                                @foreach ($classes as $class)
                                <option value="{{$class}}">{{$class}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <select class="form-control" name="subject" id="subject" required>
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <div class="input-group-prepend">
                                <input type="text" class="form-control" name="marks" id="marks" placeholder="Marks">
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
@section('js')
<script>
    $(document).ready(function () {
       

        function setData(student) {
            console.log(student.student_id);
            $('input[name="student_id"]').val(student.student_id);
            $('input[name="stream_id"]').val(student.stream_id);
            $('#student_id').text(student.student_id);
            // $('#user_id').prop("disabled", true);
        }
        async function getSuject(data) {
            let url = '/formdata/getSubject';
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
        $('#year').change(function () {


            var studentID = $('#student_id').val();
            var streamID = $('#stream_id').val();
            var year = $('#year').val();
            var classes = $('#class').val();
            console.log(year);
            console.log(classes);


            if (year == null || classes == null) {
                console.log('no input');
            } else {
                var newdata = {
                    student_id: studentID,
                    stream_id: streamID,
                    year: year,
                    classes: classes
                };
                getSuject(newdata).then((data) => {
                    console.log(data);

                    $('#subject option').each(function () {
                            $(this).remove(); 
                    });

                    $('#subject').append(`<option selected value="">Select subject</option>`); 
                    data.forEach(subject => {
                        console.log(subject.subject_id);
                        
                        $('#subject').append(`<option value="${subject.subject_id}"> 
                                       ${subject.name} 
                                  </option>`); 
                    });
                });
            }
        });
        $('#class').change(function () {


            var studentID = $('#student_id').val();
            var streamID = $('#stream_id').val();
            var year = $('#year').val();
            var classes = $('#class').val();
            console.log(year);
            console.log(classes);


            if (year == null || classes == null) {
                console.log('no input');
            } else {
                var newdata = {
                    student_id: studentID,
                    stream_id: streamID,
                    year: year,
                    classes: classes
                };
                getSuject(newdata).then((data) => {
                    console.log(data);
                    $('#subject option').each(function () {
                            $(this).remove(); 
                    });
                    
                    $('#subject').append(`<option selected value="">Select subject</option>`); 
                    data.forEach(subject => {
                        console.log(subject.subject_id);
                        
                        $('#subject').append(`<option value="${subject.subject_id}"> 
                                       ${subject.name} 
                                  </option>`); 
                    });
                });
            }
        });
    });
</script>
@endsection