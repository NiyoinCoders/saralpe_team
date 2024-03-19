@extends("layouts.app")
@section("title","payoutreport")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <section class="content">
        <div class="container-fluid">
          <div class="br-pagebody mb-3">
                  <div class="row row-sm">
                    <div class="col-md-12 col-lg-12">
                        <div class="row row-cols-1">
                            <div class="overflow-hidden d-slider1 ">
                                <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Total Balance</p>
                                                    <h4 class="counter">₹ 560K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Total Profit</p>
                                                    <h4 class="counter">₹ 185K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Total Cost</p>
                                                    <h4 class="counter">₹ 375K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Revenue</p>
                                                    <h4 class="counter">₹ 742K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-05" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Net Income</p>
                                                    <h4 class="counter">₹ 150K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-06" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Today</p>
                                                    <h4 class="counter">₹ 4600</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                                        <div class="card-body">
                                            <div class="progress-widget">
                                                <div id="circle-progress-07" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                                                    <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                    </svg>
                                                </div>
                                                <div class="progress-detail">
                                                    <p class="mb-2">Members</p>
                                                    <h4 class="counter">11.2M</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="swiper-button swiper-button-next"></div>
                                <div class="swiper-button swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                  </div>
          </div>
              <div class="col-md-12 p-0">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title text-danger">Payout Report</h3>

                      <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

              <!--======================= Start of Filters ========================-->


              <form method="POST" autocomplete="off" id="filterData">
                  <div class="row">
                      <div class="col-md-2">
                          <div class="form-group">
                              <label>From Date</label>
                              <input type="date" name="from_date" id="from_date" class="form-control datepicker flatpickr-input" value="2023-08-24">
                            </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group">
                              <label>From Date</label>
                              <input type="date" name="to_date" id="to_date" class="form-control datepicker flatpickr-input" value="2023-08-24">
                            </div>
                      </div>

                      <div class="col-md-2">
                          <div class="form-group">
                              <label>Select Status</label>
                              <select name="status" id="status" class="form-control select2" style="width: 100%;" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                  <option value="" data-select2-id="2">Select Status</option>
                                  <option value="PENDING">PENDING</option>
                                  <option value="SUCCESS">SUCCESS</option>
                                  <option value="FAILED">FAILED</option>
                                  <option value="REFUND">REFUND</option>
                              </select>
                            </div>
                      </div>

                      <div class="col-md-3">
                          <div class="form-group">
                              <label>Operator Wise</label>
                              <select name="provider_id" class="form-control select2" style="width: 100%" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                  <option value="" data-select2-id="5">All Operators</option>
                                                                  <option value="1">Airtel</option>
                                                                  <option value="2">BSNL Topup</option>
                                                                  <option value="3">BSNL Special</option>
                                                                  <option value="4">Jio</option>
                                                                  <option value="5">MTNL Delhi - Talktime</option>
                                                                  <option value="6">MTNL Delhi - Special Tariff</option>
                                                                  <option value="7">MTNL Mumbai - Talktime</option>
                                                                  <option value="8">MTNL Mumbai - Special Tariff</option>
                                                                  <option value="9">Vi</option>
                                                                  <option value="10">Airtel Postpaid</option>
                                                                  <option value="11">BSNL Postpaid</option>
                                                                  <option value="12">Jio Postpaid</option>
                                                                  <option value="13">Jio Pre On Post</option>
                                                                  <option value="14">VI Postpaid</option>
                                                                  <option value="15">Airtel Digital Tv</option>
                                                                  <option value="16">Dish Tv</option>
                                                                  <option value="17">Sun Direct</option>
                                                                  <option value="18">Tata Play</option>
                                                                  <option value="19">Videocon D2H</option>
                                                                  <option value="20">Madhya Pradesh Madhya Kshetra Vidyut Vitaran Co. Ltd.-Rural (MPMKVVCL)</option>
                                                                  <option value="21">Jammu and Kashmir Power Development Department</option>
                                                                  <option value="22">Mahavitaran-Maharashtra State Electricity Distribution Company Ltd. (MSEDCL)</option>
                                                                  <option value="23">Madhya Pradesh Madhya Kshetra Vidyut Vitaran Co. Ltd.-Urban</option>
                                                                  <option value="24">Madhya Pradesh Poorv Kshetra Vidyut Vitaran - RURAL (MPPKVVCL)</option>
                                                                  <option value="25">Uttar Pradesh Power Corp Ltd (UPPCL) - URBAN</option>
                                                                  <option value="26">Uttar Pradesh Power Corp Ltd (UPPCL) - RURAL</option>
                                                                  <option value="27">Dakshin Haryana Bijli Vitran Nigam (DHBVN)</option>
                                                                  <option value="28">Uttar Haryana Bijli Vitran Nigam (UHBVN)</option>
                                                                  <option value="29">Torrent Power - Surat</option>
                                                                  <option value="30">Government of Puducherry Electricity Department</option>
                                                                  <option value="31">Jharkhand Bijli Vitran Nigam Ltd (JBVNL)</option>
                                                                  <option value="32">Eastern Power Distribution CO AP Ltd (APEPDCL)</option>
                                                                  <option value="33">Southern Power Distribution CO AP Ltd (APSPDCL)</option>
                                                                  <option value="34">Department of Power, Government of Arunachal Pradesh</option>
                                                                  <option value="35">Assam Power Distribution Company Ltd (RAPDR)</option>
                                                                  <option value="36">Assam Power Distribution Company Ltd (NON-RAPDR)</option>
                                                                  <option value="37">North Bihar Power Distribution Company Ltd.</option>
                                                                  <option value="38">South Bihar Power Distribution Company Ltd.	</option>
                                                                  <option value="39">Electricity Department Chandigarh</option>
                                                                  <option value="40">Chhattisgarh State Electricity Board</option>
                                                                  <option value="41">DNH Power Distribution Company Limited</option>
                                                                  <option value="42">	Daman and Diu Electricity</option>
                                                                  <option value="43">Goa Electricity Department</option>
                                                                  <option value="44">Dakshin Gujarat Vij Company Limited (DGVCL)</option>
                                                                  <option value="45">Madhya Gujarat Vij Company Limited (MGVCL)</option>
                                                                  <option value="46">Paschim Gujarat Vij Company Limited (PGVCL)</option>
                                                                  <option value="47">Uttar Gujarat Vij Company Limited (UGVCL)</option>
                                                                  <option value="48">Himachal Pradesh State Electricity Board (HPSEB)</option>
                                                                  <option value="49">Jamshedpur Utilities and Services Company Limited</option>
                                                                  <option value="50">Bangalore Electricity Supply Company</option>
                                                                  <option value="51">Chamundeshwari Electricity Supply Corp Ltd (CESCOM)</option>
                                                                  <option value="52">Gulbarga Electricity Supply Company Limited (GESCOM)</option>
                                                                  <option value="53">Hubli Electricity Supply Company Ltd (HESCOM)</option>
                                                                  <option value="54">Mangalore Electricity Supply Co. Ltd (MESCOM) – RAPDR</option>
                                                                  <option value="55">Kerala State Electricity Board Ltd</option>
                                                                  <option value="56">Adani Electricity Mumbai Ltd</option>
                                                                  <option value="57">Tata Power - Mumbai</option>
                                                                  <option value="59">Meghalaya Power Dist Corp Ltd</option>
                                                                  <option value="60">Power &amp; Electricity Department – Mizoram</option>
                                                                  <option value="61">Department of Power, Nagaland</option>
                                                                  <option value="62">BSES Rajdhani Power Limited</option>
                                                                  <option value="63">BSES Yamuna Power Limited</option>
                                                                  <option value="64">TATA Power-Delhi</option>
                                                                  <option value="65">NESCO, Odisha</option>
                                                                  <option value="66">TP Southern Odisha Distribution Limited (SOUTHCO)</option>
                                                                  <option value="67">TP Central Odisha Distribution Ltd.</option>
                                                                  <option value="68">TP Western Odisha Distribution Limited (WESCO)</option>
                                                                  <option value="70">Punjab State Power Corporation Ltd (PSPCL)</option>
                                                                  <option value="71">Ajmer Vidyut Vitran Nigam Limited (AVVNL)</option>
                                                                  <option value="72">Bharatpur Electricity Services Ltd. (BESL)</option>
                                                                  <option value="73">Bikaner Electricity Supply Limited (BKESL)</option>
                                                                  <option value="74">Jaipur Vidyut Vitran Nigam (JVVNL)</option>
                                                                  <option value="75">Jodhpur Vidyut Vitran Nigam Limited (JDVVNL)</option>
                                                                  <option value="76">Kota Electricity Distribution Limited (KEDL)</option>
                                                                  <option value="77">TP Ajmer Distribution Ltd (TPADL)</option>
                                                                  <option value="78">Sikkim Power - RURAL (SKMPWR)</option>
                                                                  <option value="79">Sikkim Power - URBAN</option>
                                                                  <option value="80">Tamil Nadu Electricity Board (TNEB)</option>
                                                                  <option value="81">Tripura State Electricity Corporation Ltd</option>
                                                                  <option value="82">Kanpur Electricity Supply Company</option>
                                                                  <option value="83">Noida Power Company Limited</option>
                                                                  <option value="84">Torrent Power - Agra</option>
                                                                  <option value="85">Uttarakhand Power Corporation Limited</option>
                                                                  <option value="86">Calcutta Electricity Supply Ltd (CESC)</option>
                                                                  <option value="87">India Power Corporation - West Bengal</option>
                                                                  <option value="88">West Bengal State Electricity Distribution Co. Ltd (WBSEDCL)</option>
                                                                  <option value="89">Bangalore Water Supply and Sewerage Board</option>
                                                                  <option value="90">Bhopal Municipal Corporation</option>
                                                                  <option value="91">Delhi Development Authority (DDA)</option>
                                                                  <option value="92">Delhi Jal Board</option>
                                                                  <option value="93">Department of Public Health Engineering-Water, Mizoram</option>
                                                                  <option value="94">Greater Warangal Municipal Corporation</option>
                                                                  <option value="95">Gwalior Municipal Corporation</option>
                                                                  <option value="96">Haryana Urban Development Authority</option>
                                                                  <option value="97">Hyderabad Metropolitan Water Supply and Sewerage Board</option>
                                                                  <option value="98">Indore Municipal Corporation</option>
                                                                  <option value="99">Jabalpur Municipal Corporation</option>
                                                                  <option value="100">Kalyan Dombivali Municipal Corporation - Water</option>
                                                                  <option value="101">Kerala Water Authority (KWA)</option>
                                                                  <option value="102">Madhya Pradesh Urban (e-Nagarpalika)</option>
                                                                  <option value="103">Municipal Corporation Chandigarh</option>
                                                                  <option value="104">Municipal Corporation Jalandhar</option>
                                                                  <option value="105">Municipal Corporation of Amritsar</option>
                                                                  <option value="106">Municipal Corporation of Gurugram</option>
                                                                  <option value="107">Mysuru City Corporation</option>
                                                                  <option value="108">Pune Municipal Corporation</option>
                                                                  <option value="109">Punjab Municipal Corporations/Councils</option>
                                                                  <option value="110">Ranchi Municipal Corporation</option>
                                                                  <option value="111">Silvassa Municipal Council</option>
                                                                  <option value="112">Surat Municipal Corporation</option>
                                                                  <option value="113">Urban Improvement Trust (UIT) - Bhiwadi</option>
                                                                  <option value="114">Uttarakhand Jal Sansthan</option>
                                                                  <option value="115">Aavantika Gas Ltd</option>
                                                                  <option value="116">Adani Total Gas Limited</option>
                                                                  <option value="117">Assam Gas Company Limited</option>
                                                                  <option value="118">Bhagyanagar Gas Limited</option>
                                                                  <option value="119">Central U.P. Gas Limited</option>
                                                                  <option value="120">Charotar Gas Sahakari Mandali Limited</option>
                                                                  <option value="121">Gail Gas Limited</option>
                                                                  <option value="122">Green Gas Limited(GGL)</option>
                                                                  <option value="123">Gujarat Gas Limited</option>
                                                                  <option value="124">Haryana City Gas - Kapil Chopra Enterprise</option>
                                                                  <option value="125">IRM Energy Private Limited</option>
                                                                  <option value="126">Indian Oil-Adani Gas Private Limited</option>
                                                                  <option value="127">Indraprastha Gas</option>
                                                                  <option value="128">Mahanagar Gas</option>
                                                                  <option value="129">Maharashtra Natural Gas Limited (MNGL)</option>
                                                                  <option value="130">Naveriya Gas Pvt Ltd</option>
                                                                  <option value="131">Sabarmati Gas Limited (SGL)</option>
                                                                  <option value="132">Sanwariya Gas Limited	</option>
                                                                  <option value="133">Tripura Natural Gas</option>
                                                                  <option value="134">Unique Central Piped Gases Pvt Ltd (UCPGPL)</option>
                                                                  <option value="135">Vadodara Gas Limited</option>
                                                                  <option value="136">Airtel Landline</option>
                                                                  <option value="137">BSNL - Corporate</option>
                                                                  <option value="138">BSNL - Individual</option>
                                                                  <option value="139">MTNL Delhi</option>
                                                                  <option value="140">MTNL Mumbai</option>
                                                                  <option value="141">ACT Fibernet Broadband</option>
                                                                  <option value="142">Airtel Broadband</option>
                                                                  <option value="143">Asianet Broadband</option>
                                                                  <option value="144">Comway Broadband</option>
                                                                  <option value="145">Connect Broadband</option>
                                                                  <option value="146">DEN Broadband</option>
                                                                  <option value="147">Excell Broadband</option>
                                                                  <option value="148">Flash Fibernet</option>
                                                                  <option value="149">Fusionnet Web Services Private Limited</option>
                                                                  <option value="150">Hathway Broadband</option>
                                                                  <option value="151">Instalinks</option>
                                                                  <option value="152">ION</option>
                                                                  <option value="153">Instanet Broadband</option>
                                                                  <option value="154">M-NET Fiber Fast</option>
                                                                  <option value="155">Netplus Broadband</option>
                                                                  <option value="156">Nextra Broadband</option>
                                                                  <option value="157">Spectranet Broadband</option>
                                                                  <option value="158">Swifttele Enterprises Private Limited</option>
                                                                  <option value="159">TTN BroadBand</option>
                                                                  <option value="160">Tikona</option>
                                                                  <option value="161">Timbl Broadband</option>
                                                                  <option value="162">Vfibernet Broadband</option>
                                                                  <option value="163">Torrent Power - Bhiwandi</option>
                                                                  <option value="164">Torrent Power - Ahmedabad</option>
                                                                  <option value="165">M.P. Poorv Kshetra Vidyut Vitaran - URBAN</option>
                                                                  <option value="166">Madhya Pradesh Paschim Kshetra Vidyut Vitaran - Indore</option>
                                                                  <option value="170">PARISAR CO OPERATIVE HOUSING SERVICE SOCIETY LIMIT</option>
                                                                  <option value="171">Ebony Greens Apartments Owners Association</option>
                                                                  <option value="172">Bajaj Finance Limited</option>
                                                                  <option value="173">IDFC First Bank ltd</option>
                                                                  <option value="174">Flexsalary</option>
                                                                  <option value="175">Loksuvidha</option>
                                                                  <option value="176">Motilal Oswal Home Finance</option>
                                                                  <option value="177">Snapmint</option>
                                                                  <option value="178">Tata Capital Financial Services Limited</option>
                                                                  <option value="179">Paisa Dukan-Borrower EMI</option>
                                                                  <option value="180">L and T Financial Services</option>
                                                                  <option value="181">L and T Housing Finance</option>
                                                                  <option value="182">Indiabulls Consumer Finance Limited</option>
                                                                  <option value="183">Hero FinCorp Limited</option>
                                                                  <option value="184">AAVAS FINANCIERS LIMITED</option>
                                                                  <option value="185">Indiabulls Housing Finance Limited</option>
                                                                  <option value="186">Avail</option>
                                                                  <option value="187">Clix</option>
                                                                  <option value="188">Varthana</option>
                                                                  <option value="189">Bajaj Auto Finance</option>
                                                                  <option value="190">Jana Small Finance Bank</option>
                                                                  <option value="191">Ess Kay Fincorp Limited</option>
                                                                  <option value="192">Manappuram Finance Limited-Vehicle Loan</option>
                                                                  <option value="193">Faircent</option>
                                                                  <option value="194">i2iFunding</option>
                                                                  <option value="195">Capri Global Capital Limited</option>
                                                                  <option value="196">Capri Global Housing Finance</option>
                                                                  <option value="197">Arohan Financial Services Ltd</option>
                                                                  <option value="198">Shriram Housing Finance Limited</option>
                                                                  <option value="199">Easy Home Finance Limited</option>
                                                                  <option value="200">Shriram Transport Finance Company Limited</option>
                                                                  <option value="201">Muthoot Microfin Limited</option>
                                                                  <option value="202">Kissht</option>
                                                                  <option value="203">LOANTAP CREDIT PRODUCTS PRIVATE LIMITED</option>
                                                                  <option value="204">DMI Finance Private Limited</option>
                                                                  <option value="205">ZestMoney</option>
                                                                  <option value="206">RupeeRedee</option>
                                                                  <option value="207">Kinara Capital</option>
                                                                  <option value="208">Axis Finance Limited</option>
                                                                  <option value="209">Jain Autofin</option>
                                                                  <option value="210">Cars24 Financial Services Private Limited</option>
                                                                  <option value="211">Oxyzo Financial Services Pvt Ltd</option>
                                                                  <option value="212">Toyota Financial Services</option>
                                                                  <option value="213">AU Bank Loan Repayment</option>
                                                                  <option value="214">Annapurna Finance Private Limited-MFI</option>
                                                                  <option value="215">Adani Capital Pvt Ltd</option>
                                                                  <option value="216">Kanakadurga Finance Limited</option>
                                                                  <option value="217">Avanse Financial Services Ltd</option>
                                                                  <option value="218">Mintifi Finserve Private Limited</option>
                                                                  <option value="219">Eduvanz Financing Pvt. Ltd.</option>
                                                                  <option value="220">Midland Microfin Ltd</option>
                                                                  <option value="221">INDUSIND BANK - CFD</option>
                                                                  <option value="222">FlexiLoans</option>
                                                                  <option value="223">DCB Bank Loan Repayment</option>
                                                                  <option value="224">G U Financial Services Pvt Ltd</option>
                                                                  <option value="225">Mahindra Home Finance</option>
                                                                  <option value="226">Baid Leasing and Finance</option>
                                                                  <option value="228">Svatantra Microfin Private Limited</option>
                                                                  <option value="229">Maxvalue Credits And Investments Ltd</option>
                                                                  <option value="230">Altum Credo Home Finance</option>
                                                                  <option value="231">Fullerton India credit company limited</option>
                                                                  <option value="232">Muthoot Capital Services Ltd</option>
                                                                  <option value="233">India Shelter Finance Corporation Limited</option>
                                                                  <option value="234">Chaitanya India Fin Credit Pvt Ltd</option>
                                                                  <option value="235">Credit Wise Capital</option>
                                                                  <option value="236">Fullerton India Housing Finance Limited</option>
                                                                  <option value="237">BERAR Finance Limited</option>
                                                                  <option value="238">Aditya Birla Housing Finance Limited</option>
                                                                  <option value="239">ICICI Bank Ltd - Loans</option>
                                                                  <option value="240">Annapurna Finance Private Limited-MSME</option>
                                                                  <option value="241">OHMYLOAN</option>
                                                                  <option value="242">OMLP2P.COM</option>
                                                                  <option value="243">Shriram City Union Finance Ltd</option>
                                                                  <option value="244">Digamber Capfin Limited</option>
                                                                  <option value="245">Fincare Small Finance Bank</option>
                                                                  <option value="246">Oroboro</option>
                                                                  <option value="247">NM Finance</option>
                                                                  <option value="248">Nidhilakshmi Finance</option>
                                                                  <option value="249">Ascend Capital</option>
                                                                  <option value="250">India Home Loan Limited</option>
                                                                  <option value="251">Home Credit India Finance Pvt. Ltd</option>
                                                                  <option value="252">Vastu Housing Finance Corporation Limited</option>
                                                                  <option value="253">Madhya Pradesh Urban (e-Nagarpalika) - Property Tax</option>
                                                                  <option value="254">Kalyan Dombivali Municipal Corporation</option>
                                                                  <option value="255">Ahmedabad Municipal Corporation</option>
                                                                  <option value="256">Vasai Virar Municipal Corporation - Property</option>
                                                                  <option value="257">Prayagraj Nagar Nigam</option>
                                                                  <option value="258">Hubli-Dharwad Municipal Corporation</option>
                                                                  <option value="259">ICICI Bank Fastag</option>
                                                                  <option value="260">IndusInd Bank FASTag</option>
                                                                  <option value="261">Indian Highways Management Company Ltd FASTag</option>
                                                                  <option value="262">Bank of Baroda - Fastag</option>
                                                                  <option value="263">Axis Bank FASTag</option>
                                                                  <option value="264">IDFC FIRST Bank - FasTag</option>
                                                                  <option value="265">HDFC Bank - Fastag</option>
                                                                  <option value="266">Equitas FASTag Recharge</option>
                                                                  <option value="267">Kotak Mahindra Bank - Fastag</option>
                                                                  <option value="269">Indane Gas (Indian Oil)</option>
                                                                  <option value="270">B.E.S.T Mumbai</option>
                                                                  <option value="271">Gift Power Company Limited</option>
                                                                  <option value="272">Kannan Devan Hills Plantations Company Private Limited</option>
                                                                  <option value="273">Department of Power, Government of Arunachal Pradesh - Prepaid</option>
                                                                  <option value="274">Lakshadweep Electricity Department</option>
                                                                  <option value="275">Mangalore Electricity Supply Co. Ltd (MESCOM) – Non RAPDR</option>
                                                                  <option value="276">New Delhi Municipal Council (NDMC) - Electricity</option>
                                                                  <option value="277">Thrissur Corporation Electricity Department</option>
                                                                  <option value="278">Torrent Power - Shilmumbrakalwa</option>
                                                                  <option value="279">IDBI Bank Fastag</option>
                                                                  <option value="280">Jammu and Kashmir Bank Fastag</option>
                                                                  <option value="281">Paul Merchants</option>
                                                                  <option value="282">Paytm Payments Bank FASTag</option>
                                                                  <option value="283">Federal Bank - FASTag</option>
                                                                  <option value="284">Transaction Analyst</option>
                                                                  <option value="285">UCO Bank Fastag</option>
                                                                  <option value="286">Jalkal Vibhag Nagar Nigam Prayagraj</option>
                                                                  <option value="287">Jammu Kashmir Water Billing-JKPHE Kashmir</option>
                                                                  <option value="288">Jammu Kashmir Water Billing-JKPHE Jammu</option>
                                                                  <option value="289">Kolhapur Municipal Corporation - Water Tax</option>
                                                                  <option value="290">Muncipal Coporation Ludhiana</option>
                                                                  <option value="291">Nagar Nigam Aligarh</option>
                                                                  <option value="292">New Delhi Municipal Council (NDMC) - Water</option>
                                                                  <option value="293">Pimpri Chinchwad Municipal Corporation(PCMC)</option>
                                                                  <option value="294">Port Blair Municipal Council - Water</option>
                                                                  <option value="295">Public Health Engineering Department, Haryana</option>
                                                                  <option value="296">Shivamogga City Corporation - Water Tax</option>
                                                                  <option value="297">Ujjain Nagar Nigam- PHED- Water</option>
                                                                  <option value="298">Vasai Virar Municipal Corporation - Water</option>
                                                                  <option value="299">Vatva Industrial Estate Infrastructure Development Ltd</option>
                                                                  <option value="300">Vijayapura Water Board</option>
                                                                  <option value="301">GAIL India Limited</option>
                                                                  <option value="302">Gujarat State Petronet Limited</option>
                                                                  <option value="303">Megha Gas</option>
                                                                  <option value="304">Torrent Gas Moradabad Limited</option>
                                                                  <option value="305">Bharat Gas (BPCL)</option>
                                                                  <option value="306">HP Gas (HPCL)</option>
                                                                  <option value="307">Alliance Broadband</option>
                                                                  <option value="308">GTPL KCBPL Broadband</option>
                                                                  <option value="309">AirJaldi - Rural Broadband</option>
                                                                  <option value="310">Skylink Fibernet Private Limited</option>
                                                                  <option value="311">Wish Net</option>
                                                                  <option value="312">Tata Teleservices</option>
                                                                  <option value="313">Asianet Digital</option>
                                                                  <option value="314">Hathway Digital Cable TV</option>
                                                                  <option value="315">INDigital</option>
                                                                  <option value="316">Intermedia Cable Communication</option>
                                                                  <option value="317">Kerala Vision Broadband Pvt Ltd</option>
                                                                  <option value="318">City Municipal Council -Ilkal</option>
                                                                  <option value="319">IOB Fastag</option>
                                                                  <option value="320">Airtel Pre On Post</option>
                                                                  <option value="321">Aditya Birla Sun Life Insurance</option>
                                                                  <option value="322">Aditya Birla Health Insurance</option>
                                                                  <option value="323">Aegon Life Insurance</option>
                                                                  <option value="324">Aviva Life Insurance</option>
                                                                  <option value="325">Bajaj Allianz General Insurance</option>
                                                                  <option value="326">Bajaj Allianz Life Insurance</option>
                                                                  <option value="327">BHARTI AXA Life Insurance</option>
                                                                  <option value="328">Canara HSBC OBC Life Insurance</option>
                                                                  <option value="329">Exide Life Insurance</option>
                                                                  <option value="330">Future Generali India Life Insurance Company Limited</option>
                                                                  <option value="331">Go Digit General Insurance</option>
                                                                  <option value="332">HDFC Life Insurance</option>
                                                                  <option value="333">Billroth Hospitals Pvt Ltd</option>
                                                                  <option value="334">B.K. Arogyam and Research Pvt. Ltd</option>
                                                                  <option value="335">Madhya Pradesh Chamber Of Commerce And Industry</option>
                                                                  <option value="336">Rajindra Gymkhana And Mahendra Club Ltd</option>
                                                                  <option value="337">The Institute Of Indian Foundrymen</option>
                                                                  <option value="338">Nupay - Entellus Business Solutions Pvt Ltd</option>
                                                                  <option value="339">FITPASS</option>
                                                                  <option value="340">Furlenco</option>
                                                                  <option value="341">HT Digital</option>
                                                                  <option value="342">Parentlane</option>
                                                                  <option value="343">Shemaroo -IBADAT</option>
                                                                  <option value="344">Shemaroo Entertainment -Bhakti</option>
                                                                  <option value="345">ZEE5</option>
                                                                  <option value="346">ICICI Lombard General Insurance (Motor)</option>
                                                                  <option value="347">ICICI Prudential Life Insurance</option>
                                                                  <option value="348">Ageas Federal Life Insurance Company Limited</option>
                                                                  <option value="349">Iffco Tokio General Insurance Company Limited</option>
                                                                  <option value="350">IndiaFirst Life Insurance Company Ltd</option>
                                                                  <option value="351">Kotak Life Insurance Company Limited</option>
                                                                  <option value="352">Magma HDI - Motor Insurance</option>
                                                                  <option value="353">Magma HDI - Health Insurance</option>
                                                                  <option value="354">Magma HDI - Non Motor Insurance</option>
                                                                  <option value="355">Max Bupa Health Insurance</option>
                                                                  <option value="356">Max Life Insurance Company Limited</option>
                                                                  <option value="357">Pramerica Life Insurance Limited</option>
                                                                  <option value="358">Reliance General Insurance (Health)</option>
                                                                  <option value="359">Reliance Nippon Life Insurance</option>
                                                                  <option value="360">Reliance General Insurance Company Ltd.</option>
                                                                  <option value="361">Care Health Insurance</option>
                                                                  <option value="362">Royal Sundaram General Insurance</option>
                                                                  <option value="363">SBI Life Insurance Company Limited</option>
                                                                  <option value="364">Shriram General Insurance</option>
                                                                  <option value="365">Shriram Life Insurance Co. Ltd</option>
                                                                  <option value="366">Star Union Dai Ichi Life Insurance</option>
                                                                  <option value="367">TATA AIA Life Insurance</option>
                                                                  <option value="368">BoB Credit Card</option>
                                                                  <option value="369">Port Blair Municipal Council</option>
                                                                  <option value="370">Nagar Palika Parishad Lalitpur</option>
                                                                  <option value="371">Corporation of City Panaji</option>
                                                                  <option value="372">Margao Municipal Council</option>
                                                                  <option value="373">Mhapsa Municipal Council</option>
                                                                  <option value="374">Mormugao Municipal Council</option>
                                                                  <option value="375">Ponda Municipal Council</option>
                                                                  <option value="376">Sankhali Municipal council</option>
                                                                  <option value="377">Pernem Municipal council</option>
                                                                  <option value="378">Valpoi Municipal council</option>
                                                                  <option value="379">Quepem Municipal council</option>
                                                                  <option value="380">Bicholim Municipal council</option>
                                                                  <option value="381">Curchorem Cacora Municipal council</option>
                                                                  <option value="382">Sanguem Municipal council</option>
                                                                  <option value="383">Canacona Municipal council</option>
                                                                  <option value="384">Cuncolim Municipal council</option>
                                                                  <option value="385">Greater Chennai Corporation</option>
                                                                  <option value="386">Gulbarga City Corporation</option>
                                                                  <option value="387">Municipal Corporation - Meerut</option>
                                                                  <option value="388">Municipal Corporation Rohtak</option>
                                                                  <option value="389">Municipal Corporation Shimla</option>
                                                                  <option value="390">Nagar Nigam Agra</option>
                                                                  <option value="391">Nagar Nigam Aligarh (Property Tax)</option>
                                                                  <option value="392">Nagar Nigam Mathura-Vrindavan</option>
                                                                  <option value="393">Puducherry UT (Local Bodies) - Property Tax</option>
                                                                  <option value="394">Rajkot Municipal Corporation</option>
                                                                  <option value="395">Shivamogga City Corporation</option>
                                                                  <option value="396">Uttarakhand Property Tax</option>
                                                                  <option value="397">Abhushan Residency C Wing</option>
                                                                  <option value="398">Amrut Ganga H1 Cooperative Hsg. Soc. Ltd.</option>
                                                                  <option value="399">Avalon Residency Welfare Society</option>
                                                                  <option value="400">Darshan Ricco Co Operative Housing Society</option>
                                                                  <option value="401">D D Plaza Co-Op Premises Society Ltd</option>
                                                                  <option value="402">Fairfield Co Operative Housing Society Ltd</option>
                                                                  <option value="403">Goverdhan Villa Maintenance Society</option>
                                                                  <option value="404">Indradhanush Flats Service Society</option>
                                                                  <option value="405">Janapriya Nile Valley Block 2A Owners Welfare Association</option>
                                                                  <option value="406">JNC The Park Home Buyers Society</option>
                                                                  <option value="407">Kamala Ashish No 3 Co Operative Housing Society Limited</option>
                                                                  <option value="408">Lodha Meridian Owners Welfare Society 4Th Phase</option>
                                                                  <option value="409">SAFAL PARISAR 1 ( PARISAR CO OPERATIVE HOUSING SERVICE SOCIETY LIMITED VIBHAG - 1)</option>
                                                                  <option value="410">Parkwoods B2 Co Operative Housing Soc Ltd</option>
                                                                  <option value="411">Parkwoods B1 Co Operative Housing Soc Ltd</option>
                                                                  <option value="412">Pearl Regalia Welfare And Maintenance Society</option>
                                                                  <option value="413">Pristine City Phase I Co Opertive Housing</option>
                                                                  <option value="414">Shree Apartment A And B Sahkari Gruhrachna Sanstha Maryadit</option>
                                                                  <option value="415">Shree Ganesh Co Op Hsg Soc Ltd</option>
                                                                  <option value="416">Someshwar Ashirwad Co Operative Housing Society</option>
                                                                  <option value="417">Sterling Heights Co Operative Housing Service Society Ltd M - Building</option>
                                                                  <option value="418">Sushobha Apartment Condominium</option>
                                                                  <option value="419">The Hans Bhawan Friends Cooperative Group Housing Society Limited</option>
                                                                  <option value="420">Viviana Co Operative Housing Society Limited</option>
                                                                  <option value="421">Viviana Co Op Hsg Soc Ltd Cultural Forum</option>
                                                                  <option value="422">Association of Apartment Owners Of Star Court Cluster</option>
                                                                  <option value="423">Ganesh Residency Maintainance Co Op Soc</option>
                                                                  <option value="424">Parkwoods C Co Operative Housing Soc Ltd</option>
                                                                  <option value="425">Aadhar Housing Finance Limited</option>
                                                                  <option value="426">Adani Housing Finance</option>
                                                                  <option value="427">Aditya Birla Finance Limited</option>
                                                                  <option value="428">Agora Microfinance India Ltd - AMIL</option>
                                                                  <option value="429">Aptus Value Housing Finance India Limited</option>
                                                                  <option value="430">Aptus Finance India Private Limited</option>
                                                                  <option value="431">Asirvad Micro Finance Ltd</option>
                                                                  <option value="432">Axis Bank Limited-Microfinance</option>
                                                                  <option value="433">Axis Bank Limited - Retail Loan</option>
                                                                  <option value="434">Ayaan Finserve India Private LTD</option>
                                                                  <option value="435">Aye Finance Pvt. Ltd.</option>
                                                                  <option value="436">Bajaj Housing Finance Limited</option>
                                                                  <option value="437">Belstar Microfinance Limited</option>
                                                                  <option value="438">Bharat Financial Inclusion Ltd</option>
                                                                  <option value="439">Centrum Microcredit Limited</option>
                                                                  <option value="440">CreditAccess Grameen - Retail Finance</option>
                                                                  <option value="441">CreditAccess Grameen - Microfinance</option>
                                                                  <option value="442">Criss Financial Holdings Ltd</option>
                                                                  <option value="443">Diwakar Finance</option>
                                                                  <option value="444">Dvara Kshetriya Gramin Financials Services Private Limited</option>
                                                                  <option value="445">Equitas SFB - Microfinance Loan</option>
                                                                  <option value="446">Equitas Small Finance Bank - Retail Loan</option>
                                                                  <option value="447">ESAF Small Finance Bank (Micro Loans)</option>
                                                                  <option value="448">Finova Capital Private Ltd</option>
                                                                  <option value="449">HDB Financial Services Limited</option>
                                                                  <option value="450">Hindon Mercantile Limited - Mufin</option>
                                                                  <option value="451">Hiranandani Financial Services Pvt Ltd</option>
                                                                  <option value="452">Home First Finance Company India Limited</option>
                                                                  <option value="453">IDF Financial Services Private Limited</option>
                                                                  <option value="454">IIFL Finance Limited</option>
                                                                  <option value="455">IIFL Home Finance</option>
                                                                  <option value="456">InCred</option>
                                                                  <option value="457">Dhani Loan &amp; Services Ltd</option>
                                                                  <option value="458">Indostar Home Finance Private Limited</option>
                                                                  <option value="459">Indostar Capital Finance Limited - CV</option>
                                                                  <option value="460">Indostar Capital Finance Limited - SME</option>
                                                                  <option value="461">Jain Motor Finmart</option>
                                                                  <option value="462">Janakalyan Financial Services Private Limited</option>
                                                                  <option value="463">John Deere Financial India Private Limited</option>
                                                                  <option value="464">Khush Housing Finance Pvt Ltd</option>
                                                                  <option value="465">Kotak Mahindra Prime Limited</option>
                                                                  <option value="466">Kotak Mahindra Bank Ltd.-Loans</option>
                                                                  <option value="467">LIC Housing Finance Limited</option>
                                                                  <option value="468">Light Microfinance Private Limited</option>
                                                                  <option value="469">Loan2Wheels</option>
                                                                  <option value="470">Mahaveer Finance India Limited</option>
                                                                  <option value="471">Mahindra and Mahindra Financial Services Limited</option>
                                                                  <option value="472">MDFC Financiers Pvt Ltd</option>
                                                                  <option value="473">Mitron Capital</option>
                                                                  <option value="474">MoneyTap</option>
                                                                  <option value="475">Muthoot Fincorp Ltd</option>
                                                                  <option value="476">Muthoot Money</option>
                                                                  <option value="477">Muthoot Housing Finance Company Limited</option>
                                                                  <option value="478">Muthoot Finance</option>
                                                                  <option value="479">Novelty Finance Ltd</option>
                                                                  <option value="480">Orange Retail Finance India Pvt Ltd</option>
                                                                  <option value="481">Pahal Financial Services Pvt Ltd</option>
                                                                  <option value="482">Pooja Finelease LTD</option>
                                                                  <option value="483">Rander Peoples Co Operative Bank Ltd</option>
                                                                  <option value="484">RMK Fincorp Pvt Ltd</option>
                                                                  <option value="485">RupeeCircle</option>
                                                                  <option value="486">Samasta Microfinance Limited</option>
                                                                  <option value="487">Sarvjan India Fintech Private Limited</option>
                                                                  <option value="488">SMEcorner</option>
                                                                  <option value="489">SMILE Microfinance Limited</option>
                                                                  <option value="490">Spandana Sphoorty Financial Ltd</option>
                                                                  <option value="491">StashFin</option>
                                                                  <option value="492">Tata Motors Finance Limited</option>
                                                                  <option value="493">Tata Capital Housing Finance Limited</option>
                                                                  <option value="494">Thazhayil Nidhi Ltd</option>
                                                                  <option value="495">TVS Credit</option>
                                                                  <option value="496">Ujjivan Small Finance Bank</option>
                                                                  <option value="497">Vistaar Financial services Private Limited</option>
                                                                  <option value="498">X10 Financial Services Limited</option>
                                                                  <option value="499">Yogakshemam Loans Ltd</option>
                                                                  <option value="500">Ziploan</option>
                                                                  <option value="501">Netafim Agricultural Financing Agency Pvt. Ltd.</option>
                                                                  <option value="502">Shubham Housing Development Finance Company Ltd</option>
                                                                  <option value="503">MCGM Water Department</option>
                                                                  <option value="504">DCBS Loan</option>
                                                                  <option value="505">Microscan Infocommtech Pvt. Ltd.</option>
                                                                  <option value="506">Reliance ARC</option>
                                                                  <option value="507">Google Play Recharge</option>
                                                                  <option value="508">Aadhaar Validation</option>
                                                                  <option value="509">DWAN Supports Private Ltd</option>
                                                                  <option value="510">Care India Finvest Limited</option>
                                                                  <option value="511">Electronica Finance Limited</option>
                                                                  <option value="512">Muthoot Homefin Limited</option>
                                                                  <option value="513">Spandana Rural And Urban Development Organisation</option>
                                                                  <option value="514">Suryoday Small Finance Bank</option>
                                                                  <option value="515">Limras Eronet</option>
                                                                  <option value="516">Linkio Fibernet</option>
                                                                  <option value="517"> SMC Finance: Moneywise Financial Services</option>
                                                                  <option value="520">Canara Bank FasTag</option>
                                                                  <option value="521">Life Insurance Corporation Of India (LIC)</option>
                                                                  <option value="522">NSB Networks Broadband</option>
                                                                  <option value="523">TIC FIBER</option>
                                                                  <option value="524">APAC Financial Services Pvt Ltd</option>
                                                                  <option value="525">NABFINS</option>
                                                                  <option value="526">Ekagrata Finance</option>
                                                                  <option value="527">Kings Broadband</option>
                                                                  <option value="528">Digiway Net</option>
                                                                  <option value="529">ICICI BANK - Interest Repayment Loans</option>
                                                                  <option value="530">Bussan Auto Finance India Pvt Ltd</option>
                                                                  <option value="531">MCGM Property Tax</option>
                                                                  <option value="532">Fortune Credit Capital Limited</option>
                                                                  <option value="533">Hindustan Times Media Ltd</option>
                                                                  <option value="534">Indian Oil Corporation Ltd-Piped Gas</option>
                                                                  <option value="535">BSES Rajdhani Prepaid Meter Recharge</option>
                                                                  <option value="536">BSES Yamuna Prepaid Meter Recharge</option>
                                                                  <option value="537">The Oriental Insurance Company Limited</option>
                                                                  <option value="538">State Bank of India - NETC FASTag</option>
                                                                  <option value="539">Karnataka Bank Fastag</option>
                                                                  <option value="540">Transcorp International Ltd</option>
                                                                  <option value="541">Airtel Payments Bank NETC FASTag</option>
                                                                  <option value="542">BSNL</option>
                                                          </select>
                                                        </div>
                      </div>

                      <div class="col-md-2">
                          <div class="form-group">
                              <label>Enter Customer No.</label>
                              <input type="text" name="number" class="form-control" value="" spellcheck="false" data-ms-editor="true">
                          </div>
                      </div>

                      <div class="col-md-1">
                          <div class="form-group">
                              <button type="submit" name="submit" class="btn btn-danger" style="margin-top: 31px;"><i class="fas fa-search"></i></button>
                          </div>
                      </div>

                  </div>
              </form>
              <!--================================== End of Filters ================================-->


                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>

      </div></section>
</div>

@endsection
