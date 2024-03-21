@extends('layouts.app')

@section('content')

<div class="conatiner-fluid">
    <div class="card px-4 rounded-0 py-2">
        <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
            View All Plans
        </p>
        <div id="alertMsg" class="alert alert-primary d-none" role="alert">
            </div>
        <!-- table start  -->
        <div class="card-body p-0 mx-4">
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
                            <th>Title</th>
                            <th>Created at</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">


                    </tbody>
                </table>
                <!-- edit model  start here-->
                <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabeledit" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header text-black">
                                Edit Plan Details
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="editForm">
                                @csrf
                                <div class="modal-body">
                                    <div class=" px-4 rounded-0 py-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label text-dark" for="PlanTitle">Plan Title<span class="text-danger">*</span></label>
                                                        <input type="hidden" name="plan_id" id="plan_id">
                                                        <input type="text" class="form-control text-dark" id="plan_name" value="" name="plan_name" placeholder="Enter Plan Title">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- edit model  start here-->

            </div>
        </div>
        <!-- table end  -->

    </div>

</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        function fetchData() {
            $.ajax({
                url: '{{route("get_plans")}}',
                type: "GET",
                dataType: "JSON",
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    var html;
                    var i = 1;
                    if (response == '') {
                        html += `<tr>
                                    <td colspan="5" class="text-danger text-center">No Record Found!</td>
                                </tr>`
                    } else {
                        $.each(response, function(index, value) {
                            var date = value.created_at;
                            var dateOnly = new Date(date).toISOString().split('T')[0];
                            html += `<tr>
                                        <td>${i}</td>
                                        <td>${value.plan_name}</td>
                                        <td>${dateOnly}</td>
                                        <td>
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="switch2"  ${value.status == 1 ? 'checked': ''} data_id="${value.id}" />
                                            </div>
                                        </td>
                                        <td>
                                            <button id="editBtn" value="${value.id}" data-bs-toggle="modal" data-bs-target="#exampleModaledit" class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></button>
                                            <button id="deleteBtn" value="${value.id}" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>`

                            i++;
                        });
                    }
                    $('#tbody').html(html);

                }
            })
        }
        fetchData();
        $(document).on('submit', '#editForm', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '{{route("edit_plan")}}',
                type: "POST",
                dataType: "JSON",
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $('#exampleModaledit').modal('hide');
                        $('#editForm')[0].reset();
                        $('#alertMsg').html(response.success);
                        $('#alertMsg').removeClass('d-none');
                        setTimeout(() => {
                            $('#alertMsg').addClass('d-none');
                        }, 2000);
                        fetchData();
                    }
                }
            });
        });
        $(document).on('click', '#editBtn', function() {
            var id = $(this).val();
            $.ajax({
                url: '{{route("Fetch_planByID")}}',
                type: "GET",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(response) {
                    response.plan_name ? $('#plan_name').val(response.plan_name) : '';
                    response.id ? $('#plan_id').val(response.id) : '';
                }
            })
        });
        $(document).on('change', '#switch2', function() {
            var id = $(this).attr('data_id');
            var value = $(this).prop('checked') ? 1 : 0;
            $.ajax({
                url: "{{route('planStatusChange')}}",
                type: 'POST',
                dataType: "JSON",
                data: {
                    id: id,
                    value: value,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        $('#alertMsg').html(response.success);
                        $('#alertMsg').removeClass('d-none');
                        setTimeout(() => {
                            $('#alertMsg').addClass('d-none');
                        }, 2000);
                        fetchData();
                    }
                }
            });
        });
        $(document).on('click', '#deleteBtn', function() {
            var id = $(this).val();
            $.ajax({
                url: '{{route("Delete_planByID")}}',
                type: "GET",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        $('#alertMsg').html(response.success);
                        $('#alertMsg').removeClass('d-none');
                        setTimeout(() => {
                            $('#alertMsg').addClass('d-none');
                        }, 2000);
                        fetchData();
                    }
                }
            })
        });
    });
</script>
@endsection