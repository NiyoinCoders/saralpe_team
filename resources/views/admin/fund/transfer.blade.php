@extends("layouts.app")
@section("content")
<!-- **********************  content start form here ********************** -->

<div class="conatiner-fluid">
            <div class="card px-4 rounded-0 py-2">
                <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
                    Transfer Funds
                </p>
                <div class="card-body">

                    <div class="row mb-4">
                        <div class="form-group">
                            <label class="form-label text-black" for="user-id">User_id<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control text-black" id="search"
                                placeholder="Search" value="">
                        </div>
                    </div>

                    <button class="btn btn-primary">Check User</button>
                </div>
            </div>

        </div>




        <!-- ********************** main content end here ********************** -->
@endsection