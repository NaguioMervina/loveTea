@extends('layout.layoutTrackOrder')

@section('trackOrder')
<div class="container-fluid my-5 d-sm-flex justify-content-center">
    <div class="card px-2">
        <div class="card-header bg-white">
            <div class="row justify-content-between">
                <div class="col">
                    <p class="text-muted"> Order ID: <span class="font-weight-bold text-dark">#12615</span></p>
                    <p class="text-muted"> Place On: <span class="font-weight-bold text-dark">20,January 2021</span> </p>
                </div>
        
            </div>
        </div>
        <div class="card-body">
            <div class="media flex-column flex-sm-row">
                <div class="media-body ">
                    <h5 class="bold">TWINNY MILKTEA</h5>
                    <p class="text-muted"> Qty: 1 pc</p>
                    <h4 class="mt-3 mb-4 bold"> <span class="mt-5">&#8369;</span> 98.00 <span class="small text-muted"> via (COD) </span></h4>
                    <p class="text-muted">Tracking Status on: <span class="Today">11:30pm, Today</span></p> <button type="button" class="btn btn-outline-primary d-flex">Reached Destination</button>
                </div><img class="align-self-center img-fluid" src="images/product3.jpg" width="100 " height="100">
            </div>
        </div>
        <div class="row px-3">
            <div class="col">
                <ul id="progressbar">
                    <li class="step0 active " id="step1">PLACED</li>
                    <li class="step0 active text-center" id="step2">SHIPPED</li>
                    <li class="step0 text-muted text-right" id="step3">DELIVERED</li>
                </ul>
            </div>
        </div>
        <div class="card-footer bg-white px-sm-3 pt-sm-4 px-0">
            <div class="row text-center ">
                <div class="col my-auto border-line ">
                    <h5><a href="trackOrder.html">Refresh</a></h5>
                </div>
                <div class="col my-auto border-line ">
                    <h5><a href="#">Cancel</h5></a>
                </div>
                <div class="col my-auto border-line ">
                    <h5><a href="index1.html">Home</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection