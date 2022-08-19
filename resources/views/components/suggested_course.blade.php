<div class="other-courses">
    <div class="other-courses-header">{{ __('course.other_courses') }}</div>
    <div class="other-courses-list-item">
        @foreach($others as $index =>$other)
            <div class="other-courses-item">
                <div class="item-order">{{ (isset($data['page'])) ? ((($data['page'] - 1) * 10) + ($index + 1)) : ($index + 1) }}.</div>
                <div class="item-name">{{ $other->name }}</div>
            </div>
        @endforeach
    </div>
    <div class="other-course-button">
        <a href="{{ route('courses.index') }}" class="btn view-all">{{ __('course.view_all_courses') }}</a>
    </div>
</div>
