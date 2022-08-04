<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->randomElement(Course::pluck('id')),
            'title' => $this->faker->text(200),
            'time' => $this->faker->dateTime()->format('H:i:s'),
            'description' => $this->faker->text(255),
        ];
    }
}
