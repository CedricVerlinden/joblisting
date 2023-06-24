<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $tags = ['React', 'Next.js', 'Laravel', 'PHP', 'JavaScript', 'Web Development', 'Frontend Development', 'Backend Development', 'Full Stack Development', 'API Development', 'Database Design', 'UI/UX Design', 'Agile Development', 'DevOps', 'Cloud Computing'];

        shuffle($tags);
        $selectedTags = array_slice($tags, 0, 3);

        return [
            'title' => fake()->jobTitle(),
            'tags' => implode(',', $selectedTags),
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(2),
        ];
    }
}
