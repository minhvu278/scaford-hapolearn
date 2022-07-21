<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
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
            'parent_id' => $this->faker->numberBetween(0, 10),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'message' => $this->faker->text(100),
            'rate' => $this->faker->numberBetween(0, 5),
        ];
    }
}
