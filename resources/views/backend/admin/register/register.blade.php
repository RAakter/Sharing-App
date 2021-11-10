@extends('backend.register_login')

@section('title')
    E-Commerce Website
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="header-logo">
                    <a href="/">
{{--                        <img src="{{ asset('/') }}assets/admin_resources/img/logo_gov.png" class="mb-4 mx-auto d-block" alt="" style="width: 93px;height: 93px;">--}}
                    </a>
                </div>
                <div class="card" style="border-color: deepskyblue">
                    <div class="card-header text-white text-center" style="background-color: deepskyblue;font-size: 16px;font-weight: 100"><strong>{{ __('ADMIN REGISTER') }}</strong></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('save.register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
                                    <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus>

                                    @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
                                    <textarea id="Address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" autofocus>{{ old('address') }}</textarea>

                                    @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
{{--                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}
                                    <select id="role" class="form-control" name="role">
                                        <option selected disabled>Please select Account type</option>
                                        <option value="1" selected>Admin</option>
                                    </select>

                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<span style="color: red"> *</span></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn text-white" style="background-color: deepskyblue">
                                        {{ __('Register') }}
                                    </button>
                                    <p class="mt-2 mb-0" style="color: red">* Required fields</p>
                                </div>
                            </div>

                            <div class="form-group row mt-2 mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <label>Already have an Account?</label>
                                    <a href="{{route('admin.login')}}" class="ml-1" style="color: deepskyblue">
                                        {{ __('Login Now') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
