@extends('layout.layoutProd&Category')

@section('product&category')
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

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <a>


                    <form action="/action_page.php">
                        <a style="color: white; font-size: 20px;text-align: left;"><b>
                            Products
                        </a></b>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i> </button>
                    </form>
                </a>
                <br>
                <div class="tm-product-table-container">
                    <div class="table-sortable">
                        <table class="table table-hover tm-table-small tm-product-table">


                            <thead style="text-align: center;">

                                <tr>
                                    <a>Price</a>
                                    <th scope="col">PRODUCT NAME</th>
                                    <th scope="col">REGULAR</th>
                                    <th scope="col">PRICE FOR MEDIUM (M) SIZE CUP</th>
                                    <th scope="col">PRICE FOR LARGE (L) SIZE CUP</th>
                                    <th scope="col">PRICE FOR OVERDOSE SIZE CUP</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">&nbsp;</th>




                                </tr>
                            </thead>

                            <tbody style="text-align: center; color: black;">
                                <tr>
                                    <td class="tm-product-name">Wintermelon</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Classic Milk Tea</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>

                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Okinawa</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Originals</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>


                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Chocolate</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Classic Milk Tea</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Fries</td>
                                    <td>35</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td class="tm-product-name">Snacks</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Lumpia</td>
                                    <td>40</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td class="tm-product-name">Snacks</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Bloody Berry</td>
                                    <td>65</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td class="tm-product-name">Fruit Tea</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Hokkaido</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Classic Milk Tea</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product" class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Avocado</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Original</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Strawberry</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Classic</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product" class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Ube</td>
                                    <td>--</td>
                                    <td>60</td>
                                    <td>70</td>
                                    <td>90</td>
                                    <td class="tm-product-name">Original</td>
                                    <td><img src="MangoGrahams.jpg" height="38px"></td>
                                    <td>
                                        <a href="/edit-product " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        </table>
                    </div>
                </div>
                <br>
                <!-- table container -->
                <a href="/add-product" class="btn btn-primary btn-block text-uppercase mb-3">Add New Product</a>



            </div>
        </div>





        </tbody>
        </table>


        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title">Product Categories</h2>
                <div class="tm-product-table-container">
                    <div class="table-sortable">
                        <table class="table tm-table-small tm-product-table">
                            <thead>
                                <tr>

                                    <th scope="col">CATEGORY NAME</th>

                                    <th scope="col">&nbsp;</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="tm-product-name">Orignals</td>
                                    <td class="text-center">
                                        <a href="/edit-category" class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>

                                    <td class="tm-product-name">Classic Milk Tea</td>
                                    <td class="text-center">
                                        <a href="/edit-category " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Oreo Series</td>
                                    <td class="text-center">
                                        <a href="/edit-category " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Nutella Series</td>
                                    <td class="text-center">
                                        <a href="/edit-category " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Mango Grahams Series</td>
                                    <td class="text-center">
                                        <a href="/edit-category" class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Fruit Tea</td>
                                    <td class="text-center">
                                        <a href="/edit-category " class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Snacks</td>
                                    <td class="text-center">
                                        <a href="/edit-category" class="tm-product-delete-link">
                                            <i style="color: aliceblue;" class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- table container -->
                <a href="/add-category">
                    <button class="btn btn-primary btn-block text-uppercase mb-3">
          Add new category
        </button></a>
            </div>
        </div>
    </div>
</div>
<div class="footer" style="text-align: center;">



    <a style="color: white; font-size: 12px; text-align: center; padding: 1px;">© 2021 Copyright: A.N. Corp</a>
</div>
<script>
    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                //check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
</script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
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

<script src="js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="js/bootstrap.min.js"></script>
<!-- https://getbootstrap.com/ -->
<script>
    $(function() {
        $(".tm-product-name").on("click", function() {
            window.location.href = " ";
        });
    });
</script>
@endsection