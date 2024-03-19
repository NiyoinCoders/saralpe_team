@extends("layouts.app")
@section("title","Dashboard")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="container-fluid">

          <div class="col-md-12 p-0"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header"> <!-- End of Card Header -->
                <h6 class="card-title"><strong>Refund Report</strong><small class="description"> (List Contains Only SUCCESS To REFUND Recharges)</small></h6>
                <div class="card-tools"> <!-- Start of Card-Tools -->

                </div> <!-- End of Card-Tools -->
              </div> <!-- End of Card Header -->
              <div class="card-body">

      <!-- ==================================== Start of Page Content =============================== -->
      <!-- ====================== Filter =================== -->
      <form method="POST" action="">


      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label>From Date</label>
            <input type="date" name="from_date" class="form-control form-control-sm bg-light text-bold text-center datepicker picker-trigger flatpickr-input" value="2023-08-24" data-datedropper-id="datedropper-0">
        </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label>To Date</label>
            <input type="date" name="to_date" class="form-control form-control-sm bg-light text-bold text-center datepicker picker-trigger flatpickr-input" value="2023-08-24" data-datedropper-id="datedropper-1">
        </div>
        </div>

        <div class="col-md-4" style="margin-top: 32px;">
          <div class="form-group">
            <button type="submit" style="background-color: cadetblue;" name="submit" class="btn bg-gradient text-white btn-sm"><i class="fas fa-search"></i> Search Records</button>
          </div>
        </div>
      </div>
      </form>
      <!-- ====================== End Filter ================-->



      <!-- ====================================  End of Page Content  =============================== -->

                </div> <!-- End of Card Body -->
              </div> <!-- End of Card -->
            </div> <!-- End of Col-md-12 -->
          </div> <!-- End of Container Fluid -->
      </section>
</div>

@endsection
