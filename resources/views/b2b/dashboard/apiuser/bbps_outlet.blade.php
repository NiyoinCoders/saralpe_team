@extends("layouts.app")
@section("title","Bbps Outlet")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="">
          <div class="col-md-12"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header"> <!-- End of Card Header -->
                <h6 class="card-title"><strong>Outlet List</strong></h6>
                <div class="card-tools"> <!-- Start of Card-Tools -->
                  <!-- <button type="submit" class="btn btn-primary-classic" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus"></i> New Outlet</button> -->
                </div> <!-- End of Card-Tools -->
              </div> <!-- End of Card Header -->
              <div class="card-body">

      <!-- ==================================== Start of Page Content =============================== -->

      <!-- ====================== Filter =================== -->

      <!-- ====================== End Filter ================-->

      <div class="table-responsive">
        <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons"> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered ibm-plex dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
          <thead class="text-bold">
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 10px;">#</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Id: activate to sort column ascending" style="width: 44px;">Agent Id</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Name: activate to sort column ascending" style="width: 54px;">Agent Name</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Shop Name: activate to sort column ascending" style="width: 69px;">Agent Shop Name</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Mobile No.: activate to sort column ascending" style="width: 69px;">Agent Mobile No.</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Address: activate to sort column ascending" style="width: 68px;">Agent Address</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent City: activate to sort column ascending" style="width: 48px;">Agent City</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Pin Code: activate to sort column ascending" style="width: 62px;">Agent Pin Code</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent State: activate to sort column ascending" style="width: 52px;">Agent State</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Agent Creation Date: activate to sort column ascending" style="width: 83px;">Agent Creation Date</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 40px;">Status</th></tr>
          </thead>

          <tbody>
            <tr class="odd"><td valign="top" colspan="11" class="dataTables_empty">No Data Available in Table</td></tr></tbody>
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
