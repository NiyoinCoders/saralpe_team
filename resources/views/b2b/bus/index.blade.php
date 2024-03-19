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
                                <h4 class="card-title">OnLine Bus Booking</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <form method="POST" action="{{route('bus.availabletrips')}}">
                                @csrf
                            <div class="bussw ">
                                <div class="bussw_inner row">
                                    <div class="bussw_inputBox selectHtlCity  " style="border: none;">
                                        <label for="fromCity" class="lbl_input makeFlex column latoBold"><span
                                                data-cy="fromCity" class="appendBottom5">From</span>
                                                <input type="text" id="src" list="fromCity" name="src" value="" data-city="" placeholder="Type atleast 3 letters" class="form-control" autocomplete="off">
                                                @foreach ($cities as $citi)
                                                <input type="hidden" class="placeCode" id="srcId" name="srcId" value="3">
                                                @endforeach
                                                <datalist id="fromCity">
                                                    @foreach ($cities as $citi)


                                                    <option value="{{$citi->name}}">
                                                        @endforeach
                                                    {{-- <option value="New York">
                                                    <option value="Seattle">
                                                    <option value="Los Angeles">
                                                    <option value="Chicago"> --}}
                                                  </datalist>
                                            <p data-cy="fromCountryCode" class="code">India</p>
                                        </label>
                                    </div>
                                    <i class="fa fa-exchange" id="rotate" style="display: contents; font-size:22px;"></i>
                                    <div class="bussw_inputBox selectHtlCity  ">
                                        <label for="toCity" class="lbl_input latoBold makeFlex column"><span
                                                data-cy="toCity" class="appendBottom5">To</span>
                                                <input type="text" id="dest" list="toCity" name="dest" value="" data-city="" placeholder="Type atleast 3 letters" class="form-control" autocomplete="off">
                                                @foreach ($cities as $citi)
                                                <input type="hidden" class="placeCode" id="destId" name="destId" value="6">
                                                @endforeach
                                                <datalist id="toCity">
                                                    @foreach ($cities as $citi)


                                                    <option value="{{$citi->name}}">
                                                        @endforeach
                                                    {{-- <option value="New York">
                                                    <option value="Seattle">
                                                    <option value="Los Angeles">
                                                    <option value="Chicago"> --}}
                                                  </datalist>
                                            <p data-cy="toCountryCode" class="code">India</p>
                                        </label>
                                    </div>
                                    <div class="bussw_inputBox dayPickerRailWrap dates  ">
                                        <label for="travelDate" class="lbl_input latoBold makeFlex column"><span
                                                data-cy="travelDate" class="appendBottom5 downArrow">Travel Date</span>
                                            <div class="bd-example">
                                                <div class="input-group">
                                                    <input type="text" class="form-control vanila-datepicker"
                                                        placeholder="Date" name="date"
                                                        style='opacity: 1;font-size: 18px;font-family: "Lato", sans-serif;'>
                                                </div>
                                            </div>
                                            <p data-cy="departureDay" class="code">Saturday</p>
                                        </label>
                                    </div>
                                </div>
                                <p class="makeFlex vrtlCenter">
                                <div class="form-group">
                                    <div class="d-flex form-check form-check-inline justify-content-center btn_new_style"
                                        style="padding-left: 0;">
                                        <button type="submit" class="bg_gradient btn btn_style2 new_style">Search</button>
                                    </div>
                                </div>
                                </p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script>
        $(document).ready(function(){




                  $("#rotate").click(function(){var src=$("#src").val(),srcCode=$("#srcId").val(),dest=$("#dest").val(),destCode=$("#destId").val();$("#src").val(dest),$("#srcId").val(destCode),$("#dest").val(src),$("#destId").val(srcCode)});
    });

        </script>
@endsection
