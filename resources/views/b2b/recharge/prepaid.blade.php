@extends('layouts.app')
@section('title', 'Recharge Prepaid')
@section('styles')
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            background-color: #f8f8f8;
        }
        /* Style the buttons that are used to open the tab content */
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
        /* Create an active/current tablink class */
        .tab button.active {
            border-bottom: 2px solid #1e6ad8;
            color: black;
        }
        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
        }
    </style>
@endsection
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">Prepaid Mobile Recharge</h5>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="alerts"></div>
                            <form method="POST" action="{{ route('submit-form') }}">
                                @csrf
                                <!-- Form fields go here -->
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="email">Prepaid Mobile Number:</label>
                                    <input type="number" class="form-control" id="nameInput" name="phone">

                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Operator:</label>
                                    <select class="form-select mb-3 shadow-none" name="operator" id="operatorId">
                                        <option selected="" value="">Select Your Operator</option>
                                        - @foreach ($operators as $operator)
                                            @if ($operator->category == 'Prepaid')
                                                <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Circle:</label>
                                    <select class="form-select mb-3 shadow-none" name="Circle" id="circle">

                                            <option value="">Select state</option>
                                            <option value="AN">Andaman and Nicobar Islands</option>
                                            <option value="AP">Andhra Pradesh</option>
                                            <option value="AR">Arunachal Pradesh</option>
                                            <option value="AS">Assam</option>
                                            <option value="BR">Bihar</option>
                                            <option value="CH">Chandigarh</option>
                                            <option value="CT">Chhattisgarh</option>
                                            <option value="DN">Dadra and Nagar Haveli</option>
                                            <option value="DD">Daman and Diu</option>
                                            <option value="DL">Delhi</option>
                                            <option value="GA">Goa</option>
                                            <option value="GJ">Gujarat</option>
                                            <option value="HR">Haryana</option>
                                            <option value="HP">Himachal Pradesh</option>
                                            <option value="JK">Jammu and Kashmir</option>
                                            <option value="JH">Jharkhand</option>
                                            <option value="KA">Karnataka</option>
                                            <option value="KL">Kerala</option>
                                            <option value="LA">Ladakh</option>
                                            <option value="LD">Lakshadweep</option>
                                            <option value="MP">Madhya Pradesh</option>
                                            <option value="MH">Maharashtra</option>
                                            <option value="MN">Manipur</option>
                                            <option value="ML">Meghalaya</option>
                                            <option value="MZ">Mizoram</option>
                                            <option value="NL">Nagaland</option>
                                            <option value="OR">Odisha</option>
                                            <option value="PY">Puducherry</option>
                                            <option value="PB">Punjab</option>
                                            <option value="RJ">Rajasthan</option>
                                            <option value="SK">Sikkim</option>
                                            <option value="TN">Tamil Nadu</option>
                                            <option value="TG">Telangana</option>
                                            <option value="TR">Tripura</option>
                                            <option value="UP">Uttar Pradesh</option>
                                            <option value="UT">Uttarakhand</option>
                                            <option value="WB">West Bengal</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Recharge Amount:</label>
                                    <input type="number" class="form-control" id="amount" name="amount">
                                </div>
                                <button type="submit"
                                    class="btn btn-outline-primary rounded-pill btn-sbmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">Browse Plans of BSNL - <span id="circleStateName"></span></h5>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="tab" id="tabdynamic">
                                <!-- <button class="tablinks active" onclick="lists(event, 'popular')">Popular</button>
                                <button class="tablinks" onclick="lists(event, 'special_recharge')">Special
                                    Recharge</button>
                                <button class="tablinks" onclick="lists(event, 'top_up')">Top Up</button>
                                <button class="tablinks" onclick="lists(event, 'data_structure')">2G/3G/4G Data</button>
                                <button class="tablinks" onclick="lists(event, 'full_talktime')">Full Talktime</button> -->
                            </div>
                            <!-- Tab content -->
                            <div id="popular" class="tabcontent" style="display: block;">
                                <div class="table-responsive">
                                    <table width="100%" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td class="re_td_head">Choose</td>
                                                <td class="re_td_head">Price</td>
                                                <td class="re_td_head">Description</td>
                                                <td class="re_td_head">Data</td>
                                                <td class="re_td_head">Validity</td>
                                            </tr>
                                        </thead>
                                        <tbody id="dynamictable"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="recharge-prepaid-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="rechage-data" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="re_td_head">Reference Id</th>
                                    <th class="re_td_head">Ackno </th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" onclick="printDiv('rechage-data')">Print</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        $("select[name='operator']").on("change", function() {

            $.ajax({
                url: "{{ route('recharge-plan.plan-list') }}",
                type: "POST",
                data: {
                    id: $(this).val()
                },
                dataType: "JSON",
                success: function(result) {
                    var data = result.data;
                    var popular = data.populars;
                    var special_recharge = data.special_recharge;
                    var top_up = data.top_up;
                    var data_structure = data.internet_data;
                    var full_talktime = data.full_talktime;
                    if (popular.length > 0) {
                        var popular_html = "";
                        for (let index = 0; index < popular.length; index++) {
                            const popular_element = popular[index];
                            console.log(popular_element.circle);
                            popular_html += '<tr>';
                            popular_html += '<td>' + popular_element.circle + '</td>';
                            popular_html += '<td>' + popular_element.plan_category_name + '</td>';
                            popular_html += '<td>' + popular_element.data + '</td>';
                            popular_html += '<td>' + popular_element.validity + '</td>';
                            popular_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                popular_element.price + ')">₹ ' + popular_element.price +
                                '</button></td>';
                            popular_html += '<td>' + popular_element.description + '</td>';
                            popular_html += '</tr>';
                        }
                       // $("#popular table tbody").html(popular_html);
                    }
                    if (special_recharge.length > 0) {
                        var special_recharge_html = "";
                        for (let index = 0; index < special_recharge.length; index++) {
                            const special_recharge_element = special_recharge[index];
                            special_recharge_html += '<tr>';
                            special_recharge_html += '<td>' + special_recharge_element.circle + '</td>';
                            special_recharge_html += '<td>' + special_recharge_element
                                .plan_category_name + '</td>';
                            special_recharge_html += '<td>' + special_recharge_element.data + '</td>';
                            special_recharge_html += '<td>' + special_recharge_element.validity +
                                '</td>';
                            special_recharge_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                special_recharge_element.price + ')">₹ ' + special_recharge_element
                                .price +
                                '</button></td>';
                            special_recharge_html += '<td>' + special_recharge_element.description +
                                '</td>';
                            special_recharge_html += '</tr>';
                        }
                        $("#special_recharge table tbody").html(special_recharge_html);
                    }
                    if (top_up.length > 0) {
                        var top_up_html = "";
                        for (let index = 0; index < top_up.length; index++) {
                            const top_up_element = top_up[index];
                            top_up_html += '<tr>';
                            top_up_html += '<td>' + top_up_element.circle + '</td>';
                            top_up_html += '<td>' + top_up_element.plan_category_name + '</td>';
                            top_up_html += '<td>' + top_up_element.data + '</td>';
                            top_up_html += '<td>' + top_up_element.validity + '</td>';
                            top_up_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                top_up_element.price + ')">₹ ' + top_up_element.price +
                                '</button></td>';
                            top_up_html += '<td>' + top_up_element.description + '</td>';
                            top_up_html += '</tr>';
                        }
                        $("#top_up table tbody").html(top_up_html);
                    }
                    if (data_structure.length > 0) {
                        var data_structure_html = "";
                        for (let index = 0; index < data_structure.length; index++) {
                            const data_structure_element = data_structure[index];
                            data_structure_html += '<tr>';
                            data_structure_html += '<td>' + data_structure_element.circle + '</td>';
                            data_structure_html += '<td>' + data_structure_element.plan_category_name +
                                '</td>';
                            data_structure_html += '<td>' + data_structure_element.data + '</td>';
                            data_structure_html += '<td>' + data_structure_element.validity + '</td>';
                            data_structure_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                data_structure_element.price + ')">₹ ' + data_structure_element.price +
                                '</button></td>';
                            data_structure_html += '<td>' + data_structure_element.description +
                                '</td>';
                            data_structure_html += '</tr>';
                        }
                        $("#data_structure table tbody").html(data_structure_html);
                    }
                    if (full_talktime.length > 0) {
                        var full_talktime_html = "";
                        for (let index = 0; index < full_talktime.length; index++) {
                            const full_talktime_element = full_talktime[index];
                            full_talktime_html += '<tr>';
                            full_talktime_html += '<td>' + full_talktime_element.circle + '</td>';
                            full_talktime_html += '<td>' + full_talktime_element.plan_category_name +
                                '</td>';
                            full_talktime_html += '<td>' + full_talktime_element.data + '</td>';
                            full_talktime_html += '<td>' + full_talktime_element.validity + '</td>';
                            full_talktime_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                full_talktime_element.price + ')">₹ ' + full_talktime_element.price +
                                '</button></td>';
                            full_talktime_html += '<td>' + full_talktime_element.description + '</td>';
                            full_talktime_html += '</tr>';
                        }
                        $("#full_talktime table tbody").html(full_talktime_html);
                    }
                }
            })
        });
        function lists(event, key) {

                var string = key;
                var newString = string.replace(/"/g, '');
                console.log(newString);

                var operators = document.getElementById('operatorId');
                var opertis= operators.value;
                console.log(opertis);
                var circleId = document.getElementById('circle');

                var circlevalues = circleId.value;
                console.log(circlevalues);
                var planlinks = '/recharge/hlrapi/browseplan';

                $('#dynamictable').empty();
                $.ajax({
                    url: "{{ route('ajax.getplans') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        circle: circlevalues, op: opertis, planlinks:planlinks, button:newString,
                    },

                    success: function(response) {
                        event.target.style.backgroundColor = '';
                        $('#dynamictable').append(response);
                        event.target.style.backgroundColor = 'orange';
                    },

                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.log(error);
                    }
                });

        }


        function changeamount(amount) {
            $("#amount").val(amount);
        }
    </script>
<!-- Ashok Added This Code -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        // call opertaor on ajax

        $('#nameInput').on('change', function() {

            var srvicelink = '/recharge/recharge/getoperator';
            var getcircle = 'recharge/hlrapi/hlrcheck';

            var number = $(this).val();
            // Send an AJAX request
            $.ajax({
                url: "{{ route('ajax.getopratordata') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    data: srvicelink
                },
                success: function(response) {
                    var data = response.dataArray;
                    // Handle the response from the server
                    console.log(response);

                    //$('#operatorId').append(response);

                },

                error: function(xhr, status, error) {
                    // Handle any errors
                    console.log(error);
                }
            });

            // get circle

            $.ajax({
                url: "{{ route('ajax.getcircles') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    data: getcircle, number: number, type: 'mobile',
                },
                success: function(response) {
                    var data = response;
                    // Handle the response from the server
                    console.log(response);
                    $('#circle').append(response);

                },

                error: function(xhr, status, error) {
                    // Handle any errors
                    console.log(error);
                }
            });

            // browse plans
            // Example usage
            var circleId = document.getElementById('circle');
            // Get the ID of the select box
            console.log(selectedOption);
            console.log(circleId);

        });



        $('#operatorId').on('change', function() {

           var operators = $(this).val();

           var circleId = document.getElementById('circle');
           var circlevalues = circleId.value;
           var planlinks = '/recharge/hlrapi/browseplan';
            // Get the ID of the select box


            $('#tabdynamic').empty();
            $('#dynamictable').empty();

            $.ajax({
               url: "{{ route('ajax.getplans') }}",
               method: "POST",
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               data: {
                   circle: circlevalues, op: operators, planlinks:planlinks,
               },

               success: function(response) {

                   $('#tabdynamic').append(response);
               },

               error: function(xhr, status, error) {
                   // Handle any errors
                   console.log(error);
               }
           });

        });

    });
</script>


@if (session('status'))
@if (session('status')->response_code == 1)

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="hide()"></button>
        </div>
        <div class="modal-body" id="divToPrint">
            <div class="alerts">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')->message }}
                </div>

            @endif
            </div>
            <div class="table-responsive">
                <table id="rechage-data" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="re_td_head">Reference Id</th>
                            <th class="re_td_head">Ackno </th>
                            <th class="re_td_head">operatorid </th>
                        </tr>
                    </thead>
                    <tbody>
                       <td>{{ session('status')->refid }}</td>
                       <td>{{ session('status')->ackno }}</td>
                       <td>{{ session('status')->operatorid }}</td>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="PrintDiv();">Print</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>

      </div>
    </div>
  </div>

  <!-- Button trigger modal -->
<button type="button" id="btnclick" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display: none;">
Launch demo modal
</button>

<script>
$(document).ready(function(){

    $("#btnclick").click();

});
</script>

@endif
@endif



<script type="text/javascript">
    function PrintDiv() {
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'height=400,width=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
@endsection
