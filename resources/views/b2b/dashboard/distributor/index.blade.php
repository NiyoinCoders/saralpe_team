@extends("layouts.app")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
<br><br>
<section class="content">
  <div class="container-fluid">
    <div class="row"> <!-- Start of First Row -->
      <div class="col-md-4"> <!-- Start of Col-md-4 -->
      <div class="card"> <!-- Start of Card -->
        <div class="card-body">         
<!-- ==================================== Start of Page Content =============================== -->
      <h6 class="card-title text-primary" style="font-size: 20px;"><strong class="company-name"><i class="fas fa-user-circle"></i> KULDEEP</strong></h6>
      <div class="float-right"><img class="img-circle elevation-2" style="height: 100px; width: 100px;" src="https://redpay.in/assets/img/profile_img/avatar.png"></div>
      <br><br>
      <strong class="title">Mobile No.</strong>
      <div class="description">8397835576</div>
      <br>
      <strong class="title">Email Id</strong>
      <div class="description">kp9017472041@gmail.com</div>
      <br>
      <strong class="title">Capping Amount</strong>
      <div class="description">₹ 0</div><br><hr>

      <div class="row">
        <div class="col-lg-6">
          <a href="javascript:void(0)" class="btn btn-danger btn-small" data-toggle="modal" data-target="#changePass">Change Password</a>
        </div>

        <div class="col-lg-6">
          <a href="javascript:void(0)" class="btn btn-primary btn-small" data-toggle="modal" data-target="#imgchange">Change Profile Picture</a>
        </div>
      </div>
<!-- ====================================  End of Page Content  =============================== -->
          </div> <!-- End of Card Body -->
        </div> <!-- End of Card -->
      </div> <!-- End of Col-md-4 -->

      <div class="col-md-8"> <!-- Start of Col-md-4 -->
      <div class="card"> <!-- Start of Card -->
         <!-- End of Card Header -->
          
          
        
        <div class="card-body">         
<!-- ==================================== Start of Page Content =============================== -->
<h4 class="card-title text-primary" style="font-size: 27px;"><strong class="company-name"><i class="fas fa-store"></i> ICS INDIA</strong></h4><br><br>
      
      <strong class="title">Bank Account</strong>
                 <a href="javascript:void(0)" onclick="getBankAc('976')" style="margin-left: 8px; color: red;"><i class="fas fa-edit"></i></a>
            
                    <div class="description">Not Declared Yet</div>
              <br>

      <strong class="title">Company Type</strong>
      <div class="description">Propietor</div>
      <br>

      <strong class="title">Communication Address</strong>
      <div class="description">ADRESH COLONY PALWAL PALWAL PALWAL Haryana - 121102</div><hr>

      <div class="row">
        <div class="col-md-4">
          <div class="text-bold title">Aadhar Card No.</div>
          <div class="description">984355557798</div>
        </div>
        <div class="col-md-4">
          <div class="text-bold title">Pan Card No.</div>
          <div class="description">FCVPK8964F</div>
        </div>
        <div class="col-md-4">
          <div class="text-bold title">GST No.</div>
          <div class="description"></div>
        </div>
      </div>
<!-- ====================================  End of Page Content  =============================== -->
          </div> <!-- End of Card Body -->
        </div> <!-- End of Card -->
      </div> <!-- End of Col-md-4 -->
      
      <div class="col-md-7"> <!-- Start of Col-md-4 -->
      <div class="card"> <!-- Start of Card -->
        <div class="card-header"> <!-- End of Card Header -->
          <h6 class="card-title"><strong>Relationship Manager</strong></h6>
          <div class="card-tools"> <!-- Start of Card-Tools -->
            
          </div> <!-- End of Card-Tools -->
        </div> <!-- End of Card Header -->
        <div class="card-body">         
<!-- ==================================== Start of Page Content =============================== -->
      <div class="row">
        <div class="col-md-4">
          <div class="text-bold title">Name</div>
          <div class="description">Not Available</div>
        </div>
        <div class="col-md-4">
          <div class="text-bold title">Email</div>
          <div class="description">test@test.com</div>
        </div>
        <div class="col-md-4">
          <div class="text-bold title">Phone No.</div>
          <div class="description">1234567890</div>
        </div>
      </div>
<!-- ====================================  End of Page Content  =============================== -->
          </div> <!-- End of Card Body -->
        </div> <!-- End of Card -->
      </div> <!-- End of Col-md-4 -->

      <div class="col-md-5"> <!-- Start of Col-md-4 -->
      <div class="card"> <!-- Start of Card -->
         <div class="card-header"> <!-- End of Card Header -->
          <h6 class="card-title"><strong>Manage KYC Document(s)</strong></h6>
          <div class="card-tools"> <!-- Start of Card-Tools -->
            
          </div> <!-- End of Card-Tools -->
        </div> <!-- End of Card Header -->                
        <div class="card-body">         
<!-- ==================================== Start of Page Content =============================== -->
      <div class="row">
        <div class="col-md-6">
          <div class="text-bold title">Aadhar Card</div><small style="color:brown">Mandatory</small>
        </div>
        <div class="col-md-6" align="right">
                        <span class="badge badge-primary">Screening</span>
                    
        </div>
      </div>

        <p style="border-bottom: 1px dashed #999;"></p>
      <div class="row">  
        <div class="col-md-6">
          <div class="text-bold title">Pan Card</div><small style="color:brown">Mandatory</small>
        </div>
        <div class="col-md-6" align="right">
                        <span class="badge badge-primary">Screening</span>
                  </div>
      </div>

      <p style="border-bottom: 1px dashed #999;"></p>
      <div class="row">  
        <div class="col-md-6">
          <div class="text-bold title">GST Certificate</div><small style="color:brown">Mandatory</small>
        </div>
        <div class="col-md-6" align="right">
                        <span class="badge badge-primary">Screening</span>
                  </div>
      </div>

                <p style="border-bottom: 1px dashed #999;"></p>
      <div class="row">  
        <div class="col-md-6">
          <div class="text-bold title">Shop Act Certificate</div><small style="opacity: 0.5">Optional</small>
        </div>
        <div class="col-md-6" align="right">
                        <span class="badge badge-warning">Pending</span><br><small><a href="javascript:void(0)" data-toggle="modal" data-target="#shopactUpload">(Submit)</a></small>
                  </div>
      </div>
            
      <p style="border-bottom: 1px dashed #999;"></p>
      <div class="row">  
        <div class="col-md-6">
          <div class="text-bold title">Service Agreement</div><small style="opacity: 0.5">Optional</small>
        </div>
        <div class="col-md-6" align="right">
                        <span class="badge badge-warning">Pending</span><br><small><a href="javascript:void(0)" data-toggle="modal" data-target="#serviceagreementUpload">(Submit)</a></small>
                  </div>
      </div>
<!-- ====================================  End of Page Content  =============================== -->
          </div> <!-- End of Card Body -->
        </div> <!-- End of Card -->
      </div> <!-- End of Col-md-4 -->
    </div> <!-- End of First Row -- >
    

  </div> <!-- End of Container Fluid -->
</div></section>

<!-- ================================= START OF PASSWORD CHANGE ============================ -->
<div class="modal animate__animated animate__flipInX" id="changePass" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="alert alert-primary title text-white text-center"><i class="fas fa-lock"></i> Change Password</div><hr>
          <form method="POST" action="javascript:void(0)" id="change_password_form" enctype="multipart/form-data">
            <div class="row" style="background-color: #F4F4F4;"> <!-- Current Password -->
              <div class="col-md-2"></div>
              <div class="col-md-8" align="center">
                <div class="form-group">
                <label class="description">Enter Current Password</label>
                <input type="password" name="current_password" class="form-control text-center" required="required">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
  
            <div class="row"> <!-- New Password -->
              <div class="col-md-2"></div>
              <div class="col-md-8" align="center">
                <div class="form-group">
                <label class="description">Enter New Password</label>
                <input type="password" name="new_password" class="form-control text-center" required="required">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
  
            <div class="row"> <!-- Confirm Password -->
              <div class="col-md-2"></div>
              <div class="col-md-8" align="center">
                <div class="form-group">
                <label class="description">Enter Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control text-center" required="required">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
        </form></div>
        <div class="modal-footer">
          <button type="submit" class="title btn btn-success text-white btn-sm">Change Password</button>
          <button type="button" class="btn btn-danger title text-white btn-sm" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- ================================== END OF PASSWORD CHANGE =============================== -->
</div>

@endsection

