@extends("layouts.app")
@section('styles')
    <style>
        .slider {
            width: 90%;
            margin: 100px auto;
        }
        .slick-slide {
            margin: 0px 20px;
        }
        .slick-slide img {
            width: 100%;
        }
        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }
        .slick-active {
            opacity: .5;
        }
        .slick-current {
            opacity: 1;
        }
        .slick-prev:before,
        .slick-next:before {
            color: #3482f5 !important;
        }
        .slick-center .currents {
            font-size: 12px;
            background: #3482f5;
            color: white;
            height: 50px;
            display: flex;
            align-items: center;
        }
        .slick-slide {
            font-size: 12px;
            height: 50px;
            display: flex !important;
            align-items: center;
            padding: 0 7px;
        }
        .slick-arrow {
            display: block;
            height: 50px;
            width: 38px;
            border: 1px solid lightgrey;
            background-color: white;
            z-index: 99;
        }
        .noUi-target {
            background: none;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .slick-list.draggable {
            bottom: 23px;
        }
        .slick-arrow:hover {
            background-color: white;
        }
        .borders {
            background: transparent;
            width: 95%;
            height: 50px;
            position: absolute;
            left: 26px;
            top: 56.3%;
            border: 1px solid lightgrey;
            border-radius: 4px;
        }
        button.slick-next.slick-arrow {
            border-right: none;
            border-radius: 0 4px 4px 0;
        }
        button.slick-prev.slick-arrow {
            border-radius: 4px 0 0 4px;
        }
        .slick-slide {
            margin: 0px 10px;
            width: 85px !important;
            padding: 0 8px;
            text-align: center;
        }
    </style>
@endsection
@section("content")
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div id="content" style="padding-top: 20px;">
        <section class="container">
            <div class="row">
                <div class="col-md-12 mt-4 mt-md-0">
                    <div class="py-4">
                        <div class="p-3 text-center bg-white shadow-md rounded ">
                            <form id="bookingBus" method="get" >
                                <div class="row align-item-center">
                                    <div class="col-lg-4 form-group mb-0">
                                        <input type="text" class="form-control" id='source_name' name="source_name"  required="" placeholder="From">
                                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> 
                                    </div>
                                    <div class="col-lg-4 form-group mb-0">
                                        <input type="text" class="form-control" name="destination_name" id="busTo"  required="" placeholder="To">
                                        <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> 
                                    </div>
                                    <div class="col-lg-2 form-group mb-0">
                                        <input id="busDepart" type="text" class="form-control form-control vanila-datepicker datepicker-input" autocomplete='off' required=""  name='date_of_journey' placeholder="Depart Date">
                                        <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> 
                                    </div>
                                    <div class="col-lg-2 form-group mb-0">
                                        <button class="btn btn-danger btn-sm rounded-0 btn-block" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            <input type='hidden' name='encdata' value='BY5au57KXTLPCOzKohpPjWl291Zp4lLPyzVfvH2isJGlQj5BWUxKt5mbRZgTk69FQwZpf0Pf+TuMuxysxSIoFfz\/5iO5X8YBkboTO8m1LR1UkPeEXFITMTWYP4K4zV7XIASlTncwc2+eJerIM11u9X8ZcyWUdGnpYvqnBb3Bntc='>
                            <!--<input type='hidden' name='refid' value=''>-->
                                                                <h2 class="text-6 mb-0 mt-3">Hyderabad <small class="mx-2">to</small>Bangalore</h2>
                                                            </div>
                                                        <div class="text-1 py-2 px-3 mb-3 bg-white shadow-md rounded ">
                            <div class="row">
                                <div class="col col-sm-3 text-center"><h5>Operators</h5></div>
                                <div class="col col-sm-2 text-center"><h5>Departure</h5></div>
                                <div class="col col-sm-1 text-center"><h5>Duration</h5></div>
                                <div class="col col-sm-2 text-center"><h5>Arrival</h5></div>
                                <div class="col col-sm-2 text-center"><h5>Seats Available</h5></div>
                                <div class="col col-sm-2 text-center"><h5>Price</h5></div>
                            </div>
                        </div>
                        <div class="bus-list">
                                                                <div class="bus-item border-light border bg-white shadow-md rounded ">
                                <div class="row align-item-top mb-3 flex-row px-3 mt-3">
                                    <div class="col col-sm-3"> <span class="text-3 text-dark operator-name font-weight-bolder">Volvo A/C Sleeper (2+2)</span> <small class="text-1 text-muted d-block">Hyderabad-Kurnool-Bangalore</small> </div>
                                    <div class="col col-sm-2 text-center time-info"><span class="h5 text-dark">6:52 AM<br><small class="text-danger">07, Jun</small></span> <small class="text-muted d-block">Ameerpet</small> </div>
                                    <div class="col col-sm-1 text-center time-info"><span class="text-3 duration">26:08 hrs</span> </div>
                                    <div class="col col-sm-2 text-center time-info"><span class="h5 text-dark">9:00 AM<br><small>08, Jun</small></span> <small class="text-muted d-block">Agara</small> </div>
                                    <div class="col col-sm-2 text-center time-info"><span class="text-4 text-dark">28 <small class="text-muted">Seats available</small></span></div>
                                    <div class="col col-sm-2 text-center">
                                        <div class="d-inline-block d-sm-block text-dark  price mb-sm-1">Start From <br> INR <span class='h5 text-bolder'>31.50</span></div>
                                        <button class="btn btn-sm btn-danger shadow-md rounded-0 modal-trip" 
                                            data-trip="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"
                                            ><i class="fas fa-ellipsis-h d-none d-sm-block d-lg-none" data-toggle="tooltip"  title="Select Seats"></i> <span class="d-block d-sm-none d-lg-block" id="btn_select_seat" data-test-id="select-seats">Select Seats</span></button>
                                            <a class="sc-jKJlTe bPClQZ" id="btn_hide_seat" data-test-id="select-seats" style="display: none; margin-top: 5px;">Hide Seats</a>
                                    </div>
                                </div>
                                <div class="row">
                                <div id="seats-data" style="display: none;" class="col-sm-12">
                                    <div class="seatMapContainer detailsPopup makeRelative colorWhiteSmoke">
                                        <div class="makeFlex details-container spaceBetween">
                                            <div class="row">
                                            <div class="makeFlex column col-md-6">
                                                <p class="font16 blackText latoBlack appendBottom15">Select Pickup &amp; Drop Points
                                                </p>
                                                <div class="makeFlex">
                                                    <div class="pickupPoint animateWidth makeFlex column fullwidth">
                                                        <ul class="btnSelectBus">
                                                            <li class="selected makeFlex spaceBetween sc-cMljjf hISbyd"
                                                                data-test-id="21726393"><span
                                                                    class="makeFlex font12 column blackText"><span
                                                                        class="latoBold appendBottom10"><span>21:00</span><span
                                                                            class="capText">,&nbsp;13 Dec</span></span><span
                                                                        class="latoBold appendBottom5">Others</span><span
                                                                        class="bus-stop-address"> Shatabdi travels shop no.14
                                                                        Morigate Bus Tarminal Opp Mandir wali parking Near Kashmiri
                                                                        gate Metro station gate no 2
                                                                    </span></span><img class="sc-jAaTju hyUDU"
                                                                    src="data:image/png;base64,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">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pickupPoint animateWidth makeFlex column fullwidth">
                                                        <ul class="btnSelectBus">
                                                            <li class="selected makeFlex spaceBetween sc-cMljjf hISbyd"
                                                                data-test-id="19029894"><span
                                                                    class="makeFlex font12 column blackText"><span
                                                                        class="latoBold appendBottom10"><span>05:00</span><span
                                                                            class="capText">,&nbsp;14 Dec</span></span><span
                                                                        class="latoBold appendBottom5">Faizalganj</span><span
                                                                        class="bus-stop-address"> Fazalganj </span></span><img
                                                                    class="sc-jAaTju hyUDU"
                                                                    src="data:image/png;base64,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">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-jlyJG kzGtHG col-md-6" data-test-id="seatmap">
                                                <div class="makeFlex spaceBetween appendBottom15"><span
                                                        class="font16 latoBlack blackText pushLeft">Select Seats</span>
                                                    <div
                                                        class="pushRight latoBold font8 deepskyBlueText capText pointer makeRelative">
                                                        <img class="ic-seat-booked"
                                                            src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-seat-booked.789ec461.svg"
                                                            alt=""> INFO</div>
                                                </div>
                                                <div class="makeFlex hrtlCenter negative-margin"><span class="berth-name">UPPER
                                                        BERTH</span>
                                                    <div class="sc-jWBwVP jvaXlp" data-deck-type="UPPER">
                                                        <div class="sc-brqgnP kpbvII" style="width: 390px; height: 161.85px;">
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 0px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 0px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 0px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 78px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 78px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 78px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 156px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 156px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 156px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 234px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 234px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 234px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 312px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 312px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 312px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="makeFlex hrtlCenter negative-margin"><span class="berth-name">LOWER
                                                        BERTH</span>
                                                    <div class="sc-jWBwVP jvaXlp" data-deck-type="LOWER">
                                                        <div class="makeFlex makeRelative"><img class="ic-steering-wheel"
                                                                src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/steering-wheel.76ed628a.svg">
                                                        </div>
                                                        <div class="sc-brqgnP kpbvII" style="width: 390px; height: 161.85px;">
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 0px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 0px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 0px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 78px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 78px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 78px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 156px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 156px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 156px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 234px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 234px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 234px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 312px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 312px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                            <div data-testid="seat_horizontal_sleeper_available"><img
                                                                    src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg"
                                                                    alt="" class="seat-icon"
                                                                    style="left: 312px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="makeFlex blackText spaceBetween appendTop10 appendBottom18">
                                                    <div class="makeFlex column font14"><span
                                                            class="latoBlack appendBottom10">Seats Selected</span><span
                                                            class="latoItalic font14 darkGreyText">No seats selected yet</span>
                                                    </div>
                                                </div>
                                                <div class="cta-book-seats font16 capText makeFlex hrtlCenter vrtlCenter ">
                                                    <span>BOOK SEATS</span></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                                                </div>
                                <div class="row align-items-sm-center flex-row px-3">
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link" id="first-tab0" data-id='#first0' href='javascript:void(0)'>Boarding & Dropping Points</a> </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane bg-light p-3 fade" id="first0" role="tabpanel" aria-labelledby="first-tab0">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-left font-weight-bolder my-4 px-3">BOARDING POINT</h6>
                                                <div class="row">
                                                                                                                <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <p class='p-3 mb-0 border-bottom border-light'><strong>6:52 AM<br><small>07, Jun</small></strong></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class='p-3 mb-0 border-bottom border-light'><span class="ml-2">Ameerpet(affafafaf)</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                            </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-left font-weight-bolder my-4 px-3">DROPPING POINT</h6>
                                                <div class="row">
                                                                                                                
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <p class='p-3 mb-0 border-bottom border-light'><strong>9:00 AM<br><small>08, Jun</small></strong></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class='p-3 mb-0 border-bottom border-light'><span class="ml-2">Agara (Pickup Bus)(Agara)</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                                <div class="bus-item border-light border bg-white shadow-md rounded ">
                                <div class="row align-item-top mb-3 flex-row px-3 mt-3">
                                    <div class="col col-sm-3"> <span class="text-3 text-dark operator-name font-weight-bolder">Volvo A/C Sleeper (2+2)</span> <small class="text-1 text-muted d-block">Hyderabad-Kurnool-Bangalore</small> </div>
                                    <div class="col col-sm-2 text-center time-info"><span class="h5 text-dark">8:00PM<br><small class="text-danger">07, Jun</small></span> <small class="text-muted d-block">Abids</small> </div>
                                    <div class="col col-sm-1 text-center time-info"><span class="text-3 duration">10:00 hrs</span> </div>
                                    <div class="col col-sm-2 text-center time-info"><span class="h5 text-dark">6:00 AM<br><small>08, Jun</small></span> <small class="text-muted d-block">Koramangala</small> </div>
                                    <div class="col col-sm-2 text-center time-info"><span class="text-4 text-dark">28 <small class="text-muted">Seats available</small></span></div>
                                    <div class="col col-sm-2 text-center">
                                        <div class="d-inline-block d-sm-block text-dark  price mb-sm-1">Start From <br> INR <span class='h5 text-bolder'>12.60</span></div>
                                        <button class="btn btn-sm btn-danger shadow-md rounded-0 modal-trip" 
                                            data-trip="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"
                                            ><i class="fas fa-ellipsis-h d-none d-sm-block d-lg-none" data-toggle="tooltip" title="Select Seats"></i> <span class="d-block d-sm-none d-lg-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Select Seats</span></button>
                                    </div>
                                </div>
                                <div class="row align-items-sm-center flex-row px-3">
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link" id="first-tab1" data-id='#first1' href='javascript:void(0)'>Boarding & Dropping Points</a> </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane bg-light p-3 fade" id="first1" role="tabpanel" aria-labelledby="first-tab1">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <h6 class="text-left font-weight-bolder my-4 px-3">BOARDING POINT</h6>
                                                <div class="row">
                                                                                                                <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <p class='p-3 mb-0 border-bottom border-light'><strong>8:00PM<br><small>07, Jun</small></strong></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class='p-3 mb-0 border-bottom border-light'><span class="ml-2">Abids(Kukatpalli, testing)</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                            </div>
                                            </div>                                 </div>
</div></div></div></div></div></div></div></section></div></div>


@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".center").slick({
                dots: false,
                infinite: true,
                centerMode: true,
                slidesToShow: 7,
                slidesToScroll: 3,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        });
        $('#btn_select_seat').click(function() {
            $(this).hide();
            $('#seats-data').show();
            $('#btn_hide_seat').show();
        });
        $('#btn_hide_seat').click(function() {
            $(this).hide();
            $('#seats-data').hide();
            $('#btn_select_seat').show();
        });
    </script>
@endsection
