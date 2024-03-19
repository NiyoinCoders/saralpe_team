@extends("layouts.app")
@section("title","Ledger Report")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="container-fluid">

              <div class="br-pagebody table-responsive mb-3">

                <table class="table table-bordered" style="width: 100%;">
                  <thead class="bg-primary-classic table-data text-center" style="font-size: 14px;">
                    <tr>
                      <th>Opening (₹)</th>
                      <th>Purchase (₹)</th>
                      <th>Return (₹)</th>
                      <th>Requested (₹)</th>
                      <th>Debit (₹)</th>
                      <th>Refund (₹)</th>
                      <th>Expected Closing (₹)</th>
                    </tr>
                  </thead>
                  <tbody class="text-center table-data">
                    <tr>
                      <td>3.0478</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>3.0478</td>
                    </tr>
                  </tbody>
                </table>
              </div>

          <div class="col-md-12 p-0"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header"> <!-- End of Card Header -->
                <h6 class="card-title"><strong>Detailed Ledger</strong></h6>
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
            <input type="hidden" name="from_date" id="from_date" class="form-control form-control-sm bg-light text-bold text-center datepicker flatpickr-input" value="2023-08-24"><input class="form-control form-control-sm bg-light text-bold text-center datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label>To Date</label>
            <input type="hidden" name="to_date" id="to_date" class="form-control form-control-sm bg-light text-bold text-center datepicker flatpickr-input" value="2023-08-24"><input class="form-control form-control-sm bg-light text-bold text-center datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">
          </div>
        </div>

        <div class="col-md-4" style="margin-top: 32px;">
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary bg-gradient-info title text-white btn-sm"><i class="fas fa-search"></i> Search Records</button>
            <a href="javascript:void(0)" onclick="excelExport();" class="btn btn-success btn-sm"><i class="fas fa-file-excel"></i></a>
          </div>
        </div>
      </div>
      </form>
      <!-- ====================== End Filter ================-->

        <div class="table-responsive">
          <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="5000">5,000</option></select> entries</label></div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
            <thead class="title text-white bg-gradient-teal font-size14">
              <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 13px;">#</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Txn Id: activate to sort column ascending" style="width: 42px;">Txn Id</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Date &amp;amp; Time: activate to sort column ascending" style="width: 88px;">Date &amp; Time</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 82px;">Description</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Net Amount: activate to sort column ascending" style="width: 86px;">Net Amount</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Opening Balance: activate to sort column ascending" style="width: 124px;">Opening Balance</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Debit (₹): activate to sort column ascending" style="width: 64px;">Debit (₹)</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Credit (₹): activate to sort column ascending" style="width: 70px;">Credit (₹)</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Running Balance: activate to sort column ascending" style="width: 121px;">Running Balance</th></tr>
            </thead>
            <tbody class="description text-bold">
              <tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">No Data Available in Table</td></tr></tbody>
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
