@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center login-title">{{ __('message.sign_up_to_HapoLearn') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12 d-flex">
                                    <label for="username"
                                           class="col-md-4 col-form-label text-md-left p-0 login-label">{{ __('message.user') }}</label>
                                </div>
                                <div class="col-md-12">
                                    <input id="username" type="text"
                                           class="form-control @error('username') is-invalid @enderror login-input"
                                           name="username" value="{{ old('username') }}" autocomplete="username"
                                           autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 d-flex">
                                    <label for="password" class="col-md-4 col-form-label text-md-left p-0 login-label">Email</label>
                                </div>
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror login-input"
                                           name="email" value="{{ old('email') }}">
                                    @error('email')
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
                                           name="password" autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 d-flex">
                                    <label for="password"
                                           class="col-md-8 col-form-label text-md-left p-0 login-label">{{ __('message.confirm') }}</label>
                                </div>
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password"
                                           class="form-control @error('password_confirm') is-invalid @enderror login-input"
                                           name="password_confirm" autocomplete="current-password">
                                    @error('password_confirm')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-submit">
                                        {{ __('message.sign_up') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
