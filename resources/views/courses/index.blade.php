@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-search">
            <form method="GET" action="{{ route('courses.index') }}">
                <div class="row">
                    <div class="btn btn-filter border-btn-input mr-10">
                        <i class="fa-solid fa-arrow-down-wide-short filter-icon"></i>
                        <span>Filter</span>
                    </div>
                    <div class="search">
                        <input type="text" placeholder="Search..." class= "input-search border-btn-input" name= "keyword" id= "keyword"
                               @if(isset($data['keyword'])) value="{{ $data['keyword'] }}" @endif />
                        <button class="btn-search-icon" name="filter_submit"><i class="fa-brands fa-searchengin search-icon"></i></button>
                    </div>
                    <input class="btn btn-submit-search" type="submit" name="filter_submit" value="Tìm kiếm">
                </div>
                <div class="mt-20 border-btn-input filter-form row">
                    <span class="mr-30">Lọc theo</span>
                    <div class="form-group row mr-10">
                        <div class="mr-10">
                            <input type="radio" id="newest" name="created_time" value= "{{ config('course.newest') }}" class="form-control hidden"
                                   @if(empty($data['created_time']) || (isset($data['created_time']) && $data['created_time'] == config('course.newest'))) checked @endif />
                            <label for="newest" class="newest">Newest</label>
                        </div>
                        <div class="mr-10">
                            <input type="radio" id="oldest" name="created_time" value="{{ config('course.oldest') }}" class="form-control hidden"
                                   @if(isset($data['created_time']) && $data['created_time'] == config('course.oldest')) checked @endif />
                            <label class="oldest" for="oldest">Oldest</label>
                        </div>
                    </div>
                    <div class="form-group mr-10">
                        <select name="teachers[]" id="teacher" class="js-example-select2 js-example-placeholder-multiple-teacher mr-10" multiple="multiple">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}"
                                        @if(isset($data['teachers']) && in_array($teacher->id, $data['teachers'])) selected @endif>
                                    {{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-10">
                        <select name="learner" id="learner" class="js-example-select2">
                            <option value="">Số người học</option>
                            <option value="{{ config('course.sort_low_to_high') }}"
                                    @if(isset($data['learner']) && $data['learner'] == config('course.sort_low_to_high')) selected @endif
                            >Tăng dần</option>
                            <option value="{{ config('course.sort_high_to_low') }}"
                                    @if(isset($data['learner']) && $data['learner'] == config('course.sort_high_to_low')) selected @endif
                            >Giảm dần</option>
                        </select>
                    </div>
                    <div class="form-group mr-10">
                        <select name="time" id="time" class="js-example-select2">
                            <option value="">Thời gian học</option>
                            <option value="{{ config('course.sort_low_to_high') }}"
                                    @if(isset($data['time']) && $data['time'] == config('course.sort_low_to_high')) selected @endif
                            >Tăng dần</option>
                            <option value="{{ config('course.sort_high_to_low') }}"
                                    @if(isset($data['time']) && $data['time'] == config('course.sort_high_to_low')) selected @endif
                            >Giảm dần</option>
                        </select>
                    </div>
                    <div class="form-group mr-10">
                        <select name="lesson" id="lesson" class="js-example-select2">
                            <option value="">Số bài học</option>
                            <option value= "{{ config('course.sort_low_to_high') }}"
                                    @if(isset($data['lesson']) && $data['lesson'] == config('course.sort_low_to_high')) selected @endif
                            >Tăng dần</option>
                            <option value="{{ config('course.sort_high_to_low') }}"
                                    @if(isset($data['lesson']) && $data['lesson'] == config('course.sort_high_to_low')) selected @endif
                            >Giảm dần</option>
                        </select>
                    </div>
                    <div class="form-group mr-10 ml-75">
                        <select name="tags[]" id="tags" class="js-example-select2 js-example-placeholder-multiple-tag" multiple="multiple">
                            <option value="">Tags</option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}"
                                        @if(isset($data['tags']) && in_array($tag->id, $data['tags'])) selected @endif
                                >{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mr-10">
                        <select name="rate" id="rate" class="js-example-select2">
                            <option value="">Reviews</option>
                            <option value="{{ config('course.sort_low_to_high') }}"
                                    @if (isset($data['rate']) && $data['rate'] == config('course.sort_low_to_high')) selected @endif>
                                Tăng dần</option>
                            <option value="{{ config('course.sort_high_to_low') }}"
                                    @if (isset($data['rate']) && $data['rate'] == config('course.sort_high_to_low')) selected @endif>
                                Giảm dần</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="container-courses">
            @foreach($courses as $course)
                <div class="courses-item col-5">
                    <div class="courseallCourses -info row">
                        <div class="col-2">
                            <img src="{{ $course->image }}" alt="" class="course-img">
                        </div>
                        <div class="info-detail col-9">
                            <div class="course-name">{{ $course->name }}</div>
                            <div class="course-description">{{ Str::limit($course->description),300 }}</div>
                            <div class="btn btn-detail">More</div>
                        </div>
                    </div>
                    <div class="course-statistic row">
                        <div class="total-learners col-3">
                            <div class="learners-title">Learners</div>
                            <div class="learners-number">{{ $course->learners }}</div>
                        </div>
                        <div class="total-lessons col-3">
                            <div class="lessons-title">Lessons</div>
                            <div class="lessons-number">{{ $course->lessons }}</div>
                        </div>
                        <div class="total-times col-3">
                            <div class="times-title">Times</div>
                            <div class="times-number">{{ $course->times }}(h)</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $courses->appends(request()->query())->links() }}
    </div>
@endsection
