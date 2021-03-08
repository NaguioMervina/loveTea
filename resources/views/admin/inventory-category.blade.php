@extends('layout.layoutInventory-Category')

@section('inventory-category')
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
<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">

                <h2 class="tm-block-title">Categories</h2>
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead style="text-align: center;">
                            <tr>

                                <th scope="col">NAME</th>
                                <th scope="col">ITEMS</th>
                                <th scope="col">&nbsp;</th>


                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            <tr>

                                <td class="tm-product-name">Originals</td>
                                <td style="color: black;">15</td>
                                <td> <a style="color: rgb(10, 10, 10);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>

                            </tr>
                            <tr>

                                <td class="tm-product-name">Classic Milk Tea</td>
                                <td style="color: black;">14</td>
                                <td> <a style="color: rgb(26, 25, 25);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>

                            </tr>
                            <tr>

                                <td class="tm-product-name">Oreo Series</td>
                                <td style="color: black;">3</td>

                                <td> <a style="color: rgb(26, 25, 25);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>
                            </tr>
                            <tr>

                                <td class="tm-product-name">Nutella Series</td>
                                <td style="color: black;">2</td>

                                <td> <a style="color: rgb(26, 25, 25);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>
                            </tr>
                            <tr>

                                <td class="tm-product-name">Mango Grahams Series</td>
                                <td style="color: black;">4</td>

                                <td> <a style="color: rgb(26, 25, 25);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>
                            </tr>
                            <tr>

                                <td class="tm-product-name">Fruit Tea</td>
                                <td style="color: black;">11</td>

                                <td> <a style="color: rgb(26, 25, 25);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>
                            </tr>
                            <tr>

                                <td class="tm-product-name">Snacks</td>
                                <td style="color: black; ">4</td>

                                <td> <a style="color: rgb(26, 25, 25);" href="/originals-inventory "><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</a></td>
                            </tr>



                        </tbody>
                    </table>
                </div>
                <!-- table container -->


            </div>



        </div>
    </div>
</div>
</div>
<div class="footer" style="text-align: center;">



    <a style="color: white; font-size: 12px; text-align: center; padding: 1px;">© 2021 Copyright: A.N. Corp</a>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="js/bootstrap.min.js"></script>
<!-- https://getbootstrap.com/ -->
<script>
    $(function() {
        $(".tm-product-name").on("click", function() {
            window.location.href = "edit-product.html";
        });
    });
</script>
@endsection