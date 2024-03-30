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
                                    <div class="dash-title fs-6">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card" data-aos="fade-up" data-aos-delay="800">
                                                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                                            <div class="header-title">
                                                                <h4 class="card-title">₹ 855.8K</h4>
                                                                <p class="mb-0">Gross Sales</p>
                                                            </div>
                                                            <div class="d-flex align-items-center align-self-center">
                                                                <div class="d-flex align-items-center text-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                                                        <g>
                                                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="ms-2">
                                                                        <span class="text-secondary">Sales</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center ms-3 text-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                                                        <g>
                                                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="ms-2">
                                                                        <span class="text-secondary">Cost</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    This Week
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                                                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div id="d-main" class="d-main"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  <div class="col-md-12 col-xl-6">
                <div class="card" data-aos="fade-up" data-aos-delay="900">
                   <div class="flex-wrap card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="card-title">Earnings</h4>
                      </div>
                      <div class="dropdown">
                         <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            This Week
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                         </ul>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="flex-wrap d-flex align-items-center justify-content-between">
                         <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                         <div class="d-grid gap col-md-4 col-lg-4">
                            <div class="d-flex align-items-start">
                               <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                  <g>
                                     <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                  </g>
                               </svg>
                               <div class="ms-3">
                                  <span class="text-secondary">Fashion</span>
                                  <h6>251K</h6>
                               </div>
                            </div>
                            <div class="d-flex align-items-start">
                               <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                  <g>
                                     <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                  </g>
                               </svg>
                               <div class="ms-3">
                                  <span class="text-secondary">Accessories</span>
                                  <h6>176K</h6>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div> -->
                                                <!--  <div class="col-md-12 col-xl-6">
                <div class="card" data-aos="fade-up" data-aos-delay="1000">
                   <div class="flex-wrap card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="card-title">Conversions</h4>
                      </div>
                      <div class="dropdown">
                         <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            This Week
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                         </ul>
                      </div>
                   </div>
                   <div class="card-body">
                      <div id="d-activity" class="d-activity"></div>
                   </div>
                </div>
             </div> -->
                                            </div>
                                        </div>
                                    </div>
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