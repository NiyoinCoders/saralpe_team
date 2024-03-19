@extends('layouts.app')
@section('title', 'Bus')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div>
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title w-100">
                                <h4 class="card-title">Available Trips</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            @foreach ($availabletrips as $availabletrip)
                                <a href="{{ url('b2b/retailer/Bus/details/'.$availabletrip->id) }}"><h3>{{$availabletrip->cancellationCalculationTimestamp}}</h3></a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
