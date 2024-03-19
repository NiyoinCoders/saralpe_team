@extends("layouts.app")
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Payout </h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="pwd">Bank Account:</label>
                                <select class="form-select mb-3 shadow-none">
                                    <option selected="">Select Your Bank</option>
                                    <option value="1">RELINCE</option>
                                    <option value="2">INDIA </option>
                                    <option value="3">BHARAT</option>
                                </select>
                            </div>
                                </div>
                                <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Amount:</label>
                                <input type="text" class="form-control" id="mnumber">
                            </div>
                                </div>
                            </div>
                            <div><h6>Account Details:</h6>
                                <p>Account No:1234567890 <br> Ifsc Code:3456<br>Account Holder Name:kuldeep<span>fino</span></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="pwd">Mode:</label>
                                <select class="form-select mb-3 shadow-none">
                                    <option selected="">Select Your Mode</option>
                                    <option value="1">RELINCE</option>
                                    <option value="2">INDIA </option>
                                    <option value="3">BHARAT</option>
                                </select>
                            </div>
                                </div>
                                <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Transction Password:</label>
                                <input type="text" class="form-control" id="mnumber">
                            </div>
                                </div>
                            </div>
                          
                            <button type="submit" class="btn btn-primary center">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection