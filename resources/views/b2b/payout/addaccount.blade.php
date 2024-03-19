@extends("layouts.app")
@section("styles")
<style>
h6{
    font-size: smaller !important;
}
</style>
@endsection
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Add New Account </h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Bank:</label>
                                <select class="form-select mb-3 shadow-none">
                                    <option selected="">Select Your Bank</option>
                                    <option value="1">RELINCE</option>
                                    <option value="2">INDIA </option>
                                    <option value="3">BHARAT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Consumer Account Number:</label>
                                <input type="text" class="form-control" id="mnumber">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">IFSC Code:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Account Holder Name:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Transction Password:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">My Bank Account List</h4>
                            <hr>
                        </div>
                    </div>
                    <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                           <tr>
                              <th>refid.</th>
                              <th>Name.</th>
                              <th>Mobile No.</th>
                              <th>Apply Date.</th>
                              
                              <th>Status.</th>
                              
                           </tr>
                        </thead>
                        <tbody>
        
                           <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6>PW85648852</h6>
                                </div>
                             </td>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <h6>Avnish Tiwari</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <h6>+91 7000802198</h6>
                                </div>
                              </td>
        
                              <td><h6>02/06/2023</h6></td>
                              
                              <td>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Status</button>
                              </td>
                              
                           </tr>
                           
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection