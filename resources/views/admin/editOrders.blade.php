@extends('layout.layoutEditOrders')

@section('editOrders')
<nav class="navbar navbar-expand-xl">
    <div class="container h-100">
        <a class="navbar-brand" href="/">
            <h1 class="tm-site-title mb-0">Love Tea Company</h1>
        </a>
        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars tm-nav-icon"></i>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-book-open"></i>
                        <span> Catalog <i class="fas fa-angle-down"></i> </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/product-category">Product & Categories</a>
                        <a class="dropdown-item" href="/inventory-category">Inventory</a>

                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="/promotion">
                        <i class="fas fa-tags"></i> Promotions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/admin-order">
                        <i class="fas fa-truck"></i> Orders
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link d-block" href="/login">
            Admin, <b>Logout</b>
          </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <br><br>
    </div>
    <!-- row -->
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">

                <div class="wrapper">

                    <h2 class="tm-block-title">Billing Address</h2>
                    <div class="container1">

                        <form action="" method="post" class="tm-edit-product-form">
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Order ID</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;<input type="text" style="background-color: transparent;border: none; color: white;" value="#132487" id="input">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Name</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <input style="background-color: transparent;border: none; color:white" type="text" value="Joana Mae Francisco" id="customer">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Email</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;jmfrancisco@gmail.com
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>City</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <input type="text" style="background-color: transparent;border: none; color: white;" value="Zamboanga City" id="add1">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Zip Code</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <b>7000</b>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Address</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <input type="text" style="background-color: transparent;border: none; color: white;" value="Culianan" id="add">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Date Ordered</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <input type="date" style="background-color: transparent;border: none; color: white;" value="01/09/2021" id="date">
                                </div>
                            </div>



                        </form>
                    </div>

                    <br><br>

                    <div class="container1">
                        <h2 class="tm-block-title">Products</h2>

                        <div class="container1">
                            <table class="table table-hover tm-table-small tm-product-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>

                                        <th scope="col">Product Name</th>
                                        <th scope="col">Total Price</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="color: black;">
                                        <td>2</td>
                                        <td>85</td>
                                        <td>Matcha</td>
                                        <td>170</td>

                                    </tr>
                                    <tr style="color: black;">
                                        <td>3</td>
                                        <td>85</td>
                                        <td>Okinawa</td>
                                        <td>255</td>

                                    </tr>
                                </tbody>

                            </table>
                            <br>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Total Quantity:</b>
                </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" style="background-color: transparent;border: none; color: white;" value="5" id="qty">
                                </div>
                            </div>
                        </div>
                    </div>


                    <br><br><br>



                    <div class="container1">
                        <h2 class="tm-block-title">Payment</h2>

                        <div class="container1">
                            <form action="" method="post" class="tm-edit-product-form">
                                <div class="form-group mb-3">
                                    <label for="name" style="color: #282828;"><b>Order Subtotal</b>
                    </label>
                                    <div contenteditable="true" style="color: white; font-weight: lighter;">
                                        &nbsp; &nbsp; &nbsp;425
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" style="color: #282828;"><b>Delivery Fee</b>
                    </label>
                                    <div contenteditable="true" style="color: white; font-weight: lighter;">
                                        &nbsp; &nbsp; &nbsp;00
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" style="color: #282828;"><b>Order Tax</b>
                    </label>
                                    <div contenteditable="true" style="color: white; font-weight: lighter;">
                                        &nbsp; &nbsp; &nbsp; 00
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" style="color: #282828;"><b>Order Total</b>
                    </label>
                                    <div contenteditable="true" style="color: white; font-weight: lighter;">
                                        &nbsp; &nbsp; &nbsp; <input type="text" style="background-color: transparent;border: none; color: white;" vlaue="425" id="amount">
                                    </div>
                                </div>




                            </form>

                        </div>
                    </div>
                    <div class="col-12">
                        <br><br>
                        <button type="submit" onclick="alert('Succesfully Saved')" class="btn btn-primary btn-block text-uppercase">Save</button>
                    </div>
                    <br><br>





                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">

            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Order Info</h2>

                <div class="container1">

                    <div class="container1">
                        <form action="" method="post" class="tm-edit-product-form">
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Order ID</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;<span id="result"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Customer</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;<span id="cust"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Units</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <span id="qty1"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Address</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <span id="address"></span>&nbsp;<span id="address1"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Date Ordered</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;<span id="date1"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Amount</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <span id="total"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Mode of Payment</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp; <select style="background-color: transparent; border: none; color: white;">
                                    <option value="" style="color: black;">COD</option>
                                    <option value="hurr" style="color: black;">GCash</option>
                                </select>
                                </div>


                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Order Status</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;<select style="background-color: transparent; border: none; color: white;">

                                    <option style="color: black;">Pending</option>
                                    <option value="hurr" style="color: black;">Processing</option>
                                    <option value="hurr" style="color: black;">Complete</option>
                                  
                                </select>
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <label for="name" style="color: #282828;"><b>Payment Status</b>
        </label>
                                <div contenteditable="true" style="color: white; font-weight: lighter;">
                                    &nbsp; &nbsp; &nbsp;<select style="background-color: transparent; border: none; color: white;">

                                    <option style="color: black;">Paid</option>
                                    <option value="hurr" style="color: black;">Processing</option>
                                  
                                </select>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved. <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">A.N. Corp</a>
        </p>
    </div>
</footer>

<script>
    input.oninput = function() {
        result.innerHTML = input.value;
    };
</script>
<script>
    customer.oninput = function() {
        cust.innerHTML = customer.value;
    };
</script>
<script>
    add.oninput = function() {
        address.innerHTML = add.value;
    };
</script>
<script>
    add1.oninput = function() {
        address1.innerHTML = add1.value;
    };
</script>
<script>
    date.oninput = function() {
        date1.innerHTML = date.value;
    };
</script>
<script>
    amount.oninput = function() {
        total.innerHTML = amount.value;
    };
</script>
<script>
    qty.oninput = function() {
        qty1.innerHTML = qty.value;
    };
</script>

<script src="js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
<!-- https://jqueryui.com/download/ -->
<script src="js/bootstrap.min.js"></script>
<!-- https://getbootstrap.com/ -->
<script>
    $(function() {
        $("#expire_date").datepicker({
            defaultDate: "10/22/2020"
        });
    });
</script>
@endsection