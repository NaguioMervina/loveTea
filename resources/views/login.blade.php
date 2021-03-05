@extends('layout.layoutLogin')

@section('login')
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/Milk_Tea.png" class="image" width="400" height="300"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">&nbsp;</h6>
                        <div class="facebook text-center mr-3">
                            <div></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" required> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password" required> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center"><a href="index.html" style="text-decoration: none; color:white;">Login</a></button> </div>
                    <div class="row mb-3 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger" href="registration.html">Register</a></small> </div>
                    <div class="row mb-3 px-3"> <small class="font-weight-bold">Are you an Admin? <a class="text-danger" href="registration.html">Click here!</a></small> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection