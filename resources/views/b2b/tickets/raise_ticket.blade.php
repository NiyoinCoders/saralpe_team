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
        <!-- table start  -->
        <div class="card-body p-0 mx-4 pb-5">
            <p>Select nature of your request (Help us understand your concern)</p>
            <div class="d-flex flex-column flex-md-row gap-4 px-3 px-md-0 px-lg-0 px-xl-0 px-xxl-0">
                <a href="{{route('b2b.transaction_related')}}" class="btn btn-soft-primary btn-sm">Transaction Related</a>
                <a href="{{route('b2b.account_configuration')}}" class="btn btn-soft-primary btn-sm">Account
                    Configuration/changes</a>
                <a href="{{route('b2b.commision_issue')}}" class="btn btn-soft-primary btn-sm">Commission Issues</a>
                <a href="{{route('b2b.other')}}" class="btn btn-soft-primary btn-sm">Other</a>
                <a href="{{route('b2b.tech_support')}}" class="btn btn-soft-primary btn-sm">Tech Support</a>
            </div>
        </div>
        <!-- table end  -->
    </div>
</div>
@endsection