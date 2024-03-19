@extends("layouts.app")
@section("content")
  <!-- main content start from here  -->
  <div class="conatiner-fluid py-0 bg-white">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <h5 class="text-white">Complaint</h5>
                        </div>
                        <div class="d-flex gap-2 py-2">
                            <p class="text-sm mb-0">Complaint</p>
                            <div id="svg-container-15">
                                <svg class="icon-18" width="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p class="text-sm mb-0">Complaint</p>
                        </div>
                    </div>
                </div>
                <!-- form  -->
                <div class="card-body ">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Complaint
                                                Id <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Complaint Id">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Complaint
                                                Date <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Complaint Date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Transaction
                                                Id <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Transaction Id">
                                        </div>
                                    </div>

                                    <br>
                                    <br><br><br>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Transaction
                                                Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Complaint Id">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Closure
                                                Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Complaint Date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Closed
                                                By <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Closed By">
                                        </div>
                                    </div>
                                    <br>
                                    <br><br><br>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="exampleInputdate">Product <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-dark form-control mb-3"
                                                id="exampleInputdate" value="" placeholder="Product">
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- first table  -->

                <!-- partition div  -->

            </div>
        </div>


        <!-- main section end here  -->
@endsection