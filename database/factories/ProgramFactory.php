<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
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
            'title' => $this->faker->text(100),
            'description' => $this->faker->text(100),
            'link' => $this->faker->url(),
            'type' => $this->faker->randomElement(['pdf', 'mp4', 'docx']),
        ];
    }
}
