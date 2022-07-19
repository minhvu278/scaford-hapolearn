@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center login-location">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header login-title">{{ __('message.sign_in_title') }}</div>

                @if (session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12 d-flex">
                                <label for="username"
                                        class="col-md-4 col-form-label text-md-left p-0 login-label">{{ __('message.user') }}</label>
                            </div>
                            <div class="col-md-12">
                                <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror login-input"
                                        name="username"
                                        value="{{ old('username') }}" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 d-flex">
                                <label for="password"
                                        class="col-md-4 col-form-label text-md-left p-0 login-label">{{ __('message.password') }}</label>
                            </div>
                            <div class="col-md-12">
                                <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror login-input"
                                        name="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 d-flex justify-content-between">
                                <button type="submit" class="btn btn-submit">
                                    {{ __('message.sign_in') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forgot-password" href="{{ route('password.request') }}">
                                        {{ __('message.forgot_password') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 sign-with">
                                <p class="title-google">{{ __('message.sign_in_witch') }}</p>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mt-4 mb-4">
                            <div class="col-md-10">
                                <button class="account-google">
                                    <i class="fa-brands fa-google-plus-g"></i>
                                    Google
                                </button>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 sign-with model-register">
                                <p class="title-google title-register">{{ __('message.sign_up_to_HapoLearn') }}</p>
                            </div>
                        </div>
                        <div class="from-group row mt-5 justify-content-center">
                            <a href="{{ route('register') }}" class="btn btn-register">
                                {{ __('message.create_new_account') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
