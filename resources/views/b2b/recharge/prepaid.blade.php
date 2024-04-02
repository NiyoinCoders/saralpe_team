@extends('layouts.app')
@section('title', 'Recharge Prepaid')
@section('styles')
<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        background-color: #f8f8f8;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        color: #999;
        font-size: 14px;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        border-bottom: 2px solid #1e6ad8;
        color: black;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
    }
</style>
@endsection
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
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h5 class="card-title">Prepaid Mobile Recharge</h5>
                        </div>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                    </div>
                    @endif

                    <div class="card-body">
                        <div class="alerts"></div>
                        <form method="POST" action="{{ route('submit-form') }}">
                            @csrf
                            <!-- Form fields go here -->
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                            <div class="form-group">
                                <label class="form-label" for="email">Prepaid Mobile Number:</label>
                                <input type="number" class="form-control" id="nameInput" name="phone">

                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Operator:</label>
                                <select class="form-select mb-3 shadow-none" name="operator" id="operatorId">
                                    <option selected="" value="">Select Your Operator</option>
                                    - @foreach ($operators as $operator)

                                    <option value="{{ $operator->operator_code }}">{{ $operator->operator_name	 }}</option>

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
                            <h5 class="card-title">Browse Plans of BSNL - <span id="circleStateName"></span></h5>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="tab" id="tabdynamic">
                            <!-- <button class="tablinks active" onclick="lists(event, 'popular')">Popular</button>
                                <button class="tablinks" onclick="lists(event, 'special_recharge')">Special
                                    Recharge</button>
                                <button class="tablinks" onclick="lists(event, 'top_up')">Top Up</button>
                                <button class="tablinks" onclick="lists(event, 'data_structure')">2G/3G/4G Data</button>
                                <button class="tablinks" onclick="lists(event, 'full_talktime')">Full Talktime</button> -->
                        </div>
                        <!-- Tab content -->
                        <div id="popular" class="tabcontent" style="display: block;">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td class="re_td_head">Choose</td>
                                            <td class="re_td_head">Price</td>
                                            <td class="re_td_head">Description</td>
                                            <td class="re_td_head">Data</td>
                                            <td class="re_td_head">Validity</td>
                                        </tr>
                                    </thead>
                                    <tbody id="dynamictable"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="recharge-prepaid-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="rechage-data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="re_td_head">Reference Id</th>
                                <th class="re_td_head">Ackno </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" onclick="printDiv('rechage-data')">Print</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
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

<!-- Ashok Added This Code -->













@endsection