@extends('layouts.app')

@section('content')
<div class="conatiner-fluid m-3">
    <div class="card px-4 rounded-0 py-2">
        <p class="text-white fw-bold bg-primary px-4 mx-4 rounded-1 py-2 user-select-none">
            Add New Plan
        </p>
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card-body">
            <form action="{{route('add-plan')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label text-dark" for="plan_title">Plan Name</label>
                            <input type="text" class="form-control text-dark" id="plan_title" name="plan_name" placeholder="Enter Plan Title">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection