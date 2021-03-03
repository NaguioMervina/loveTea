@extends('layout.layoutMenu')

@section('menu')



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
                    <a href="trackOrder.html">Track Order</a>

            </div>
        </div>
        <a href="cart1.html">Cart</a>
        <a href="productlist1.html">Menu</a>
        <a href="/home" class="active">Home</a>
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
<!-- Navbar section -->
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="index.html"><span id="burgundy">Love</span><span id="orange">Tea</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor"
        aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item rounded bg-light search-nav-item"><input type="text" id="search" class="bg-light" placeholder="Search drinks, flavours"><span class="fa fa-search text-muted"></span></li>
            <li class="nav-item"><a class="nav-link" href="login.html"><span class="fa fa-user-o"></span><span class="text">Login</span></a> </li>
            <li class="nav-item "><a class="nav-link" href="cart1.html"><span class="fa fa-shopping-cart"></span><span class="text">Cart</span></a> </li>
        </ul>
    </div>
</nav>
<!-- Navbar mobile view -->
<div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
    <p class="pl-sm-0 pl-2"> Home | <b>All Drinks</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Chocolates</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Cappucino</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Caramel</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accomp</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</div>
<!-- -->



<!-- Sidebar filter section -->
<section id="sidebar" style="background: url('images/teaBg.jpg');">
    <p> Home | <b>All Drinks</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Nutella Series</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Oreo Series</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Fruit Tea</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Mango Graham Series</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Snacks</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accompainments</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</section>
<!-- products section -->
<section id="products">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing 6 results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                    <option value="popularity"><b>Popularity</b></option>
                    <option value="prcie"><b>Price</b></option>
                    <option value="rating"><b>Rating</b></option>
                </select> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="images/product1.jpg">
                    <div class="card-body">
                        <h5><b>Okinawa</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>                                    </div>
                        </div>
                        <a href="cart1.html" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="images/product2.jpg">
                    <div class="card-body">
                        <h5><b>Cofee and Choco COMBO</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>                                    </div>
                        </div>
                        <a href="cart1.html" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="images/product3.jpg">
                    <div class="card-body">
                        <h5><b>TWINNY</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>                                    </div>
                        </div>
                        <a href="cart1.html" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="images/OreoMT.png">
                    <div class="card-body">
                        <h5><b>ITEM</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>                                    </div>
                        </div>
                        <a href="cart1.html" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="images/matchaMT.png">
                    <div class="card-body">
                        <h5><b>ITEM</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>                                    </div>
                        </div>
                        <a href="cart1.html" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card d-relative"> <img class="card-img-top" src="images/taroMT.png">
                    <div class="card-body">
                        <h5><b>ITEM</b> </h5>
                        <div class="rounded bg-white discount" id="orange">10% off</div>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted price"><del>&#8369;50.00</del>&#8369;25.00</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span>1pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div>
                        <a href="cart1.html" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>


</div>



<br>
<div>&nbsp;</div>
<br><br>

<div class="footer" style="text-align: center;">



    <a style="color: white; font-size: 12px; text-align: center; padding: 1px%;">© 2021 Copyright: A.N. Corp</a>
</div>

@endsection