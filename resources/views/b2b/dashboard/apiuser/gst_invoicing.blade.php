@extends("layouts.app")
@section("title","Gst Invoicing")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="">
          <div class="col-md-12"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header"> <!-- End of Card Header -->
                <h6 class="card-title"><strong>Invoice(s) List</strong></h6>
                <div class="card-tools"> <!-- Start of Card-Tools -->
                  <!-- <button type="submit" class="btn btn-primary-classic" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus"></i> New Outlet</button> -->
                </div> <!-- End of Card-Tools -->
              </div> <!-- End of Card Header -->
              <div class="card-body">

      <!-- ==================================== Start of Page Content =============================== -->

      <!-- ====================== Filter =================== -->

      <!-- ====================== End Filter ================-->

      <div class="table-responsive">
        <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered ibm-plex dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
          <thead class="text-bold bg-light">
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 38px;">#</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Invoice Month: activate to sort column ascending" style="width: 160px;">Invoice Month</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Summary: activate to sort column ascending" style="width: 116px;">Summary</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Invoice/Credit Note: activate to sort column ascending" style="width: 211px;">Invoice/Credit Note</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="Upload P2A: activate to sort column ascending" style="width: 137px;">Upload P2A</th><th class="sorting" tabindex="0" aria-controls="mainTable" rowspan="1" colspan="1" aria-label="P2A (RCM): activate to sort column ascending" style="width: 127px;">P2A (RCM)</th></tr>
          </thead>

          <tbody>




            <tr role="row" class="odd">
                        <td class="sorting_1">1</td>

                        <td class="text-bold">August-2022</td>

                        <td>
                                                <a class="btn-primary-classic btn-sm" href="https://redpay.in/assets/summary_file/44703616e2ec670d3b5ddd898ded5cc6.pdf" target="_blank">View</a>
                                            </td>

                        <td>
                          <a class="btn-primary-classic btn-sm" href="https://redpay.in/assets/invoice_file/a06d20a6a3b5925259d255f15abfb59a.pdf" target="_blank">View</a>
                        </td>

                        <td></td>

                        <td></td>

                    </tr><tr role="row" class="even">
                        <td class="sorting_1">2</td>

                        <td class="text-bold">July-2022</td>

                        <td>
                                                <a class="btn-primary-classic btn-sm" href="https://redpay.in/assets/summary_file/7503cb14b04428583dcdbae006d73150.pdf" target="_blank">View</a>
                                            </td>

                        <td>
                          <a class="btn-primary-classic btn-sm" href="https://redpay.in/assets/invoice_file/15e4f8124252b54cb507ae26bbc7e296.pdf" target="_blank">View</a>
                        </td>

                        <td></td>

                        <td></td>

                    </tr></tbody>
        </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="mainTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="mainTable" data-dt-idx="2" tabindex="-1" id="mainTable_next">Next</a></div></div>
      </div>

      <!-- ====================================  End of Page Content  =============================== -->

              </div> <!-- End of Card Body -->
            </div> <!-- End of Card -->
          </div> <!-- End of Col-md-12 -->
        </div> <!-- End of Container Fluid -->
      </section>
</div>

@endsection
