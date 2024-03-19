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
                <div class="card " >

                    <div class="card-body">
                        <div class="white_bg" id="divToPrint">
                            <div class="border-bottom">
                            <i class="fa fa-check-circle-o" style="font-size:70px; text-align: center; color:green; margin-left:230px;"></i><h2 style="text-align: center; color:green; margin-top:-70px;">Payment Successfull</h2>
                            <h6 style="margin-left:310px;">Your payment has been processed! Details of transtions are inclued blow.</h6>

                        </div>

                        <div class="center col-md-6 " style="margin: auto;">
                            <div class="row mt-10" style="margin-top: 20px;">
                            <div class="col-md-6" style="font-weight: bold">
                                Amount:
                            </div>
                            <div class="col-md-6">
                                <?php
                             print_r($res->ackno);
                             ?>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="center col-md-1" style="margin: auto;">
                            <button class="btn btn-primary center" onclick="PrintDiv();">Print</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    function PrintDiv() {
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
@endsection
