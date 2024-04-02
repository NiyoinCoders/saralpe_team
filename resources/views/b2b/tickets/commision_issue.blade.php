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
                    <a href="{{route('b2b.ticket')}}" class="btn btn-soft-danger btn-sm"><i class="bi bi-crosshair"></i>
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
                <button class="btn btn-primary btn-sm">Commission Issues</button>
            </div>
        </div>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="card-body">
            <div class="row d-flex justify-content-center px-md-5">
                <form action="{{route('b2b.ticket_add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex justify-content-center px-md-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" value="commision_issue" name="ticket_type">
                                <input type="text" class="form-control form-control-sm text-dark" id="end_date" value="" name="subject" placeholder="Subject">
                                @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm text-dark" id="end_date" value="" name="email" placeholder="CC Email address">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Write a brief description of your request" name="description" rows="3"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <label for="">Only images of type .jpeg .jpg and size 100 kb is allowed</label>
                                <input class="form-control form-control-sm" name="file" id="formFileSm" type="file">
                                @error('file')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex  justify-content-center mt-3">
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>


</div>
@endsection