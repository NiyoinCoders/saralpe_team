@extends("layouts.app")
@section("content")
<!-- ********************** main content start form here ********************** -->


<div class="container-fluid">
    <div class="card px-4 rounded-0 py-2">
        <div id="alertMsg" class="alert alert-success d-none" role="alert">
        </div>
        <div>
            <p class="text-white fw-bold bg-primary px-4  rounded-1 py-2 user-select-none">
                Filter Data
            </p>
        </div>
        <div>
            <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row flex-xxl-row flex-wrap gap-4 my-4">

                <form id="commission_Form">
                    @csrf
                    <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row flex-xxl-row flex-wrap gap-4">

                        <div class="form-group">
                            <label class="form-label text-dark">User Type<span class="text-danger">* <span id="error_user_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="user_type">
                                <option value="" selected="">--Choose--</option>
                                <option value="admin-self">Admin - Self</option>
                                <option value="channel-partner">Channel Partner</option>
                                <option value="master-distributor">Master Distributor</option>
                                <option value="distributor">Distributor</option>
                                <option value="retailer">Retailer</option>
                                <option value="B2C">B2C</option>
                                <option value="employee">Employee</option>
                                <option value="white-label">White Label</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Plan<span class="text-danger">* <span id="error_plan"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="plan">
                                <option value="" selected="">--Choose--</option>
                                <option value="Smart Retailer">Smart Retailer</option>
                                <option value="Smart Distributor">Smart Distributor</option>
                                <option value="Smart Super Distributor">Smart Super Distributor</option>
                                <option value="Master Starter">Master Starter</option>
                                <option value="fos">fos</option>
                                <option value="VIP Pack">VIP Pack</option>
                                <option value="Vivek">Vivek</option>
                                <option value="SBV Distributor">SBV Distributor</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Service<span class="text-danger">* <span id="error_serves_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="serves_type" id="ItemIservestype">
                                <option value="" selected="">--Choose--</option>
                                @foreach($serves as $serve)
                                <option value="{{$serve->id}}">{{$serve->service_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="opertaor_box"></div>

                        <div class="form-group">
                            <label class="form-label text-dark">Commission Type<span class="text-danger">* <span id="error_commission_type"></span></span></label>
                            <select id="commission_op" class="form-select mb-3 shadow-none text-dark" name="commission_type">
                                <option value="" selected="">--Choose--</option>
                                <option value="1">By Amount</option>
                                <option value="2">By Percentage</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="for-amount">From Amount<span class="text-danger">* <span id="error_from_amount"></span></span></label>
                            <input type="text" class="form-control text-dark" id="for-amount" name="from_amount" value="" placeholder="From Amount">
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="to-amount">To Amount<span class="text-danger">* <span id="error_to_amount"></span></span></label>
                            <input type="text" class="form-control text-dark" id="to-amount" name="to_amount" value="" placeholder="To Amount">
                        </div>

                        <div id="commission_box"></div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="tds-gst-charge">TDS/GST (in %)<span class="text-danger">* <span id="error_tds_gst"></span></span></label>
                            <input type="text" class="form-control text-dark" id="tds-gst-charge" name="tds_gst" value="" placeholder="Enter TDS/GST Charge">
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Chain Type<span class="text-danger">* <span id="error_chain_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="chain_type">
                                <option value="" selected="">--Choose--</option>
                                <option value="self">Self</option>
                                <option value="chain">Chain</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Transaction Type<span class="text-danger">* <span id="error_transaction_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="transaction_type">
                                <option value="" selected="">--Choose--</option>
                                <option value="credit">Credit</option>
                                <option value="debit">Debit</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="username">For Any Specific User<span class="text-danger">* <span id="error_username"></span></span></label>
                            <input type="text" class="form-control text-dark" id="username" name="username" value="" placeholder="Enter Username">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>

    <!-- javascript for change option using js  -->
    @section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit', '#commission_Form', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{route("add_Commission")}}',
                    type: 'Post',
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(response) {
                        if (response.errors) {
                            response.errors.chain_type ? $('#error_chain_type').html(response.errors.chain_type) : $('#error_chain_type').html('');
                            response.errors.commission_type ? $('#error_commission_type').html(response.errors.commission_type) : $('#error_commission_type').html('');
                            response.errors.from_amount ? $('#error_from_amount').html(response.errors.from_amount) : $('#error_from_amount').html('');
                            response.errors.plan ? $('#error_plan').html(response.errors.plan) : $('#error_plan').html('');
                            response.errors.serves_type ? $('#error_serves_type').html(response.errors.serves_type) : $('#error_serves_type').html('');
                            response.errors.tds_gst ? $('#error_tds_gst').html(response.errors.tds_gst) : $('#error_tds_gst').html('');
                            response.errors.to_amount ? $('#error_to_amount').html(response.errors.to_amount) : $('#error_to_amount').html('');
                            response.errors.transaction_type ? $('#error_transaction_type').html(response.errors.transaction_type) : $('#error_transaction_type').html('');
                            response.errors.user_type ? $('#error_user_type').html(response.errors.user_type) : $('#error_user_type').html('');
                            response.errors.username ? $('#error_username').html(response.errors.username) : $('#error_username').html('');
                            response.errors.commission_percentage ? $('#error_commission_percentage').html(response.errors.commission_percentage) : $('#error_commission_percentage').html('');
                            response.errors.commission_amount ? $('#error_commission_amount').html(response.errors.commission_amount) : $('#error_commission_amount').html('');
                        }
                        if (response.success) {
                            $('#alertMsg').removeClass('d-none');
                            $('#alertMsg').html(response.success);
                            $('#commission_Form')[0].reset();
                            setTimeout(() => {
                                $('#alertMsg').addClass('d-none');
                            }, 2000);
                        }
                    }
                });
            });
        })
    </script>
    @endsection
    <script>
        let operatorData = `
                        <div class="form-group">
                            <label class="form-label text-dark">Operator<span class="text-danger">* <span id="error_operator"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="operator">
                                <option selected="">--Choose--</option>
                                <option value="1">Airtel</option>
                                <option value="2">BSNL</option>
                                <option value="3">Idea</option>
                                <option value="4">Jio</option>
                                <option value="5">MTNL Delhi</option>
                                <option value="6">MTNL Mumbai</option>
                                <option value="7">Vodafone</option>
                            </select>
                        </div>
    `;
        let operatorCategoryData = `
                        <div class="form-group">
                                <label class="form-label text-dark">Operator Category<span class="text-danger">* <span id="error_operator_category"></span></span></label>
                                <select class="form-select mb-3 shadow-none text-dark" name="operator_category">
                                    <option value="">-- Choose --</option>
                                    <option value="Broadband">Broadband</option>
                                    <option value="Cable">Cable</option>
                                    <option value="Datacard Postpaid">Datacard Postpaid</option>
                                    <option value="Datacard Prepaid">Datacard Prepaid</option>
                                    <option value="dsds">dsds</option>
                                    <option value="Electricity">Electricity</option>
                                    <option value="EMI">EMI</option>
                                    <option value="Fastag">Fastag</option>
                                    <option value="Gas">Gas</option>
                                    <option value="Insurance">Insurance</option>
                                    <option value="Landline">Landline</option>
                                    <option value="LPG">LPG</option>
                                    <option value="Municipality">Municipality</option>
                                    <option value="Postpaid">Postpaid</option>
                                    <option value="sal007">sal007</option>
                                    <option value="test">test</option>
                                    <option value="Water">Water</option>
                                </select>
                        </div>
    `;

        let payoutModeData = `
                        <label class="form-label text-dark">Mode<span class="text-danger">* <span id="error_mode"></span></span></label>
                        <select class="form-select mb-3 shadow-none text-dark" name="mode">
                            <option value="">-- Choose --</option><option value="NEFT">NEFT</option>
                            <option value="IMPS">IMPS</option>
                            <option value="RTGS">RTGS</option>
                        </select>
    `;

        let paymentGatewayModeData = `
                        <label class="form-label text-dark">Mode<span class="text-danger">* <span id="error_mode"></span></span></label>
                        <select class="form-select mb-3 shadow-none text-dark" name="mode">
                            <option value="">-- Choose --</option>
                            <option value="CREDIT_CARD">Credit Card</option>
                            <option value="DEBIT_CARD">Debit Card</option>
                            <option value="NET_BANKING">Net Banking</option>
                            <option value="UPI">UPI</option>
                            <option value="Paytm">Paytm</option>
                            <option value="PhonePe">PhonePe</option>
                            <option value="AmazonPay">Amazon Pay</option>
                            <option value="AIRTEL_MONEY">Airtel Money Wallet</option>
                            <option value="FreeCharge">Freecharge Wallet</option>
                            <option value="MobiKwik">MobiKwik Wallet</option>
                            <option value="OLA">Ola Wallet</option>
                            <option value="JioMoney">JioMoney Wallet</option>
                        </select>
    `;

        let commisionAmountData = `
                        <div class="form-group">
                            <label class="form-label text-dark" for="commissionAmount">Commission Amount<span class="text-danger">* <span id="error_commission_amount"></span></span></label>
                            <input type="text" class="form-control text-dark" id="commissionAmount" name="commission_amount" placeholder="Commission Amount">
                        </div>    
    `;
        let commisionPercentageData = `
                        <div class="form-group">
                            <label class="form-label text-dark" for="commissionPercentage">Commission Percentage<span class="text-danger">* <span id="error_commission_percentage"></span></span></label>
                            <input type="text" class="form-control text-dark" id="commissionPercentage" name="commission_percentage" placeholder="Commission Percentage">
                        </div>    
    `;

        const service_op = document.getElementById('ItemIservestype');
        const commission_op = document.getElementById('commission_op');

        const handleServiceOption = (e) => {
            const service_op = e.target.value;
            console.log(typeof service_op)


            switch (service_op) {
                case '1':
                    document.getElementById('opertaor_box').innerHTML = operatorData;
                    break;
                case '3':
                    document.getElementById('opertaor_box').innerHTML = operatorCategoryData;
                    break;
                case '4':
                    document.getElementById('opertaor_box').innerHTML = null;
                    break;
                case '6':
                    document.getElementById('opertaor_box').innerHTML = payoutModeData;
                    break;
                case '8':
                    document.getElementById('opertaor_box').innerHTML = null;
                    break;
                case '10':
                    document.getElementById('opertaor_box').innerHTML = paymentGatewayModeData;
                    break;
                case '11':
                    document.getElementById('opertaor_box').innerHTML = null;
                    break;
                default:
                    document.getElementById('opertaor_box').innerHTML = null;
                    break;
            }

        }

        const handleCommisionOption = (e) => {
            const commission_op = e.target.value;

            switch (commission_op) {
                case '1':
                    document.getElementById('commission_box').innerHTML = commisionAmountData;
                    break;
                case '2':
                    document.getElementById('commission_box').innerHTML = commisionPercentageData;
                    break;
                default:
                    document.getElementById('commission_box').innerHTML = '';
                    break;
            }
        }

        service_op.addEventListener('change', handleServiceOption);
        commission_op.addEventListener('change', handleCommisionOption)
    </script>

    <!-- ********************** main content end here ********************** -->
    @endsection