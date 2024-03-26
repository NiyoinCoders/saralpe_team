@extends("layouts.app")
@section("content")


      
<div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <!-- <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
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
                                
                                    <select class="form-control" name="kyc_status" id="kyc_status">
									<option value="">All</option>
									<option value="-1">Not Submitted</option>
									<option value="1">Verified</option>
									<option value="2">Pending</option>
									<option value="3">Rejected</option>
								</select>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <button class="btn btn-primary mt-2">Search</button>
                        </div>
                    </div>
                </div> -->

                <!-- table start  -->
            <div class="card-body p-0 mx-4">
                    <p class="text-white fw-bold bg-primary px-4 rounded-1 py-2 user-select-none">
                        User Details
                    </p>
                 
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                   
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    
                                    <th>Email Id</th>
                                    <th>Pincode</th>
                                    <th>Pan</th>
                                    <th>Aadhar</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                   
                                    
                                   
                                   
                                    <th>Status</th>
                                    <th>Kyc Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($users as $user)
        <tr>
            
            <td>{{ $user->name }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->pincode }}</td>
            <td>{{ $user->pan }}</td>
            <td>{{ $user->aadhar }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->dob }}</td>
            <td>{{ $user->gender }}</td>
            
            <td>

            <div class="form-check form-switch form-check-inline">
            <input data-id="{{$user->id}}" class="form-check-input" type="checkbox" id="switch2" data-onstyle="success"  data-toggle="toggle"  {{ $user->status == 1? 'checked' : '' }}>
           
</div>   
        </td>
            
                                   
                                    
                                    <td><button class="btn btn-sm btn-success">Varified</button></td>
                                    <td>
                                        <button  class="btn btn-sm btn-soft-info"><a href="{{ route('users.card',$user->id) }}"><i class="bi bi-credit-card"></i></a></button>
                         <button class="btn btn-sm btn-soft-info"> <a href="{{ route('users.card',$user->id) }}"><i class="bi bi-pen"></i></a></button>
                                     
                                   <button 
                                            class="btn btn-sm btn-soft-danger"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>

                       

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

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
     $(document).on('change', '#switch2', function() {
            var id = $(this).attr('data_id');
            var value = $(this).prop('checked') ? 1 : 0;
            $.ajax({
                url: "{{route('userStatusChange')}}",
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
    
});
</script>
@endsection
