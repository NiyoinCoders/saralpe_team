@extends("layouts.app")
@section("content")

<div class="conatiner-fluid">
    <div class="card px-4 rounded-0 py-5">

        <div class="card-header">
            <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row flex-xxl-row justify-content-between align-items-center ">
                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Raise New Request
                </p>
                <div>
                    <a href="{{route('b2b.ticket')}}" class="btn btn-soft-danger btn-sm"><i class="bi bi-crosshair"></i>
                        Track
                        Complaint</a>
                </div>
            </div>
        </div>
        <hr class="border border-dark">
        <div class="d-flex align-items-center justify-content-between  flex-column flex-md-row ">
            <div class="d-flex align-items-center flex-column flex-md-row gap-md-4">
                <a class="btn btn-sm btn-soft-primary" href="./raise_complaint.html">Change</a>
                <p class="pt-3">Select nature of your request (Help us understand your concern)</p>
            </div>
            <div>
                <button class="btn btn-primary btn-sm">Transaction Related</button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <ul class="nav justify-content-center nav-pills nav-fil">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">DMT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">IMPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEFT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">AePS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Matm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Adhar Pay</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recharge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bill Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Payout</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="d-flex  justify-content-end mb-4">
                    <button class="btn btn-primary btn-sm me-2">Export</button>
                    <button id="filter-apply-btn" class="btn btn-soft-primary btn-sm">Filter</button>
                </div>

                <!-- filter section start  -->

                <div class="bg-soft-primary mb-5 d-none" id="main-filter-box">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h5 class="pt-4 ps-4">Filter Transaction by</h5>
                        <button class="btn fs-3" id="close-filter-box"><i class="bi bi-x-square"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm text-dark" id="start_date" value="" placeholder="Transaction ID (TID)">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm text-dark" id="end_date" value="" placeholder="Enter Recipient Mobile Number">
                                </div>
                            </div>
                            <!-- advance filter form start  -->
                            <div id="advance-filter-form" class="d-none">
                                <div class="row">
                                    <div class="d-flex justify-content-center mb-4">
                                        <button id="close-advance-filter-btn" class="btn btn-soft-warning btn-sm"><i class="bi bi-x"></i>
                                            Close Advance Filter</button>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm text-dark" id="start_date" value="" placeholder="Transaction ID (TID)">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm text-dark" id="end_date" value="" placeholder="Enter Recipient Mobile Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- advance filter form end  -->

                            <!-- filter button start  -->
                            <div class="d-flex justify-content-center ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-sm">Apply Filter</button>
                                        <button class="btn btn-info btn-sm">Reset Filter</button>
                                    </div>
                                </div>
                            </div>
                            <!-- filter button end  -->

                            <!-- advance filter button start  -->
                            <p class="text-center py-3 text-black">Got more details? <button class="btn btn-sm text-primary" id="advance-filter-btn" href="">Try Advanced
                                    Filter</button></p>
                            <!-- advance filter button end  -->
                        </div>
                    </div>
                </div>

                <!-- filter section end   -->

                <!-- table section start  -->
                <div class="table-responsive pb-5">
                    <table id="datatable" class="table table-striped pb-5" data-toggle="data-table">
                        <thead>
                            <tr class="text-dark">
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Name</th>
                                <th>TXN ID</th>
                                <th>Mobile</th>
                                <th>Amount</th>
                                <th>COMM</th>
                                <th>Status</th>
                                <th>API Type</th>
                                <th>Refunded</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>



                </div>
                <!-- table sectione end  -->
            </div>
        </div>
    </div>
</div>
<script>
    // main filter section javascript 
    const mainFilterBox = document.getElementById('main-filter-box');
    const filterApplyBtn = document.getElementById('filter-apply-btn');
    const closeFilterBox = document.getElementById('close-filter-box');

    closeFilterBox.addEventListener('click', () => {
        mainFilterBox.classList.add("d-none");
        mainFilterBox.classList.remove("d-block");
    });

    filterApplyBtn.addEventListener('click', () => {
        if (mainFilterBox.classList.contains("d-none")) {
            mainFilterBox.classList.remove("d-none");
            mainFilterBox.classList.add("d-block");
        } else {
            mainFilterBox.classList.add("d-none");
            mainFilterBox.classList.remove("d-block");
        }
    });

    // sub filter javascript 
    const advanceFilterForm = document.getElementById('advance-filter-form');
    const closeAdvanceFilterBtn = document.getElementById('close-advance-filter-btn');
    const advanceFilterBtn = document.getElementById('advance-filter-btn');

    advanceFilterBtn.addEventListener('click', () => {
        if (advanceFilterForm.classList.contains("d-none")) {
            advanceFilterForm.classList.remove("d-none");
            advanceFilterForm.classList.add("d-flex");
        }
    });

    closeAdvanceFilterBtn.addEventListener('click', () => {
        advanceFilterForm.classList.add("d-none");
        advanceFilterForm.classList.remove("d-flex");
    })
</script>
@endsection