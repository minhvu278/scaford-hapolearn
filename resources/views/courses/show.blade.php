@extends('layouts.app')
@section('content')
    <div class="detail-course-overview">
        <div class="url-main">
            <div class="url-title">
                <nav aria-label="breadcrumb row">
                    <ol class="breadcrumb url-menu">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">All courses</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Course detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="detail-course-content">
            @if(session('message'))
                <section class='alert alert-success'>{{session('message')}}</section>@endif
            @if(session('error'))
                <section class='alert alert-danger '>{{session('error')}}</section>@endif
            <div class="row">
                <div class="col-8 content-main">
                    <div class="image-course"><img src="{{ $course->image }}" alt=""></div>
                    <div class="course-infor">
                        <ul class="nav menu-course" id="myTab">
                            <li class="nav-item">
                                <a class="active" data-toggle="tab" href="#Lessons">{{ __('course_show.lesson') }}</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#Teacher">{{ __('course_show.teacher') }}</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#Reviews">{{ __('course_show.reviews') }}</a>
                            </li>
                        </ul>

                        <div class="border-bonus"></div>
                        <div class="tab-content">
                            @include('courses.show_lesson')
                            @include('courses.show_teacher')
                            @include('courses.show_review')
                        </div>
                    </div>
                </div>
                <div class="col-4 content-bonus">
                    <div class="description">
                        <div class="description-title">{{
                        __('course_show.description_course')
                        }}</div>
                        <div class="description-content">
                            {{ $course->description }}
                        </div>
                    </div>
                    <div class="col-12 course-infor-title">
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-solid fa-users"></i></span>{{
                            __('course_show.learners')
                            }}</div>
                            <span class="colon">:</span>
                            <div class="content">{{ $course->learners}}</div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-calendar"></i></span>{{
                            __('course_show.lessons')
                            }}</div>
                            <span class="colon">:</span>
                            <div class="content">{{ $course->lessons }} {{
                            __('course_show.lesson')
                            }}</div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-clock"></i></span>{{
                            __('course_show.times')
                            }}</div>
                            <span class="colon">:</span>
                            <div class="content"> {{ $course->times}} {{
                            __('course_show.hours')
                            }}</div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-hashtag"></i></span>Tags</div>
                            <span
                                class="colon">:</span>
                            <div class="content">
                                @foreach ($tags as $index => $tag )
                                    @if ($index == (count($tags)-1))
                                        <a href=""> #{{ $tag->name }}</a>

                                    @else
                                        <a href="">#{{ $tag->name }},</a>

                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-money-bill-1"></i></span>{{
                            __('course_show.price')
                            }}
                            </div>
                            <span class="colon">:</span>
                            <div class="content">{{ number_format($course->price) }} VNĐ</div>
                        </div>
                    </div>
                    <div class="col-12 course-related">
                        <div class="course-related-title">{{
                        __('course_show.other_courses')
                        }}</div>
                    </div>
                    <div class="col-12 course-related-list">
                        @foreach ( $otherCourses as $index => $course )
                            <div class="course-related-detail">
                                <div class="name"><a href="{{ route('courses.show', [$course->id]) }}"><span>{{ $index+=1
                                    }}.</span> {{ $course->name }}</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="btn-view-all">
                            <a href="{{ route('courses.index') }}" class="btn btn-hapo">{{
                            __('course_show.view_all_courses')
                            }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
