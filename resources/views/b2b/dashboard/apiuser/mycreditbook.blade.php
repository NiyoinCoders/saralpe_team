@extends("layouts.app")
@section("title","Dashboard")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="row row-cols-1">
                <div class="overflow-hidden d-slider1 ">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Total Balance</p>
                                        <h4 class="counter">₹ 560K</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Total Profit</p>
                                        <h4 class="counter">₹ 185K</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Total Cost</p>
                                        <h4 class="counter">₹ 375K</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                                        <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Revenue</p>
                                        <h4 class="counter">₹ 742K</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-05" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                                        <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Net Income</p>
                                        <h4 class="counter">₹ 150K</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-06" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Today</p>
                                        <h4 class="counter">₹ 4600</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <div id="circle-progress-07" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                                        <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-detail">
                                        <p class="mb-2">Members</p>
                                        <h4 class="counter">11.2M</h4>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="">



          <div class="col-md-12 p-0">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h6 class="card-title text-danger">My Credit Book</h6>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                 <form method="POST" action="https://redpay.in/API_User/My_Credit_Book">

                  <div class="row">

                   <div class="form-group col-md-2">
                     <label>Month</label>

                    <input type="text" id="filter_month_year" required="required" class="form-control datepicker hasDatepicker" name="month" readonly="" value="2023-08">
                  </div>


                  <div class="col-md-2 form-group" style="margin-top: 32px">
                    <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fas fa-spinner"></i> Load Ledger</button>
                  </div>

                </div>

                 </form>

                  <div class="table-responsive">
             <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons">      <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>CSV</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="mainTable" type="button"><span>Print</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="mainTable_info">
                <thead class="bg-teal">
                  <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 190.797px;">Date &amp; Time</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 176.641px;">Particulars</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 113.859px;">Credit</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 103.875px;">Debit</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 252.828px;">Running Balance</th></tr>
                </thead>
                <tbody>


                <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No Data Available in Table</td></tr></tbody>

              </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span></span><a class="paginate_button next" aria-controls="mainTable" data-dt-idx="1" tabindex="0" id="mainTable_next">Next</a></div></div>

                </div>

              </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

      </section>
</div>

@endsection
