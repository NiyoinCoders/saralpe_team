@extends("layouts.app")
@section("content")

<div class="conatiner-fluid">
    <div class="card px-4 rounded-0 py-5">

        <div class="card-header">
            <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row flex-xxl-row justify-content-between align-items-center ">
                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Raise New Request
                </p>
                <div>
                    <a href="track_complaint_page.html" class="btn btn-soft-danger btn-sm"><i class="bi bi-crosshair"></i>
                        Track
                        Complaint</a>
                </div>
            </div>
        </div>

        <hr class="border border-dark">
        <div class="d-flex align-items-center justify-content-between  flex-column flex-md-row ">
            <div class="d-flex align-items-center flex-column flex-md-row gap-md-4">
                <a class="btn btn-sm btn-soft-primary" href="./raise_complaint.html">Change</a>
                <p class="pt-3">Select nature of your request (Help us understand your concern)</p>
            </div>
            <div>
                <button class="btn btn-primary btn-sm">Tech Support</button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label text-black">Product Type <span class="text-danger">*</span></label>
                    <select class="form-select text-black  form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Select Product Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label text-black">Issue Type <span class="text-danger">*</span></label>
                    <select class="form-select text-black  form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Select Product Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-black">Request
                            Logs:</label>
                        <textarea class="form-control" placeholder="Add request Payload here" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-black">Response
                            Logs:</label>
                        <textarea class="form-control" placeholder="Add response payload here" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-black">Remark: <span class="text-danger">*</span></label>
                        <textarea class="form-control" placeholder="Write a brief deascription of your request" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-black">Mobile
                            Number: <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Enter mobile number">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                        <span class="text-danger">*Only images of type .jpeg .jpg and size 100 kb is
                            allowed</span>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0">
                    <button class="btn btn-sm btn-warning">Reset</button>
                    <button class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection