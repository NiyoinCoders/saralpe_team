@extends("layouts.app")
@section("content")
<style>
        .hidden {
            display: none;
        }
    </style>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="min-height: 112px;">
   <div class="row">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
                 <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                       <div class="d-flex flex-wrap align-items-center">

                          <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                             <h4 class="me-2 h4">AEPS - Web</h4>

                          </div>
                       </div>
                    </div>
                 </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="page-wrapper" style="width: 94%; margin-left: 20px;">
   <div class="content container-fluid">
      <div class="card">
         <div class="card-header header-info ">
            <h4 class="card-title">Aadhar Enabled Payment System</h4>
         </div>
         <div class="card-body">
            <!--  -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Cash Withdrawal</button></li>
               <li class="nav-item" role="presentation"><button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Balance Enquiry</button></li>
               <li class="nav-item" role="presentation"><button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Mini Statement</button></li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form action="{{route("withdrawal")}}" id="withdrawal" method="post" accept-charset="utf-8">
                     @csrf
                     <input type="hidden" value="26.1348711" name="latitude">
                     <input type="hidden" value="85.38497" name="longitude">
                     <input type="hidden" value="963255255123" name="referenceno">
                     <input type="hidden" value="CW" name="transactiontype">
                     <input type="hidden" value="383590199" name="submerchantid">
                     <input type="hidden" value="SITE" name="accessmodetype">
                     <input type="hidden" name="timestamp" value="2023-07-27 03:0250:15">
                     <input type="hidden" name="data" id="txtPidData">
                     <input type="hidden" value="bank1" name="pipe">
                     <input type="hidden" value="No" name="is_iris">
                     <input type="hidden" value="52.66.191.19" name="ipaddress">
                     <div class="row" style="margin-top: 30px;">
                        <div class="col-md-6">
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="type">Mobile Number <span class="required">*</span></label>
                                 <input type="tel" min="0" maxlength="10" minlength="10" onkeypress="javascript:return isNumber(event)" name="mobilenumber" class="form-control" id="mobile" placeholder="Enter 10 Digit Mobile No" value="" required="">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Aadhar Number <span class="required">*</span></label>
                                 <input type="tel" min="0" maxlength="12" minlength="12" onkeypress="javascript:return isNumber(event)" name="adhaarnumber" class="form-control" id="aadhar" placeholder="Enter 12 Digit Aadhar No" value="" required="">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Bank Name<span class="required">*</span></label>
                                 <select class="form-control chosen" name="nationalbankidentification" id="nationalbankidentification" required="" live-search="true">
                                    <option value=""> -- Select Bank --</option>
                                    <option value="990320">Airtel Payment Bank</option>
                                    <option value="608112">Allahabad Bank</option>
                                    <option value="607024">Allahabad UP Gramin Bank</option>
                                    <option value="607076">Andhra Bank</option>
                                    <option value="607198">Andhra Pradesh Grameena Vikash Bank</option>
                                    <option value="607121">Andhra Pragathi Grameena Bank</option>
                                    <option value="607051">AP Mahesh Coop Urban Bank Ltd</option>
                                    <option value="607024">Aryavart Bank</option>
                                    <option value="607064">Assam Gramin Vikash Bank</option>
                                    <option value="608087">AU Small Finance Bank</option>
                                    <option value="607153">Axis Bank</option>
                                    <option value="607063">Bangiya Gramin Vikash Bank</option>
                                    <option value="606985">Bank Of Baroda</option>
                                    <option value="508505">Bank of India</option>
                                    <option value="607387">Bank of Maharashtra</option>
                                    <option value="606995">Baroda Gujarat Gramin Bank</option>
                                    <option value="607280">Baroda Rajasthan Kshetriya Gramin Bank</option>
                                    <option value="606993">Baroda Uttar Pradesh Gramin Bank </option>
                                    <option value="607396">Canara Bank</option>
                                    <option value="607082">Catholic Syrian Bank</option>
                                    <option value="607264">Central Bank of India</option>
                                    <option value="607080">Chaitanya Godavari Gramin Bank</option>
                                    <option value="607214">Chhattisgarh Rajya Gramin Bank</option>
                                    <option value="607324">City Union Bank </option>
                                    <option value="607184">Corporation Bank</option>
                                    <option value="607136">Dakshin Bihar Gramin Bank</option>
                                    <option value="508547">Dena Bank</option>
                                    <option value="607099">Dena Gujarat Gramin Bank</option>
                                    <option value="607218">Ellaquai Dehati Bank</option>
                                    <option value="508998">Equitas Small Finance Bank</option>
                                    <option value="607363">Federal Bank</option>
                                    <option value="817304">Fincare Small Finance Bank</option>
                                    <option value="608001">Fino Payments Bank</option>
                                    <option value="607024">Gramin bank of Aryavart</option>
                                    <option value="607152">HDFC Bank</option>
                                    <option value="607140">Himachal Pradesh Gramin Bank</option>
                                    <option value="508534">ICICI Bank</option>
                                    <option value="607095">IDBI Bank</option>
                                    <option value="608117">IDFC First Bank</option>
                                    <option value="608314">India Post Payment Bank</option>
                                    <option value="607105">Indian bank</option>
                                    <option value="607126">Indian Overseas Bank</option>
                                    <option value="607189">IndusInd Bank</option>
                                    <option value="607440">Jammu &amp; Kashmir Bank </option>
                                    <option value="607210">Jharkhand Gramin Bank</option>
                                    <option value="607210">Jharkhand Rajya Gramin Bank</option>
                                    <option value="607270">Karnataka Bank</option>
                                    <option value="607512">Karnataka Gramin Bank</option>
                                    <option value="607122">Karnataka Vikas Grameena Bank </option>
                                    <option value="508662">Karur Vysya Bank</option>
                                    <option value="607365">Kashi Gomati Samyut Gramin Bank</option>
                                    <option value="607399">Kerala Gramin Bank</option>
                                    <option value="990309">Kotak Mahindra Bank</option>
                                    <option value="607058">Lakshmi Vilas Bank</option>
                                    <option value="607203">Langpi Dehangi Rural Bank</option>
                                    <option value="607136">Madhya Bihar Gramin Bank erstwhile Dakshin Bihar Gramin Bank</option>
                                    <option value="607022">Madhya Pradesh Gramin Bank</option>
                                    <option value="607232">Madhyanchal Gramin Bank</option>
                                    <option value="607000">Maharashtra Gramin Bank </option>
                                    <option value="607062">Manipur Rural Bank </option>
                                    <option value="607206">Meghalaya Rural Bank</option>
                                    <option value="607230">Mizoram Rural Bank</option>
                                    <option value="607022">Narmada Jhabua Gramin Bank</option>
                                    <option value="607060">Odisha Gramya Bank </option>
                                    <option value="607027">Oriental Bank of Commerce</option>
                                    <option value="607052">Pallavan Grama Bank</option>
                                    <option value="607059">Pandyan Grama Bank</option>
                                    <option value="607079">Paschim Banga Gramin Bank</option>
                                    <option value="607400">Pragathi Krishna Gramin Bank</option>
                                    <option value="607135">Prathama Bank</option>
                                    <option value="607135">Prathma UP Gramin Bank</option>
                                    <option value="607054">Puduvai Bharathiar Grama Bank</option>
                                    <option value="607087">Punjab &amp; Sind Bank</option>
                                    <option value="607138">Punjab Gramin Bank</option>
                                    <option value="607027">Punjab National Bank</option>
                                    <option value="607212">Purvanchal Gramin Bank</option>
                                    <option value="607509">Rajasthan Marudhara Gramin Bank</option>
                                    <option value="607393">Ratnakar Bank</option>
                                    <option value="607053">Saptagiri Grameena Bank</option>
                                    <option value="607139">Sarva Haryana Gramin Bank</option>
                                    <option value="607135">Sarva UP Gramin Bank </option>
                                    <option value="607200">Saurashtra Gramin Bank</option>
                                    <option value="607119">Shivalik Mercantile Cooperative Bank </option>
                                    <option value="607475">South Indian Bank</option>
                                    <option value="607094">State Bank of India</option>
                                    <option value="607580">Syndicate Bank</option>
                                    <option value="607187">Tamilnad Mercantile Bank</option>
                                    <option value="607052">TamilNadu Grama Bank</option>
                                    <option value="607195">Telangana Grameena Bank</option>
                                    <option value="652150">The Saraswat Co-operative Bank Ltd</option>
                                    <option value="607065">Tripura Gramin Bank</option>
                                    <option value="607066">UCO Bank</option>
                                    <option value="508991">Ujjivan Small Finance Bank Limited</option>
                                    <option value="607161">Union Bank of India</option>
                                    <option value="607646">United Bank Of India</option>
                                    <option value="607234">Utkal Gramin Bank</option>
                                    <option value="607073">Uttar Banga Kshetriya Gramin Bank </option>
                                    <option value="607069">Uttar Bihar Grameen Bank </option>
                                    <option value="607197">Uttarakhand Gramin Bank</option>
                                    <option value="607210">Vananchal Gramin Bank</option>
                                    <option value="607020">Vidarbha Konkan Gramin Bank</option>
                                    <option value="607075">Vijaya Bank</option>
                                    <option value="607618">YES Bank</option>
                                    <option value="608032">Paytm Payments Bank</option>
                                 </select>
                               <!--  <div class="chosen-container chosen-container-single" style="width: 487px;" title="" id="bank_chosen">
                                    <a class="chosen-single">
                                       <span> -- Select Bank --</span>
                                       <div>
                                          <b></b>
                                       </div>
                                    </a>
                                    <div class="chosen-drop">
                                       <div class="chosen-search">
                                          <input type="text" autocomplete="off">
                                       </div>
                                       <ul class="chosen-results"></ul>
                                    </div>
                                 </div> -->
                              </div>
                              <div class="col-md-12 mb-3">
                                 <p>
                                 </p>
                                 <div class="form-group">
                                    <input type="checkbox" checked="" readonly=""> I/Customer hereby accepts and confirm all the terms &amp; conditions under best of my knowledge.
                                 </div>
                                 <p></p>
                                 <p>
                                 </p>
                                 <div class="form-group">
                                    <input type="checkbox" checked="" readonly=""> I/Retailer hereby accepts and confirm all the terms &amp; conditions under best of my knowledge.
                                 </div>
                                 <p></p>
                                 <p>
                                 </p>
                                 <div class="form-group confirm">
                                    Note: You're not allowed to do more than 5 transactions of each transaction mode for same aadhar
                                 </div>
                                 <p></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="type">Device <span class="required">*</span></label>
                                 <br>
                                 <label class="btn btn-outline-primary id1" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id1" class="form-check-input" name="" value="Morpho" style="left:23px;">Morpho
                                 </label>
                                 <label class="btn btn-outline-primary id2" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id2" class="form-check-input" name="" value="Morpho" style="left:23px;">Mantra
                                 </label>
                                 <label class="btn btn-outline-primary id3" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id3" class="form-check-input" name="" value="Morpho" style="left:23px;">Other
                                 </label>
                              </div>
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                              <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
                              <script src="{{ asset('assets/jquery/testSDKMFS100ByVikash.js') }}"></script>
                              <script src="{{ asset('assets/css/vstyles.css') }}"></script>
                              <script>
                                 $(document).ready(function(){
                                            $("#id1").click(function(){
                                                $(".id1").css("background-color","var(--bs-primary-shade-20)");
                                                $(".id1").css("color","white");
                                                $(".id2").css("background-color","white");
                                                $(".id3").css("background-color","white");
                                                $(".id2").css("color","var(--bs-primary-shade-20)");
                                                $(".id3").css("color","var(--bs-primary-shade-20)");

                                            });
                                            $("#id2").click(function(){
                                                $(".id2").css("background-color","var(--bs-primary-shade-20)");
                                                $(".id2").css("color","white");
                                                $(".id1").css("background-color","white");
                                                $(".id3").css("background-color","white");
                                                $(".id1").css("color","var(--bs-primary-shade-20)");
                                                $(".id3").css("color","var(--bs-primary-shade-20)");
                                            });
                                            $("#id3").click(function(){
                                                $(".id3").css("background-color","var(--bs-primary-shade-20)");
                                                $(".id3").css("color","white");
                                                $(".id2").css("background-color","white");
                                                $(".id1").css("background-color","white");
                                                $(".id2").css("color","var(--bs-primary-shade-20)");
                                                $(".id1").css("color","var(--bs-primary-shade-20)");
                                            });
                                            });



                                 </script>

                              <div class="col-md-12 mb-3">
                                 <label for="type">Withdrawal Amount <span class="required">*</span>
                                 </label>
                                 <br>
                                 <button type="button" class="btn btn-outline-primary rounded-pill btns" data-amount="500">₹ 500</button>
                                 <button type="button" class="btn btn-outline-primary rounded-pill btns" data-amount="1000">₹ 1000</button>
                                 <button type="button" class="btn btn-outline-primary rounded-pill btns" data-amount="2000">₹ 2000</button>
                                  <button type="button" class="btn btn-outline-primary rounded-pill btns" data-amount="3000">₹ 3000</button>
                                  <button type="button" class="btn btn-outline-primary rounded-pill btns" data-amount="5000">₹ 5000</button>
                                  <button type="button" class="btn btn-outline-primary rounded-pill btns" data-amount="10000">₹ 10,000</button>
                                 <input type="text" style="margin-top: 7px;" id="amountInput"  onkeypress="javascript:return isNumber(event)" name="amount" class="form-control"  placeholder="Enter the amount" value="">
                              </div>
                              <div class="col-md-12 mb-3">
                                <label for="type">Biometrics<span class="required">*</span></label>
                                <div class="fingerprint" style="border: 1px solid black;width:150px;min-height:120px;text-align:center">
                                   <img src="{{ asset('assets/images/fingerprint.png') }}" style="height:100px;padding-top: 8px;display:" onclick="CaptureAvdm();">
                                </div>
                             </div>
                              <input type="submit" id="submit" class="btn btn-success" placeholder="Capture Fingerprint">
                               <!-- <button onclick="showImage()">Show Image</button> -->
                              </div>
                        </div>
                     </div>
                  </form>
               </div>
               <!-------------------------------- Cash Withdrawal --------------------------->
               <!--------------------------------------- Balance enquory -------------------------->
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <form action="{{route("balanceEnquiry")}}" id="be" method="post" accept-charset="utf-8">
                     @csrf
                     <input type="hidden" name="csrf_test_name" value="dea06fead102adfc8e9a7c5b836aff53">
                     <input type="hidden" value="Enquiry" name="remark">
                     <input type="hidden" value="BE" name="type">
                     <div class="row" style="margin-top: 30px;">
                        <div class="col-md-6">
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="type">Mobile Number <span class="required">*</span></label>
                                 <input type="tel" min="0" maxlength="10" minlength="10" onkeypress="javascript:return isNumber(event)" name="mobile" class="form-control" id="mobile" placeholder="Enter 10 Digit Mobile No" value="" required="">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Aadhar Number <span class="required">*</span></label>
                                 <input type="tel" min="0" maxlength="12" minlength="12" onkeypress="javascript:return isNumber(event)" name="aadhar" class="form-control" id="aadhar" placeholder="Enter 12 Digit Aadhar No" value="" required="">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Bank Name<span class="required">*</span></label>
                                 <select class="form-control chosen2" name="bank" id="bank" required="" live-search="true">
                                    <option value=""> -- Select Bank --</option>
                                    <option value="990320">Airtel Payment Bank</option>
                                    <option value="608112">Allahabad Bank</option>
                                    <option value="607024">Allahabad UP Gramin Bank</option>
                                    <option value="607076">Andhra Bank</option>
                                    <option value="607198">Andhra Pradesh Grameena Vikash Bank</option>
                                    <option value="607121">Andhra Pragathi Grameena Bank</option>
                                    <option value="607051">AP Mahesh Coop Urban Bank Ltd</option>
                                    <option value="607024">Aryavart Bank</option>
                                    <option value="607064">Assam Gramin Vikash Bank</option>
                                    <option value="608087">AU Small Finance Bank</option>
                                    <option value="607153">Axis Bank</option>
                                    <option value="607063">Bangiya Gramin Vikash Bank</option>
                                    <option value="606985">Bank Of Baroda</option>
                                    <option value="508505">Bank of India</option>
                                    <option value="607387">Bank of Maharashtra</option>
                                    <option value="606995">Baroda Gujarat Gramin Bank</option>
                                    <option value="607280">Baroda Rajasthan Kshetriya Gramin Bank</option>
                                    <option value="606993">Baroda Uttar Pradesh Gramin Bank </option>
                                    <option value="607396">Canara Bank</option>
                                    <option value="607082">Catholic Syrian Bank</option>
                                    <option value="607264">Central Bank of India</option>
                                    <option value="607080">Chaitanya Godavari Gramin Bank</option>
                                    <option value="607214">Chhattisgarh Rajya Gramin Bank</option>
                                    <option value="607324">City Union Bank </option>
                                    <option value="607184">Corporation Bank</option>
                                    <option value="607136">Dakshin Bihar Gramin Bank</option>
                                    <option value="508547">Dena Bank</option>
                                    <option value="607099">Dena Gujarat Gramin Bank</option>
                                    <option value="607218">Ellaquai Dehati Bank</option>
                                    <option value="508998">Equitas Small Finance Bank</option>
                                    <option value="607363">Federal Bank</option>
                                    <option value="817304">Fincare Small Finance Bank</option>
                                    <option value="608001">Fino Payments Bank</option>
                                    <option value="607024">Gramin bank of Aryavart</option>
                                    <option value="607152">HDFC Bank</option>
                                    <option value="607140">Himachal Pradesh Gramin Bank</option>
                                    <option value="508534">ICICI Bank</option>
                                    <option value="607095">IDBI Bank</option>
                                    <option value="608117">IDFC First Bank</option>
                                    <option value="608314">India Post Payment Bank</option>
                                    <option value="607105">Indian bank</option>
                                    <option value="607126">Indian Overseas Bank</option>
                                    <option value="607189">IndusInd Bank</option>
                                    <option value="607440">Jammu &amp; Kashmir Bank </option>
                                    <option value="607210">Jharkhand Gramin Bank</option>
                                    <option value="607210">Jharkhand Rajya Gramin Bank</option>
                                    <option value="607270">Karnataka Bank</option>
                                    <option value="607512">Karnataka Gramin Bank</option>
                                    <option value="607122">Karnataka Vikas Grameena Bank </option>
                                    <option value="508662">Karur Vysya Bank</option>
                                    <option value="607365">Kashi Gomati Samyut Gramin Bank</option>
                                    <option value="607399">Kerala Gramin Bank</option>
                                    <option value="990309">Kotak Mahindra Bank</option>
                                    <option value="607058">Lakshmi Vilas Bank</option>
                                    <option value="607203">Langpi Dehangi Rural Bank</option>
                                    <option value="607136">Madhya Bihar Gramin Bank erstwhile Dakshin Bihar Gramin Bank</option>
                                    <option value="607022">Madhya Pradesh Gramin Bank</option>
                                    <option value="607232">Madhyanchal Gramin Bank</option>
                                    <option value="607000">Maharashtra Gramin Bank </option>
                                    <option value="607062">Manipur Rural Bank </option>
                                    <option value="607206">Meghalaya Rural Bank</option>
                                    <option value="607230">Mizoram Rural Bank</option>
                                    <option value="607022">Narmada Jhabua Gramin Bank</option>
                                    <option value="607060">Odisha Gramya Bank </option>
                                    <option value="607027">Oriental Bank of Commerce</option>
                                    <option value="607052">Pallavan Grama Bank</option>
                                    <option value="607059">Pandyan Grama Bank</option>
                                    <option value="607079">Paschim Banga Gramin Bank</option>
                                    <option value="607400">Pragathi Krishna Gramin Bank</option>
                                    <option value="607135">Prathama Bank</option>
                                    <option value="607135">Prathma UP Gramin Bank</option>
                                    <option value="607054">Puduvai Bharathiar Grama Bank</option>
                                    <option value="607087">Punjab &amp; Sind Bank</option>
                                    <option value="607138">Punjab Gramin Bank</option>
                                    <option value="607027">Punjab National Bank</option>
                                    <option value="607212">Purvanchal Gramin Bank</option>
                                    <option value="607509">Rajasthan Marudhara Gramin Bank</option>
                                    <option value="607393">Ratnakar Bank</option>
                                    <option value="607053">Saptagiri Grameena Bank</option>
                                    <option value="607139">Sarva Haryana Gramin Bank</option>
                                    <option value="607135">Sarva UP Gramin Bank </option>
                                    <option value="607200">Saurashtra Gramin Bank</option>
                                    <option value="607119">Shivalik Mercantile Cooperative Bank </option>
                                    <option value="607475">South Indian Bank</option>
                                    <option value="607094">State Bank of India</option>
                                    <option value="607580">Syndicate Bank</option>
                                    <option value="607187">Tamilnad Mercantile Bank</option>
                                    <option value="607052">TamilNadu Grama Bank</option>
                                    <option value="607195">Telangana Grameena Bank</option>
                                    <option value="652150">The Saraswat Co-operative Bank Ltd</option>
                                    <option value="607065">Tripura Gramin Bank</option>
                                    <option value="607066">UCO Bank</option>
                                    <option value="508991">Ujjivan Small Finance Bank Limited</option>
                                    <option value="607161">Union Bank of India</option>
                                    <option value="607646">United Bank Of India</option>
                                    <option value="607234">Utkal Gramin Bank</option>
                                    <option value="607073">Uttar Banga Kshetriya Gramin Bank </option>
                                    <option value="607069">Uttar Bihar Grameen Bank </option>
                                    <option value="607197">Uttarakhand Gramin Bank</option>
                                    <option value="607210">Vananchal Gramin Bank</option>
                                    <option value="607020">Vidarbha Konkan Gramin Bank</option>
                                    <option value="607075">Vijaya Bank</option>
                                    <option value="607618">YES Bank</option>
                                    <option value="608032">Paytm Payments Bank</option>
                                 </select>
                                <!-- <div class="chosen-container chosen-container-single" style="width: 0px;" title="" id="bank_chosen">
                                    <a class="chosen-single">
                                       <span> -- Select Bank --</span>
                                       <div><b></b></div>
                                    </a>
                                    <div class="chosen-drop">
                                       <div class="chosen-search"><input type="text" autocomplete="off"></div>
                                       <ul class="chosen-results"></ul>
                                    </div>
                                 </div> -->
                              </div>
                              <div class="col-md-12 mb-3">
                                 <p>
                                 </p>
                                 <div class="form-group">
                                    <input type="checkbox" checked="" readonly=""> I/Customer hereby accepts and confirm all the terms &amp; conditions under best of my knowledge.
                                 </div>
                                 <p></p>
                                 <p>
                                 </p>
                                 <div class="form-group">
                                    <input type="checkbox" checked="" readonly=""> I/Retailer hereby accepts and confirm all the terms &amp; conditions under best of my knowledge.
                                 </div>
                                 <p></p>
                                 <p>
                                 </p>
                                 <div class="form-group confirm">
                                    Note: You're not allowed to do more than 5 transactions of each transaction mode for same aadhar
                                 </div>
                                 <p></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="type">Device <span class="required">*</span></label>
                                 <br>
                                 <label class="btn btn-outline-primary id1" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id1" class="form-check-input" name="device" value="Morpho" style="left:23px;">Morpho
                                 </label>
                                 <label class="btn btn-outline-primary id2" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id2" class="form-check-input" name="device" value="Morpho" style="left:23px;">Mantra
                                 </label>
                                 <label class="btn btn-outline-primary id3" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id3" class="form-check-input" name="device" value="Morpho" style="left:23px;">Other
                                 </label>
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Biometrics<span class="required">*</span></label>
                                 <div class="fingerprint" style="border: 1px solid black;width:150px;min-height:120px;text-align:center">
                                    <a onclick="CaptureAvdm();">
                                    <img src="{{ asset('assets/images/fingerprint.png') }}" style="height:100px;padding-top: 8px;display:">
                                    </a>
                                 </div>
                              </div>
                              <button type="submit" id="submit" class="btn btn-success">Submit</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <!--------------------------  balance enquiry end ------------------------->
               <!---------------------  mini statement ----------------------------------->
               <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <form action="{{route("miniStatement")}}" id="ms" method="post" accept-charset="utf-8">
                     @csrf
                     <input id="method" type="hidden" value="">
                     <input id="info" type="hidden" value="">
                     <input type="hidden" name="txtWadh" id="txtWadh">
                         <button type="button" class="btn btn-danger" onclick="discoverAvdm();">CHECK DEVICE</button>
                    <input type="hidden" name="biomatric"  id="txtPidData">

                     <input type="hidden" name="csrf_test_name" value="dea06fead102adfc8e9a7c5b836aff53">
                     <input type="hidden" value="Mini Statement" name="remark">
                     <input type="hidden" value="MS" name="type">
                     <div class="row" style="margin-top: 30px;">
                        <div class="col-md-6">
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="type">Mobile Number <span class="required">*</span></label>
                                 <input type="tel" min="0" maxlength="10" minlength="10" onkeypress="javascript:return isNumber(event)" name="mobile" class="form-control" id="mobile" placeholder="Enter 10 Digit Mobile No" value="" required="">
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Aadhar Number <span class="required">*</span></label>
                                 <input type="tel" min="0" maxlength="12" minlength="12" onkeypress="javascript:return isNumber(event)" name="aadhar" class="form-control" id="aadhar" placeholder="Enter 12 Digit Aadhar No" value="" required="">
                              </div>
                              <div class="col-md-12 mb-3">
                                <label for="type">F data <span class="required">*</span></label>
                                <input type="text" value="">
                             </div>

                              <div class="col-md-12 mb-3">
                                 <label for="type">Bank Name<span class="required">*</span></label>
                                 <select class="form-control chosen3" name="bank" id="bank" required="" live-search="true">
                                    <option value=""> -- Select Bank --</option>
                                    <option value="990320">Airtel Payment Bank</option>
                                    <option value="608112">Allahabad Bank</option>
                                    <!-- <option value="607024">Allahabad UP Gramin Bank</option>
                                    <option value="607076">Andhra Bank</option>
                                    <option value="607198">Andhra Pradesh Grameena Vikash Bank</option>
                                    <option value="607121">Andhra Pragathi Grameena Bank</option>
                                    <option value="607051">AP Mahesh Coop Urban Bank Ltd</option>
                                    <option value="607024">Aryavart Bank</option>
                                    <option value="607064">Assam Gramin Vikash Bank</option>
                                    <option value="608087">AU Small Finance Bank</option>
                                    <option value="607153">Axis Bank</option>
                                    <option value="607063">Bangiya Gramin Vikash Bank</option>
                                    <option value="606985">Bank Of Baroda</option>
                                    <option value="508505">Bank of India</option>
                                    <option value="607387">Bank of Maharashtra</option>
                                    <option value="606995">Baroda Gujarat Gramin Bank</option>
                                    <option value="607280">Baroda Rajasthan Kshetriya Gramin Bank</option>
                                    <option value="606993">Baroda Uttar Pradesh Gramin Bank </option>
                                    <option value="607396">Canara Bank</option>
                                    <option value="607082">Catholic Syrian Bank</option>
                                    <option value="607264">Central Bank of India</option>
                                    <option value="607080">Chaitanya Godavari Gramin Bank</option>
                                    <option value="607214">Chhattisgarh Rajya Gramin Bank</option>
                                    <option value="607324">City Union Bank </option>
                                    <option value="607184">Corporation Bank</option>
                                    <option value="607136">Dakshin Bihar Gramin Bank</option>
                                    <option value="508547">Dena Bank</option>
                                    <option value="607099">Dena Gujarat Gramin Bank</option>
                                    <option value="607218">Ellaquai Dehati Bank</option>
                                    <option value="508998">Equitas Small Finance Bank</option>
                                    <option value="607363">Federal Bank</option>
                                    <option value="817304">Fincare Small Finance Bank</option>
                                    <option value="608001">Fino Payments Bank</option>
                                    <option value="607024">Gramin bank of Aryavart</option>
                                    <option value="607152">HDFC Bank</option>
                                    <option value="607140">Himachal Pradesh Gramin Bank</option>
                                    <option value="508534">ICICI Bank</option>
                                    <option value="607095">IDBI Bank</option>
                                    <option value="608117">IDFC First Bank</option>
                                    <option value="608314">India Post Payment Bank</option>
                                    <option value="607105">Indian bank</option>
                                    <option value="607126">Indian Overseas Bank</option>
                                    <option value="607189">IndusInd Bank</option>
                                    <option value="607440">Jammu &amp; Kashmir Bank </option>
                                    <option value="607210">Jharkhand Gramin Bank</option>
                                    <option value="607210">Jharkhand Rajya Gramin Bank</option>
                                    <option value="607270">Karnataka Bank</option>
                                    <option value="607512">Karnataka Gramin Bank</option>
                                    <option value="607122">Karnataka Vikas Grameena Bank </option>
                                    <option value="508662">Karur Vysya Bank</option>
                                    <option value="607365">Kashi Gomati Samyut Gramin Bank</option>
                                    <option value="607399">Kerala Gramin Bank</option>
                                    <option value="990309">Kotak Mahindra Bank</option>
                                    <option value="607058">Lakshmi Vilas Bank</option>
                                    <option value="607203">Langpi Dehangi Rural Bank</option>
                                    <option value="607136">Madhya Bihar Gramin Bank erstwhile Dakshin Bihar Gramin Bank</option>
                                    <option value="607022">Madhya Pradesh Gramin Bank</option>
                                    <option value="607232">Madhyanchal Gramin Bank</option>
                                    <option value="607000">Maharashtra Gramin Bank </option>
                                    <option value="607062">Manipur Rural Bank </option>
                                    <option value="607206">Meghalaya Rural Bank</option>
                                    <option value="607230">Mizoram Rural Bank</option>
                                    <option value="607022">Narmada Jhabua Gramin Bank</option>
                                    <option value="607060">Odisha Gramya Bank </option>
                                    <option value="607027">Oriental Bank of Commerce</option>
                                    <option value="607052">Pallavan Grama Bank</option>
                                    <option value="607059">Pandyan Grama Bank</option>
                                    <option value="607079">Paschim Banga Gramin Bank</option>
                                    <option value="607400">Pragathi Krishna Gramin Bank</option>
                                    <option value="607135">Prathama Bank</option>
                                    <option value="607135">Prathma UP Gramin Bank</option>
                                    <option value="607054">Puduvai Bharathiar Grama Bank</option>
                                    <option value="607087">Punjab &amp; Sind Bank</option>
                                    <option value="607138">Punjab Gramin Bank</option>
                                    <option value="607027">Punjab National Bank</option>
                                    <option value="607212">Purvanchal Gramin Bank</option>
                                    <option value="607509">Rajasthan Marudhara Gramin Bank</option>
                                    <option value="607393">Ratnakar Bank</option>
                                    <option value="607053">Saptagiri Grameena Bank</option>
                                    <option value="607139">Sarva Haryana Gramin Bank</option>
                                    <option value="607135">Sarva UP Gramin Bank </option>
                                    <option value="607200">Saurashtra Gramin Bank</option>
                                    <option value="607119">Shivalik Mercantile Cooperative Bank </option>
                                    <option value="607475">South Indian Bank</option>
                                    <option value="607094">State Bank of India</option>
                                    <option value="607580">Syndicate Bank</option>
                                    <option value="607187">Tamilnad Mercantile Bank</option>
                                    <option value="607052">TamilNadu Grama Bank</option>
                                    <option value="607195">Telangana Grameena Bank</option>
                                    <option value="652150">The Saraswat Co-operative Bank Ltd</option>
                                    <option value="607065">Tripura Gramin Bank</option>
                                    <option value="607066">UCO Bank</option>
                                    <option value="508991">Ujjivan Small Finance Bank Limited</option>
                                    <option value="607161">Union Bank of India</option>
                                    <option value="607646">United Bank Of India</option>
                                    <option value="607234">Utkal Gramin Bank</option>
                                    <option value="607073">Uttar Banga Kshetriya Gramin Bank </option>
                                    <option value="607069">Uttar Bihar Grameen Bank </option>
                                    <option value="607197">Uttarakhand Gramin Bank</option>
                                    <option value="607210">Vananchal Gramin Bank</option>
                                    <option value="607020">Vidarbha Konkan Gramin Bank</option>
                                    <option value="607075">Vijaya Bank</option>
                                    <option value="607618">YES Bank</option>
                                    <option value="608032">Paytm Payments Bank</option> -->
                                 </select>

                               <!--  <div class="chosen-container chosen-container-single" style="width: 0px;" title="" id="bank_chosen">
                                    <a class="chosen-single">
                                       <span> -- Select Bank --</span>
                                       <div><b></b></div>
                                    </a>
                                    <div class="chosen-drop">
                                       <div class="chosen-search"><input type="text" autocomplete="off"></div>
                                       <ul class="chosen-results"></ul>
                                    </div>
                                 </div> -->
                              </div>
                              <div class="col-md-12 mb-3">
                                 <p>
                                 </p>
                                 <div class="form-group">
                                    <input type="checkbox" checked="" readonly=""> I/Customer hereby accepts and confirm all the terms &amp; conditions under best of my knowledge.
                                 </div>
                                 <p></p>
                                 <p>
                                 </p>
                                 <div class="form-group">
                                    <input type="checkbox" checked="" readonly=""> I/Retailer hereby accepts and confirm all the terms &amp; conditions under best of my knowledge.
                                 </div>
                                 <p></p>
                                 <p>
                                 </p>
                                 <div class="form-group confirm">
                                    Note: You're not allowed to do more than 5 transactions of each transaction mode for same aadhar
                                 </div>
                                 <p></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="type">Device <span class="required">*</span></label>
                                 <br>
                                 <label class="btn btn-outline-primary id1" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id1" class="form-check-input" name="device" value="Morpho" style="left:23px;">Morpho
                                 </label>
                                 <label class="btn btn-outline-primary id2" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id2" class="form-check-input" name="device" value="Morpho" style="left:23px;">Mantra
                                 </label>
                                 <label class="btn btn-outline-primary id3" for="btn-check-outlined" style="padding: 3px 2px 3px 20px;box-shadow: gray 1px 2px 2px 1px;background-color: aliceblue;border: none;"> <input type="radio" id="id3" class="form-check-input" name="device" value="Morpho" style="left:23px;">Other
                                 </label>
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label for="type">Biometrics<span class="required">*</span></label>
                                 {{-- <div class="fingerprint" style="border: 1px solid black;width:150px;min-height:120px;text-align:center">
                                    <img src="{{ asset('assets/images/fingerprint.png') }}" style="height:100px;padding-top: 8px;display:" onclick="CaptureAvdm();">
                                 </div> --}}
                                 <button type="button" class="btn btn-warning"   onclick="CaptureAvdm();">SCAN</button>
                              </div>
                              <button type="submit" id="submit" class="btn btn-success">Capture2 Fingerprint</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">
    function discoverAvdm() {
      var GetCustomDomName = "127.0.0.1";
      var SuccessFlag = 0;
      var primaryUrl = "http://" + GetCustomDomName + ":";

      try {
        var protocol = window.location.href;
        if (protocol.indexOf("https") >= 0) {
          primaryUrl = "https://" + GetCustomDomName + ":";
        }
      } catch (e) {}

      url = "";

      SuccessFlag = 0;
      for (var i = 11100; i <= 11112; i++) {
        console.log("Discovering RD service on port : " + i.toString());
        var verb = "RDSERVICE";
        var err = "";

        var res;
        $.support.cors = true;
        var httpStaus = false;
        var jsonstr = "";
        var data = new Object();
        var obj = new Object();

        $.ajax({
          type: "RDSERVICE",
          async: false,
          crossDomain: true,
          url: primaryUrl + i.toString(),
          contentType: "text/xml; charset=utf-8",
          processData: false,
          cache: false,
          crossDomain: true,

          success: function (data) {
            httpStaus = true;
            res = {
              httpStaus: httpStaus,
              data: data
            };
            //alert(data);
            $("#txtDeviceInfo").val(data);
            finalUrl = primaryUrl + i.toString();
            var $doc = $.parseXML(data);//$data
            debugger;
            var CmbData1 = $($doc).find('RDService').attr('status');
            var CmbData2 = $($doc).find('RDService').attr('info');

             if(RegExp('\\b'+ 'Mantra' +'\\b').test(CmbData2)==true  ||  RegExp('\\b'+ 'Morpho_RD_Service' +'\\b').test(CmbData2)==true  ||  RegExp('\\b'+ 'SecuGen India Registered device Level 0' +'\\b').test(CmbData2)==true ||  RegExp('\\b'+ 'Precision - Biometric Device is ready for capture' +'\\b').test(CmbData2)==true ||  RegExp('\\b'+ 'RD service for Startek FM220 provided by Access Computech' +'\\b').test(CmbData2)==true ||  RegExp('\\b'+ 'NEXT' +'\\b').test(CmbData2)==true  ){

             debugger;
                          console.log($($doc).find('Interface').eq(0).attr('path'));

                          if(RegExp('\\b'+ 'Mantra' +'\\b').test(CmbData2)==true){

                                  if($($doc).find('Interface').eq(0).attr('path')=="/rd/capture")
                                  {
                                    MethodCapture=$($doc).find('Interface').eq(0).attr('path');
                                  }
                                  if($($doc).find('Interface').eq(1).attr('path')=="/rd/capture")
                                  {
                                    MethodCapture=$($doc).find('Interface').eq(1).attr('path');
                                  }
                                  if($($doc).find('Interface').eq(0).attr('path')=="/rd/info")
                                  {
                                    MethodInfo=$($doc).find('Interface').eq(0).attr('path');
                                  }
                                  if($($doc).find('Interface').eq(1).attr('path')=="/rd/info")
                                  {
                                    MethodInfo=$($doc).find('Interface').eq(1).attr('path');
                                  }
                          }else if(RegExp('\\b'+ 'Morpho_RD_Service' +'\\b').test(CmbData2)==true){
                                  MethodCapture=$($doc).find('Interface').eq(0).attr('path');
                                  MethodInfo=$($doc).find('Interface').eq(1).attr('path');
                          }else if(RegExp('\\b'+ 'SecuGen India Registered device Level 0' +'\\b').test(CmbData2)==true){
                                  MethodCapture=$($doc).find('Interface').eq(0).attr('path');
                                  MethodInfo=$($doc).find('Interface').eq(1).attr('path');
                          }else if(RegExp('\\b'+ 'Precision - Biometric Device is ready for capture' +'\\b').test(CmbData2)==true){
                                  MethodCapture=$($doc).find('Interface').eq(0).attr('path');
                                  MethodInfo=$($doc).find('Interface').eq(1).attr('path');
                          }else if(RegExp('\\b'+ 'RD service for Startek FM220 provided by Access Computech' +'\\b').test(CmbData2)==true){
                                  MethodCapture=$($doc).find('Interface').eq(0).attr('path');
                                  MethodInfo=$($doc).find('Interface').eq(1).attr('path');
                          }else if(RegExp('\\b'+ 'NEXT' +'\\b').test(CmbData2)==true){
                                  MethodCapture=$($doc).find('Interface').eq(0).attr('path');
                                  MethodInfo=$($doc).find('Interface').eq(1).attr('path');
                          }

                          if(CmbData1=='READY')
                          {

                              $('#method').val( finalUrl+MethodCapture);
                              $('#info').val( finalUrl+MethodInfo);

                              SuccessFlag=1;

                                  alert("Device detected successfully");


                              return false;
                          }
                          else if(CmbData1=='USED')
                          {
                             $('#method').val( finalUrl+MethodCapture);
                             $('#info').val( finalUrl+MethodInfo);

                              SuccessFlag=1;

                               alert("Device detected successfully");


                              return false;
                          }


                          else if(CmbData1=='NOTREADY')
                          {
                              alert("Device Not Discover");
                              return false;
                          }
                      }

          },
          error: function (jqXHR, ajaxOptions, thrownError) {
            if (i == "8005" && OldPort == true) {
              OldPort = false;
              i = "11099";
            }
          },

        });

        if (SuccessFlag == 1) {
          break;
        }
      }

      if (SuccessFlag == 0) {
        alert("Connection failed Please try again.");
      } else {
        //alert("RDSERVICE Discover Successfully");
      }
      $("select#ddlAVDM").prop('selectedIndex', 0);
      return res;
    };




        function deviceInfoAvdm()
      {
      var GetCustomDomName = "127.0.0.1";
      var SuccessFlag = 0;
      var primaryUrl1 = "http://" + GetCustomDomName + ":";

      try {
        var protocol = window.location.href;
        if (protocol.indexOf("https") >= 0) {
          primaryUrl1 = "https://" + GetCustomDomName + ":";
        }
      } catch (e) {}

      url = "";
      SuccessFlag = 0;


      var finUrl=  $('#info').val();
      url = "";

          var err = "";

          var res;
          $.support.cors = true;
          var httpStaus = false;
          var jsonstr="";
          ;
              $.ajax({

              type: "DEVICEINFO",
              async: false,
              crossDomain: true,
              url: finUrl,
              contentType: "text/xml; charset=utf-8",
              processData: false,
              success: function (data) {
                  httpStaus = true;
                  res = { httpStaus: httpStaus, data: data };
                  $('#txtDeviceInfo').val(data);
              },
              error: function (jqXHR, ajaxOptions, thrownError) {
              alert(thrownError);
                  res = { httpStaus: httpStaus, err: getHttpError(jqXHR) };
              },
          });

          return res;

      }




    function CaptureAvdm()
      {
      DString = '';
     device="mantra";


          var strWadh="";
          var strOtp="";


     var XML='<?xml version="1.0"?> <PidOptions ver="1.0"> <Opts fCount="1" fType="2" iCount="0" pCount="0" format="0" pidVer="2.0" timeout="10000" posh="UNKNOWN" env="P" /> '+DString+'<CustOpts><Param name="mantrakey" value="" /></CustOpts> </PidOptions>';


          var finUrl=  $('#method').val();


                   var verb = "CAPTURE";


                      var err = "";

                      var res;
                      $.support.cors = true;
                      var httpStaus = false;
                      var jsonstr="";

                          $.ajax({

                          type: "CAPTURE",
                          async: false,
                          crossDomain: true,
                          url: finUrl,
                          data:XML,
                          contentType: "text/xml; charset=utf-8",
                          processData: false,
                          success: function (data) {

                           if(device == "morpho"){
                             var xmlString = (new XMLSerializer()).serializeToString(data);  //morpho
                          }else if(device == "mantra"){
                              var xmlString = data;  //mantra
                          }else if(device == "secugen"){
                              var xmlString = (new XMLSerializer()).serializeToString(data);  //secugen
                          }else if(device == "precision"){
                              var xmlString = (new XMLSerializer()).serializeToString(data);  //precision
                          }else if(device == "startek"){
                              var xmlString = (new XMLSerializer()).serializeToString(data);  //startek
                          }else if(device == "nextrd"){
                                var xmlString = (new XMLSerializer()).serializeToString(data);  //next rd
                          }
                          httpStaus = true;
                          res = { httpStaus: httpStaus, data: xmlString};



                              $('#txtPidData').val(xmlString);
                              var $doc = data;
                              var Message =  $($doc).find('Resp').attr('errInfo');
                              var errorcode =	 $($doc).find('Resp').attr('errCode');
                                  if(errorcode==0)
                                  {

                                      var $doc = $.parseXML(data);
                                      var Message =  $($doc).find('Resp').attr('errInfo');

                                      alert(Message);

                                  }else{
                                      $('#loaderbala').css("display","none");
                                      alert('Capture Failed');
                                      window.location.reload();
                                  }

                          },
                          error: function (jqXHR, ajaxOptions, thrownError) {
                          //$('#txtPidOptions').val(XML);
                          alert(thrownError);
                              res = { httpStaus: httpStaus, err: getHttpError(jqXHR) };
                          },
                      });

                      return res;
      }

      function getHttpError(jqXHR) {
          var err = "Unhandled Exception";
          if (jqXHR.status === 0) {
              err = 'Service Unavailable';
          } else if (jqXHR.status == 404) {
              err = 'Requested page not found';
          } else if (jqXHR.status == 500) {
              err = 'Internal Server Error';
          } else if (thrownError === 'parsererror') {
              err = 'Requested JSON parse failed';
          } else if (thrownError === 'timeout') {
              err = 'Time out error';
          } else if (thrownError === 'abort') {
              err = 'Ajax request aborted';
          } else {
              err = 'Unhandled Error';
          }
          return err;
      }


  </script>

@endsection

