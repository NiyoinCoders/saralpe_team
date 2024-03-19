@extends('layouts.auth.app')
@section('title', 'Login')
@section('content')
    <section class="login-content">
        <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                            <div class="card-body">
                                <a href="javascript:void(0)" class="navbar-brand d-flex align-items-center mb-3">
                                    <!--Logo start-->
                                    <img src='{{ asset('assets/images/' . env('logo') . '') }}' style="width:48%;" />
                                </a>
                                <h2 class="mb-2 text-center">Sign In</h2>
                                <p class="text-center">Login to stay connected.</p>
                                <form method="POST" id="login-form" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div id="div-for-otp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-between">
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="customCheck1"
                                                    name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="customCheck1">
                                                    {{ __('Remember Me') }}</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        {{-- <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button> --}}
                                        <button type="button" id="sign-in" class="btn btn-primary">Sign in</button>
                                    </div>
                                    <p class="mt-3 text-center">
                                        Don’t have an account? <a href="{{ url('register') }}" class="text-underline">Click
                                            here to sign up.</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sign-bg">
                    <svg width="280" height="230" viewBox="0 0 431 398" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.05">
                            <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                            <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                            <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
                                transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                            <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                <img src="{{ asset('assets/images/auth/01.jpg') }}" class="img-fluid gradient-main animated-scaleX"
                    alt="images">
            </div>
        </div>
    </section>
@endsection
@section('login-javascript')
    <script>
        var checkField = 0;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#sign-in').on('click', function(event) {
            // alert('in function');
            event.preventDefault();
            $.ajax({
                url: '{{ route('user-verify') }}',
                method: 'POST',
                data: {
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                },
                // data: $(this).serialize(),
                success: function(response) {
                    // Handle successful login
                    // console.log(response);
                    toastr.success(response.message);
                    if (checkField == 0) {
                        appendDiv();
                    }
                },
                error: function(xhr) {
                    // Handle login error
                    toastr.error(xhr.responseJSON.message);
                }
            });
        });

        function appendDiv() {
            $('#div-for-otp').append(
                `
                <label for="otp" class="form-Flabel">OTP</label>
                <input type="text" maxlength="4" placeholder="Ex:0123" onkeyup="getOTP(this.value)" id="otp" name="otp" class="form-control numbersOnly">
                <h6>Otp Send On Our Whatsapp and Email</h6>`
            );
            $("#password").attr("readonly", true);
            $("#email").attr("readonly", true);
            $("#sign-in").text("Resend OTP");
            checkField = 1;
        }

        function getOTP(val) {
            // console.log(val);
            if (val.length == 4 && val != "Default text") {
                // alert('in');
                validateOTP(val);
            }
        }

        $('.numbersOnly').keyup(function() {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });

        function validateOTP(otp) {
            $.ajax({
                url: '{{ route('verify-otp') }}',
                method: 'POST',
                data: {
                    'otp': otp,
                    'email': $('#email').val(),
                },
                success: function(data, status, xhr) {
                    if (xhr.status === 200) {
                        toastr.success(xhr.responseJSON.message);
                        $('#login-form').submit();
                    }
                },

            });
        }
        // $('#otp').on('change', function() {
        // var inputValue = $(this).val(); // Get the value of the input field
        // alert(inputValue);
        // $('#displayText').text('Text: ' + inputValue); // Update the display text
        // Add any other logic you want to perform when the input changes.
        // });
    </script>
@endsection
