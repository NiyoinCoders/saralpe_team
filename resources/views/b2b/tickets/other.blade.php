@extends("layouts.app")
@section("content")

<div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-5">

                <div class="card-header">
                    <div
                        class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row flex-xxl-row justify-content-between align-items-center ">
                        <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                            Raise New Request
                        </p>
                        <div>
                            <a href="track_complaint_page.html" class="btn btn-soft-danger btn-sm"><i
                                    class="bi bi-crosshair"></i>
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
                        <button class="btn btn-primary btn-sm">Other</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="d-flex flex-column  flex-md-row  justify-content-center gap-md-3">
                            <label class="form-label text-dark">Select Issue Type:<span
                                    class="text-danger">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label text-black" for="flexRadioDefault1">
                                    Reports requirement
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label text-black" for="flexRadioDefault2">
                                    Suggestion for Improvement
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center px-md-5">
                        <div class="mb-3">
                            <textarea class="form-control text-black "
                                placeholder="Write a brief description of your request" rows="3" required></textarea>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    <span class="text-danger">*Only images of type .jpeg .jpg and size 100 kb is
                                        allowed</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm text-dark" id="end_date"
                                        value="" placeholder="CC Email address (optional)">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex  justify-content-center ">
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </div>


                    </div>
                </div>
            </div>


        </div>

@endsection