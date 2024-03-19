@extends("layouts.app")
@section("title","Day Book")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="container-fluid">
          <div class="br-pagebody">
          </div>
              <div class="col-md-12 p-0">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title text-danger">Day Book Report</h3>

                      <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

              <!--======================= Start of Filters ========================-->


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
                              <label>From Date</label>
                              <input type="hidden" name="to_date" class="form-control datepicker flatpickr-input" value="2023-08-24"><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">
                          </div>
                      </div>

                      <div class="col-md-3">
                          <div class="form-group">
                              <button type="submit" name="submit" class="btn btn-danger btn-block" style="margin-top: 31px;"><i class="fas fa-search"> Search Records</i></button>

                          </div>
                      </div>

                  </div>
              </form>
              <!--================================== End of Filters ================================-->
              <div class="table-responsive">
                  <div id="mainTable_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons">          <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>Copy</span></button> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>CSV</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="mainTable" type="button"><span>Print</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered dataTable dtr-inline collapsed" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
                      <thead class="bg-dark">
                          <tr class="font-size13" role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 7px;">#</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Service Name: activate to sort column ascending" style="width: 58px;">Service Name</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Total Hits: activate to sort column ascending" style="width: 40px;">Total Hits</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Total Amount: activate to sort column ascending" style="width: 59px;">Total Amount</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Success Hits: activate to sort column ascending" style="width: 56px;">Success Hits</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Success Amount: activate to sort column ascending" style="width: 66px;">Success Amount</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Failed Hits: activate to sort column ascending" style="width: 46px;">Failed Hits</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Failed Amount: activate to sort column ascending" style="width: 62px;">Failed Amount</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Pending Hits: activate to sort column ascending" style="width: 58px;">Pending Hits</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Pending Amount: activate to sort column ascending" style="width: 68px;">Pending Amount</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Commission / Discount: activate to sort column ascending" style="width: 96px;">Commission / Discount</th></tr>
                      </thead>
                      <tbody>

                      <tr class="odd"><td valign="top" colspan="11" class="dataTables_empty">No Data Available in Table</td></tr></tbody>

                      <tfoot>
                        <tr style="background-color: darkgrey;color: #fff" class="text-center"><th colspan="2" rowspan="1">Total</th><td rowspan="1" colspan="1">0</td><td rowspan="1" colspan="1">₹ 0</td><td rowspan="1" colspan="1">0</td><td rowspan="1" colspan="1">₹ 0</td><td rowspan="1" colspan="1">0</td><td rowspan="1" colspan="1">₹ 0</td><td rowspan="1" colspan="1">0</td><td rowspan="1" colspan="1">₹ 0</td><td rowspan="1" colspan="1">₹ 0</td></tr>
                      </tfoot>

                  </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span></span><a class="paginate_button next" aria-controls="mainTable" data-dt-idx="1" tabindex="0" id="mainTable_next">Next</a></div></div>
              </div>

                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>

      </div></section>
</div>

@endsection
