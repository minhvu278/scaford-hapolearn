<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Course::class;

    public function definition()
    {
        return [
            'image' => 'https://source.unsplash.com/random',
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => rand(1000000, 9000000),
        ];
    }
}
