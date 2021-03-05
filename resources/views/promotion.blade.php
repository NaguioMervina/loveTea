@extends('layout.layoutPromotion')

@section('promotion')
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
    <form class="modal-content" action="/action_page.php">
        <div class="container2" style="color: white;">
            <h1>Delete</h1>
            <p>Are you sure you want to delete this?</p>

            <div class="clearfix">
                <button style="border: none;cursor: pointer;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button style="border: none; cursor: pointer;" type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
            </div>
        </div>
    </form>
</div>
<nav class="navbar navbar-expand-xl">
    <div class="container h-100">
        <a class="navbar-brand" href="index.html">
            <h1 class="tm-site-title mb-0">Love Tea Company</h1>
        </a>
        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars tm-nav-icon"></i>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.html">
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
                        <a class="dropdown-item" href="product&categories.html">Product & Categories</a>
                        <a class="dropdown-item" href="Categories.html">Inventory</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="Discount.html">
                        <i class="fas fa-tags"></i> Promotions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Orders.html">
                        <i class="fas fa-truck"></i> Orders
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link d-block" href="loginadmin.html">
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




                <h2 class="tm-block-title">Discount</h2>
                <div class="container1">
                    <form>

                        <div class="form-group mb-3">
                            <label for="name" style="color: #f7f5f5;"><b>Name</b> 
                    </label>
                            <div contenteditable="true" style="color: white; font-weight: lighter;">
                                &nbsp; &nbsp; &nbsp;<input type="text" style="border: none; color: rgb(12, 12, 12);" value="" id="input">

                            </div>
                            <br>
                            <label for="name" style="color: #f7f5f5;"><b>Start Date</b></label>
                            <div contenteditable="true" style="color: white; font-weight: lighter;">
                                &nbsp; &nbsp; &nbsp;<input type="date" style="border: none; color: rgb(12, 12, 12);" value="" id="customer">
                                <br>
                            </div>
                            <br>
                            <label for="name" style="color: #f7f5f5;"><b>End Date</b></label>
                            <div contenteditable="true" style="color: white; font-weight: lighter;">
                                &nbsp; &nbsp; &nbsp;<input type="date" style="border: none; color: rgb(12, 12, 12);" value="" id="end">

                            </div>
                            <br>
                            <label for="name" style="color: #f7f5f5;"><b>Discount</b> 
                                    </label>
                            <div contenteditable="true" style="color: white; font-weight: lighter;">
                                &nbsp; &nbsp; &nbsp;<input type="text" style="border: none; color: rgb(12, 12, 12);" value="" id="discount">

                            </div>
                            <br>
                            <label for="name" style="color: #f7f5f5;"><b>Cuopon Code</b> 
                                    </label>
                            <div contenteditable="true" style="color: white; font-weight: lighter;">
                                &nbsp; &nbsp; &nbsp;<input type="text" style="border: none; color: rgb(12, 12, 12);" value="" id="code">

                            </div>
                            <br>
                            <div class="col-12">
                                <button type="submit" onclick="alert('Succesfully Saved')" class="btn btn-primary btn-block text-uppercase">Save</button>
                            </div>
                    </form>

                    </div>



                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">

            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">

                <h2 class="tm-block-title">Discount Info</h2>

                <div class="container1">

                    <div class="tm-product-table-container">
                        <div class="table-sortable">
                            <table class="table table-hover tm-table-small tm-product-table">


                                <thead style="text-align: center;">

                                    <tr>

                                        <th scope="col">NAME</th>
                                        <th scope="col">START DATE</th>
                                        <th scope="col">END DATE</th>
                                        <th scope="col">DISCOUNT TYPE</th>
                                        <th scope="col">DISCOUNT </th>
                                        <th scope="col">COUPON CODE</th>
                                        <th scope="col">&nbsp;</th>

                                    </tr>
                                </thead>

                                <tbody style="text-align: center; color: black;">

                                    <tr>

                                        <td>
                                            Valentines Sale
                                        </td>
                                        <td>02/02/2021</td>
                                        <td>02/15/2021</td>

                                        <td><select id="category">
                                        <option>Select Discount Type</option>
                                        <option value="1" selected>Assigned to order total</option>
                                        <option value="2">Assigned to product</option>
                                        <option value="3">Assigned to categories</option>
                                      </select></td>
                                        <td>10%</td>
                                        <td>vlanTs14</td>


                                        <td>
                                            <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Anniversary Special</td>
                                        <td>03/01/2021</td>
                                        <td>03/25/2021</td>
                                        <td><select id="category">
                                            <option>Select Discount Type</option>
                                            <option value="1" selected>Assigned to order total</option>
                                            <option value="2">Assigned to product</option>
                                            <option value="3">Assigned to categories</option>
                                          </select></td>
                                        <td>20%</td>
                                        <td>YhKwoa93</td>

                                        <td>
                                            <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div contenteditable="true" style="color: rgb(14, 13, 13); font-weight: lighter;">
                                                <span id="result"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div contenteditable="true" style="color: rgb(14, 13, 13); font-weight: lighter;">
                                                <span id="cust"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div contenteditable="true" style="color: rgb(14, 13, 13); font-weight: lighter;">
                                                <span id="date"></span>
                                            </div>
                                        </td>
                                        <td><select id="category">
                                            <option>Select Discount Type</option>
                                            <option value="1" selected>Assigned to order total</option>
                                            <option value="2">Assigned to product</option>
                                            <option value="3">Assigned to categories</option>
                                          </select></td>
                                        <td>
                                            <div contenteditable="true" style="color: rgb(14, 13, 13); font-weight: lighter;">
                                                <span id="disc"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div contenteditable="true" style="color: rgb(14, 13, 13); font-weight: lighter;">
                                                <span id="coup"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
        end.oninput = function() {
            date.innerHTML = end.value;
        };
    </script>
    <script>
        discount.oninput = function() {
            disc.innerHTML = discount.value;
        };
    </script>
    <script>
        code.oninput = function() {
            coup.innerHTML = code.value;
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
    <div class="footer" style="text-align: center;">



        <a style="color: white; font-size: 12px; text-align: center; padding: 1px;">© 2021 Copyright: A.N. Corp</a>
    </div>
@endsection