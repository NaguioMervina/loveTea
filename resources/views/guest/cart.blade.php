@extends('layout.layoutCart')

@section('cart')
<div class="sticky">

    <div class="container1">
        <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="/login">Login</a>
       <!-- users profile -->
        <div class="dropdown1">
            <button class="dropbtn">Profile </button>
            <div class="dropdown-content">
                <p>
                    <a href="/guest-login">Account Settings</a>
            </div>
        </div>

        <a href="/error">Order Tracker</a>
        <a href="/cart">Cart</a>
        <a href="/menu">Menu</a>
        <a href="/">Home</a>
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
            <div class="px-sm-5 px-2 active">SHOPPING CART<span class="fas fa-check"></span></div>
            <div class="px-sm-5 px-2">CHECKOUT</div>
            <div class="px-sm-5 px-2">FINISH</div>
        </div>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="images/product3.jpg" class="img-sm"></div>
                                            <figcaption class="info" style="font-weight: bold;"> <a href="#" class="title text-dark" data-abc="true">TWINNY MILKTEA</a>
                                                <p class="text-muted small" style="font-weight: bold;">FLAVOR: Assorted </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">&#8369;98.00</var> <small class="text-muted"> &#8369;98.00 each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="images/OreoMT.png" class="img-sm"></div>
                                            <figcaption class="info" style="font-weight: bold;"> <a href="#" class="title text-dark" data-abc="true">Oreo Milktea</a>
                                                <p class="text-muted small" style="font-weight: bold;">FLAVOR: Oreo</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">&#8369;15</var> <small class="text-muted"> &#8369;12 each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light btn-round" data-abc="true"> Remove</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="images/taroMT.png" class="img-sm"></div>
                                            <figcaption class="info" style="font-weight: bold;"> <a href="#" class="title text-dark" data-abc="true">Taro Milktea</a>
                                                <p class="small text-muted" style="font-weight: bold;">FLAVOR: Taro</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">&#8369;9</var> <small class="text-muted"> &#8369;6 each</small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light btn-round" data-abc="true"> Remove</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label>Have discount coupon?</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right ml-3">&#8369;98.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right text-danger ml-3">&#8369;0.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong>&#8369;98.00</strong></dd>
                        </dl>
                        <hr> <a href="/guest-login" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Check out </a> <a href="/" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>

        </div>

    </div>
    

@endsection