@extends('layouts.app')

@section('content')
    <section class="container-fluid position-relative banner">
        <div class="position-absolute">
            <div class="row">
                <div class="col-4 col-sm-12 col-content">
                    <div class="banner-heading">
                        <p class="banner-slogan">
                            Learn Anytime, Anywhere
                            <span class="slogan-title">at Hapo Learn <img class="banner-owl"
                                                                          src="{{ asset('images/owl.png') }}"
                                                                          alt="At Hapo"> !</span>
                        </p>
                    </div>
                    <div class="banner-text">
                        <p class="paragraph">
                            Interactive lessons, "on-the-go"
                            practice, peer support.
                        </p>
                    </div>
                    <button class="banner-button">
                        Start Learning Now!
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-grey"></div>
@endsection


