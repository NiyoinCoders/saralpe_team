@extends('layouts.auth.app')
@section("title","Sign Up")
@section('style')
<style>
    .fa{
        font-size: x-large !important;
    }
    .input-group-text{
        background-color: #F5F9FF;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<section class="login-content">
    <div class="row m-0 align-items-center bg-white vh-100">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                            <a href="javascript:void(0)" class="navbar-brand d-flex align-items-center mb-3">
                                <!--Logo start-->
                                <img src='{{asset('assets/images/'.env('logo').'')}}' style="width:48%;"/>
                            </a>
                            <h2 class="mb-2 text-center">Sign Up</h2>
                            <p class="text-center">Sign Up to stay registerd.</p>
                            @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif


                            <form method="POST" action="{{ route('singup') }}">
                                @csrf
                               <div class="row register-form">

                                    <input type="hidden" name="user_type" value="Retailer">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                </div>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Full Name" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-building"></i></div>
                                                </div>
                                                <input type="text" name="firm_name" class="form-control" placeholder="Enter Your Shop Or Firm Name" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    @php
                                       $roles = DB::select('select * from roles');
                                    @endphp

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="role" id="company_type" class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="required" data-select2-id="company_type" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="2">Select Firm Type</option>
                                                @foreach ($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach

                                               </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-company_type-container"><span class="select2-selection__rendered" id="select2-company_type-container" role="textbox" aria-readonly="true" title="Select Firm Type">Select Firm Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="gender" id="gender" class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="required" data-select2-id="gender" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="4">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gender-container"><span class="select2-selection__rendered" id="select2-gender-container" role="textbox" aria-readonly="true" title="Select Gender">Select Gender</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                                                </div>
                                                <input type="text" name="mobile" class="form-control" placeholder="Enter Your 10 Digit Mobile Number"  required="required" minlength="10" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-at"></i></div>
                                                </div>
                                                <input type="text" name="email" id="email_id" class="form-control data-mask" placeholder="Enter Your Email Id" data-inputmask="'mask': ['*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}']" required="required" im-insert="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="state" id="state_name" onchange="get_district_list(this.value)" class="form-control select2 select2-hidden-accessible" required="required" style="width: 100%" data-select2-id="state_name" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="6">Select State</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Dadra Nagar-Haveli Daman &amp; Diu">Dadra Nagar-Haveli Daman &amp; Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Ladakh">Ladakh</option>
                                            </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state_name-container"><span class="select2-selection__rendered" id="select2-state_name-container" role="textbox" aria-readonly="true" title="Select State">Select State</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-street-view"></i></div>
                                                </div>
                                                <input type="text" name="city" class="form-control" placeholder="Enter Your City Name" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-pin"></i></div>
                                                </div>
                                                <input type="text" name="pincode" class="form-control data-mask" placeholder="Enter Your City Pin Code" data-inputmask="'mask': ['999999']" required="required" im-insert="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                                </div>
                                                <input type="text" name="address" class="form-control" placeholder="Enter Your Complete Address" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card"></i></div>
                                                </div>
                                                <input type="text" name="aadhar" class="form-control data-mask" placeholder="Enter Your Aadhar Card No." data-inputmask="'mask': ['999999999999']" required="required" im-insert="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card"></i></div>
                                                </div>
                                                <input type="text" name="pan" class="form-control data-mask" placeholder="Enter Your Pan Card No." data-inputmask="'mask': ['AAAAA9999A']" required="required" im-insert="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-copy"></i></div>
                                                </div>
                                                <input type="text" name="gst" class="form-control" placeholder="Enter Your GST No." onkeyup="this.value = this.value.toUpperCase();" data-inputmask="'mask': ['99AAAAA9999A***']">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">

                                                <input type="text" name="password" class="form-control" placeholder="Enter Your Password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2">

                                                <input type="text" name="password_confirmation" class="form-control" placeholder="ReEnter Your Password">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">{{ __('Sign Up') }}</button>
                                        </div>
                                        <p class="mt-3 text-center">
                                            Already have an account? <a href="{{url('login')}}" class="text-underline">Click here to sign in.</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-bg">
                <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.05">
                        <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                        <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                        <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                        <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="col-md-4 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
            <img src="{{asset('assets/images/auth/01.jpg')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
        </div>
    </div>
</section>

@if (\Session::has('success'))
<div class="modal" tabindex="-1" style="display: block !important;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Otp</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('signup.optverify')}}">
            @csrf
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2">

                    <input type="text" name="otp" class="form-control data-mask" placeholder="Enter Your Otp"  required="required">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">{{ __('Verify') }}</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  @endif

@endsection
