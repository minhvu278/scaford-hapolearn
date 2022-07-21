@extends('layouts.app')
@section('content')
    <section class="banner d-flex align-items-center">
        <div class="container-fluid banner-wrap">
            <div class="row banner-heading">
                <div class="col-lg-5 col-md-6 ml-3 col-sm-12">
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
    <section class="course container-fluid">
        <div class="card-container container row">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-12">
                <div class="card-main card">
                    <div class="card-image card-left">
                        <img src="{{ $course->image }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">{{ $course->name }}</p>
                        <p class="card-text">{{ Str::limit($course->description, 60) }}</p>
                        <button class="card-btn">Take This Course</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <div class="other d-flex justify-content-center align-items-center">
        <p class="other-title">
            Other courses
        </p>
    </div>
    <section class="course container-fluid">
        <div class="card-container container row">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-12">
                    <div class="card-main card">
                        <div class="card-image card-left">
                            <img src="{{ $course->image }}" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{ $course->name }}</p>
                            <p class="card-text">{{ Str::limit($course->description, 60) }}</p>
                            <button class="card-btn">Take This Course</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="why-bg mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-7 offset-lg-1 offset-md-0 why-content mt-5">
                    <div class="row mt-lg-5">
                        <div class="col-lg-12 col-md-12 offset-lg-0 offset-md-5 col-sm-12">
                            <h4 class="why-heading">Why HapoLearn?</h4>
                            <div class="turn-laptop">
                                <img src="{{ asset('images/turn-laptop.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="why-list offset-lg-1 mr-md-5 offset-md-5">
                        <div class="why-item">
                            <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                        </div>
                        <div class="why-item">
                            <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                        </div>
                        <div class="why-item">
                            <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                        </div>
                        <div class="why-item">
                            <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                        </div>
                        <div class="why-item">
                            <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12">
                    <img src="{{ asset('images/laptop.png') }}" alt="why" class="why-img">
                </div>
            </div>
        </div>
    </section>
    <div class="feedback d-flex justify-content-center align-items-center">
        <p class="feedback-title">
            Feedback
        </p>
    </div>
    <div class="feedback-text d-flex justify-content-center align-items-center">
        <p class="feedback-content">What other students turned professionals have to say about us after learning with us
            and reaching their goals</p>
    </div>

    <div class="container">
        <div class="row slider">
            @foreach($reviews as $review)
            <div class="col-lg-12">
                <div class="card position-relative arrow-bottom">
                    <div class="card-body">
                        <p class="feedback-user">{{ $review->message }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 user">
                        <img class="img-user" src="{{ asset('images/img-feedback.png')}}" alt="">
                    </div>
                    <div class="col-10 info">
                        <p class="info-name">{{ $review->user->name }}</p>
                        <p class="info-language">{{ $review->course->name }}</p>
                        <div class="color-star">
                            @php
                                $stars = $review['rate'];
                            @endphp
                            @for($i = 0; $i < $stars ; $i++) <i class="fa-solid fa-star"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <section class="member-bg mt-5 d-flex">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="text">Become a member of our growing community!</p>
                </div>
                <button class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 member-button">
                    Start Learning Now!
                </button>
            </div>
        </div>
    </section>
    <div class="statistic d-flex justify-content-center align-items-center">
        <p class="statistic-title">
            Statistic
        </p>
    </div>

    <section class="container-fluid">
        <div class="row statistic-name align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">Courses</div>
                    <div class="col-lg-12 statistic-number">{{ $coursesCount }}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">Lessons</div>
                    <div class="col-lg-12 statistic-number">{{ $lessonsCount }}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">Learners</div>
                    <div class="col-lg-12 statistic-number">{{ $learners }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
