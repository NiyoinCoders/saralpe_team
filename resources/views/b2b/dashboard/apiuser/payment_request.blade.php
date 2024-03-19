@extends("layouts.app")
@section("title","Payment Request")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="container-fluid">
          <div class="col-md-12"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header" style="display: flex;"> <!-- End of Card Header -->
                <h6 class="card-title"><strong>Payment Request List</strong></h6>
                <div class="card-tools"> <!-- Start of Card-Tools -->
                  <button class="btn btn-circle btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin-left: 585px; "><i class="fas fa-plus"></i> Payment Request</button>
                </div> <!-- End of Card-Tools -->
              </div> <!-- End of Card Header -->
              <div class="card-body">

      <!-- ==================================== Start of Page Content =============================== -->

      <!-- ====================== Filter =================== -->
      <form method="POST" action="">


      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>From Date</label>
            <input type="hidden" name="from_date" class="form-control datepicker flatpickr-input" value="2023-08-24"><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label>To Date</label>
            <input type="hidden" name="to_date" class="form-control datepicker flatpickr-input" value="2023-08-24"><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">
          </div>
        </div>

        <div class="col-md-4" style="margin-top: 32px;">
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary bg-gradient-primary"><i class="fas fa-search"></i> Search Record</button>
          </div>
        </div>
      </div>
      </form><!-- End of Filter Form -->
      <!-- ====================== End Filter ================-->

      <div class="table-responsive">
        <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons"> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
          <thead class="bg-teal">
            <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 57px;">Order No.</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 64px;">Date &amp; Time</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85px;">Request Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 71px;">Bank Details</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 125px;">Payment Mode &amp; Ref No.</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 127px;">Request &amp; Accept Amount</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 129px;">Approve/Reject Date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 56px;">Remark</th></tr>
          </thead>
          <tbody>
          <tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No Data Available in Table</td></tr></tbody>
        </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span></span><a class="paginate_button next" aria-controls="mainTable" data-dt-idx="1" tabindex="0" id="mainTable_next">Next</a></div></div>
      </div>

      <!-- ====================================  End of Page Content  =============================== -->

                </div> <!-- End of Card Body -->
              </div> <!-- End of Card -->
            </div> <!-- End of Col-md-12 -->
          </div> <!-- End of Container Fluid -->
      </section>
</div>

@endsection
