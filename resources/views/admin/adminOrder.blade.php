@extends('layout.layoutAdminOrder')

@section('adminOrder')
<div id="id01" class="modal">
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

<div class="container mt-5">
    <div class="row tm-content-row">

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <h2 class="tm-block-title d-inline-block">Orders</h2>
                <br>

                <div class="tm-product-table-container">
                    <div class="table-sortable">
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>


                                <tr>

                                    <th scope="col">Order ID </th>
                                    <th scope="col">CUSTOMER</th>
                                    <th scope="col">UNITS</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">DATE ORDERED</th>
                                    <th scope="col">AMOUNT</th>
                                    <th scope="col">MODE OF PAYMENT</th>
                                    <th scope="col">ORDER STATUS</th>
                                    <th scope="col">PAYMENT STATUS</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody style="color: black;" id="myTable">
                                <tr>


                                    <td>#132487</td>
                                    <td>Joana Mea Francisco</td>
                                    <td>5</td>
                                    <td>Zamboanga City</td>
                                    <td>January 9, 2021</td>
                                    <td>500</td>
                                    <td>COD</td>
                                    <td>Complete</td>
                                    <td>Paid</td>
                                    <td>
                                        <a href="/edit-order ">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#147659</td>
                                    <td>Claire Villamor</td>
                                    <td>2</td>
                                    <td>Zamboanga Sibugay</td>
                                    <td>January 12, 2021</td>
                                    <td>398</td>
                                    <td>COD</td>
                                    <td>Processing</td>
                                    <td>Processing</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#154214</td>
                                    <td>Mervin Naguio</td>
                                    <td>7</td>
                                    <td>Zamboanga City</td>
                                    <td>January 15, 2021</td>
                                    <td>978</td>
                                    <td>Gcash</td>
                                    <td>Pending</td>
                                    <td>Processing</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#184937</td>
                                    <td>Sherard Banquerigo</td>
                                    <td>6</td>
                                    <td>Zamboanga City</td>
                                    <td>January 15, 2021</td>
                                    <td>785</td>
                                    <td>Gcash</td>
                                    <td>Processing</td>
                                    <td>Paid</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#154214</td>
                                    <td>Sherica Jaafar</td>
                                    <td>7</td>
                                    <td>Zamboanga City</td>
                                    <td>January 16, 2021</td>
                                    <td>930</td>
                                    <td>COD</td>
                                    <td>Complete</td>
                                    <td>Processing</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#176382</td>
                                    <td>Vinczar Jailani</td>
                                    <td>2</td>
                                    <td>Zamboanga City</td>
                                    <td>January 16, 2021</td>
                                    <td>390</td>
                                    <td>COD</td>
                                    <td>Pending</td>
                                    <td>Processing</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#143289</td>
                                    <td>Realyn Lumigan</td>
                                    <td>5</td>
                                    <td>Zamboanga City</td>
                                    <td>January 17, 2021</td>
                                    <td>645</td>
                                    <td>Gcash</td>
                                    <td>Processing</td>
                                    <td>Paid</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>#189536</td>
                                    <td>Baron Rabadon</td>
                                    <td>5</td>
                                    <td>Zamboanga Sibugay</td>
                                    <td>January 17, 2021</td>
                                    <td>779</td>
                                    <td>Gcash</td>
                                    <td>Processing</td>
                                    <td>Processing</td>
                                    <td>
                                        <a href="#">
                                            <i style="color: rgb(25, 25, 26);" class="fas fa-eye">&nbsp;View</i>
                                        </a>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    </table>
                </div>
                <br><br>
                <!-- table container -->
                <div class="col-12">
                    <button onClick="window.location.href=window.location.href" class="btn btn-primary btn-block text-uppercase">Refresh </button>

                </div>


            </div>
        </div>





        </tbody>
        </table>


    </div>
</div>
</div>
</div>

<div class="footer" style="text-align: center;">



    <a style="color: white; font-size: 12px; text-align: center; padding: 1px;">© 2021 Copyright: A.N. Corp</a>
</div>

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