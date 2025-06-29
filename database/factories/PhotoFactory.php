<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Photo;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $width = fake()->numberBetween(300, 800);
        $height = fake()->numberBetween(300, 800);
        $category = fake()->unique()->numberBetween(1, 1000);

        $imageUrl = "https://picsum.photos/seed/photo-$category/{$width}/{$height}";
        return [
            'user_id' => \App\Models\User::factory(),
            'url' => $imageUrl,
            'caption' => fake()->sentence(),
            'is_path' => true,
        ];
    }

    public function is_path(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_path' => false,
        ]);
    }
}
