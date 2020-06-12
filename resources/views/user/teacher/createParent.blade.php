@extends('layouts.App')
@section('css')
{{-- for date picker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet"
    type="text/css" />
@endsection
@section('content')

<section class="counters4 counters cid-rSh8OQehtA" id="counters4-t">
    <div class="container pt-4 mt-2">
        <div class="container container-md  justify-content-center" style="">

            <div class="col-md-12" id="">
                <div class="">
                    <form class="needs-validation" method="POST"
                        action="{{route('createParent',['name' => Auth::guard('teacher')->user()->fname])}}" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">{{__("first name")}}</label>
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="first name" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">{{__("last name")}}</label>
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="last name">
                                </div>
                            </div>
                            {{-- <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="formGroupExampleInput">{{__("D.O.B.")}}</label>
                            <input type="text" name="DOB" class="datepicker" id="datepicker" width="276" />
                        </div>
                </div> --}}
            </div>

            {{-- done --}}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Parent_ID")}}</label>
                        <input type="text" name="user_id" class="form-control" id="user_id" placeholder="ID" required>
                        <div class="valid-feedback">
                            User id is Unique
                        </div>
                        <div class="invalid-feedback">
                            Invalid User id or already exist
                        </div>
                    </div>
                </div>
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
            </div>
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Email")}}</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Parent Id"
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
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Password")}}</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Password" required>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__("Re-enter Password")}}</label>
                        <input type="password" name="password_confirmation" class="form-control" id="re_password"
                            placeholder="Renter Password" required>
                        <div class="valid-feedback">
                        </div>
                        <div class="invalid-feedback">
                            Password doesn't match
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">submit</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js" type="text/javascript">
</script>
<script>
    // for datepicker https://gijgo.com/datepicker/example/bootstrap-4
    var $j = jQuery.noConflict();
    $j('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd-mm-yyyy'
        });
</script>
@endsection