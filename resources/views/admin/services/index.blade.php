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
                            <div class="modal-body">
                                <div class="card px-4 rounded-0 py-2">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label text-dark" for="to-amount">
                                                        Service Name<span class="text-danger">*</span></label>

                                                    <input type="text" class="form-control text-dark" id="to-amount" value="" placeholder="Mobile Recharge">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="form-label text-dark" for="to-amount">
                                                        Image/Icon<span class="text-danger">*</span></label>
                                                    <input class="form-control text-black" type="file" placeholder="Choose file" aria-label=".form-control example">
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
                            <form id="edit_form">
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
                    $.each(response, function(index, value) {
                        var date = value.created_at;
                        var dateOnly = new Date(date).toISOString().split('T')[0];
                        html += `<tr>
                                    <td>${i}</td>
                                    <td>${value.service_name}</td>
                                    <td>${dateOnly}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="switch2" ${value.status == 1 ? 'checked': ''} />
                                        </div>
                                    </td>
                                    <td>
                                        <button value="${value.id}" class="btn btn-sm btn-soft-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pen"></i></button>
                                    </td>
                                </tr>`
                        i++;
                    });
                    $('#tbody').html(html);

                }
            })
        }
        fetchData();
        $(document).on('submit', '#edit_form', function(e) {
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
                        $('#edit_form')[0].reset();
                        $('#alertMsg').html(response.success);
                        $('#alertMsg').removeClass('d-none');
                        setTimeout(() => {
                            $('#alertMsg').addClass('d-none');
                        }, 2000);
                    }
                    if (response.errors) {
                        response.errors.service_name ? $('#err_service_name').html(response.errors.service_name) : $('#err_service_name').html('');
                        response.errors.service_image ? $('#err_service_image').html(response.errors.service_image) : $('#err_service_image').html('');
                    }
                }
            })
        });
    })
</script>
@endsection