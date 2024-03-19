@extends("layouts.app")
@section("content")


        <!-- add user section start  -->
        <div class="conatiner-fluid mt-5">
        <form action="{{ route('users.store') }}" method="POST">
    @csrf
            <div class="card px-4 rounded-0 py-2">
                <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Add User
                </p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black">Select User Type<span
                                        class="text-danger">*</span></label>
                                <select class="form-select text-black form-select-sm mb-3 shadow-none" name="role">
                                    <option selected="">--choose--</option>
                                    @foreach($roles as $role)
        <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Full name" name="name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Father's Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Father's name" name="father_name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="exampleInputdate">DOB<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-sm mb-3 text-black"
                                    id="exampleInputdate" name="dob">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Firm Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Firm name" name="firm_name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Email Address<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Email address" name="email">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Mobile Number<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Mobile number" name="mobile">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Pan Number<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Pan number" name="pan">
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Adhar Number<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Adhar number" name="aadhar">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black">Gender<span class="text-danger">*</span></label>
                                <select class="form-select text-black form-select-sm mb-3 shadow-none" name="gender">
                                    <option selected="">Select</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black">Plan Name<span class="text-danger">*</span></label>
                                <select class="form-select text-black form-select-sm mb-3 shadow-none" name="plan_name">
                                    <option selected="">--choose--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">GST Number<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="GST number" name=gst>
                            </div>
                        </div>
                    </div>

                </div>
                <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Address Details
                </p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Address<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Full address" name="address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black">State<span class="text-danger">*</span></label>
                                <select class="form-select text-black form-select-sm mb-3 shadow-none" name="state">
                                    <option selected="">--Chhose state--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black">City<span class="text-danger">*</span></label>
                                <select class="form-select text-black form-select-sm mb-3 shadow-none" name="city">
                                    <option selected="">--Chhose city--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Pin Code<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Pin code" name="pincode">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    AEPS Agent Details
                </p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Agent ID 2<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black" for="colFormLabelSm">Agent ID 1<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm text-black" id="colFormLabelSm"
                                    placeholder="Pin code">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label text-black">Parent Id<span class="text-danger">*</span></label>
                                <select class="form-select text-black form-select-sm mb-3 shadow-none">
                                    <option selected="">--Chhose city--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-primary fw-bold bg-soft-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Service Access
                </p>
                <div class="card-body mb-0">
                @foreach($services as $service)
                    <div class="row">
                        <div class="col-md-3">
                       
       
       
                            <div class="form-check d-block">
                                <input class="form-check-input" type="checkbox" value="{{$service->id}}" id="mobileRecharge">
                                <label class="form-check-label text-black user-select-none" for="mobileRecharge">
                                {{$service->service_name}}
                                </label>
                            </div>
                           
                        </div>
                       
                </div>
                @endforeach 
                <div class="card-body mt-0 py-0">
                    <div class="">
                        <button class="btn btn-primary btn-sm mt-md-2 mt-lg-2 mt-xl-2" type="submit">Submit</button>
                    </div>
                </div>
            </div>
</form>
        </div>
        <!-- add user section end  -->


   

    @endsection