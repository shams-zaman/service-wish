{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Register As:') }}</label>

                                <div class="col-md-6">
                                    <select id="type" type="text" class="form-control @error('type') is-invalid @enderror"
                                        name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>
                                        <option value="user">User</option>
                                        <option value="agency">Agency</option>
                                    </select>

                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}




<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Volt - Free Bootstrap 5 Dashboard</title>

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('backend/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('backend/css/volt.css') }}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    @livewireStyles

</head>

<body class="bg-soft">
    <main>

        <!-- Section -->
        <section class="vh-lg-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image"
                    data-background-lg="{{ asset('backend/assets/img/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div
                            class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <div class="d-flex justify-content-center  flex-row bd-highlight mb-3">
                                    <span class="p-2 btn btn-dark bd-highlight">Step-1</span>
                                    <span style="color: grey" class="p-2 bd-highlight">Step-2 </span>
                                    <span style="color: grey" class="p-2 bd-highlight">Step 3</span>
                                </div>
                                {{-- <button type="submit" class="btn btn-block btn-primary">Create Account</button> --}}
                                <h1 class="mb-0 h3">Create Account</h1>

                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Your name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span
                                                class="fas fa-envelope"></span></span>
                                        {{-- <input type="email" class="form-control" placeholder="example@company.com"
                                            id="email" autofocus required> --}}
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email">Your name</label>
                                    <div class="input-group">

                                        {{-- <input type="email" class="form-control" placeholder="example@company.com"
                                            id="email" autofocus required> --}}
                                        <select id="type" type="text"
                                            class="form-select @error('type') is-invalid @enderror" name="type"
                                            value="{{ old('type') }}" required autocomplete="type" autofocus>
                                            <option value="user">User</option>
                                            <option value="agency">Agency</option>
                                        </select>

                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span
                                                class="fas fa-envelope"></span></span>

                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon4"><span
                                                    class="fas fa-unlock-alt"></span></span>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-3">
                                        <label for="confirm_password">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon5"><span
                                                    class="fas fa-unlock-alt"></span></span>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </form>

                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    Already have an account?
                                    <a href="./sign-in.html" class="font-weight-bold">Login here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
    <script src="{{ asset('backend/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('backend/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('backend/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('backend/vendor/jarallax/dist/jarallax.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('backend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Count up -->
    <script src="{{ asset('backend/vendor/countup.js/dist/countUp.umd.js') }}"></script>

    <!-- Notyf -->
    <script src="{{ asset('backend/vendor/notyf/notyf.min.js') }}"></script>

    <!-- Charts -->
    <script src="{{ asset('backend/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('backend/vendor/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Github buttons -->
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}

    <!-- Volt JS -->
    <script src="{{ asset('backend/assets/js/volt.js') }}"></script>

    @livewireScripts
</body>

</html>
