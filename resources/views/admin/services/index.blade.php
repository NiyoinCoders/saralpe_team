@extends("layouts.app")
@section("content")
  <!-- **********************  content start form here ********************** -->

  <div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <!-- table start  -->
                <div class="card-body p-0 mx-4">
                    <p class="text-white fw-bold bg-primary px-4 rounded-1 py-2 user-select-none">
                        View All Services
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
                                    <th>Service Title</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td>101</td>
                                    <td>Mobile Recharge</td>
                                    <td>7 Aug 2021 08:24 am</td>
                                    <td>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="switch2" checked />
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="bi bi-pen"></i></button>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                         <!-- model start  -->
                         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p
                                            class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                                            Edit Service
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card px-4 rounded-0 py-2">

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label text-dark" for="to-amount">
                                                                Service Name<span class="text-danger">*</span></label>

                                                            <input type="text" class="form-control text-dark"
                                                                id="to-amount" value="" placeholder="Mobile Recharge">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div>
                                                            <label class="form-label text-dark" for="to-amount">
                                                                Image/Icon<span class="text-danger">*</span></label>
                                                            <input class="form-control text-black" type="file"
                                                                placeholder="Choose file"
                                                                aria-label=".form-control example">
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
                        <!-- model end  -->
                    </div>
                </div>
                <!-- table end  -->

            </div>

        </div>




        <!-- ********************** main content end here ********************** -->
@endsection