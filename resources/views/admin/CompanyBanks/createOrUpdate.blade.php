@extends("layouts.app")
@section("content")
  <!-- ********************** main content start form here ********************** -->

  <div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Add New Bank Account
                </p>
                <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
@if (isset($CompanyBank))
    <form action="{{ route('banks.update', $CompanyBank->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@else
    <form action="{{ route('banks.store') }}" method="POST" enctype="multipart/form-data">
@endif
    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label text-dark">Bank Name<span class="text-danger">*</span></label>
                                <select class="form-select mb-3 shadow-none text-dark" name="bank_name">
                                    <option selected="">--Choose--</option>
                                    <option value="self">Self</option>
                                   <!--  <option value="chain">Chain</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label text-dark" for="accountholdername">Account Holder Name<span
                                        class="text-danger">*</span></label>
                              
                                    <input type="text" name="holder_name" value="{{ old('holder_name', $CompanyBank->holder_name ?? '') }}" class="form-control" placeholder="Account Holder Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label text-dark" for="accountnumber">Account Number<span
                                        class="text-danger">*</span></label>
                               
                                    <input type="text" name="acc_no" value="{{ old('acc_no', $CompanyBank->acc_no ?? '') }}" class="form-control" placeholder="Account Number">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label text-dark" for="ifsccode">IFSC Code <span
                                        class="text-danger">*</span></label>
                               
                                    <input type="text" name="ifsc_code" value="{{ old('ifsc_code', $CompanyBank->ifsc_code ?? '') }}" class="form-control" placeholder="IFSC Code">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label text-dark" for="branch">Branch Address<span
                                        class="text-danger">*</span></label>
                                        <input type="text" name="branch_add" value="{{ old('branch_add', $CompanyBank->branch_add ?? '') }}" class="form-control" placeholder="Branch Address">
                                
                            </div>
                        </div>
                       
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
</form>
                </div>
            </div>
        </div>
        <!-- ********************** main content end here ********************** -->
@endsection