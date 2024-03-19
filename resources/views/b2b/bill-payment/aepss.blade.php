@extends("layouts.app")
@section("content")

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                <img src="{{ asset('assets/images/avatars/01.png') }}" alt="User-Profile"
                                    class="theme-color-default-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('assets/images/avatars/avtar_1.png') }}" alt="User-Profile"
                                    class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('assets/images/avatars/avtar_2.png') }}" alt="User-Profile"
                                    class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('assets/images/avatars/avtar_4.png') }}" alt="User-Profile"
                                    class="theme-color-green-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('assets/images/avatars/avtar_5.png') }}" alt="User-Profile"
                                    class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('assets/images/avatars/avtar_3.png') }}" alt="User-Profile"
                                    class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Aeps Services</h4>
                                <span> - Fino Payment Bank</span>
                            </div>
                        </div>
                        <ul class="d-flex nav nav-pills mb-0 text-center profile-tab nav-slider" data-toggle="slider-tab" id="profile-pills-tab" role="tablist" style="top: 18px;">
                            {{-- <li class="nav-item" role="presentation" >
                               <a class="nav-link show active" data-bs-toggle="tab" href="#profile-feed" role="tab" aria-selected="true">Withdral</a>
                            </li>
                            <li class="nav-item" role="presentation">
                               <a class="nav-link" data-bs-toggle="tab" href="#profile-activity" role="tab" aria-selected="false" tabindex="-1">Balance Inqure</a>
                            </li>
                            <li class="nav-item" role="presentation">
                               <a class="nav-link" data-bs-toggle="tab" href="#profile-friends" role="tab" aria-selected="false" tabindex="-1">Mini Sataement</a>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                               <a class="nav-link show active" data-bs-toggle="tab" href="#profile-profile" role="tab" aria-selected="false" tabindex="-1">Addhar Pay</a>
                            </li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9" style="margin: auto;">
            <div class="profile-content tab-content">
                <div id="profile-profile" class="tab-pane fade active show" role="tabpanel">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">

                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{route('apesservies')}}">
                                @csrf
                                <div class="card p-3">

                                    <div class="card-body bg_gradient p-3 mt-3 radius_4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pluspay"
                                                id="inlineRadio5" value="Mantra">
                                            <label class="form-check-label form-check-label2"
                                                for="inlineRadio5">Mantra</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pluspay"
                                                id="inlineRadio6" value="Morpho">
                                            <label class="form-check-label form-check-label2"
                                                for="inlineRadio6">Morpho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pluspay"
                                                id="inlineRadio7" value="Startek">
                                            <label class="form-check-label form-check-label2"
                                                for="inlineRadio7">Startek</label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-select mb-3 shadow-none" name="operator">
                                                    <option selected="">Select Your Operator</option>
                                                    <option value="1">ICICI</option>
                                                    <option value="2">PAYTM</option>
                                                    <option value="3">AXIS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="adharno">Adhar No</label>
                                                <input type="text" class="form-control" id="adharno" name="adharno"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    placeholder="12 Digit Adhar No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">Mobile No</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    placeholder="Mobile No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="number" class="form-control" id="amount" name="amount">
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="col-md-12 mb-3">
                                                <label for="type">Biometrics<span class="required">*</span></label>
                                                <div class="fingerprint" style="border: 1px solid black;width:150px;min-height:120px;text-align:center">
                                                   <img src="{{ asset('assets/images/fingerprint.png') }}" style="height:100px;padding-top: 8px;display:" id="fingerprint1">
                                                </div>
                                             </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="inlineRadio8" value="Mantra">
                                                    <label class="form-check-label" for="inlineRadio8"
                                                        style="font-size: 13px;">Agree T&C of ICICI Bank Limited</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="d-flex form-check form-check-inline"
                                                    style="padding-left: 0;">
                                                    <button type="submit" class="bg_gradient btn btn_style2">Submit
                                                        Transaction</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

    </div>
</div>

<script>
    function capture(fingerImgToDisplay) {

        $(fingerImgToDisplay).show()
        $(fingerImgToDisplay).attr("src", "./scanning.gif");



        setTimeout(function(){
            var quality = 60; //(1 to 100) (recommended minimum 55)
    var timeout = 10; // seconds (minimum=10(recommended), maximum=60, unlimited=0)
    var res = CaptureFinger(quality, timeout);
    console.log(fingerImgToDisplay)


        $(fingerImgToDisplay).show()
            $('#progress').hide()
            $(fingerImgToDisplay).attr("src", "data:image/bmp;base64," + res.data.BitmapData);

        },1000)

    }
    </script>


@endsection
