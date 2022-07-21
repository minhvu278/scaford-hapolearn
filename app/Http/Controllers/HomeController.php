<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\UserCourse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::showCourses();
        $reviews = Review::showReviews();
        $coursesCount = Course::countCourses();
        $lessonsCount = Lesson::countLessons();
        $learners = UserCourse::countLearner();

        return view('home', compact('courses', 'reviews', 'coursesCount', 'lessonsCount', 'learners'));
    }
}
