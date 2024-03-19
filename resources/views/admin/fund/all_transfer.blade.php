@extends("layouts.app")
@section("content")
  <!-- **********************  content start form here ********************** -->

  <div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Filter Data
                </p>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="start-date">Start Date <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control text-black" id="start-date" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="end-date">End Date <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control text-black" id="end-date" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-dark">User Type<span class="text-danger">*</span></label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">--Choose--</option>
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
                                <label class="form-label text-dark">User ID<span class="text-danger">*</span></label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">--Choose--</option>
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-dark">Transfer type<span
                                        class="text-danger">*</span></label>
                                <select class="form-select mb-3 shadow-none text-dark">
                                    <option selected="">--Choose--</option>
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
                        View All Fund Transfers
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
                                    <th>#</th>
                                    <th>From User</th>
                                    <th>To User	</th>
                                    <th>Amount</th>
                                    <th>Transfer Type</th>
                                    <th>Remark</th>
                                    <th>Receiver Wallet</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>
                                    <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="switch2" checked />
                                        </div>
                                    </td>
                                    <td>$320,800</td>
                                    
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table end  -->

            </div>

        </div>




        <!-- ********************** main content end here ********************** -->
@endsection