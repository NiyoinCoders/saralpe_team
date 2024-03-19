@extends("layouts.app")
@section("title","Day Book")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">

    <section class="content">
        <div class="container-fluid">

          <div class="col-md-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h4 class="card-title text-danger text-bold">Dispute List</h4>

                <div class="card-tools">
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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

        <div class="col-md-3">
          <div class="form-group">
            <label>Select Dispute Status</label>
            <select name="dispute_status" class="form-control">
              <option value="Under Review">Under Review</option>
              <option value="Rejected">Rejected</option>
              <option value="Refunded">Refunded</option>
            </select>
          </div>
        </div>

        <div class="col-md-3" style="margin-top: 32px;">
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary bg-gradient-primary"><i class="fas fa-search"></i> Search Record</button>
          </div>
        </div>
      </div>
      </form><!-- End of Filter Form -->
            <hr>

                <div class="table-responsive">
                  <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons"><button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>CSV</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
                    <thead class="bg-primary">
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 9px;">#</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Txn Id: activate to sort column ascending" style="width: 33px;">Txn Id</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Recharge DateTime: activate to sort column ascending" style="width: 93px;">Recharge DateTime</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Provider Name: activate to sort column ascending" style="width: 78px;">Provider Name</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Customer No.: activate to sort column ascending" style="width: 78px;">Customer No.</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 57px;">Amount</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Operator Id: activate to sort column ascending" style="width: 70px;">Operator Id</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Dispute DateTime: activate to sort column ascending" style="width: 88px;">Dispute DateTime</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Update DateTime: activate to sort column ascending" style="width: 87px;">Update DateTime</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 45px;">Status</th></tr>
                    </thead>
                  <tbody><tr class="odd"><td valign="top" colspan="10" class="dataTables_empty">No Data Available in Table</td></tr></tbody></table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span></span><a class="paginate_button next" aria-controls="mainTable" data-dt-idx="1" tabindex="0" id="mainTable_next">Next</a></div></div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
      </div></section>
</div>

@endsection
