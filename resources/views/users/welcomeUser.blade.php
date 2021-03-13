@extends('layout.layoutWelcomeUser')

@section('welcomeUser')
<div class="sticky">

    <div class="container">
        <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="/logout">Logout</a>
        <div class="dropdown">
            <button class="dropbtn">Profile </button>
            <div class="dropdown-content">
                <p>
                    <a href="/account-setting-user">Account Settings</a>
            </div>
        </div>

        <a href="/error">Order Tracker</a>
        <a href="/cart-user">Cart</a>
        <a href="/menu-user">Menu</a>
        <a href="/user">Home</a>
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
<div class="container1">

    <div class="slideshow-container">


        <div class="mySlides fade">

            <img src="images/Slide3.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="images/Delivery.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="images/tea4.jpg" style="width:100%">

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides ");
            var dots = document.getElementsByClassName("dot ");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none ";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active ", " ");
            }
            slides[slideIndex - 1].style.display = "block ";
            dots[slideIndex - 1].className += " active ";
            setTimeout(showSlides, 8000);
        }
    </script>
    <br> <br>
    <p style=" font-family: montserrat ; font-weight: 500; text-align: center; font-size: 30px">Best Sellers</p>

    <div class="slideshow-container">
        <div class="container2">
            <div class="responsive">
                <div class="gallery">
                    <a href="productlist1.html">
                        <img src="images/taroMT.png" alt="taro" width="600" height="400">
                    </a>
                    <button class="btn1">Order Now</button>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a href="productlist1.html">
                        <img src="images/matchaMT.png" alt="matcha" width="600" height="400">
                    </a>
                    <button class="btn1">Order Now</button>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a href="productlist1.html">
                        <img src="images/okinawaMT.png" alt="okinawa" width="600" height="400">
                        <button class="btn1">Order Now</button>
                    </a>

                </div>
            </div>
            <div class="responsive">
                <div class="gallery">
                    <a href="productlist1.html">
                        <img src="images/OreoMT.png" alt="oreo" width="600" height="400">

                    </a>
                    <button class="btn1">Order Now</button>
                </div>
            </div>
            <br><br><br><br><br>


        </div>

        <div class="slideshow-container"><br><br><br><br><br><br><br><br>
        </div>
        <p style=" font-family: montserrat ; font-weight: 500; text-align: center; font-size: 30px; ">Special Series</p>
        <div class="responsive2" style="margin-top: 10px;">
            <div class="gallery">
                <a target="_blank" href="productlist1.html">
                    <img src="images/Nutella Series2.jpg" alt="nutella" width="600" height="400">
                </a>

            </div>
        </div>

        <div class="responsive2" style="margin-top: 10px;">
            <div class="gallery">
                <a target="_blank" href="productlist1.html">
                    <img src="images/oreo series2.jpg" alt="oreo" width="600" height="400">
                </a>

            </div>
        </div>

    </div>

    <div class="slideshow-container">

        <div class="responsive3" style="margin-top: 10px;">
            <div class="gallery">
                <a target="_blank" href="productlist1.html">
                    <img src="images/fruittea.jpg" alt="fruit" width="600" height="400">
                </a>

            </div>

        </div>
        <div class="responsive3" style="margin-top: 10px;">
            <div class="gallery">
                <a target="_blank" href="productlist1.html">
                    <img src="images/SNACKS.jpg" alt="snacks" width="600" height="400">
                </a>

            </div>
        </div>
        <div class="responsive3" style="margin-top: 10px;">
            <div class="gallery">
                <a target="_blank" href="productlist1.html">
                    <img src="images/MangoGrahams.jpg" alt="Mango" width="600" height="400">
                </a>



            </div>
        </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br>



</div>
</div>
</div>
<footer>
    <div class="slideshow-container" style="background-color: #282828; padding: 6px; text-align: center;">
        <p>


            <a href="#"><img src="images/insta1.png" alt="insta" style="width: 4%;"></a>&nbsp;&nbsp;
            <a href="https://www.facebook.com/lovetea.aheartfortea"><img src="images/fb1.png" alt="fb" style="width: 4%;"></a>&nbsp;&nbsp;
            <a href="#"><img src="images/twitter1.png" alt="twitter" style="width: 4%;"> </a>
        </p>
        <p style="color: white; font-family: Arial, Helvetica, sans-serif;">

            <a>About Us |</a>&nbsp; <a href="contact.html" style="text-decoration: none; color: #ffffff;">Contact Us |</a>&nbsp; <a>Terms & Conditions |</a> &nbsp; <a>Privacy Policy </a>
        </p>
        <p style="color: white; font-size: 12px;">© 2021 Copyright: A.N. Corp</p>
    </div>
</footer>
@endsection