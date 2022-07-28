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
                <div class="container filter-content">
                    <span>Lọc theo</span>
                    <div>
                        <a class="filter-new" href="#">Mới nhất</a>
                        <a class="filter-old" href="#">Cũ nhất</a>
                        <span class="filter-option-container">
                        <span>Teacher</span>
                        <ul class="filter-option">
                            <li><a href="#">Giáo viên A</a></li>
                            <li><a href="#">giáo viên B</a></li>
                            <li><a href="#">Giáo viên C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                        <span class="filter-option-container">
                        <span>Số người học</span>
                        <ul class="filter-option">
                            <li><a href="#">Sinh viên A</a></li>
                            <li><a href="#">Sinh viên B</a></li>
                            <li><a href="#">Sinh viên C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                        <span class="filter-option-container">
                        <span>Thời gian học</span>
                        <ul class="filter-option">
                            <li><a href="#">Thời gian a</a></li>
                            <li><a href="#">Thời gian B</a></li>
                            <li><a href="#">Thời gian C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                        <span class="filter-option-container">
                        <span>Số bài học</span>
                        <ul class="filter-option">
                            <li><a href="#">Tăng dần</a></li>
                            <li><a href="#">Giảm dần</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                        <span class="filter-option-container">
                        <span>Tags</span>
                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                          <option value="AL">Alabama</option>
                            ...
                          <option value="WY">Wyoming</option>
                        </select>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                        <span class="filter-option-container">
                        <span>Reviews</span>
                        <ul class="filter-option">
                            <li><a href="#">Giáo viên A</a></li>
                            <li><a href="#">giáo viên B</a></li>
                            <li><a href="#">Giáo viên C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                    </div>
                </div>
            </div>
            <div class="row list-item ">
                @foreach($courses as $course)
                    <div class="col-6 mb-4">
                        <div class="row">
                            <div class="col-11 box-item">
                                <div class="row course-item">
                                    <div class="col-3">
                                        <img class="img-item" src="{{ $course->image }}" alt="">
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
                                            {{ $course->learners }}
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="course-learners">
                                            Lessons
                                        </div>
                                        <div class="course-number">
                                            {{ $course->lessons }}
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="course-learners">
                                            Times
                                        </div>
                                        <div class="course-number">
                                            @if (empty($course->times))
                                                {{ '0' }}
                                            @else
                                                {{ $course->times }}
                                            @endif
                                            (h)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
