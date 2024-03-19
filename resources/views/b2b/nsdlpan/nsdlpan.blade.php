@extends("layouts.app")
@section("title","Dashboard")
@section("content")
<?php
$min = 1000; // Minimum value for the random number
$max = 9999; // Maximum value for the random number
$randomNumber = rand($min, $max);
?>

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
                <div class="card-body">
                   <div class="d-flex flex-wrap align-items-center justify-content-between">
                      <div class="d-flex flex-wrap align-items-center">

                         <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                            <h4 class="me-2 h4">Online Pan application</h4>
                            <span> - Nsdl </span>
                         </div>
                      </div>
                   </div>
                </div>
           </div>
        </div>
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Nsdl Online Pan application</h4>
                </div>
                </div>
                <div class="card-body">
                <form id="form-wizard1" class="mt-3 text-center"  method="get" action="{{route('pansubmit.panstore')}}">

                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card text-start">
                            <div class="row">
                            <div class="col-7">
                                <h3 class="mb-4">Applicant Information:</h3>
                            </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Refid</label>
                                        <input type="text" id="disabledTextInput" class="form-control" name="refid" value="<?php echo $randomNumber;?>" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Mode: *</label>
                                        <select class="form-select" data-trigger="" name="mode" id="choices-single-default">
                                            <option value="P">Physical Pan</option>
                                            <option value="E">Electronic Pan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Title: *</label>
                                        <select class="form-select" data-trigger="" name="title" id="choices-single-default">
                                            <option value="1">Shri</option>
                                            <option value="2">Smt</option>
                                            <option value="3">Kumari</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">First Name: *</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Middle Name: *</label>
                                    <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Last Name: *</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Gender: *</label>
                                    <select class="form-select" data-trigger="" name="gender" id="choices-single-default">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Mobile No: *</label>
                                    <input type="number" class="form-control" name="number" placeholder="Mobile No">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Email Id: *</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email Id">
                                </div>
                            </div>
                            </div>
                        </div>
                        <button type="submit" name="next" class="btn btn-primary next action-button float-end" value="">Next</button>
                    </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
 </div>
 
<div class="btn-download">
    <script src="//code.tidio.co/x9hq0z58q9jmqff4qm3hnztgps6npbak.js" async></script>
</div>
@endsection
