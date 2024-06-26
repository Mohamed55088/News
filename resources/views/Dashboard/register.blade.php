@extends('Dashboard.master-auth')
@section('content')
    <div class="card-body px-5 pb-5 pt-0">
        <h4 class="text-dark text-center mb-5">Sign Up</h4>
        <form action="/index.html">
            <div class="row">
                <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp"
                        placeholder="Name">
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp"
                        placeholder="Username">
                </div>
                <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password">
                </div>
                <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="cpassword" placeholder="Confirm Password">
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">

                        <div class="custom-control custom-checkbox mr-3 mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">I Agree the terms and conditions.</label>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary btn-pill mb-4">Sign Up</button>

                    <p>Already have an account?
                        <a class="text-blue" href="sign-in.html">Sign in</a>
                    </p>
                </div>
            </div>
        </form>

    </div>
@endsection
