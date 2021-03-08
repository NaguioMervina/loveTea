@extends('layout.layoutOriginalsInventory')

@section('originals-inventory')
<div id="id01" class="modal" style="text-align: center;">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
    <form class="modal-content" action="/action_page.php">
        <div class="container1" style="color: white;">
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
        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-6 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">

                </div>
                <div>
                    <div class="container-lg">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-12" style="color: white;">
                                            <h2> <b>Originals</b></h2>
                                        </div>

                                    </div>
                                </div>
                                <div class="tm-product-table-container">
                                    <div class="table-sortable">
                                        <table class="table table-bordered" style="color: black;">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>M</th>
                                                    <th>L</th>
                                                    <th>Overdose</th>
                                                    <th>Unit Sold</th>
                                                    <th>Total Available Stocks</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tm-product-name">Avocado</td>
                                                    <td>345</td>
                                                    <td>260</td>
                                                    <td>300</td>
                                                    <td>647</td>
                                                    <td>905</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Okinawa</td>
                                                    <td>430</td>
                                                    <td>290</td>
                                                    <td>100</td>
                                                    <td>980</td>
                                                    <td>820</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Chocolate</td>
                                                    <td>390</td>
                                                    <td>278</td>
                                                    <td>230</td>
                                                    <td>450</td>
                                                    <td>898</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Taro</td>
                                                    <td>170</td>
                                                    <td>368</td>
                                                    <td>380</td>
                                                    <td>880</td>
                                                    <td>918</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <td class="tm-product-name">Matcha</td>
                                                <td>220</td>
                                                <td>389</td>
                                                <td>230</td>
                                                <td>998</td>
                                                <td>839</td>
                                                <td>
                                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                    <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                    <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Caramel Sugar</td>
                                                    <td>290</td>
                                                    <td>190</td>
                                                    <td>330</td>
                                                    <td>589</td>
                                                    <td>810</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Hokaido</td>
                                                    <td>290</td>
                                                    <td>178</td>
                                                    <td>329</td>
                                                    <td>440</td>
                                                    <td>797</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Wintermelon</td>
                                                    <td>430</td>
                                                    <td>103</td>
                                                    <td>165</td>
                                                    <td>680</td>
                                                    <td>698</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td class="tm-product-name">Strawberry</td>
                                                    <td>278</td>
                                                    <td>435</td>
                                                    <td>130</td>
                                                    <td>768</td>
                                                    <td>843</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Ube</td>
                                                    <td>154</td>
                                                    <td>342</td>
                                                    <td>434</td>
                                                    <td>765</td>
                                                    <td>921</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Salted Caramel</td>
                                                    <td>342</td>
                                                    <td>213</td>
                                                    <td>178</td>
                                                    <td>657</td>
                                                    <td>733</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Mango Lychee</td>
                                                    <td>435</td>
                                                    <td>254</td>
                                                    <td>276</td>
                                                    <td>500</td>
                                                    <td>965</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Bubble Gum</td>
                                                    <td>324</td>
                                                    <td>432</td>
                                                    <td>109</td>
                                                    <td>765</td>
                                                    <td>865</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Cheesecake</td>
                                                    <td>380</td>
                                                    <td>230</td>
                                                    <td>132</td>
                                                    <td>490</td>
                                                    <td>742</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="tm-product-name">Vanilla</td>
                                                    <td>432</td>
                                                    <td>100</td>
                                                    <td>237</td>
                                                    <td>890</td>
                                                    <td>769</td>
                                                    <td>
                                                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" title="Edit" data-toggle="tooltip">&nbsp;&nbsp;<i class="material-icons">&#xE254;</i></a>
                                                        <button class="button1" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt"></i></button>

                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function() {
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +

                '<td>' + actions + '</td>' +
                '</tr>';
            $("table").append(row);
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function() {
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function() {
                if (!$(this).val()) {
                    $(this).addClass("error");
                    empty = true;
                } else {
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tr").find(".error").first().focus();
            if (!empty) {
                input.each(function() {
                    $(this).parent("td").html($(this).val());
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").removeAttr("disabled");
            }
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function() {
            $(this).parents("tr").find("td:not(:last-child)").each(function() {
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function() {
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });
    });
</script>
<script>
    function sortTableByColumn(table, column, asc = true) {
        const dirModifier = asc ? 1 : -1;
        const tBody = table.tBodies[0];
        const rows = Array.from(tBody.querySelectorAll("tr"));

        // Sort each row
        const sortedRows = rows.sort((a, b) => {
            const aColText = a.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();
            const bColText = b.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();

            return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
        });

        // Remove all existing TRs from the table
        while (tBody.firstChild) {
            tBody.removeChild(tBody.firstChild);
        }

        // Re-add the newly sorted rows
        tBody.append(...sortedRows);

        // Remember how the column is currently sorted
        table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
        table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-asc", asc);
        table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-desc", !asc);
    }

    document.querySelectorAll(".table-sortable th").forEach(headerCell => {
        headerCell.addEventListener("click", () => {
            const tableElement = headerCell.parentElement.parentElement.parentElement;
            const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
            const currentIsAscending = headerCell.classList.contains("th-sort-asc");

            sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
        });
    });
</script>
@endsection