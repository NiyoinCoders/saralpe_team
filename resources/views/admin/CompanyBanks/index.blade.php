@extends("layouts.app")
@section("content")
<!-- **********************  content start form here ********************** -->

<div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <!-- table start  -->
                <div class="card-body p-0 mx-4">
                    <p class="text-white fw-bold bg-primary px-4 rounded-1 py-2 user-select-none">
                        View All Banks
                    </p>
                    
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                      <th>#</th>
                                    <th>Bank Name</th>
                                    <th>Account Holder</th>
                                    <th>Account Number</th>
                                    <th>IFSC Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($CompanyBanks as $CompanyBank)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $CompanyBank->bank_name }}</td>
            <td>{{ $CompanyBank->holder_name }}</td>
            <td>{{ $CompanyBank->acc_no }}</td>
            <td>{{ $CompanyBank->ifsc_code }}</td>
            <td>

            <div class="form-check form-switch form-check-inline">
            <input data-id="{{$CompanyBank->id}}" class="form-check-input" type="checkbox" id="switch2" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $CompanyBank->status ? 'checked' : '' }}>
</div>   
        </td>
            <td>
                <a class="btn btn-primary" href="{{ route('banks.edit',$CompanyBank->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
        
  
                          <!-- 
                            <tr>  <td>101</td> 
                                    <td>ICICI BANK LIMITED</td>
                                    <td>338905001100</td>
                                    <td>338905001100</td>
                                    <td>ICIC0003389</td>
                                    <td>
                                        <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="switch2" checked />
                                        </div>
                                    </td>
                                    <td>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModaleditbank"
                                            class="btn btn-sm btn-soft-info"><i class="bi bi-pen"></i></button>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModaldeletebank"
                                            class="btn btn-sm btn-soft-danger"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                               -->
                            </tbody>
                        </table>
                            <!-- edit model  start here-->
                        
                        <!-- edit model  start here-->
                        <!-- delete model start  -->
                        <div class="modal fade" id="exampleModaldeletebank" tabindex="-1"
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



        <script>
  $(function() {
    $('.form-check-input').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
        <!-- ********************** main content end here ********************** -->
@endsection