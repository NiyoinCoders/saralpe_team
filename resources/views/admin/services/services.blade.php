@extends("layouts.app")
@section("content")
<!-- form section start from here  -->
<div class="content container-fluid">

    <div class="row">
        <div class="col-xl-8 col-sm-12 col-12 mb-3">
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-12 mb-3">
                    <div class="row justify-content-between">
                        <div class="card-title" style="font-size: 23px; font-weight:bold;">Service Statics
                        </div>
                        <!-- <button class="btn btn-primary">
                        Filter By Date
                    </button> -->

                    </div>
                </div>

                @foreach($services as $service)
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body p-2 d-flex" style="height: 64px;">
                            <div class="dash-widget-header d-flex">
                                <div class="dash-count d-flex align-items-center">
                                    <div class="bg-primary rounded p-2">
                                        <img style="width:30px" src="{{ asset($service->service_image) }}">
                                    </div>
                                    <div class="dash-title m-lg-2 fs-6 ">
                                        <div class="ml-1" style="font-family: sans-serif;">{{$service->service_name}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
        <div class="col-xl-4 col-sm-12 col-12 mb-3">
            <div class="row">
                <div class="col-xl-12 col-sm-6 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">

                                <div class="dash-count ml-0">
                                    <div class="dash-title fs-6">0</div>
                                    <div>
                                        <img src="images/servie_page_images/graph.png" width="280px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-sm-6 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">

                                <div class="dash-count m-lg-2">
                                    <div class="dash-title fs-5">AEPS 2FA Bank 2</div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 m-lg-1">
                                        <button class="btn btn-primary btn-block">Register_Now</button>
                                    </div>
                                    <div class="col-sm-6 col-lg-5 m-lg-1 mt-1 ">
                                        <button class="btn btn-primary btn-block">Today_Auth</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-sm-6 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">

                                <div class="dash-count m-lg-2">
                                    <div class="dash-title fs-5">AEPS 2FA Bank 3</div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 m-lg-1">
                                        <!-- secondary -->
                                        <button class="btn btn-primary btn-block">Register_Now</button>
                                    </div>
                                    <div class="col-sm-6 col-lg-5 m-lg-1 mt-1 ">
                                        <button class="btn btn-primary btn-block">Today_Auth</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-sm-6 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">

                                <div class="dash-count m-lg-2">
                                    <div class="dash-title fs-5">My Quick Links</div>
                                </div>
                            </div>
                            <div class="m-lg-2">
                                <a href="" class="btn btn-primary ">Aeps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>


<!-- form section end here  -->
@endsection