@extends('layouts.app')
@section('content')
    <section class="course">
        <div class="container list-course">
            <div class="row">
                <div class="col-1 mr-5 pl-0">
                    <button class="btn-filter">
                        <i class="fa-solid fa-arrow-down-wide-short"></i>
                        Filter
                    </button>
                </div>

                <div class="col-4 box-search">
                    <input type="text" class="input-search" placeholder="Search...">
                    <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <div class="col-1">
                    <button class="btn-search">
                        Search
                    </button>
                </div>
            </div>

            <div class="row list-item">
                @foreach($courses as $course)
                <div class="col-6 box-item">
                    <div class="row course-item">
                        <div class="col-3">
                            <img class="img-item" src="{{ asset('images/list-course.png')}}" alt="">
                        </div>

                        <div class="col-8 item-content">
                            <div class="item-title">
                                {{ $course->name }}
                            </div>
                            <div class="item-description">
                                {{ $course->description }}
                            </div>

                            <div>
                                <button class="btn-more">
                                    More
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-3">
                            <div class="course-learners">
                                Learners
                            </div>
                            <div class="course-number">
                                16,882
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="course-learners">
                                Learners
                            </div>
                            <div class="course-number">
                                16,882
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="course-learners">
                                Learners
                            </div>
                            <div class="course-number">
                                16,882
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 box-item">
                    <div class="row course-item">
                        <div class="col-3">
                            <img class="img-item" src="{{ asset('images/list-course.png')}}" alt="">
                        </div>

                        <div class="col-8 item-content">
                            <div class="item-title">
                                HTML Fundamentals
                            </div>
                            <div class="item-description">
                                Practice during lessons, practice between lessons, practice whenever you can. Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.
                            </div>

                            <div>
                                <button class="btn-more">
                                    More
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-3">
                            <div class="course-learners">
                                Learners
                            </div>
                            <div class="course-number">
                                16,882
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="course-learners">
                                Learners
                            </div>
                            <div class="course-number">
                                16,882
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="course-learners">
                                Learners
                            </div>
                            <div class="course-number">
                                16,882
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
