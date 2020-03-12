@extends('layouts.App')
@section('css')


@endsection
@section('content')

<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">
        <div class="container container-md  justify-content-center" style="">
            <div class="col-md-12" id="">
                <div class="">
                    <h3>
                        <div class="mbr-section-subtitle mbr-fonts-style display-5"> search parent for update </div>
                    </h3>
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="inlineFormInputName">{{__("User ID")}}</label>
                                <input type="text" name="user_id" class="form-control" id="user_id"
                                    placeholder="Parent Id">
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
                    <form id="usedetails" style="display: none" class="needs-validation" method="POST"
                        action="{{route('updateParent',['name' => Auth::guard('teacher')->user()->fname])}}" novalidate>
                        @method('PATCH')
                        @csrf
                        <h3>
                            <div class="mbr-section-subtitle mbr-fonts-style display-5"> Parent Details
                            </div>
                        </h3>
                        <input type="hidden" name="user_id" id="parent_id" value="">
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
            $('#usedetails').css("display", "none");
        });

        function setData(parent) {
            $('#parent_id').val(parent.parent_id);
            $('#fname').val(parent.fname);
            $('#lname').val(parent.lname);
            $('#contact').val(parent.contact);
            $('#email').val(parent.email);
            // $('#user_id').prop("disabled", true);
        }


        async function getParent(data) {
            let url = '/validation/getparentData';
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
            $('#usedetails').css("display", "none");
            $('#loading').css("display", "block");
            let id = $('#user_id').val().trim();
            if (id === '') {
                alert('please enter parent id');
                $('#loading').css("display", "none");
            } else {
                var newdata = {
                    parent_id: id
                };
                getParent(newdata).then((data) => {
                    if (data.parent_id == false) {
                        alert('parent id is not valid.');

                    } else {
                        $('#usedetails').css("display", "block");
                        setData(data);
                    }
                    $('#loading').css("display", "none");
                });
            }

        });
    });
</script>

@endsection