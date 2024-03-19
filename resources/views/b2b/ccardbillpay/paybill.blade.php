@extends("layouts.app")
@section("title","Dashboard")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
                <div class="card-body">
                   <div class="d-flex flex-wrap align-items-center justify-content-between">
                      <div class="d-flex flex-wrap align-items-center">

                         <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                            <h4 class="me-2 h4">Api From application</h4>
                            <span> - APi Form </span>
                         </div>
                      </div>
                   </div>
                </div>
           </div>
        </div>
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Api Form application</h4>
                </div>
                </div>
                <div class="card-body">
                <form id="form-wizard1" class="mt-3 text-center" method="POST" action="{{route('ccardbillfinal1')}}">
                    @csrf
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card text-start">
                            <div class="row">
                            <div class="col-7">
                                <h3 class="mb-4">Applicant Information:</h3>
                            </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Refid</label>
                                        <input type="text" id="disabledTextInput" class="form-control" name="refid" value="{{ $dataArray1['refid'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Name: *</label>
                                        <input type="text" class="form-control" name="name" value="{{ $dataArray1['name'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Mobile: *</label>
                                        <input type="text" class="form-control" name="mobile" value="{{ $dataArray1['mobile'] ?? '' }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Card Number: *</label>
                                    <input type="text" class="form-control" name="card_number" value="{{ $dataArray1['card_number'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Amount: *</label>
                                    <input type="text" class="form-control" name="amount" value="{{ $dataArray1['amount'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Remarks: *</label>
                                    <input type="text" class="form-control" name="remarks" value="{{ $dataArray1['remarks'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Network: *</label>
                                    <select class="form-select" data-trigger="" name="network" id="choices-single-default" value="{{ $dataArray1['network'] ?? '' }}">
                                        <option value="VISA">Visa</option>
                                        <option value="Mastercard">MasterCard</option>
                                        <option value="AMEX">Amex</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Otp: *</label>
                                    <input type="text" class="form-control" name="otp" placeholder="">
                                </div>
                            </div>
                            </div>
                        </div>
                        <button type="submit" name="next" class="btn btn-primary next action-button float-end" value="Next">Submit</button>
                    </fieldset>

                </form>
                </div>
            </div>
        </div>

    </div>



 </div>
<div class="btn-download">
    <script src="//code.tidio.co/x9hq0z58q9jmqff4qm3hnztgps6npbak.js" async></script>
</div>
@endsection
