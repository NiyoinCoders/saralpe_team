@extends("layouts.app")
@section("content")

<!-- **********************  content start form here ********************** -->

<div class="conatiner-fluid">
    <div class="card px-4 rounded-0 py-2">
        <!-- table start  -->
        <div class="card-body p-0 mx-4">
            <p class="text-white fw-bold bg-primary px-4 rounded-1 py-2 user-select-none">
                View All Commission Slots
            </p>
            <div class="d-flex justify-content-end gap-1 my-4">
                <button class="text-white btn btn-light btn-sm"><img class="text-white" src="./assets/images/table-assets/copy.png" alt=""></button>
                <button class="text-white btn btn-light btn-sm"><img src="./assets/images/table-assets/csv.png" alt=""></button>
                <button class="text-white btn btn-light btn-sm"><img src="./assets/images/table-assets/excel.png" alt=""></button>
                <button class="text-white btn btn-light btn-sm"><img src="./assets/images/table-assets/pdf.png" alt=""></button>
                <button class="text-white btn btn-light btn-sm"><img src="./assets/images/table-assets/printer.png" alt=""></button>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-black pe-1">Show</span>

                    <select class="form-select form-select-sm shadow-none text-dark">
                        <option selected="">--Choose--</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                    <span class="text-black ps-1">Entries</span>

                </div>
                <div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm text-black" id="search" placeholder="Search" value="">
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table id="basic-table" class="table table-striped mb-0" role="grid">
                    <thead>
                        <tr class="text-black">
                            <th>#</th>
                            <th>User Type</th>
                            <th>Service</th>
                            <th>Commission Type</th>
                            <th>Amount Range</th>
                            <th>Amount / Percentage</th>
                            <th>Plan</th>
                            <th>Chain Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>
                <div class="row mt-4">
                    <div class="col-md-6 text-black">
                        Showing <span>0</span> to <span>0</span> of <span>0</span> entries
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                      
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
                </div>
            </div>
        </div>
        <!-- table end  -->

    </div>

</div>




<!-- ********************** main content end here ********************** -->
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            url: '{{route("index_Commission")}}',
            type: "GET",
            dataType: "JSON",
            success: function(response) {
                var html;
                var i = 1;
                $.each(response, function(index, value) {
                    var CommissionData = JSON.parse(value.data);
                    var url = "{{ route('edit_Commission', ['id' => ':id']) }}";
                    url = url.replace(':id', value.id);

                    html += `<tr>
                                <td>${i}</td>
                                <td>${CommissionData.user_type}</td>
                                <td>${CommissionData.serves_type}</td>
                                <td>${CommissionData.commission_type}</td>
                                <td>Rs. ${CommissionData.from_amount}-${CommissionData.to_amount}</td>
                                <td>Rs. ${CommissionData.commission_amount ? CommissionData.commission_amount : CommissionData.commission_percentage}</td>
                                <td>${CommissionData.plan}</td>
                                <td>${CommissionData.chain_type}</td>
                                <td>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="switch2" ${value.status == 1 ? 'checked' : ''} />
                                    </div>
                                </td>
                                <td>
                                    <a href="${url}" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></a>
                                    <a href="" class="btn btn-sm btn-soft-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>`;
                    i++;
                });
                $('#tbody').html(html);
            }
        });
    })
</script>
@endsection