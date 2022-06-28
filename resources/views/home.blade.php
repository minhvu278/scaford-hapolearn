@extends('layouts.app')
@section('content')
    <section class="banner d-flex align-items-center">
        <div class="container-fluid banner-wrap">
            <div class="row banner-heading">
                <div class="col-lg-5 col-md-6 ml-3 col-sm-12 ">
                    <p class="banner-title">Learn Anytime, Anywhere
                        <span class="banner-title title-weight">at HapoLearn
                    <img class="banner-image" src="{{ asset('images/owl.png') }}"
                         alt="HapoLearn Logo"> !
                </span>
                    </p>
                    <div class="row">
                        <p class="col-lg-6 col-md-7 col-sm-3 paragraph">Interactive lessons, "on-the-go"
                            practice, peer support.
                        </p>
                    </div>
                    <button class="banner-button"> Start Learning Now!</button>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-gray"></div>
@endsection
