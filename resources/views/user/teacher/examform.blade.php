@extends('layouts.app')
@section('content')
<section id="main" class="wrapper style1">
    <!-- <header class="major">
      
    </header> -->
    <div class="box">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Enter Academic Score</div>
                        <div class="card-body">


                            <form class="needs-validation" method="POST"
                                action="{{route('createParent',['name' => Auth::guard('teacher')->user()->fname])}}"
                                novalidate>
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Student ID</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Student ID</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <div class="dropdown">
                                                <label for="exampleFormControlSelect1">Subject ID</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Subject ID</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">{{__("Marks")}}</label>
                                            <input type="text" name="Marks" class="form-control" id="Marks"
                                                placeholder="Enter Marks">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection