@extends('layouts.app')
@section('title', 'Recharge Prepaid')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
    @if(session()->has('success') || session()->has('error'))
    <div id="flash-message" class="container-fluid position-absolute vh-100 " style="z-index: 999;top: 0;right: 0; background-color:#0000005c;">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            @if(session()->has('success'))
                            <i class="fa fa-check-circle-o" aria-hidden="true" style="font-size: 100px;color: #43cd43;"></i>
                            @elseif(session()->has('error'))
                            <i class="fa fa-times-circle-o" aria-hidden="true" style="font-size: 100px;color: #fd3f3f;"></i>
                            @endif
                        </div>
                        <div class="text-center" style="font-size: 20px;font-family: sans-serif;">
                            @if(session()->has('success'))
                            {{ session('success') }}
                            <div class="table-responsive">
                    <table id="rechage-data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="re_td_head">txid</th>
                                <th class="re_td_head">number</th>
                                <th class="re_td_head">amount</th>
                                <th class="re_td_head">orderID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ session('txid') }}</td>
                            <td>{{ session('number') }}</td>
                            <td>{{ session('amount') }}</td>
                            <td>{{ session('orderID') }}</td>
                           
                        </tbody>
                    </table>
                </div> 
                            @elseif(session()->has('error'))
                            {{ session('error') }}
                            <div class="table-responsive">
                    <table id="rechage-data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="re_td_head">txid</th>
                                <th class="re_td_head">number</th>
                                <th class="re_td_head">amount</th>
                                <th class="re_td_head">orderID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ session('txid') }}</td>
                            <td>{{ session('number') }}</td>
                            <td>{{ session('amount') }}</td>
                            <td>{{ session('orderID') }}</td>
                           
                        </tbody>
                    </table>
                </div> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div>
        <div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">DTH Mobile Recharge</h5>
                            </div>
                        </div>
                        <div class="card-body">

                            <form class="recharge_form"  method="POST"
                                action="{{ route('dth-form') }}">
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Operator:</label>
                                    <select class="form-select mb-3 shadow-none" name="operator">
                                        <option selected="" value="">Select Your Operator</option>
                                        @foreach ($operators as $operator)
                                           
                                                <option value="{{ $operator->operator_code }}">{{ $operator->operator_name }}</option>
                                          
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Circle:</label>
                                    <select class="form-select mb-3 shadow-none" name="Circle" id="circle">

                                           
                                    <option selected="" value="">Select Your circle</option>
                                        - @foreach ($circles as $circle)
                                            
                                                <option value="{{ $circle->circle_code }}">{{ $circle->circle_state	}}</option>
                                            
                                        @endforeach
                                       
                                    

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="customer_id">DTH number:</label>
                                    <input type="text" class="form-control" id="number" name="number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Recharge Amount:</label>
                                    <input type="number" class="form-control" id="amount" name="amount">
                                </div>
                                <button type="submit" class="btn btn-outline-primary rounded-pill btn-sbmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">DTH Recharge Plans</h5>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    
@endsection

@section('scripts')
<script>
    setTimeout(function() {
        $('#flash-message').fadeOut('fast');
    }, 8000);
</script>
@endsection