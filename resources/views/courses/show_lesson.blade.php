<div id="Lessons" class="tab-pane fade show active">
    <div class="function-course">
        <div class="search">
            <form action="{{ route('courses.show', [$course->id]) }}" method="GET">
                <div class="form-search row">
                    <div class="lessons-search">
                        <input type="text" name="keyword" placeholder="Search..." class="input-search">
                        <button type="submit" class="lesson-search-btn btn">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <form class="form-join" action="{{ route('user-course.store') }}" method="POST">
                @csrf
                @if($course->isJoined->count() && !$course->isFinished->count() )
                    <div class="studying">{{ __('course_show.studying') }}</div>
                @endif
                @if(!$course->isJoined->count())
                    <input type="hidden" name="course_id" value="{{ $course->id }}"
                           class="@error('course_id') is-invalid @enderror">
                    <button type="submit" class="btn btn-hapo">{{ __('course_show.join_course') }}</button>
                    @error('course_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                @endif
            </form>
            @if ($course->isJoined->count() && !$course->isFinished->count())
                <form action=" {{ route('user-course.destroy', [$course->id]) }} " method="POST">
                    @csrf
                    @method('delete')
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-hapo btn-leave-course">{{ __('course_show.end_course') }}</button>
                    </div>
                </form>
            @elseif ($course->isFinished->count())

                <form action=" {{ route('user-course.update', [$course->id]) }} " method="POST">
                    @csrf
                    @method('put')
                    <button class="btn btn-hapo">{{ __('course_show.join_again') }}</button>
                </form>
            @endif
        </div>
    </div>
    <div class="lessons-list">
        @foreach ($lessons as $index => $lesson )
            <div class="lessons-list-detail">
                <div class="name"><span>{{ $index+=1 }}.</span> {{ $lesson->title }} </div>
                @if ($course->isJoined->count() && !$course->isFinished->count())
                    <div class="learn">
                        <button class="btn btn-hapo btn-learn">{{ __('course_show.learn') }}</button>
                    </div>
                @else
                    <div class="learn">
                        <button class="btn btn-hapo btn-not-learn">{{ __('course_show.learn') }}</button>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    {{ $lessons->appends(request()->input())->links() }}
</div>
