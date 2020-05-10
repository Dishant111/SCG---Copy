@extends('layouts.App')
@section('content')
<div class="container container-md  justify-content-center" style="margin-top: 80px">
{{-- {{dd(Hash::make('admin'))}} --}}
    <form action="{{route('login')}}" method="POST" class="mx-auto">
        @csrf
        <div class="row justify-content-md-center">
            <div class=" col-md-6">
                <div class="form-group">
                    <label for="inputState"></label>
                    <select id="inputState" name="type" class="form-control" required>
                        <option selected value="">Select profile</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Parent">Parent</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class=" col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">User id</label>
                    <input type="text" class="form-control" name="id" id="formGroupExampleInput"
                        placeholder="Example input placeholder" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" class="form-control" name="password" id="formGroupExampleInput"
                        placeholder="Example input placeholder" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-sm-6">
                <div class="row">
                    <div class="col col-7">
                        <div class=" mbr-section-btn">
                            href="{{route('loginPage')}}"> <button class="btn btn-sm btn-primary display-4"
                                type="submit"><span
                                    class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Login</button>
                        </div>
                    </div>
                    {{-- <div class="col col-auto">
                        <a href="" class="ml-5">forgot password?</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </form>
</div>
@endsection