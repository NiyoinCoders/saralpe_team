@extends("layouts.app")
@section("title","Bbps Complaints")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="">

          <div class="col-md-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h6 class="card-title ibm-plex text-danger"><strong>BBPS Complaint Register</strong></h6>
                <div class="card-tools">
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
            </div>
              <div class="card-body">

                 <form method="POST" action="javascript:void(0)" id="complaint_form">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Enter Our Txn id</label>
                        <input type="text" name="txnid" class="form-control" required="required" placeholder="Enter here" spellcheck="false" data-ms-editor="true">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Complaint Reason</label>
                        <select name="complaintDisposition" class="form-control">
                          <option>Transaction Successful, account not updated</option>
                          <option>Amount deducted, biller account credited but transaction ID not received</option>
                          <option>Amount deducted, biller account not credited &amp; transaction ID not received</option>
                          <option>Amount deducted multiple times</option>
                          <option>Double payment updated</option>
                          <option>Erroneously paid in wrong account</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="margin-top:32px;">Submit Complaint <i class="fas fa-arrow-right"></i></button>
                      </div>
                    </div>
                  </div>
                </form>

                <hr>
                <div class="table-responsive">
                  <div id="datatable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><table id="datatable" class="table table-bordered ibm-plex dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                    <thead class="text-bold">
                      <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51px;" aria-sort="descending" aria-label="Txn Id: activate to sort column ascending">Txn Id</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 94px;" aria-label="Txn Number: activate to sort column ascending">Txn Number</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 66px;" aria-label="Txn Amt: activate to sort column ascending">Txn Amt</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 93px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="Complaint Id: activate to sort column ascending">Complaint Id</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 118px;" aria-label="Complaint Date: activate to sort column ascending">Complaint Date</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 130px;" aria-label="Complaint Status: activate to sort column ascending">Complaint Status</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 62px;" aria-label="Remark: activate to sort column ascending">Remark</th></tr>
                    </thead>
                    <tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No Data Available in Table</td></tr></tbody>
                  </table><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><a class="paginate_button previous disabled" aria-controls="datatable" data-dt-idx="0" tabindex="-1" id="datatable_previous">Previous</a><span></span><a class="paginate_button next" aria-controls="datatable" data-dt-idx="1" tabindex="0" id="datatable_next">Next</a></div></div>
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
