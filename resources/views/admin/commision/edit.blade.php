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
                            <input type="hidden" name="commission_id" value="{{$commissions->id}}">
                            <label class="form-label text-dark">User Type<span class="text-danger">* <span id="error_user_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="user_type">
                                <option value="">--Choose--</option>
                                @foreach($roles as $role)
                                <option {{$commissions->user_type == $role->id ? 'selected' : ''}} value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Plan<span class="text-danger">* <span id="error_plan"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="plan_id">
                                <option value="">--Choose--</option>
                                @foreach($plans as $plan)
                                <option {{$commissions->plan_id == $plan->id ? 'selected' : ''}} value="{{$plan->id}}">{{$plan->plan_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Service<span class="text-danger">* <span id="error_serves_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="service_id" id="ItemIservestype">
                                <option value="">--Choose--</option>
                                @foreach($services as $service)
                                <option {{$commissions->service_id == $service->id ? 'selected' : ''}} value="{{$service->id}}">{{$service->service_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="opertaor_box"></div>

                        <div class="form-group">
                            <label class="form-label text-dark">Commission Type<span class="text-danger">* <span id="error_commission_type"></span></span></label>
                            <select id="commission_op" class="form-select mb-3 shadow-none text-dark" name="commission_type">
                                <option value="">--Choose--</option>
                                <option value="Amount" {{$commissions->commission_type == 'Amount' ? 'selected' : ''}}>By Amount</option>
                                <option value="Percentage" {{$commissions->commission_type == 'Percentage' ? 'selected' : ''}}>By Percentage</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="for-amount">From Amount<span class="text-danger">* <span id="error_from_amount"></span></span></label>
                            <input type="text" class="form-control text-dark" id="for-amount" name="from_amount" value="{{$commissions->from_amount}}" placeholder="From Amount">
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="to-amount">To Amount<span class="text-danger">* <span id="error_to_amount"></span></span></label>
                            <input type="text" class="form-control text-dark" id="to-amount" name="to_amount" value="{{$commissions->to_amount}}" placeholder="To Amount">
                        </div>

                        <div id="commission_box"></div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="tds-gst-charge">TDS/GST (in %)<span class="text-danger">* <span id="error_tds_gst"></span></span></label>
                            <input type="text" class="form-control text-dark" id="tds-gst-charge" name="charges" value="{{$commissions->charges}}" placeholder="Enter TDS/GST Charge">
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Chain Type<span class="text-danger">* <span id="error_chain_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="chain_type">
                                <option value="">--Choose--</option>
                                <option value="self" {{$commissions->chain_type == 'Self' ? 'selected' : ''}}>Self</option>
                                <option value="chain" {{$commissions->chain_type == 'Chain' ? 'selected' : ''}}>Chain</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark">Transaction Type<span class="text-danger">* <span id="error_transaction_type"></span></span></label>
                            <select class="form-select mb-3 shadow-none text-dark" name="type">
                                <option value="">--Choose--</option>
                                <option value="C" {{$commissions->type == 'C' ? 'selected' : ''}}>Credit</option>
                                <option value="D" {{$commissions->type == 'D' ? 'selected' : ''}}>Debit</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label text-dark" for="username">For Any Specific User<span class="text-danger">* <span id="error_username"></span></span></label>
                            <input type="text" class="form-control text-dark" id="username" name="username" value="{{$commissions->username}}" placeholder="Enter Username">
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
                    url: '{{route("update_Commission")}}',
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
                            response.errors.plan_id ? $('#error_plan').html(response.errors.plan_id) : $('#error_plan').html('');
                            response.errors.service_id ? $('#error_serves_type').html(response.errors.service_id) : $('#error_serves_type').html('');
                            response.errors.charges ? $('#error_tds_gst').html(response.errors.charges) : $('#error_tds_gst').html('');
                            response.errors.to_amount ? $('#error_to_amount').html(response.errors.to_amount) : $('#error_to_amount').html('');
                            response.errors.type ? $('#error_transaction_type').html(response.errors.type) : $('#error_transaction_type').html('');
                            response.errors.user_type ? $('#error_user_type').html(response.errors.user_type) : $('#error_user_type').html('');
                            response.errors.username ? $('#error_username').html(response.errors.username) : $('#error_username').html('');
                            response.errors.percentage ? $('#error_commission_percentage').html(response.errors.percentage) : $('#error_commission_percentage').html('');
                            response.errors.commission_amt ? $('#error_commission_amount').html(response.errors.commission_amt) : $('#error_commission_amount').html('');
                        }
                        if (response.success) {
                            $('#alertMsg').removeClass('d-none');
                            $('#alertMsg').html(response.success);
                            setTimeout(() => {
                                $('#alertMsg').addClass('d-none');
                                window.location.href = "{{route('commision_slots')}}";
                            }, 2000);
                        }
                    }
                });
            });
        })
    </script>
    @endsection
    <script>
        const commisionAmountData = `<div class="form-group">
    <label class="form-label text-dark" for="commissionAmount">Commission Amount<span class="text-danger">* <span id="error_commission_amount"></span></span></label>
    <input type="text" class="form-control text-dark" id="commissionAmount" name="commission_amt" value="{{$commissions->commission_amt ? $commissions->commission_amt: ''}}" placeholder="Commission Amount">
</div>`;

        const commisionPercentageData = `<div class="form-group">
    <label class="form-label text-dark" for="commissionPercentage">Commission Percentage<span class="text-danger">* <span id="error_commission_percentage"></span></span></label>
    <input type="text" class="form-control text-dark" id="commissionPercentage" name="percentage"  value="{{$commissions->percentage ? $commissions->percentage: ''}}" placeholder="Commission Percentage">
</div>`;

        const commission_op = document.getElementById('commission_op');

        const handleCommisionOption = () => {
            const selectedOption = commission_op.value;
            switch (selectedOption) {
                case 'Amount':
                    document.getElementById('commission_box').innerHTML = commisionAmountData;
                    break;
                case 'Percentage':
                    document.getElementById('commission_box').innerHTML = commisionPercentageData;
                    break;
                default:
                    document.getElementById('commission_box').innerHTML = '';
                    break;
            }
        }

        commission_op.addEventListener('change', handleCommisionOption);

        document.addEventListener("DOMContentLoaded", function() {
            handleCommisionOption();
        });
    </script>

    <!-- ********************** main content end here ********************** -->
    @endsection