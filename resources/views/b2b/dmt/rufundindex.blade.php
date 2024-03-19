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
                            <h4 class="me-2 h4">Dmt Rerund</h4>
                            <span> - Dmt Rerund </span>
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
                    <h4 class="card-title">Dmt Refund</h4>
                </div>
                </div>

                <div class="card-body">
                <form id="form-wizard1" class="mt-3 text-center" method="POST" action="{{route('dmt.dmtrefundotp')}}">
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
                                        <label class="form-label">Reference Id: *</label>
                                        <input type="number" class="form-control"  placeholder="" name="referenceid">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Ack No: *</label>
                                        <input type="number" class="form-control"  placeholder="" name="ackno">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary next action-button float-end">Submit</button>
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
