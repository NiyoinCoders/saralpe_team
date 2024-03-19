@extends("layouts.app")
@section("title","Bank Information")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="">

          <div class="col-md-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h6 class="card-title text-danger">Web Login History</h6>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">



                 <form method="POST" id="filterLoginHistoryForm" action="">

                <div class="row">

                   <div class="col-md-2 form-group">

                    <label>From Date</label>
                    <input type="hidden" name="from_date" class="form-control datepicker flatpickr-input" value="2023-08-24"><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">

                  </div>

                   <div class="col-md-2 form-group">

                    <label>To Date</label>
                    <input type="hidden" name="to_date" class="form-control datepicker flatpickr-input" value="2023-08-24"><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" readonly="readonly">

                  </div>

                  <div class="col-md-2 form-group" style="margin-top: 30px">

                    <!--<input type="submit" name="submit" class="btn btn-success" value="Search Records">-->
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search Records</button>

                  </div>

                </div>

                 </form>


                <!-- State of Data Table -->
        <div class="table-responsive myCheckBox">
             <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons">          <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>Copy</span></button> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>CSV</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="mainTable" type="button"><span>Print</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
                <thead class="bg-primary">
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column descending" style="width: 39px;">S.No</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="IP Address : activate to sort column ascending" style="width: 84px;">IP Address </th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 66px;">Browser</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Login Mode: activate to sort column ascending" style="width: 90px;">Login Mode</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Android Device Name: activate to sort column ascending" style="width: 164px;">Android Device Name</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="IMEI No.: activate to sort column ascending" style="width: 65px;">IMEI No.</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Login Date &amp;amp; Time: activate to sort column ascending" style="width: 154px;">Login Date &amp; Time</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 51px;">Status</th></tr>
                </thead>
                <tbody>









                <tr role="row" class="odd">
                      <td class="sorting_1">1</td>

                      <td>92.119.179.10</td>

                      <td>Chrome</td>

                      <td>                      <i class="fas fa-laptop"> Web</i>

                      </td>

                      <td></td>

                      <td></td>

                      <td>24-08-2023 02:16:19 PM</td>

                      <td>
                                            <span class="badge badge-success">SUCCESS</span>
                                        </td>

                    </tr><tr role="row" class="even">
                      <td class="sorting_1">2</td>

                      <td>92.119.179.10</td>

                      <td>Chrome</td>

                      <td>                      <i class="fas fa-laptop"> Web</i>

                      </td>

                      <td></td>

                      <td></td>

                      <td>24-08-2023 02:14:59 PM</td>

                      <td>
                                            <span class="badge badge-danger">FAILED</span>
                                        </td>

                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">3</td>

                      <td>92.119.179.10</td>

                      <td>Chrome</td>

                      <td>                      <i class="fas fa-laptop"> Web</i>

                      </td>

                      <td></td>

                      <td></td>

                      <td>24-08-2023 10:18:16 AM</td>

                      <td>
                                            <span class="badge badge-success">SUCCESS</span>
                                        </td>

                    </tr><tr role="row" class="even">
                      <td class="sorting_1">4</td>

                      <td>92.119.179.10</td>

                      <td>Chrome</td>

                      <td>                      <i class="fas fa-laptop"> Web</i>

                      </td>

                      <td></td>

                      <td></td>

                      <td>24-08-2023 10:17:05 AM</td>

                      <td>
                                            <span class="badge badge-danger">FAILED</span>
                                        </td>

                    </tr></tbody>

              </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="mainTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="mainTable" data-dt-idx="2" tabindex="-1" id="mainTable_next">Next</a></div></div>


                </div>
                <!-- End of Data Table -->

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

      </section>
</div>

@endsection
