@extends("layouts.app")
@section("content")


      
<div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Filter Data
                </p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-dark">User Type</label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">All</option>
                                    <option value="admin-self">Admin - Self</option>
                                    <option value="channel-partner">Channel Partner</option>
                                    <option value="master-distributor">Master Distributor</option>
                                    <option value="distributor">Distributor</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="B2C">B2C</option>
                                    <option value="employee">Employee</option>
                                    <option value="white-label">White Label</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-dark">Parent User</label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">All</option>
                                    <option value="admin-self">Admin - Self</option>
                                    <option value="channel-partner">Channel Partner</option>
                                    <option value="master-distributor">Master Distributor</option>
                                    <option value="distributor">Distributor</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="B2C">B2C</option>
                                    <option value="employee">Employee</option>
                                    <option value="white-label">White Label</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-dark">Account Status</label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">All</option>
                                    <option value="admin-self">Admin - Self</option>
                                    <option value="channel-partner">Channel Partner</option>
                                    <option value="master-distributor">Master Distributor</option>
                                    <option value="distributor">Distributor</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="B2C">B2C</option>
                                    <option value="employee">Employee</option>
                                    <option value="white-label">White Label</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-dark">KYC Status</label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">All</option>
                                    <option value="admin-self">Admin - Self</option>
                                    <option value="channel-partner">Channel Partner</option>
                                    <option value="master-distributor">Master Distributor</option>
                                    <option value="distributor">Distributor</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="B2C">B2C</option>
                                    <option value="employee">Employee</option>
                                    <option value="white-label">White Label</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-3 d-none">
                            <div class="form-group">
                                <label class="form-label text-dark">KYC Status<span class="text-danger">*</span></label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">All</option>
                                    <option value="admin-self">Admin - Self</option>
                                    <option value="channel-partner">Channel Partner</option>
                                    <option value="master-distributor">Master Distributor</option>
                                    <option value="distributor">Distributor</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="B2C">B2C</option>
                                    <option value="employee">Employee</option>
                                    <option value="white-label">White Label</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <button class="btn btn-primary mt-2">Search</button>
                        </div>
                    </div>
                </div>

                <!-- table start  -->
            <div class="card-body p-0 mx-4">
                    <p class="text-white fw-bold bg-primary px-4 rounded-1 py-2 user-select-none">
                        User Details
                    </p>
                    <div class="d-flex justify-content-end gap-1 my-4">
                        <button class="btn btn-light btn-sm"><i class="bi bi-copy"></i></button>
                        <button class="btn btn-light btn-sm"><i class="bi bi-filetype-csv"></i></button>
                        <button class="btn btn-light btn-sm"><i class="bi bi-file-earmark-excel"></i></button>
                        <button class="btn btn-light btn-sm"><i class="bi bi-filetype-pdf"></i></button>
                        <button class="btn btn-light btn-sm"><i class="bi bi-printer"></i></button>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Outlet Name</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>User Id</th>
                                    <th>User Type</th>
                                    <th>Email Id</th>
                                    <th>Pincode</th>
                                    <th>Pan</th>
                                    <th>Aadhar</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Wallet Balance</th>
                                    <th>Plan Name</th>
                                    <th>Join Date</th>
                                    <th>Parent Id</th>
                                    <th>Status</th>
                                    <th>Kyc Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="switch2" checked />
                                        </div>
                                    </td>
                                    <td><button class="btn btn-sm btn-success">Varified</button></td>
                                    <td>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModaleinfo" class="btn btn-sm btn-soft-info"><i class="bi bi-credit-card"></i></button>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModaledituser"
                                            class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></button>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModaldeleteuser"
                                            class="btn btn-sm btn-soft-danger"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                               
                            </tbody>
                            
                        </table>

                        <!-- info model start here  -->
                             <div class="modal fade" id="exampleModaleinfo" tabindex="-1"
                            aria-labelledby="exampleModalLabelinfo" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header text-black">
                                        Edit Bank Details
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-4">
                                        <div class=" px-4 rounded-0 py-2">

                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark">Bank Name<span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-select mb-3 shadow-none text-dark">
                                                                <option selected="">--Choose--</option>
                                                                <option value="self">Self</option>
                                                                <option value="chain">Chain</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark"
                                                                for="accountholdername">Account Holder Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="accountholdername" value=""
                                                                placeholder="Account Holder Name ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark"
                                                                for="accountnumber">Account Number<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="accountnumber" value=""
                                                                placeholder="Account Number ">
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark" for="ifsccode">IFSC Code
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="ifsccode" value="" placeholder="IFSC Code ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark" for="branch">Branch
                                                                Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="branch" value="" placeholder="Branch Address">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- info model start here  -->

                              <!-- edit model  start here-->
                              <div class="modal fade" id="exampleModaledituser" tabindex="-1"
                            aria-labelledby="exampleModalLabeleditbank" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header text-black">
                                        Edit Bank Details
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-4">
                                        <div class=" px-4 rounded-0 py-2">

                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark">Bank Name<span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-select mb-3 shadow-none text-dark">
                                                                <option selected="">--Choose--</option>
                                                                <option value="self">Self</option>
                                                                <option value="chain">Chain</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark"
                                                                for="accountholdername">Account Holder Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="accountholdername" value=""
                                                                placeholder="Account Holder Name ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark"
                                                                for="accountnumber">Account Number<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="accountnumber" value=""
                                                                placeholder="Account Number ">
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark" for="ifsccode">IFSC Code
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="ifsccode" value="" placeholder="IFSC Code ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark" for="branch">Branch
                                                                Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control text-dark"
                                                                id="branch" value="" placeholder="Branch Address">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- edit model  start here-->
                        <!-- delete model start  -->
                        <div class="modal fade" id="exampleModaldeleteuser" tabindex="-1"
                            aria-labelledby="exampleModalLabeldeletebank" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body py-4">
                                        <div class="px-4 rounded-0 py-2">

                                            <div class="text-center">
                                                <i class="bi bi-info-circle text-warning fs-2"></i>
                                                <h3>Are you sure?</h3>
                                                <p>You will not be able to recover this data!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">No
                                            Cancel</button>
                                        <button type="button" class="btn btn-danger">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete model end  -->
                    </div>
                </div>
                <!-- table end  -->

            </div>

        </div>


   
@endsection