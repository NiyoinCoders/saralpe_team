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
        <div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">Recharge Status</h5>
                            </div>
                        </div>
                        @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif

                        <div class="card-body">
                            <div class="alerts"></div>
                            <form method="POST" action="{{ route('rech-status') }}">
                                @csrf
                                <!-- Form fields go here -->
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="email">Prepaid Mobile Number:</label>
                                    <input type="number" class="form-control" id="nameInput" name="phone">

                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="pwd">Circle:</label>
                                    <select class="form-select mb-3 shadow-none" name="Circle" id="circle">
                                        <option selected="">Select Your Circle</option>
                                        <option value="1">Mp</option>
                                        <option value="2">Up</option>
                                        <option value="3">Bihar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pwd">Recharge Amount:</label>
                                    <input type="number" class="form-control" id="amount" name="amount">
                                </div>
                                <button type="submit"
                                    class="btn btn-outline-primary rounded-pill btn-sbmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card">


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
                   </div>
            </div>
        </div>
    </div>

@endsection




