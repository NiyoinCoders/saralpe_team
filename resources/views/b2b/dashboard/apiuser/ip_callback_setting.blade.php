@extends("layouts.app")
@section("title","Dashboard")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="">
          <div class="col-md-12"> <!-- Start of Col-md-12 -->
            <div class="card card-outline card-warning"> <!-- Start of Card -->
              <div class="card-header" style="display: flex;"> <!-- End of Card Header -->
                <h6 class="card-title"><strong>IP &amp; Call Back List</strong></h6>
                <div class="card-tools" style="margin-left:590px;"> <!-- Start of Card-Tools -->
                  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop">Add New IP</button>
                </div> <!-- End of Card-Tools -->
              </div> <!-- End of Card Header -->
              <div class="card-body">

      <!-- ==================================== Start of Page Content =============================== -->

      <!-- ====================== Filter =================== -->

      <!-- ====================== End Filter ================-->

      <div class="table-responsive">
        <div id="mainTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="mainTable_length"><label>Show <select name="mainTable_length" aria-controls="mainTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dt-buttons"> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>XLS</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="mainTable" type="button"><span>PDF</span></button> </div><div id="mainTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="mainTable" spellcheck="false" data-ms-editor="true"></label></div><table id="mainTable" class="table table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="mainTable_info">
          <thead class="bg-teal">
            <tr align="center" role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 22px;">#</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 139px;">IP Address</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 214px;">Token</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 151px;">Call Back URL</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 191px;">Created Date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70px;">Delete</th></tr>
          </thead>
          <tbody>









          <tr align="center" role="row" class="odd">

                <td>1</td>
                <td class="text-bold">122.168.105.187</td>
                <td align="left">
                  <input type="text" id="token1" class="bg-light form-control form-control-sm" value="d3c2a0105e0af20d08af98dd83c79c1b" readonly="readonly">&nbsp;

                  <button style="margin-left: 35%; margin-top: 5px;" class="btn bg-gradient-teal btn-small copybutton1" onclick="myFunction('1')">Copy Token</button>&nbsp;

                  <button style="margin-left: 35%; margin-top: 5px; display: none;" class="btn bg-gradient-success btn-small copied1" onclick="myFunction('1')">Copied</button></td>

                <td>
                                <a href="javascript:void(0)" class="btn btn-primary btn-small" onclick="updateCallBack('194')"><i class="fas fa-plus-circle"></i> Add CallBack URL</a>
                            </td>

                <td>16-01-2023 08:58:59 AM</td>

                <td>
                              <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" onclick="deleteEntry('194','ip_callback')" data-original-title="Delete Token"><i class="fas fa-trash text-danger"></i></a></td>

              </tr><tr align="center" role="row" class="even">

                <td>2</td>
                <td class="text-bold">217.21.95.9</td>
                <td align="left">
                  <input type="text" id="token2" class="bg-light form-control form-control-sm" value="fda972379686cb2f3c656cd87987fdb8" readonly="readonly">&nbsp;

                  <button style="margin-left: 35%; margin-top: 5px;" class="btn bg-gradient-teal btn-small copybutton2" onclick="myFunction('2')">Copy Token</button>&nbsp;

                  <button style="margin-left: 35%; margin-top: 5px; display: none;" class="btn bg-gradient-success btn-small copied2" onclick="myFunction('2')">Copied</button></td>

                <td>
                                <a href="javascript:void(0)" class="btn btn-primary btn-small" onclick="updateCallBack('202')"><i class="fas fa-plus-circle"></i> Add CallBack URL</a>
                            </td>

                <td>16-06-2023 05:42:44 PM</td>

                <td>
                              <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" onclick="deleteEntry('202','ip_callback')" data-original-title="Delete Token"><i class="fas fa-trash text-danger"></i></a></td>

              </tr><tr align="center" role="row" class="odd">

                <td>3</td>
                <td class="text-bold">182.68.170.141</td>
                <td align="left">
                  <input type="text" id="token3" class="bg-light form-control form-control-sm" value="bd81d78718cd38eab078659f395ffc97" readonly="readonly">&nbsp;

                  <button style="margin-left: 35%; margin-top: 5px;" class="btn bg-gradient-teal btn-small copybutton3" onclick="myFunction('3')">Copy Token</button>&nbsp;

                  <button style="margin-left: 35%; margin-top: 5px; display: none;" class="btn bg-gradient-success btn-small copied3" onclick="myFunction('3')">Copied</button></td>

                <td>
                                <a href="javascript:void(0)" class="btn btn-primary btn-small" onclick="updateCallBack('205')"><i class="fas fa-plus-circle"></i> Add CallBack URL</a>
                            </td>

                <td>27-06-2023 04:34:58 PM</td>

                <td>
                              <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" onclick="deleteEntry('205','ip_callback')" data-original-title="Delete Token"><i class="fas fa-trash text-danger"></i></a></td>

              </tr></tbody>
        </table><div class="dataTables_info" id="mainTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div><div class="dataTables_paginate paging_simple_numbers" id="mainTable_paginate"><a class="paginate_button previous disabled" aria-controls="mainTable" data-dt-idx="0" tabindex="-1" id="mainTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="mainTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="mainTable" data-dt-idx="2" tabindex="-1" id="mainTable_next">Next</a></div></div>
      </div>

      <!-- ====================================  End of Page Content  =============================== -->

                </div> <!-- End of Card Body -->
              </div> <!-- End of Card -->
            </div> <!-- End of Col-md-12 -->
          </div> <!-- End of Container Fluid -->
      </section>
</div>

@endsection
