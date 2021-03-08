@extends('layout.layoutAccountSetting')

@section('accountSetting')
<div class="sticky">

    <div class="container1">
        <img src="images/head.png" class="responsive1" width="200" height="100" &nbsp;>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="/">Logout</a>
        <div class="dropdown1">
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
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-4 py-5"><img class="rounded-circle mt-5" src="images/userImage.png">
                <div class="height-80 d-flex justify-content-center align-items-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload Profile</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Uploading a new photo</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="body-desc">
                                        It will be easier for us to recognize you if you upload your real photo. You can upload the image in JPG, GIF or PNG format. </p>
                                    <div class="photo-input"> <input type="file" id="loadFile" onchange="console.log(this.files[0].name);" /> <button class="btn btn-sm btn-primary" onclick="document.getElementById('loadFile').click()"> Select a file </button> </div>
                                </div>
                                <div class="modal-footer">
                                    <p class="footer-title">
                                        If you're having problems uploading, try choosing a smaller photo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="font-weight-bold">Customer User</span><span class="text-black-50">user@test.com</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Set Now" value=""></div>
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="" placeholder="Set Now"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="Set Now" value=""></div>
                    <div class="col-md-12"><label class="labels">Birthday</label><input type="date" class="form-control" placeholder="Set Now" value=""></div>
                    <div class="col-md-12"><label class="labels">Phone</label><input type="tel" class="form-control " placeholder="Set Now" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="" required></div>
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" placeholder="Set Now" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">City</label>
                        <input type="text" class="form-control" placeholder="Set Now" value=""></div>
                    <div class="col-md-6"><label class="labels">Barangay</label><input type="text" class="form-control" value="" placeholder="Set Now"></div>
                </div>
                <div class="card-body">
                    <div class="wrapper text-center">
                        <p class="card-description" style="color: rebeccapurple;"><button class="btn btn-outline-success" style="color: purple;" onclick="showSwal('success-message')">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection