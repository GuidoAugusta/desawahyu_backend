<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        $content = $this->faker->paragraphs(10, true);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            // 'image' => 'https://picsum.photos/1200/600?random=' . rand(1, 1000),
            'content' => $content,
            'excerpt' => Str::limit(str_replace("\n", " ", strip_tags($content)), 300, '...'),
            'views_count' => $this->faker->numberBetween(0, 1000),
            'comments_count' => $this->faker->numberBetween(0, 100),
            'likes_count' => $this->faker->numberBetween(0, 500),
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
