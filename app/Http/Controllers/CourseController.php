<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $courses = Course::search($data)->paginate(config('course.paginate'));
        $teachers = User::teachers()->get();
        $tags = Tag::get();
        return view('courses.index', compact('courses', 'teachers', 'tags', 'data'));
    }

    public function show(Request $request, $id)
    {
        $data = $request->all();
        $course = Course::find($id);
        $otherCourses = Course::other()->get();
        $lessons = $course->lessons()->search($data)->paginate(config('lesson.paginate'));
        $tags = $course->tags;
        $teachers = $course->teachers;
        $reviews = $course->reviews;
        return view('courses.show', compact('course', 'otherCourses', 'tags', 'lessons', 'teachers', 'reviews'));
    }
}
