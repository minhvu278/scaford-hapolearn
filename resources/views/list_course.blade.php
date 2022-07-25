@extends('layouts.app')
@section('content')
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        <div class="col-1 mr-5 filter">
                            <button class="filter-button"><i class="fa-solid fa-head-side-mask"></i>Filter</button>
                        </div>
                        <div class="col-6 search-xxx">
                            <input type="text" class="search-input">
                            <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        </div>
                        <div class="col-2">
                            <button class="btn-search">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 course-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('images/owl.png') }}" alt="">
                        </div>
                        <div class="col-9">
                            <div class="heading">HTML Fundamentals</div>
                            <div class="paragraph">
                                <p>Practice during lessons, practice between lessons, practice whenever you can.
                                    Master the task, then reinforce and test your knowledge with fun, hands-on exercises
                                    and interactive quizzes.
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn-more">More</button>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12">Courses</div>
                                <div class="col-lg-12">1,586</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12">Lessons</div>
                                <div class="col-lg-12">2,689</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12">Learners</div>
                                <div class="col-lg-12">16,882</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('images/owl.png') }}" alt="">
                        </div>
                        <div class="col-9">
                            <div class="heading">HTML Fundamentals</div>
                            <div class="paragraph">
                                <p>Practice during lessons, practice between lessons, practice whenever you can.
                                    Master the task, then reinforce and test your knowledge with fun, hands-on exercises
                                    and interactive quizzes.
                                </p>
                            </div>
                            <div class="btn-more">
                                <button>More</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12">Learners</div>
                                <div class="col-12">16,882</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12">Lesson</div>
                                <div class="col-12">2,689</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12">Times</div>
                                <div class="col-12">100 (h)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
