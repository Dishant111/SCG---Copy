@extends('layouts.App')
@section('css')

{{-- for date picker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet"
    type="text/css" />
@endsection
@section('content')

<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">
        <div class="container container-md  justify-content-center" style="">
            <div class="col-md-12" id="">
                <div class="">
                    <h3>
                        <div class="mbr-section-subtitle mbr-fonts-style display-5"> search student for update </div>
                    </h3>
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="inlineFormInputName">{{__("User ID")}}</label>
                                <input type="text" name="user_id" class="form-control" id="user_id"
                                    placeholder="Student Id">
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
                    <form id="studentdetails" style="display: none" class="needs-validation" method="POST"
                        action="{{route('updateStudent',['name' => Auth::guard('teacher')->user()->fname])}}"
                        novalidate>
                        @method('PATCH')
                        @csrf
                        <h3>
                            <div class="mbr-section-subtitle mbr-fonts-style display-5"> Student Details
                            </div>
                        </h3>
                        <input type="hidden" name="user_id" id="student_id" value="">
                        <div class="form-row">
                            {{--  <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">{{__("User ID")}}</label>
                            <input type="text" name="user_id" class="form-control" id="user_id" placeholder="ID"
                                required>
                            <div class="valid-feedback">
                                User id is Unique
                            </div>
                            <div class="invalid-feedback">
                                Invalid User id or already exist
                            </div>
                        </div>
                </div> --}}
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("first name")}}</label>
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="first name"
                            required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("last name")}}</label>
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="last name">
                    </div>
                </div>


            </div>

            {{-- done --}}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Contact no.")}}</label>
                        <input type="text" name="contact" class="form-control" id="contact"
                            placeholder="Example input placeholder">
                        <div class="invalid-feedback">
                            must contain 10 digits only
                        </div>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("D.O.B.")}}</label>
                        <input type="text" name="DOB" class="datepicker" id="datepicker" width="276" />
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Email")}}</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email ID"
                            required>
                        <div class="valid-feedback">
                            Acceptable Email ..
                        </div>
                        <div class="invalid-feedback">
                            Invalid Email or already exist
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Parent")}}</label>
                        <input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="Parent Id"
                            required>
                        <div class="valid-feedback">
                            Acceptable Email ..
                        </div>
                        <div class="invalid-feedback">
                            Invalid Email or already exist
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">save changes</button>
            </form>
            @if ($errors->any())
            <div class="row justify-content-md-center">
                <div class="col col-sm-6">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
    </div>
</section>
@endsection
@section('js')
@if (!is_null(session('msg')))
<script>
    alert("{{session('msg')}}");
</script>
@endif
{{-- date picker --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js" type="text/javascript"> --}}
</script>



<script>
    $(document).ready(function () {
        $('#user_id').on('input', function () {
            $('#studentdetails').css("display", "none");
        });
        function setData(student) {
            $('#student_id').val(student.student_id);
            $('#fname').val(student.fname);
            $('#lname').val(student.lname);
            $('#contact').val(student.contact);
            $('#datepicker').val(student.DOB);
            $('#email').val(student.email);
            $('#parent_id').val(student.parent_id);
            // $('#user_id').prop("disabled", true);
        }


        async function getStudent(data) {
            let url = '/validation/getstudentData';
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
            $('#studentdetails').css("display", "none");
            $('#loading').css("display", "block");
            let id = $('#user_id').val().trim();
            if (id === '') {
                alert('please enter student id');
                $('#loading').css("display", "none");
            } else {
                var newdata = {
                    student_id: id
                };
                getStudent(newdata).then((data) => {
                    if (data.student_id == false) {
                        alert(' student id is not valid.');
                        
                    } else {
                        $('#studentdetails').css("display", "block");
                        setData(data);
                    }
                    $('#loading').css("display", "none");
                });
            }

        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js" type="text/javascript">
</script>
<script>
    $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy'
        });
</script>
@endsection