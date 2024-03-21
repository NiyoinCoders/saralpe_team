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
            <div id="alertMsg" class="alert alert-primary d-none" role="alert">
            </div>
            <div class="d-flex justify-content-between py-2">
                <div class="">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModaladd" class="btn btn-primary">add</a>
                </div>
                <div class="d-flex  gap-1 ">
                    <button class="btn btn-light btn-sm"><i class="bi bi-copy"></i></button>
                    <button class="btn btn-light btn-sm"><i class="bi bi-filetype-csv"></i></button>
                    <button class="btn btn-light btn-sm"><i class="bi bi-file-earmark-excel"></i></button>
                    <button class="btn btn-light btn-sm"><i class="bi bi-filetype-pdf"></i></button>
                    <button class="btn btn-light btn-sm"><i class="bi bi-printer"></i></button>
                </div>
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
                    <tbody id="tbody">


                    </tbody>
                </table>
                <!-- edit model start  -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                                    Edit Service
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="edit_form">
                                <div class="modal-body">
                                    <div class="card px-4 rounded-0 py-2">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label text-dark" for="to-amount">
                                                            Service Name<span class="text-danger">*</span></label>

                                                        <input type="hidden" class="form-control text-dark" id="Service_IDEdit" name="service_id" value="">
                                                        <input type="text" class="form-control text-dark" id="ServiceNameEdit" name="service_name" value="" placeholder="Service Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div>
                                                        <label class="form-label text-dark" for="to-amount">
                                                            Image/Icon<span class="text-danger">*</span></label>
                                                        <input class="form-control text-black" type="file" placeholder="Choose file" name="service_image" aria-label=".form-control example">
                                                        <input type="hidden" id="Old_ServiceImgPath" name="old_service_imagePath">
                                                        <img class="pt-3" width="200px" id="EditserviceImage">
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
                <!-- edit model end  -->

                <!-- add model start  -->
                <div class="modal fade" id="exampleModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                                    Add Service
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="add_form">
                                <div class="modal-body">
                                    <div class="card px-4 rounded-0 py-2">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label text-dark" for="to-amount">
                                                            Service Name<span class="text-danger">* <span id="err_service_name"></span></span></label>

                                                        <input type="text" class="form-control text-dark" id="to-amount" name="service_name" value="" placeholder="Service Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div>
                                                        <label class="form-label text-dark" for="to-amount">
                                                            Image/Icon<span class="text-danger">* <span id="err_service_image"></span></span></label>
                                                        <input class="form-control text-black" type="file" placeholder="Choose file" name="service_image" aria-label=".form-control example">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- add model end  -->
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
        function fetchData() {
            $.ajax({
                url: '{{route("get_services")}}',
                type: "GET",
                dataType: "JSON",
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    var html;
                    var i = 1;
                    if(response == ''){
                        html += `<tr>
                                    <td colspan="5" class="text-danger text-center">No Record Found!</td>
                                </tr>`
                    }else{
                        $.each(response, function(index, value) {
                        var date = value.created_at;
                        var dateOnly = new Date(date).toISOString().split('T')[0];
                        html += `<tr>
                                    <td>${i}</td>
                                    <td>${value.service_name}</td>
                                    <td>${dateOnly}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="switch2" ${value.status == 1 ? 'checked': ''} data_id="${value.id}" />
                                        </div>
                                    </td>
                                    <td>
                                        <button id="editBtn" value="${value.id}" class="btn btn-sm btn-soft-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pen"></i></button>
                                        <button id="deleteBtn" value="${value.id}" class="btn btn-sm btn-danger" ><i class="bi bi-trash"></i></button>
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
        $(document).on('change', '#switch2', function() {
            var id = $(this).attr('data_id');
            var value = $(this).prop('checked') ? 1 : 0;
            $.ajax({
                url: "{{route('serviceStatusChange')}}",
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
        })
        $(document).on('submit', '#add_form', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: '{{route("add_service")}}',
                type: "POST",
                dataType: "JSON",
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        $('#exampleModaladd').modal('hide');
                        $('#add_form')[0].reset();
                        $('#alertMsg').html(response.success);
                        $('#alertMsg').removeClass('d-none');
                        setTimeout(() => {
                            $('#alertMsg').addClass('d-none');
                        }, 2000);
                        fetchData();
                    }
                    if (response.errors) {
                        response.errors.service_name ? $('#err_service_name').html(response.errors.service_name) : $('#err_service_name').html('');
                        response.errors.service_image ? $('#err_service_image').html(response.errors.service_image) : $('#err_service_image').html('');
                    }
                }
            })
        });
        $(document).on('submit', '#edit_form', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: '{{route("edit_service")}}',
                type: "POST",
                dataType: "JSON",
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $('#exampleModal').modal('hide');
                        $('#edit_form')[0].reset();
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
        $(document).on('click', '#editBtn', function() {
            var id = $(this).val();
            $.ajax({
                url: '{{route("Fetch_serviceByID")}}',
                type: "GET",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(response) {
                    var ImgUrl = "{{ asset(':path') }}";
                    ImgUrl = ImgUrl.replace(':path', response.service_image);
                    response.service_name ? $('#ServiceNameEdit').val(response.service_name) : '';
                    response.service_image ? $('#EditserviceImage').attr('src', ImgUrl) : '';
                    response.id ? $('#Service_IDEdit').val(response.id) : '';
                    response.service_image ? $('#Old_ServiceImgPath').val(response.service_image) : '';
                }
            })
        });
        $(document).on('click', '#deleteBtn', function() {
            var id = $(this).val();
            $.ajax({
                url: '{{route("Delete_serviceByID")}}',
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
    })
</script>
@endsection