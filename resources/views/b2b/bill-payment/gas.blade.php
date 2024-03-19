@extends("layouts.app")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Gas Bill Payment </h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('gas-bill') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="pwd">Operator:</label>
                                <select class="form-select mb-3 shadow-none">
                                    <option selected="">Select Your Operator</option>

                                    {{-- <?php

                                        # code...

                                   $dat =  array_filter($apidata, function($value) {
                                        return strpos($value->name, 'Gas') !== false;
                                    });

                                    ?> --}}
                                     <option value="3">GAS</option>




                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Consumer Account Number:</label>
                                <input type="text" class="form-control" id="mnumber">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Bill Amount:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">charge:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Cycle Unit:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd"> Date:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="checkbox mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">GAS COMMENT</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../../assets/images/bbps.png" class="img-fluid" alt="bbps">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
