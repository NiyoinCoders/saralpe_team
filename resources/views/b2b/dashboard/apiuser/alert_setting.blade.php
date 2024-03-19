@extends("layouts.app")
@section("title","Alert setting")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="">
          <div class="col-md-12"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header" style="display: flex;"> <!-- End of Card Header -->
                <h6 class="card-title"><strong class="text-danger">LOW BALANCE NOTIFICATION</strong></h6>
                <div class="card-tools" style="margin-left: 590px;"> <!-- Start of Card-Tools -->
                          <label class="switch btn btn-danger btn-sm">Inactive

              </label>
                      </div> <!-- End of Card-Tools -->
              </div> <!-- End of Card Header -->
              <div class="card-body">

      <!-- ==================================== Start of Page Content =============================== -->

      <!-- ====================== Filter =================== -->

      <!-- ====================== End Filter ================-->
      <form method="POST" action="javascript:void(0)" id="lowBalanceAlert_from" autocomplete="off">
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label>Amount (₹)</label>
            <input type="text" name="amount" id="minamount" class="form-control" value="" required="required" maxlength="7" spellcheck="false" data-ms-editor="true">
            <span style="color: #36c6d3;">Min. value : (₹) 1000</span>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Alert Mobile No</label>
            <input type="text" name="mobileno" id="mobileno" class="form-control" value="" required="" spellcheck="false" data-ms-editor="true">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Alert Whatsapp No</label>
            <input type="text" name="whatsappmobile" id="Whatsappmobile" value="" class="form-control" spellcheck="false" data-ms-editor="true">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label>Alert E-Mail Id</label>
            <input type="text" name="emailid" id="emailid" class="form-control" value="" spellcheck="false" data-ms-editor="true">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" style="margin-top: 31px;">Update Notification</button>
          </div>
        </div>

      </div></form>
      <span class="title text-bold">Note :</span><span>&nbsp;We will send alert in every one hour.</span>
      <!-- ====================================  End of Page Content  =============================== -->

                </div> <!-- End of Card Body -->
              </div> <!-- End of Card -->
            </div> <!-- End of Col-md-12 -->
          </div> <!-- End of Container Fluid -->
      </section>
</div>

@endsection
