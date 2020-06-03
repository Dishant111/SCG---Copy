@extends('layouts.admin')
@section('css')
{{-- for date picker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet"
    type="text/css" />
@endsection

@section('content')

<section class="container container-md  justify-content-center" id="margin-top: 80px">
    <div class="">
        <div class="container  justify-content-center">
            <form action="{{route('createTeacher')}}" method="POST" class="">
                @csrf
                <div class="row justify-content-md-center">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">{{__("first name")}}</label>
                            <input type="text" name="fname" value="{{old('fname')}}" class="form-control" id="fname"
                                placeholder="first name" required>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">{{__("last name")}}</label>
                            <input type="text" name="lname" value="{{old('lname')}}" class="form-control" id="lname"
                                placeholder="last name">
                        </div>
                    </div>
                </div>

                {{-- <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">{{__("D.O.B.")}}</label>
                <input type="text" name="DOB" id="datepicker" width="276" />
        </div>
    </div>
    </div> --}}
    {{-- do not delete this may need this in future --}}
    {{-- <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">{{__("D.O.B.")}}</label>
    <input type="date" name="DOB" class="form-control" id="DOB" placeholder="date of birth">
    </div>
    </div>
    </div>
    --}}
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="formGroupExampleInput">{{__("Contact no.")}}</label>
                <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact"
                    placeholder="Example input placeholder">
                <div class="invalid-feedback">
                    must contain 10 digits only
                </div>
                <div class="valid-feedback">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="formGroupExampleInput">{{__("ID")}}</label>
                <input type="text" name="user_id" value="{{old('user_id')}}" class="form-control" id="user_id"
                    placeholder="ID" required>
                <div class="valid-feedback">
                    User id is Unique
                </div>
                <div class="invalid-feedback">
                    Invalid User id or already exist
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="formGroupExampleInput">{{__("Email")}}</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email"
                    placeholder="Email ID" required>
                <div class="valid-feedback">
                    Acceptable Email ..
                </div>
                <div class="invalid-feedback">
                    Invalid Email or already exist
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="formGroupExampleInput">{{__("Password")}}</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"
                    required>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="form-group">
                <label for="formGroupExampleInput">{{__("confirm Password")}}</label>
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
    <div class="row justify-content-md-center">
        <div class="col col-sm-6">
            <div class="row">
                <div class="col col-12">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
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
    </form>
    </div>
    </div>
</section>
@endsection