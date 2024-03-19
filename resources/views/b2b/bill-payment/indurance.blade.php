@extends("layouts.app")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Insurance</h5>
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
                                <label class="form-label" for="pwd">Billers:</label>
                                <select class="form-select mb-3 shadow-none" name="board" id="board">
                                    <option selected="">Select Billers</option>
                                    @foreach ($apidata as $data)
                                    @if($data->category == "Insurance")
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
                            <h4 class="card-title">Insurance COMMENT</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="" id="fetchbill">
                            <div class="header-title">
                                <div id="tableContainer">
                                </div>
                            </div>
                        </div>
                        <img src="../../../assets/images/bbps.png" class="img-fluid" alt="bbps">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section("scripts")

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

