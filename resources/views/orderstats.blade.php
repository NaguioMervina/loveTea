@extends('layout.layoutOrderStats')

@section('orderstats')
<div class="sticky">

    <div class="container1">
        <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
    </div>
    <div class="topnav" id="myTopnav">

        <a href="login.html">Login</a>
        <a href="signup.html">Register</a>
        <div class="dropdown1">
            <button class="dropbtn">Profile </button>
            <div class="dropdown-content">
                <p>
                    <a href="editProfile1.html">Account Settings</a>
                    <a href="login.html">Sign Out</a>
            </div>
        </div>

        <div class="dropdown1">
            <button class="dropbtn">Order </button>
            <div class="dropdown-content">
                <p>
                    <a href="orderConfirm1.html">Order Status</a>
                    <a href="trackOrder1.html">Track Order</a>

            </div>
        </div>
        <a href="cart1.html">Cart</a>
        <a href="productlist1.html">Menu</a>
        <a href="index.html" class="active">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</div>
<br><br>
<div class="container mt-4 mb-4" style="margin-left: 17%;">

    <div class="col-md-10">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-right p-5">
                    <div class="text-center order-details">
                        <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> <span class="check1"><i class="fa fa-check"></i></span> <span class="font-weight-bold">Order Confirmed</span> <small class="mt-2">Your TWINNY MILKTEA will arrived to you soon!</small>
                        </div> <button class="btn btn-danger btn-block order-button"><a href="/">Go back to menu</a></button>
                    </div>
                </div>
                <div class="col-md-6 background-muted">
                    <div class="p-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock-o text-muted"></i> 20-30 minutes Delivey</span> </div>
                        <div class="mt-3">
                            <h6 class="mb-0">TWINNY MILKTEA</h6> <span class="d-block mb-0">Sugar Level: Normal </span> <small>Qty: 1 pc</small>
                        </div>
                    </div>
                    <div class="row g-0 border-bottom">
                        <div class="col-md-6 border-right">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span>x1</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span>&#8369;98.00 per piece</span> </div>
                        </div>
                    </div>
                    <div class="row g-0 border-bottom">
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span>Subtotal</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span>&#8369;0.00</span> </div>
                        </div>
                    </div>
                    <div class="row g-0 border-bottom">
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span>Processing fees</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span>&#8369;0.00</span> </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span class="font-weight-bold">Total</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 d-flex justify-content-center align-items-center"> <span class="font-weight-bold">&#8369;98.00</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div> </div>
        </div>
    </div>
</div>
</div>
<br>
<br>
<div class="footer" style="text-align: center;">



    <a style="color: white; font-size: 12px; text-align: center; padding: 1px%;">© 2021 Copyright: A.N. Corp</a>
</div>
@endsection