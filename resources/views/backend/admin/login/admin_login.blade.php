@extends('backend.register_login')

@section('title')
    E-Commerce Website
    @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" style="margin-top: 50px">
                <div class="header-logo">
                    <a href="/">
{{--                        <img src="{{ asset('/') }}assets/admin_resources/img/logo_gov.png" class="mb-4 mx-auto d-block" alt="" style="width: 93px;height: 93px;">--}}
                    </a>
                </div>
                <div class="card" style="border-color: deepskyblue">

                    <div class="card-header text-white text-center" style="background-color: deepskyblue;font-size: 16px;font-weight: 100"><strong>{{ __('ADMIN LOGIN') }}</strong></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.loginCheck') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                        <label class="form-check-label" for="remember">--}}
{{--                                            {{ __('Remember Me') }}--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn text-white" style="background-color: deepskyblue;">
                                        {{ __('Login') }}
                                    </button>

{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
                                </div>
                            </div>

                            <div class="form-group row mt-2 mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <label>Don't have an Account?</label>
                                    <a href="{{route('admin.register')}}" class="ml-1" style="color: deepskyblue">
                                        {{ __('Register Now') }}
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

{{--$admin = new App\Admin();--}}
{{--$admin->password = Hash::make('super.admin@gmail.com');--}}
{{--$admin->email = 'super.admin@gmail.com';--}}
{{--$admin->role = '1';--}}
{{--$admin->name = 'Super Admin';--}}
{{--$admin->save();--}}
