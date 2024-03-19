@extends("layouts.app")
@section("content")
    <!-- main content start from here  -->
    <div class="conatiner-fluid py-0 bg-white">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <h5>DISPUTES</h5>
                        </div>
                        <div class="d-flex gap-2 py-2">
                            <p class="text-sm text-black mb-0">Disputes</p>
                            <div id="svg-container-15">
                                <svg class="icon-18" width="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-sm mb-0">Disputes</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="card text-center rounded-0"> -->
                <!-- 1st tnav bar start -->
                <div class="container">
                    <!-- Nav tabs -->
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <ul class="nav nav-tabs bg-light" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Open</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Closed</button>
                                </li>
                            </ul>

                            <!-- end button start -->
                            <ul class="nav nav-tabs bg-light" id="myTab" role="tablist">

                                <!-- <li class="nav-item" role="presentation">
                                      <button class="nav-link " id="" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">.</button>
                                    </li> -->

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Raise Complaint</button>
                                </li>


                            </ul>
                            <!-- end button  -->
                        </div>
                    </nav>
                    <!-- </nav> -->
                    <!-- Tab panes -->
                    <div class="tab-content p-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                                <!-- drop dworn starts -->
                                <nav class="navbar">
                                    <div class="dropdown">
                                        <label for="" class="text-dark">Show</label>
                                        <button
                                            class="btn  btn-outline-primary justify-content-between btn-sm dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            All &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item active" href="#">All</a></li>
                                            <li><a class="dropdown-item" href="#">Something</a></li>
                                        </ul>
                                        &nbsp;&nbsp;
                                        <label for="" class="text-dark">Shot By</label>
                                        <button
                                            class="btn  btn-outline-primary justify-content-between btn-sm dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            All &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </button>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a class="dropdown-item active" href="#">All</a></li>
                                            <li><a class="dropdown-item" href="#">Something</a></li> -->
                                        </ul>

                                        &nbsp;&nbsp;
                                        <label for="" class="text-dark">Pages</label>
                                        <button
                                            class="btn  btn-outline-primary justify-content-between btn-sm dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            100 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </button>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a class="dropdown-item active" href="#">All</a></li>
                                            <li><a class="dropdown-item" href="#">Something</a></li> -->
                                            <input class="form-control me-2" type="search" placeholder="Search"
                                                aria-label="Search">
                                        </ul>
                                    </div>
                                    <!-- <div class="container-fluid"> -->
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                                    </form>
                                    <!-- </div> -->
                                </nav>

                                <!-- </div> -->

                                <!-- drop down end -->
                                <div class="table-responsive mt-4">
                                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                                        <thead>
                                            <tr>
                                                <th class="text-black">Complaint Id</th>
                                                <th class="text-black">Complaint Date</th>
                                                <th class="text-black">Transaction Id </th>
                                                <th class="text-black">Transaction Date</th>
                                                <th class="text-black">Closure Date</th>
                                                <th class="text-black">Closed By</th>
                                                <th class="text-black">Product</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>no <br> data <br>found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer border-top d-flex justify-content-between flex-wrap">
                                    <p class="text-black">Showing 0 to 0 of 0 entries</p>
                                    <div>
                                        <button class="bg-transparent border-0">
                                            Previous
                                        </button>
                                        <button class="bg-transparent border-0">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- table end here -->

                        </div>
                        <!-- SECOND -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                            <!-- SECOND BODY START FROM HERE -->
                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <ul class="nav nav-tabs bg-light" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target=""
                                                type="button" role="tab" aria-controls="contact" aria-selected="false"
                                                tabindex="-1">Raise New Request</button>
                                        </li>
                                    </ul>

                                    <!-- end button start -->
                                    <ul class="nav nav-tabs bg-light" id="myTab" role="tablist">

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="true">Raise Complaint</button>
                                        </li>


                                    </ul>
                                    <!-- end button  -->
                                </div>
                            </nav>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class=" p-3 text-center mt-5">
                                            <!-- <h2>Content 1</h2> -->
                                            <p><img src="dashboard/images/servie_page_images/iconnn.jpg" width="120px"
                                                    alt=""></p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class=" p-3 text-center">
                                            <p>We have received your complaint.</p>
                                            <p>your ticket number is PS-OTHER7949468</p>
                                            <br>
                                            <p>Our Support team will send you on update within.</p>
                                            <br>
                                            <p>6 working days</p>
                                            <br>
                                            <p>What Next?</p>
                                            <p>
                                                <button type="button" class="btn btn-primary">Go to Dashboard</button>
                                                <button type="button" class="btn btn-primary">Track Status</button>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SECOND BODY ENDS from here -->
                        </div>
                        <!-- THIRDS -->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Contact
                            content</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">button
                            content</div>
                    </div>
                </div>
                <!-- 1st nav bar ends -->
            </div>



        </div>
        <!-- form end here  -->
@endsection