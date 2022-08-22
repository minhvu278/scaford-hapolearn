@extends('layouts.app')
@section('content')
    <div class="container-fluid profile">
        <div class="row justify-content-center">
            <div class="col-md-3 profile-left">
                <div class="infor">
                    <div class="first-infor">
                        <div class="avatar-img">
                            @if (is_null(auth()->user()->avatar))
                                <img class="avatar" src="{{ asset('images/default.jpg') }}" alt="">
                            @else
                                <img class="avatar" src="{{ asset(auth()->user()->avatar) }}" alt="">
                            @endif
                            <i id="uploadBtn" class="fa-solid fa-camera"></i>
                        </div>
                        <div class="name">{{ auth()->user()->name}}</div>
                        <div class="email">{{ auth()->user()->email}}</div>
                    </div>
                    <div class="detail-infor">
                        <ul class="detail-infor-item">
                            <li class="item-card">
                                <p> <span class="font-birth"><i class="fa-solid fa-cake-candles"></i></span>{{ auth()->user()->birthday}}</p>
                            </li>
                            <li class="item-card">
                                <p> <span class="font-phone"><i class="fa-solid fa-phone"></i></span>{{ auth()->user()->phone}}</p>
                            </li>
                            <li class="item-card">
                                <p> <span class="font-address"><i class="fa-solid fa-house-chimney"></i></span> {{ auth()->user()->address}}
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="infor-description">
                        <p>{{ auth()->user()->intro}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 profile-right">
                <div class="title-course">
                    <p class="title-main">{{ __('profile.my_courses') }}</p>
                    <p class="line"></p>
                </div>
                <div class="courses-list">

                </div>
                <div class="title-profile">
                    <p class="title-main">{{ __('profile.edit_profile') }}</p>
                    <p class="line"></p>
                </div>
                <div class="form-profile">
                    <form action="{{ route('profiles.update', [auth()->id()]) }}" method="POST" class="form-profile" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-form-label text-md-left p-0 title-label">{{ __('profile.name') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror name-input" name="name"
                                               value="" autocomplete="name" placeholder="Your name...">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-md-4 col-form-label text-md-left p-0 title-label">{{ __('profile.date_of_birth') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="birthdate" type="date"
                                               class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                                               value="" autocomplete="date_of_birth"
                                               placeholder="dd/mm/yyyy">
                                        @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="address"
                                               class="col-md-4 col-form-label text-md-left p-0 title-label">{{ __('profile.address') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="address" type="text"
                                               class="form-control @error('address') is-invalid @enderror" name="address"
                                               value="" autocomplete="address"
                                               placeholder="Your address...">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control upload-avatar hidden" type="file" name="avatar"
                                               id="uploadInput">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-left p-0 title-label">Email</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="email" type="text"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="" autocomplete="email" placeholder="Your email...">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone"
                                               class="col-md-4 col-form-label text-md-left p-0 title-label">{{ __('profile.phone') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="phone" type="text"
                                               class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               value="" autocomplete="phone" placeholder="Your phone...">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="about_me"
                                               class="col-md-4 col-form-label text-md-left p-0 title-label">{{ __('profile.intro') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                    <textarea id="about_me"
                                              class="form-control @error('intro') is-invalid @enderror about-textarea"
                                              name="intro" autocomplete="intro"
                                              placeholder="About you..."></textarea>
                                        @error('intro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-submit btn-update">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
