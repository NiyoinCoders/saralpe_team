@extends("layouts.app")
@section("content")
<div class="conatiner-fluid">
    <div class="card px-4 rounded-0 py-2">
        <!-- table start  -->
        <div class="card-body p-0 mx-4">
            <div class="bd-example">
                <div class="d-flex justify-content-between align-items-center ">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                All
                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Open
                            </button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Closed
                            </button>
                        </div>
                    </nav>
                    <div>
                        <a href="raise_complaint.html" class="btn btn-soft-danger btn-sm"><i class="bi bi-gear-wide-connected"></i>
                            Raise
                            Complaint</a>
                    </div>
                </div>

            </div>

            <div class="mt-3 d-flex flex-column gap-3 accordion-flush flex-md-row flex-lg-row flex-xl-row flex-xxl-row justify-content-between align-items-center flex-wrap">
                <div class="d-flex gap-4">
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="form-group text-center">
                            <label class="form-label text-black text-center" for="user-id">Show</label>
                            <select class="form-select form-select-sm shadow-none text-dark">
                                <option selected="">--All--</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="form-group text-center">
                            <label class="form-label text-black text-center" for="user-id">Short by</label>
                            <select class="form-select form-select-sm shadow-none text-dark">
                                <option selected="">--All--</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="form-group text-center">
                            <label class="form-label text-black text-center" for="user-id">Pages</label>

                            <select class="form-select form-select-sm shadow-none text-dark">
                                <option selected="">--All--</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row flex-xxl-row justify-content-end align-items-center gap-2 mb-3">

                <div class="d-flex gap-1 align-items-center">
                    <button class="btn btn-sm btn-light"><i class="bi bi-caret-left"></i></button>
                    <button class="btn btn-sm btn-light"><i class="bi bi-caret-right"></i></button>
                    <button class="btn btn-soft-primary btn-sm"><i class=" pe-2 bi bi-arrow-down-square"></i>Export</button>
                    <button class="btn btn-soft-info btn-sm"><i class="bi bi-arrow-clockwise"></i></button>
                </div>

            </div>

            <div class="table-responsive pb-5">
                <table id="datatable" class="table table-striped pb-5" data-toggle="data-table">
                    <thead>
                        <tr class="text-dark">
                            <th>#</th>
                            <th>Complaint Id</th>
                            <th>Complaint Date</th>
                            <th>Transaction Id</th>
                            <th>Transaction Date</th>
                            <th>Closure Date</th>
                            <th>Closed By</th>
                            <th>Product</th>
                            <th>Sub Product</th>
                            <th>Issue</th>
                            <th>Created By</th>
                            <th>Partner Code</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <td>101</td>
                            <td>PS-OTHER7949468 (Closed)</td>
                            <td>Mar 13, 2024, 6:26:29 PM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Other</td>
                            <td>Reports requirement</td>
                            <td>Other</td>
                            <td>Avnish Tiwari</td>
                            <td>PS003802</td>
                            <td>
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-toggle="tooltip" data-bs-placement="left" title="View more" class="btn btn-sm">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- edit model  start here-->
                <div class="modal fade" id="exampleModaleditbank" tabindex="-1" aria-labelledby="exampleModalLabeleditbank" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header text-black">
                                Edit Bank Details
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body py-4">
                                <div class=" px-4 rounded-0 py-2">

                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Bank Name<span class="text-danger">*</span></label>
                                                    <select class="form-select mb-3 shadow-none text-dark">
                                                        <option selected="">--Choose--</option>
                                                        <option value="self">Self</option>
                                                        <option value="chain">Chain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label text-dark" for="accountholdername">Account Holder Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control text-dark" id="accountholdername" value="" placeholder="Account Holder Name ">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label text-dark" for="accountnumber">Account Number<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control text-dark" id="accountnumber" value="" placeholder="Account Number ">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label text-dark" for="ifsccode">IFSC Code
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control text-dark" id="ifsccode" value="" placeholder="IFSC Code ">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label text-dark" for="branch">Branch
                                                        Address<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control text-dark" id="branch" value="" placeholder="Branch Address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edit model  start here-->
                <!-- delete model start  -->
                <div class="modal fade" id="exampleModaldeletebank" tabindex="-1" aria-labelledby="exampleModalLabeldeletebank" aria-hidden="true">
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


            <!-- right model start  -->

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="bg-primary text-white px-4 py-1" id="offcanvasRightLabel">Complain Details
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <table class="table">
                        <tbody id="tbody2">

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- right model end  -->


        </div>
    </div>
    <!-- table end  -->

</div>

@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        function formatDate(dateString) {
            var date = new Date(dateString);
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var formattedDate = months[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear() + ', ' + date.getHours() + ':' + ('0' + date.getMinutes()).slice(-2) + ':' + ('0' + date.getSeconds()).slice(-2);
            return formattedDate;
        }
        const fetchList = () => {
            $.ajax({
                url: '{{route("fetchTicket")}}',
                type: 'GET',
                dataType: 'JSON',
                success: function(response) {
                    if (response.tickets != "") {
                        let html;
                        let i = 1;
                        $.each(response.tickets, function(index, value) {
                            html += `<tr data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <td>${i}</td>
                                        <td>${value.complaint_id}</td>
                                        <td>${formatDate(value.created_at)}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button id="compDetailsBTN" data-id="${value.id}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-toggle="tooltip" data-bs-placement="left" title="View more" class="btn btn-sm">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#tbody').html(html);
                    }
                }
            });
        }
        $(document).on('click', '#compDetailsBTN', function() {
            let id = $(this).attr('data-id');
            $.ajax({
                url: '{{route("admin.ticketDetails")}}',
                type: 'post',
                dataType: 'json',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response != '') {
                        if (response.tickets != "") {
                            let html;
                            $.each(response.tickets, function(index, value) {
                                html = ` <tr>
                                            <td>Complaint ID</td>
                                            <td>${value.complaint_id}</td>
                                        </tr>`;
                                html += `<tr><td colspan="2" class="text-center"><a id="approvalBtn" data-id="${value.id}" class="btn btn-primary">Approve</a> <a class="btn btn-danger text-white" id="rejectBtn" data-id="${value.id}">Reject</a></td></tr>`
                            });
                            $('#tbody2').html(html);
                        }
                    }
                }
            });
        });
        $(document).on('click', '#approvalBtn', function() {
            let id = $(this).attr('data-id');
            $.ajax({
                url: '{{route("admin.ticketDetails")}}',
                type: 'post',
                dataType: 'json',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
        fetchList();
    })
</script>
@endsection