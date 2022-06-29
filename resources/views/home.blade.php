@extends('layouts.app')

@section('content')
    <section class="course container-fluid">
        <div class="card-container container row">
            <div class="col-lg-4 col-md-12">
                <div class="card-main card">
                    <div class="card-image card-left">
                        <img src="{{ asset('images/html-css.png')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">HTML/CSS/js Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML,
                            JS, and CSS before entering New Media. I had coded quite a bit,
                            but never touched anything in regards to web development.</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card-main card">
                    <div class="card-image card-center">
                        <img src="{{ asset('images/laravel.png') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">LARAVEL Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML,
                            JS, and CSS before entering New Media. I had coded quite a bit,
                            but never touched anything in regards to web development.</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card-main card">
                    <div class="card-image card-right">
                        <img src="{{asset('images/php.png')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">PHP Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML,
                            JS, and CSS before entering New Media. I had coded quite a bit,
                            but never touched anything in regards to web development.</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="other d-flex justify-content-center align-items-center">
        <p class="other-title">
            Other courses
        </p>
    </div>
    <section class="course container-fluid">
        <div class="card-container container row">
            <div class="col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-left">
                        <img src="{{ asset('images/css.png')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">CSS Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS
                            before entering New Media,...</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-center">
                        <img src="{{ asset('images/rails.png') }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">Ruby on rails Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML, JS,
                            and CSS before entering New Media,...</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            <div class="card-col col-lg-4">
                <div class="card-main card">
                    <div class="card-image card-right">
                        <img src="{{asset('images/java.png')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">Java Tutorial</p>
                        <p class="card-text">I knew hardly anything about HTML, JS,
                            and CSS before entering New Media,...</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
