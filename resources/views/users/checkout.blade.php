@extends('layout.layoutCheckout')

@section('checkout')
<div class="sticky">

    <div class="container1">
        <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="/">Logout</a>
        <div class="dropdown1">
            <button class="dropbtn">Profile </button>
            <div class="dropdown-content">
                <p>
                    <a href="/account-setting-user">Account Settings</a>
            </div>
        </div>

        <a href="/error">Order Tracker</a>
        <a href="/cart-user">Cart</a>
        <a href="/menu-user">Menu</a>
        <a href="/user" class="active">Home</a>
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
            <div class="px-sm-5 px-2 active">CHECKOUT <span class="fas fa-check"></span> </div>
            <div class="px-sm-5 px-2">FINISH</div>
        </div>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </header>
    <div class="wrapper" style="background: url(images/teaBg.jpg);">
        <div class="h5 large">Billing Address</div>
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
                <div class="mobile h5">Billing Address</div>
                <div id="details" class="bg-white rounded pb-5">
                    <form>
                        <div class="form-group"> <label class="text-muted">Name</label> <input type="text" name="firstname" placeholder="Full Name" required class="form-control"> </div>
                        <div class="form-group"> <label class="text-muted">Email</label>
                            <div class="form-group"> <input type="email" name="Email Address" placeholder="Email Address" required class="form-control"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group"> <label>City</label>
                                    <div class="form-group"> <input type="text" name="Enter City" placeholder="Enter City" required class="form-control"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"> <label>Zip code</label>
                                    <div class="form-group"> <input type="text" name="Zip Code" required class="form-control"> </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group"> <label>Address</label>
                                    <div class="form-group"> <input type="text" name="Address" placeholder="House# ,Street#" required class="form-control"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"> <label>Phone Number</label>
                                    <div class="form-group"> <input type="text" name="Phone Number" placeholder="(+639)" required class="form-control"></div>
                                </div>
                            </div>

                        </div> <label>Barangay</label> <select name="country" id="country">
                    <option value="calarian">CALARIAN</option>
                    <option value="curuan">CURUAN</option>
                </select>
                    </form>
                </div> <input type="checkbox" checked> <label>Shipping address is same as billing</label>
                <div id="address" class="bg-light rounded mt-3">
                    <div class="h5 font-weight-bold text-primary"> Shipping Address </div>
                    <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                        <div class="mr-auto"> <b>Home Address</b>
                            <p class="text-justify text-muted">Poblacion, Kabasalan</p>
                            <p class="text-uppercase text-muted">Zamboanga Sibugay</p>
                        </div>

                        <div class="rounded py-2 px-3" id="register">
                            <a href="#"> <b>Register Now</b> </a>
                            <p class="text-muted">Create account to have multiple address saved</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1 pt-lg-0 pt-3">
                <div id="cart" class="bg-white rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="h6">Cart Summary</div>
                    <!--  //edit cart purpose  <div class="h6"> <a href="cart.html">Edit</a> </div> -->
                    </div>
                    <div class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
                        <div class="item pr-2"> <img src="images/melkti.jpg" alt="" width="80" height="80">
                            <div class="number">1</div>
                        </div>
                        <div class="d-flex flex-column px-3"> <b class="h5">TWINNY MILKTEA</b> <a href="images/melkti.jpg" class="h5 text-primary">C-770</a> </div>
                        <div class="ml-auto"> <b class="h5">&#8369;98.00</b> </div>
                    </div>
                    <div class="my-3"> <input type="text" class="w-100 form-control text-center" placeholder="Gift Card or Promo Card"> </div>
                    <div class="d-flex align-items-center">
                        <div class="display-5">Subtotal:</div>
                        <div class="ml-auto font-weight-bold">&#8369;98.00</div>
                    </div>
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <div class="display-5">Shipping:</div>
                        <div class="ml-auto font-weight-bold">FREE DELIVERY</div>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <div class="display-5">Total</div>
                        <div class="ml-auto d-flex">
                            <div class="text-primary text-uppercase px-3">php</div>
                            <div class="font-weight-bold">&#8369;98.00</div>
                        </div>
                    </div>

                </div>
                <div id="summary" class="bg-white rounded py-2 my-4">
                    <div class="table-responsive">
                        <table class="table table-borderless w-75">
                            <tbody>
                                <tr class="text-muted">
                                    <td>TWINNY MILKTEA</td>
                                    <td>:</td>
                                    <td>&#8369;98.00</td>
                                </tr>
                                <tr class="text-muted">
                                    <td>Code</td>
                                    <td>:</td>
                                    <td>770</td>
                                </tr>
                                <tr class="text-muted">
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span class="fas fa-minus btn text-muted"></span> <span>1</span> <span class="fas fa-plus btn text-muted"></span> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="border-top py-2 d-flex align-items-center ml-2 font-weight-bold">
                        <div>Total:</div>
                        <div class="ml-auto text-primary">PHP</div>
                        <div class="px-2">&#8369;98.00</div>
                    </div>
                </div>

                <div id="cart" class="bg-white rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="h6">Choose Your Mode of Payment</div>
                    </div>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">GCash</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">Cash on Delivery(COD)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on Gcash</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Gcash number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-lg-3 pt-2 buttons mb-sm-0 mb-2">
                    <div class="col-md-6">
                        <a href="/menu-user">
                            <div class="btn text-uppercase">Back to Shopping</div>
                        </a>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <a href="/order-details-user">
                            <div class="btn text-white ml-auto"> <span></span> Place Order </div>
                        </a>
                    </div>
                </div>
                <div class="text-muted pt-3" id="mobile"> <span class="fas fa-lock"></span> Your information is save </div>
            </div>
        </div>
        <div class="text-muted"> <span class="fas fa-lock"></span> Your information is save </div>
    </div>
    <br>
    <br>
    <div class="footer" style="text-align: center;">



        <a style="color: white; font-size: 12px; text-align: center; padding: 1px%;">© 2021 Copyright: A.N. Corp</a>
    </div>
@endsection