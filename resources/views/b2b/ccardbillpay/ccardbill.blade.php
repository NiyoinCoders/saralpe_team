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
                            <h4 class="me-2 h4">Credit Card Bill Payment</h4>
                            <span> - Card Bill </span>
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
                    <h4 class="card-title">Credit Card Bill</h4>
                </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="card-body">
                <form id="form-wizard1" class="mt-3 text-center" method="POST" action="{{route('ccardbillpost')}}">
                 @csrf
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card text-start">
                            <div class="row">
                            <div class="col-7">
                                <h3 class="mb-4">Card Information:</h3>
                            </div>

                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Name: *</label>
                                        <input type="text" class="form-control"  placeholder="" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Mobile: *</label>
                                        <input type="text" class="form-control"  placeholder="" name="mobile">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Card Number: *</label>
                                    <input type="text" class="form-control"  placeholder="" name="cardno">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Amount: *</label>
                                    <input type="text" class="form-control"  placeholder="" name="amount">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Remarks: *</label>
                                    <input type="text" class="form-control"  placeholder="" name="remark">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Network: *</label>
                                    <select class="form-select" data-trigger="" name="network" id="choices-single-default">
                                        <option value="VISA">Visa</option>
                                        <option value="Mastercard">MasterCard</option>
                                        <option value="AMEX">Amex</option>
                                    </select>
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
