@extends("layouts.app")
@section("title","Bank Information")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">

    <section class="content">
        <div class="container-fluid">

          <div class="col-md-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h6 class="card-title text-danger"> Bank Account Details</h6>

                <div class="card-tools">
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <div class="table-responsive">
             <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons">          <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>Copy</span></button> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>CSV</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="mainTable" type="button"><span>Print</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
                <thead class="bg-primary">
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 9px;">#</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Account Holder: activate to sort column ascending" style="width: 219px;">Account Holder</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Bank Name: activate to sort column ascending" style="width: 93px;">Bank Name</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Bank Logo: activate to sort column ascending" style="width: 106px;">Bank Logo</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Account Number: activate to sort column ascending" style="width: 113px;">Account Number</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="IFSC Code: activate to sort column ascending" style="width: 77px;">IFSC Code</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Branch Name: activate to sort column ascending" style="width: 132px;">Branch Name</th></tr>
                </thead>
                <tbody>












                    <tr role="row" class="odd">
            <td class="sorting_1">1</td>
            <td class="text-bold">MULTIPAY TECHNO SOLUTIONS PVT LTD</td>
            <td>HDFC BANK LTD</td>
            <td><img class="img-responsive" style="width: 122px; height: 60px;" src="https://redpay.in/assets/img/bank_logo/57bef83d2ccea17cca753c08ee6403ea.png"></td>
            <td>50200047851173</td>
            <td>HDFC0009437</td>
            <td>TANSEN NAGAR GWALIOR</td>

          </tr><tr role="row" class="even">
            <td class="sorting_1">2</td>
            <td class="text-bold">MULTIPAY TECHNO SOLUTIONS PVT LTD</td>
            <td>ICICI Bank Limited</td>
            <td><img class="img-responsive" style="width: 122px; height: 60px;" src="https://redpay.in/assets/img/bank_logo/30bdf821f375365d990de93c42dd4559.jpg"></td>
            <td>143505002876</td>
            <td>ICIC0001435</td>
            <td>BHIND</td>

          </tr></tbody>
                  </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="mainTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="mainTable" data-dt-idx="2" tabindex="-1" id="mainTable_next">Next</a></div></div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

      </div></section>

</div>

@endsection
