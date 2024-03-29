@extends("layouts.app")
@section("title","Confrim dmr txns")
@section("styles")
<style>
    table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}

    @media print {

  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
    table {
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > thead:first-child > tr:first-child > th {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th {
  border-bottom-width: 2px;
}
.table > tbody > tr > td {
  padding: 6px 0;
}
</style>
@endsection
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card ">

                    <div class="card-body">
                        <div class="white_bg">
                            <h4 style="text-align: center">PLEASE VERIFY YOUR TRANSACTION DETAILS</h4>
                            <form action="{{ route('dmt.transact') }}" class="one_col" id="dmt-process" method="post" accept-charset="utf-8">
                               @csrf
                                <div class="table_title mar_t_20">
                                    <div class="col-sm-12">
                                        <h4>REMITTER DETAILS</h4>
                                    </div>
                                </div>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NAME</th>
                                            <th class="text-center">MOBILE</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td>{{ $detail->fname }} {{ $detail->lname }}</td>
                                            <td>{{ $detail->mobile }}</td>
                                            <input type="hidden" value="{{ $detail->mobile }}" name="mobile">
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="table_title mar_t_20">
                                    <div class="col-sm-12">
                                        <h4>RECEIVER DETAILS</h4>
                                    </div>
                                </div>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">BENEFICIARY NAME</th>
                                            <th class="text-center">ACCOUNT NUMBER</th>
                                            <th class="text-center">BANK</th>
                                            <th class="text-center">IFSC Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $beneficiary_fetch_bene->benename }}</td>
                                            <td>{{ $beneficiary_fetch_bene->accno }}</td>
                                            <td>{{ $beneficiary_fetch_bene->bank->bank_name }}</td>
                                            <input type="hidden" value="{{ $beneficiary_fetch_bene->bank->bank_name }}" name="bank">
                                            <td>{{ $beneficiary_fetch_bene->ifsc }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="table_title mar_t_20">
                                    <div class="col-sm-12">
                                        <h4>TRANSACTION DETAILS</h4>
                                    </div>
                                </div>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">AMOUNT</th>
                                            <th class="text-center">CHARGES</th>
                                            <th class="text-center">TRANSFER TYPE*</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa fa-inr"></i> <strong>{{ $amount }}</strong></td>
                                            <td><i class="fa fa-inr"></i> <strong>10</strong></td>
                                            <input type="hidden" value="{{ $amount }}" name="amount">

                                            <td>
                                                <label>
                                                    <input type="radio" name="txntype" value="IMPS" checked="checked" required=""> IMPS</label>
                                                <label>
                                                    <input type="radio" name="txntype" value="NEFT" required=""> NEFT</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody> </tbody>
                                </table>
                                <input type="hidden" value="10" name="charges">
                                <input type="hidden" value="200" name="amount">
                                <input type="hidden" value="16692454484167801" name="txnToken">
                                <input type="hidden" value="38082449763" name="remitterToken">
                                <input type="hidden" value="346829715036" name="receiverToken">
                                <input type="hidden" value="{{ $beneficiary_fetch_bene->pincode }}" name="pincode">
                                <input type="hidden" value="{{ $beneficiary_fetch_bene->address }}" name="address">
                                <input type="hidden" value="{{ $beneficiary_fetch_bene->dob }}" name="dob">
                                 <input type="hidden" value="{{ $beneficiary_fetch_bene->bene_id }}" name="bene_id">


                                <div class="text-center">
                                    <button class="btn btn-primary dmt-process" type="submit">CONFIRM TRANSACTION</button> <a href="https://rnfi.in/listbene/" class="btn btn-danger" type="reset">CANCEL</a>
                                </div>
                                <p>* Note - You are not allowed to charge more than 1% of the transaction value.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
