<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'thumbnail' => 'thumbnails/illustration-' . rand(1, 5) . '.png',
            'slug' => $this->faker->slug(),
            'excerpt' => collect($this->faker->paragraphs(2))->map(fn ($item) => "<p>{$item}</p>")->implode(''),
            'body' => collect($this->faker->paragraphs(6))->map(fn ($item) => "<p>{$item}</p>")->implode(''),
        ];
    }
}
