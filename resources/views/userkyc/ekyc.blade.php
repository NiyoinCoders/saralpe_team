@extends("layouts.app")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div id="profile-profile" class="tab-pane fade active show" role="tabpanel">
      <div class="col-lg-12">
         <div class="card">
              <div class="card-body">
                 <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                       <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                          <img src="../../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                          <img src="../../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                       </div>
                       
                      
                       <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                          <h4 class="me-2 h4">Ekyc Registeration</h4>
                          <span> </span>
                       </div>
                       
                    </div>
                   
                 </div>
              </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-12">
        <div class="card">
           
            <div class="card-body">
            @if (isset($user))
            <form id="form-wizard1" class="mt-3 text-center" method="POST" action="{{route('ekycpost')}}" enctype="multipart/form-data">
            @endif   
            @csrf
                <!-- fieldsets -->
                <fieldset>
                    <div class="form-card text-start">
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">FIRM NAME: *</label>
                                    <input type="text" id="disabledTextInput" name="firm_name" value="{{ old('firm_name', $user->firm_name ?? '') }}" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">PAN NUMBER: *</label>
                                    <input type="text" class="form-control" name="pannumber" value="{{ old('pannumber', $user->pan ?? '') }}" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">PIN CODE: *</label>
                                    <input type="text" class="form-control" name="pincode" value="{{ old('pincode', $user->pincode ?? '') }}" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">DOB: *</label>
                                <input type="date" class="form-control" name="dob" value="{{ old('dob', $user->dob ?? '') }}" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">STATE  *</label>
                                <input type="text" class="form-control" name="state" value="{{ old('state', $user->state ?? '') }}" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">SHOP_ADDRESS: *</label>
                                <input type="text" class="form-control" name="shopaddress" value="{{ old('shopaddress', $user->shopaddress ?? '') }}" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">PAN_IMAGE: *</label>
                                <input type="file" class="form-control" name="pan_image" placeholder="" required accept="image/*">
                            </div>
                            @if($user->pan_image)
                                    <img width="100px" src="{{ asset($user->pan_image) }}" alt="Pan Card Image">
                                    @endif
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">VOTER_FRONT: *</label>
                                <input type="file" class="form-control" name="voter_front" placeholder="" required accept="image/*">
                            </div>
                            @if($user->voter_front)
                                    <img width="100px" src="{{ asset($user->pan_image) }}" alt="Pan Card Image">
                                    @endif
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">VOTER_Back: *</label>
                                <input type="file" class="form-control" name="voter_back" placeholder="" required accept="image/*">
                            </div>
                            @if($user->voter_back)
                                    <img width="100px" src="{{ asset($user->pan_image) }}" alt="Pan Card Image">
                                    @endif
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">DRIVING_FRONT: *</label>
                                <input type="file" class="form-control" name="driving_front" placeholder="" required accept="image/*">
                            </div>
                            @if($user->driving_front)
                                    <img width="100px" src="{{ asset($user->pan_image) }}" alt="Pan Card Image">
                                    @endif
                        </div>

                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">DRIVING_BACK: *</label>
                                <input type="file" class="form-control" name="driving_back" placeholder="" required accept="image/*">
                            </div>
                            @if($user->driving_back)
                                    <img width="100px" src="{{ asset($user->pan_image) }}" alt="Pan Card Image">
                                    @endif
                        </div>

                       
                      
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                                    </fieldset>

            </form>
            </div>
        </div>
    </div>
@endsection