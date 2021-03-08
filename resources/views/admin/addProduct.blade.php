@extends('layout.layoutAdminAddProduct')

@section('addProduct')
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
<div class="container tm-mt-big tm-mb-big">
    <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Add New Product</h2>
                    </div>
                </div>
                <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <form action="" method="post" class="tm-edit-product-form">
                            <div class="form-group mb-3">
                                <label for="name">Product Name
                </label>
                                <input id="name" name="name" type="text" value=" " class="form-control validate" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label
                >
                <textarea                    
                  class="form-control validate tm-small"
                  rows="5"
                  required
                  placeholder= "Write a short description of the product here..."
                ></textarea>
              </div>
              <div class="form-group mb-3">
                <label
                  for="category"
                  >Category</label
                >
                <select
                  class="custom-select tm-select-accounts"
                  id="category"
                >
                  <option>Select category</option>
                  <option value="1" selected>Originals</option>
                  <option value="2">Classic Milk Tea</option>
                  <option value="3">Oreo Series</option>
                  <option value="3">Nutella Series</option>
                  <option value="3">Mango Grahams Series</option>
                  <option value="3">Fruit Tea</option>
                  <option value="3">Snacks</option>
                </select>
              </div>
              <br>
              <div class="row">
                 
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <label for="stock">Available Stocks
                      </label>
                                <input id="stock" name="stock" type="text" placeholder="Medium Cup Size" class="form-control validate" /><br>
                                <input id="stock" name="stock" type="text" placeholder="Large Cup Size" class="form-control validate" /><br>
                                <input id="stock" name="stock" type="text" placeholder="Overdose Cup Size" class="form-control validate" /><br>
                                <input id="price3" name="price" type="text" placeholder="Regular Cup Size" class="form-control validate" />
                            </div>

                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <label for="price">Price
                    </label>
                                <input id="price1" name="price" type="text" placeholder="Medium Cup Size" class="form-control validate" /><br>
                                <input id="price2" name="price" type="text" placeholder="Large Cup Size" class="form-control validate" /><br>
                                <input id="price3" name="price" type="text" placeholder="Overdose Cup Size" class="form-control validate" /><br>
                                <input id="price3" name="price" type="text" placeholder="Regular" class="form-control validate" />
                            </div>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="tm-product-img-dummy mx-auto">
                        <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                    </div>
                    <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" style="display:none;" />
                        <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" onclick="alert('Succesfully Added New Product')" class="btn btn-primary btn-block text-uppercase">Add New Product Now</button>
                </div>
                </form>
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