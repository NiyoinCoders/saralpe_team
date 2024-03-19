@extends("layouts.app")
@section("styles")
<style>
    .tab {
        overflow: hidden;
        background-color: #f8f8f8;
    }
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        color: #999;
        font-size: 14px;
    }
    .tab button.active {
        border-bottom: 2px solid #1e6ad8;
        color: black;
    }
    .tabcontent {
        display: none;
        padding: 6px 12px;
    }
</style>

@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                        @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                            <h5 class="card-title">Pay Electricity Bill</h5>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="POST" id="myForm">
                            @csrf

                              <div style="display: none">
                                <div id="demo">
                                    <input id="latitude" name="latitude">
                                    <input id="longitude" name="longitude">

                                </div>
                                <div class="" id="fetchbill">
                                    <div class="header-title">
                                        <div id="Container">
                                        </div>
                                    </div>
                                </div>
                                <input  name="billAmount" />
                                <input name="billnetamount"/>
                                <input name="billdate"/>
                                <input name="dueDate"/>
                                <input name="acceptPayment"/>
                                <input name="acceptPartPay"/>
                                <input name="cellNumber"/>
                                <input name="userName"/>
                              </div>


                            <div class="form-group">
                                <label class="form-label" for="pwd">Electricity Board:</label>
                                <select class="form-select mb-3 shadow-none" name="board" id="board">
                                    <option selected="">Select Electricity Board</option>
                                    @foreach ($apidata as $data)
                                    @if($data->category == "Electricity")
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endif
                                    @endforeach
                                   </select>
                            </div>
                            <div class="form-group">
                                  <div id="addfeilds">
                                  </div>

                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Mode:</label>
                                <select class="form-select mb-3 shadow-none" name="mode" id="mode" required>
                                    <option selected="" value="">Select Mode</option>

                                    <option value="online">Online</option>
                                    <option value="offline">Offline</option>

                                   </select>

                          </div>
                          <div class="form-group" id="amountfeild">
                            <label class="form-label" for="pwd">Amount:</label>
                            <input type="text" name="amount" id="amount" disabled>

                      </div>
                            <button type="submit" class="btn btn-primary" id="submit">Fetch Bill</button>
                            <button type="submit" class="btn btn-primary" id="submit2">Proceed</button>



                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Promo Codes</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="" id="fetchbill">
                            <div class="header-title">
                                <div id="tableContainer">
                                </div>
                            </div>
                        </div>
                        <div class="_1s0u">
                            <ul>
                                <li class="p-2" data-bs-toggle="modal" data-bs-target="#detail_modal">
                                    <h5>ELEC1000</h5>
                                    <p class="m-0">
                                        <span class="_33La">Participate in the Lucky Draw to win 100% cashback upto ₹10,000.</span>
                                        <span class="YGVM"><span>View detail</span></span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="detail_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Participate in the Lucky Draw to win 100% cashback upto ₹10,000.</h5>
                <button type="button" class="close border-0" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="myInput" readonly value="ELEC1000" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="myFunction()" id="basic-addon2" style="cursor: pointer;">Copy</span>
                        </div>
                    </div>
                </div>
                <div class="CLNZ lHgm">
                    <div> <b>Terms &amp; Conditions:</b></div>
                    <p>* Get a chance to win 100% Cashback on successful Electricity Bill Payment on Paytm app<br>
                        * This offer is only applicable on min. bill payment of Rs.100 or more on Paytm app<br>
                        * Everyday 1000th users will receive 100% cashback upto Rs 10,000 on payment of electricity bill <br>
                        * To avail this offer, Apply Promocode ELEC1000 in the 'Apply Promocode/See Bank offers' section<br>
                        * This offer is applicable once per user per month<br>
                        * This offer is valid till 31st October 2022, 23:59:00 only<br>
                        * This offer cannot be clubbed with any other offer<br>
                        * Cashback will be sent to the user's wallet instantly. In case of any delays, cashback will be credited within 24 hours from the completion of an eligible payment<br>
                        * Paytm will not share a list of winners on its platform. All winners will get the cashback into their wallet instantly. There is no need to redeem a scratch card <br>
                        * In case the user has exhausted min. KYC Limits of wallet, cashback will be sent to users in their Paytm linked Bank Account<br>
                        * Paytm reserves its absolute right to withdraw and/or alter any terms and conditions of the offer at any time without prior notice<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@section("scripts")
<script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
    }
</script>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {

    var latitudeField = document.getElementById("latitude");
        var longitudeField = document.getElementById("longitude");

        latitudeField.value = position.coords.latitude;
        longitudeField.value = position.coords.longitude;


}




</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        document.querySelector("#myForm").addEventListener("submit", function (evt) {
  evt.preventDefault();
  // do you ajax submission here
  console.log('submitted')
})



      var regex;
      var displayname;
     $('#board').on('change', function(){
        $('#addfeilds').html(" ");
        var oprterid = $(this).val();
        $('#amountfeild').hide();
        $('#tableContainer').html("");
        $('#submit2').hide();
        $('#submit').show();

        $.ajax({
            url: "{{route('getid')}}",
            method: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {

                    operator: oprterid
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                    $('#addfeilds').append(response.html);
                    regex = response.regex;
                    displayname = response.displayname;

                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.log(error);
                }

        });

     });


     $('#fetchbill').hide();
     $('#amountfeild').hide();
     $('#submit2').hide();
     $("form").submit(function(e) {

            var selectedValue = $('#mySelect').val();
            var oprterid = $('#board').val();
            var mode = $('#mode').val();
            $('#tableContainer').html(" ");

            // Send an AJAX request
            $.ajax({
                url: "{{ route('ajax.process') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    canumber: selectedValue,
                    operator: oprterid,
                    mode: mode
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                    $('#Container').append(response.htmltable);
                    $('#tableContainer').append(response.htmltable);
                    $('#submit2').show();
                    $('#submit').hide();

                    $('#fetchbill').show();
                    $('#amountfeild').show();
                    var amont = $('#amontval').val();
                    $('#amount').val(amont);
                    $("input[name='billAmount']").val(response.data.bill_fetch.billAmount);
                    $("input[name='billnetamount']").val(response.data.bill_fetch.billnetamount);
                    $("input[name='billdate']").val(response.data.bill_fetch.billdate);
                    $("input[name='dueDate']").val(response.data.bill_fetch.dueDate);
                    $("input[name='acceptPayment']").val(response.data.bill_fetch.acceptPayment);
                    $("input[name='acceptPartPay']").val(response.data.bill_fetch.acceptPartPay);
                    $("input[name='cellNumber']").val(response.data.bill_fetch.cellNumber);
                    $("input[name='userName']").val(response.data.bill_fetch.userName);
                    // $("#myForm").attr('action', '{{ route("paybill") }}');
                    // $("form").removeAttr("id");
                   // alert(response.data.bill_fetch.ad2);

                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.log(error);
                }
            });
        });

        //pay bill api

        $('#submit2').on('click', function(e) {

var selectedValue = $('#mySelect').val();
var oprterid = $('#board').val();
var mode = $('#mode').val();
var latitude = $('#latitude').val();
var longitude = $('#longitude').val();

 var  amount =   $('#amount').val();
 var  billAmount =   $("input[name='billAmount']").val();
 var  billnetamount =   $("input[name='billnetamount']").val();
 var  billdate =    $("input[name='billdate']").val();
 var  dueDate =    $("input[name='dueDate']").val();
 var  acceptPayment =    $("input[name='acceptPayment']").val();
 var  acceptPartPay =   $("input[name='acceptPartPay']").val();
 var  cellNumber =   $("input[name='cellNumber']").val();
 var  userName =   $("input[name='userName']").val();
 var  name =   $("input[name='name']").val();

// Send an AJAX request
$.ajax({
    url: "{{ route('paybill') }}",
    method: "POST",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
        canumber: selectedValue,
        operator: oprterid,
        mode: mode,
        amount: amount,
        billAmount: billAmount,
        billnetamount: billnetamount,
        billdate: billdate,
        dueDate: dueDate,
        acceptPayment: acceptPayment,
        acceptPartPay: acceptPartPay,
        cellNumber: cellNumber,
        userName: userName,
        name: name,
        latitude: latitude,
        longitude: longitude

    },
    success: function(response) {
        // Handle the response from the server
        console.log(response);

       // alert(response.data.bill_fetch.ad2);

    },
    error: function(xhr, status, error) {
        // Handle any errors
        console.log(error);
    }
});
});


    });
</script>

@endsection
@endsection
