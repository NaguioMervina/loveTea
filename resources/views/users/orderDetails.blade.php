@extends('layout.layoutOrderDetails')

@section('orderDetails')
<div class="sticky">

    <div class="container1">
        <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="{{ route('logout') }}"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">

            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        <div class="dropdown1">

            <button class="dropbtn">Profile </button>
            <div class="dropdown-content">
                <p>
                    <a href="account-setting-user">Account Settings</a>
            </div>
        </div>

        <a href="/error">Order Tracker</a>
        <a href="/cart-user">Cart</a>
        <a href="/menu-user">Menu</a>
        <a href="/user">Home</a>
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
<nav class="bg-pink">

    <header>
        <div class="d-flex justify-content-center align-items-center pb-3">
            <div class="px-sm-5 px-2">SHOPPING CART</div>
            <div class="px-sm-5 px-2">CHECKOUT</div>
            <div class="px-sm-5 px-2 active">FINISH <span class="fas fa-check"></span></div>
        </div>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </header>
    <div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
        <div class="text-uppercase">
            <p>Order detail</p>
        </div>
        <div class="h4">Wednesday, January 20, 2020</div>
        <div class="pt-1">
            <p>Order #12615 is currently<b class="text-dark"> processing</b></p>
        </div>
    </div>
    <div class="wrapper bg-white">
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr class="text-uppercase text-muted">
                        <th scope="col">product</th>
                        <th scope="col" class="text-right">total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">TWINNY MILKTEA</th>
                        <td class="text-right"><b>&#8369; 98.00</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pt-2 border-bottom mb-3"></div>
        <div class="d-flex justify-content-start align-items-center pl-3">
            <div class="text-muted">Payment Method</div>
            <div class="ml-auto"><label>Cash On Delivery</label> </div>
        </div>
        <div class="d-flex justify-content-start align-items-center py-1 pl-3">
            <div class="text-muted">Shipping</div>
            <div class="ml-auto"> <label>Free</label> </div>
        </div>
        <div class="d-flex justify-content-start align-items-center pb-4 pl-3 border-bottom">
            <div class="text-muted"> <button class="text-white btn">Discount</button> </div>
            <div class="ml-auto price"> -&#8369;0.00 </div>
        </div>
        <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom">
            <div class="text-muted"> Today's Total </div>
            <div class="ml-auto h5"> &#8369; 98.00 </div>
        </div>
        <div>
            <a href="/user" style="text-decoration: none"><button class="btn btn-success btn-block order-button">Go back to menu</button></a>
        </div>
   <!-- billing address something
        <div class="row border rounded p-1 my-3">
            <div class="col-md-6 py-3">
                <div class="d-flex flex-column align-items start"> <b>Billing Address</b>
                    <p class="text-justify pt-2">Poblacion,Kabasalan, Zamboanga Sibugay</p>
                    <p class="text-justify">Philippines</p>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="d-flex flex-column align-items start"> <b>Billing Address</b>
                    <p class="text-justify pt-2">Poblacion,Kabasalan, Zamboanga Sibugay</p>
                    <p class="text-justify">Philippines</p>
                </div>
            </div>
        </div> -->
    </div>

    <br>
    <br>


    <br>
    <div class="footer" style="text-align: center;">



        <a style="color: white; font-size: 12px; text-align: center; padding: 1px%;">© 2021 Copyright: A.N. Corp</a>
    </div>
@endsection