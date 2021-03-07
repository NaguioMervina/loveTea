
<!DOCTYPE html>
<html>
<title>Homepage</title>

<head>
    <link rel="shortcut icon" type="image/png" href="images/LT_logo.png">
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!--bootstrap-->
    

</head>

<body>
    <div class="sticky">
        <div class="container">
            <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
        </div>
    
        <div class="topnav" id="myTopnav">
            <a  href="/login">Login</a>
            <a href="/register">Register</a>
            <div class="dropdown">
                <button class="dropbtn">Order </button>
                <div class="dropdown-content">
                    <p>
                        <a href="/orderstats">Order Status</a>
                        <a href="/track-order">Track Order</a>
    
                </div>
            </div>
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
        @yield('header')
    </div>
   @yield('welcome')
</body>

</html>
