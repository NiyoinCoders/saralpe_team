<html lang="en" style="height: auto;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link href="https://redpay.in/plugins/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Animate CSS -->
    <link href="https://redpay.in/assets/css/animate.css" rel="stylesheet" type="text/css">

    <!-- Nice Select -->
    <link href="https://redpay.in/assets/css/nice-select.css" rel="stylesheet" type="text/css">

    <!-- Ionicons -->
    <link href="https://redpay.in/assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="https://redpay.in/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link href="https://redpay.in/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" type="text/css">

    <!-- Material Design Bootstrap -->
    <!-- <link href="https://redpay.in/assets/mdb/css/mdb.css" rel="stylesheet" type="text/css" />
 -->

    <!-- iCheck -->
    <link href="https://redpay.in/plugins/icheck-bootstrap/icheck-bootstrap.css" rel="stylesheet" type="text/css">

    <!-- JQVMap -->
    <link href="https://redpay.in/plugins/jqvmap/jqvmap.min.css" rel="stylesheet" type="text/css">

    <!-- Theme style -->
    <link href="https://redpay.in/assets/css/adminlte.css" rel="stylesheet" type="text/css">
    <!-- Custome CSS -->
    <link href="https://redpay.in/assets/css/custom.css" rel="stylesheet" type="text/css">

    <!-- overlayScrollbars -->
    <link href="https://redpay.in/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet" type="text/css">

    <!-- Daterange picker -->
    <link href="https://redpay.in/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">

    <!-- summernote -->
    <link href="https://redpay.in/plugins/summernote/summernote-bs4.css" rel="stylesheet" type="text/css">

    <!-- Select2 Plugin CSS -->
    <link href="https://redpay.in/plugins/select2/css/select2.css" rel="stylesheet" type="text/css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" type="text/css">

    <!-- Data Table Plugins -->
    <link href="https://redpay.in/plugins/datatables/jquery.dataTables.css" rel="stylesheet" type="text/css">

    <link href="https://redpay.in/plugins/datatables/buttons.dataTables.css" rel="stylesheet" type="text/css">
    <link href="https://redpay.in/plugins/datatables/select.dataTables.css" rel="stylesheet" type="text/css">
    <link href="https://redpay.in/plugins/datatables/responsive.dataTables.css" rel="stylesheet" type="text/css">  
    <!-- End of Data Table Plugins -->

    <!-- Flatpickr CSS -->
    <link href="https://redpay.in/assets/css/flatpickr.css" rel="stylesheet" type="text/css">


    <!-- Sweet Alert2 -->

    <link href="https://redpay.in/assets/sweetalert2/sweetalert2.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        var site_url = "https://redpay.in/";
    </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body-bg-image" style="background-image: url(&quot;https://redpay.in/assets/img/texture/pattern-1.png&quot;); height: auto;">
    <div id="preloader" style="display: none;">
        <div class="loader_spinner_inside"></div>
        <span class="loader_spinner_text">Please Wait...</span>
    </div>
    <link href="https://redpay.in/assets/css/register.css" rel="stylesheet" type="text/css">




    <div class="user-ragistration">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://redpay.in/assets/img//logo_white.png" alt="">
                    <h3>Welcome</h3>
                    <p>You are 2 minutes away from earning your own money!</p>
                    <a href="https://redpay.in/Home/Login">Login</a>
                </div>
                <div class="col-md-9 register-right">
                    <h3 class="register-heading">Register With Us !</h3>
                    <form method="POST" autocomplete="off" action="javascript:void(0)" id="signup_form">
                        <div class="row register-form">

                            <input type="hidden" name="user_type" value="Retailer">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                                        </div>
                                        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Full Name" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-building"></i></div>
                                        </div>
                                        <input type="text" name="company_name" class="form-control" placeholder="Enter Your Shop Or Firm Name" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="company_type" id="company_type" class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="required" data-select2-id="company_type" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="2">Select Firm Type</option>
                                        <option value="Shop">Shop</option>
                                        <option value="Private Limited">Private Limited</option>
                                        <option value="Limited Liabilities">Limited Liabilities</option>
                                        <option value="Propietor">Propietor</option>
                                        <option value="Public Limited Company">Public Limited Company</option>
                                    </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-company_type-container"><span class="select2-selection__rendered" id="select2-company_type-container" role="textbox" aria-readonly="true" title="Select Firm Type">Select Firm Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="gender" id="gender" class="form-control select2 select2-hidden-accessible" style="width: 100%;" required="required" data-select2-id="gender" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="4">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gender-container"><span class="select2-selection__rendered" id="select2-gender-container" role="textbox" aria-readonly="true" title="Select Gender">Select Gender</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                        </div>
                                        <input type="text" name="mobile_no" class="form-control data-mask" placeholder="Enter Your 10 Digit Mobile Number" data-inputmask="'mask': ['9999999999']" required="required" minlength="10" maxlength="10" im-insert="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                                        </div>
                                        <input type="text" name="email_id" id="email_id" class="form-control data-mask" placeholder="Enter Your Email Id" data-inputmask="'mask': ['*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}']" required="required" im-insert="true">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="state_name" id="state_name" onchange="get_district_list(this.value)" class="form-control select2 select2-hidden-accessible" required="required" style="width: 100%" data-select2-id="state_name" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="6">Select State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadra Nagar-Haveli Daman &amp; Diu">Dadra Nagar-Haveli Daman &amp; Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Ladakh">Ladakh</option>
                                    </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state_name-container"><span class="select2-selection__rendered" id="select2-state_name-container" role="textbox" aria-readonly="true" title="Select State">Select State</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="district" id="district" class="form-control select2 select2-hidden-accessible" required="required" style="width: 100%" data-select2-id="district" tabindex="-1" aria-hidden="true">
                                        <option value="" readonly="readonly" data-select2-id="8">Select State First</option>
                                    </select><!--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-district-container"><span class="select2-selection__rendered" id="select2-district-container" role="textbox" aria-readonly="true" title="Select State First">Select State First</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-city"></i></div>
                                        </div>
                                        <input type="text" name="city_name" class="form-control" placeholder="Enter Your City Name" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-map-pin"></i></div>
                                        </div>
                                        <input type="text" name="pin_code" class="form-control data-mask" placeholder="Enter Your City Pin Code" data-inputmask="'mask': ['999999']" required="required" im-insert="true">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                        </div>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Your Complete Address" onkeyup="this.value = this.value.toUpperCase();" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-address-card"></i></div>
                                        </div>
                                        <input type="text" name="aadharno" class="form-control data-mask" placeholder="Enter Your Aadhar Card No." data-inputmask="'mask': ['999999999999']" required="required" im-insert="true">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-address-card"></i></div>
                                        </div>
                                        <input type="text" name="panno" class="form-control data-mask" placeholder="Enter Your Pan Card No." data-inputmask="'mask': ['AAAAA9999A']" required="required" im-insert="true">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-copy"></i></div>
                                        </div>
                                        <input type="text" name="gstno" class="form-control" placeholder="Enter Your GST No." onkeyup="this.value = this.value.toUpperCase();" data-inputmask="'mask': ['99AAAAA9999A***']">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="text-danger text-bold">You Are Registering With This IP - (47.15.243.190)</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="submit" class="btnRegister" value="Register">
                                </div>
                            </div>
                        </div>
                    </form><!-- End of Form -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://redpay.in/assets/js/jquery.js"></script>
    <script src="https://redpay.in/assets/js/registration.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel">Referral Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td id="mfull_name"></td>
                                </tr>
                                <tr>
                                    <th>Company Name</th>
                                    <td id="mcompany_name"></td>
                                </tr>
                                <tr>
                                    <th>Mobile No.</th>
                                    <td id="mmobile_no"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- jQuery -->
    <script src="https://redpay.in/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://redpay.in/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

    <script type="text/javascript">
        $(window).on('load', function() {
            $("#preloader").hide();
        });
    </script>

    <!-- Bootstrap 4 -->
    <script src="https://redpay.in/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="https://redpay.in/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="https://redpay.in/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="https://redpay.in/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://redpay.in/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="https://redpay.in/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- InputMask -->
    <script src="https://redpay.in/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- daterangepicker -->
    <script src="https://redpay.in/plugins/moment/moment.min.js"></script>
    <script src="https://redpay.in/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="https://redpay.in/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="https://redpay.in/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="https://redpay.in/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://redpay.in/assets/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://redpay.in/assets/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://redpay.in/assets/js/demo.js"></script>
    <script src="https://redpay.in/assets/js/popper.min.js"></script>
    <!-- Data Table Plugins -->
    <script src="https://redpay.in/plugins/datatables/jquery.dataTables.js"></script>
    <script src="https://redpay.in/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/buttons.flash.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/jszip.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/pdfmake.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/vfs_fonts.js"></script>
    <script src="https://redpay.in/plugins/datatables/buttons.html5.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/buttons.print.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/dataTables.select.min.js"></script>
    <script src="https://redpay.in/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="https://redpay.in/plugins/select2/js/select2.min.js"></script>
    <script src="https://redpay.in/assets/js/datedropper.pro.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <script type="text/javascript">
        $('.data-mask').inputmask()
    </script>



    <div class="jqvmap-label" style="display: none;"></div>
    <div></div>
</body>

</html>