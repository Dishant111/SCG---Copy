@extends('layouts.admin')
@section('content')
<div class="container container-md  justify-content-center" style="margin-top: 80px">
    <form action="{{route('adminLogin')}}" method="POST" class="mx-auto">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Admin id</label>
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
                    <div class="col col-12">
                        <button type="submit " class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection