@extends("layouts.app")
@section("styles")
<style>
    .tab {
        overflow: hidden;
        background-color: #f8f8f8;
    }
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
    .tab button.active {
        border-bottom: 2px solid #1e6ad8;
        color: black;
    }
    .tabcontent {
        display: none;
        padding: 6px 12px;
    }
</style>
@endsection
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                        @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                            <h5 class="card-title">Lic Bill</h5>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('billpayelectricity') }}">
                            @csrf

                                <p id="demo"></p>
                                <input type="hidden" id="latitude" name="latitude" value="">
                                <input type="hidden" id="longitude" name="longitude" value="">

                            <div class="form-group">
                                <label class="form-label" for="pwd">Card Number</label>
                                <input type="text" name="canumber" onclick="getLocation()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="mySelect">
                            
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Email:</label>
                                <input type="text" name="canumber" onclick="getLocation()" class="form-control" id="mySelect">

                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pwd">Mode:</label>
                                <select class="form-select mb-3 shadow-none" name="Board">
                                    <option selected="">Mode</option>
                                    <option value="1">Online</option>
                                    <option value="1">Offline</option>

                                     </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                            <hr>
                            <hr>
                            <div class="card"> 
                                <div class="header-title">  
                                    <div id="tableContainer">
                                    </div>
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Lic Bill pay</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../../assets/images/lic-online.jpg" class="img-fluid" alt="bbps" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection